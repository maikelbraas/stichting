<?php

namespace App\Http\Controllers\admin;

use App\Models\Page;
use Illuminate\Http\Request;
use Image;
use App\Http\Controllers\Controller;
use Mews\Purifier\Facades\Purifier;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('pageName', 'title')->paginate(6);
        return view('admin.pages.index')->withPages($pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'pageName' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:pages,slug',
            'excerpt' => 'required',
            'body' => 'required'
        ));

        $page = new Page;

        $page->pageName = $request->pageName;
        $page->slug = $request->slug;
        $page->excerpt = Purifier::clean($request->excerpt);
        $page->body = Purifier::clean($request->body);

        if ($request->hasFile('page_image')) {
            $image = $request->file('page_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);
            Image::make($image)->resize(539, 539)->save($location);

            $page->image = $filename;
        }

        $page->save();


        return redirect()->route('pages.index', $page->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::find($id);

        return view('admin.pages.pageDisplay')->withPage($page);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.pages.edit')->withPage($page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::find($id);

        if ($request->hasFile('page_image')) {
            $image = $request->file('page_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('uploads/' . $filename);
            Image::make($image)->resize(539, 539)->save($location);

            $page->image = $filename;
            $request['image'] = $page;
        }
        if ($request->input('slug') == $page->slug) {
            $this->validate($request, array(
                'pageName' => 'required',
                'excerpt' => 'required',
                'page_image' => 'required',
                'body' => 'required',
            ));
        } else {
            $this->validate($request, array(
                'pageName' => 'required',
                'slug' => 'required|alpha_dash|min:2|max:255|unique:pages,slug',
                'excerpt' => 'required',
                'page_image' => 'required',
                'body' => 'required'
            ));
        }

        $page->pageName = $request->input('pageName');
        $page->slug = $request->input('slug');
        $page->excerpt = $request->input('excerpt');
        $page->save();


        return redirect()->route('pages.index', $page->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);


        $page->delete();
        return redirect()->route('admin.pages.index');
    }
}
