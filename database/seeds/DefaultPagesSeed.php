<?php

use Illuminate\Database\Seeder;


class DefaultPagesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('pages')->insert([
            'PageName' => 'Missie',
            'slug' => 'Missie',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Missie beschrijving',
        ]);
        DB::table('pages')->insert([
            'PageName' => 'visie',
            'slug' => 'visie',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'visie beschrijving',
        ]);
        DB::table('pages')->insert([
            'PageName' => 'Strategie',
            'slug' => 'Strategie',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Strategie beschrijving',
        ]);
        DB::table('pages')->insert([
            'PageName' => 'Activiteit en Projecten',
            'slug' => 'ActiviteitProjecten',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Activiteit en Projecten beschrijving',
        ]);
        DB::table('pages')->insert([
            'PageName' => 'wiezijnwij',
            'slug' => 'wiezijnwij',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'wiezijnwij beschrijving',
        ]);
        DB::table('pages')->insert([

            'PageName' => 'doneren',
            'slug' => 'doneren',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'doneren beschrijving',
        ]);

        DB::table('pages')->insert([

            'PageName' => 'Feiten en Cijfers',
            'slug' => 'feitenencijfers',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Feiten en cijfers beschrijving',
        ]);
        DB::table('pages')->insert([

            'PageName' => 'Toezicht en Afspraken',
            'slug' => 'toezichtenafspraken',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Toezicht en Afspraken beschrijving',
        ]);

        DB::table('pages')->insert([

            'PageName' => 'Samenwerkingsverbanden',
            'slug' => 'Samenwerkingsverbanden',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Samenwerkingsverbanden beschrijving',
        ]);
        DB::table('pages')->insert([

            'PageName' => 'Contact',
            'slug' => 'Contact',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Contact beschrijving',
        ]);

        DB::table('pages')->insert([

            'PageName' => 'Gebruikersvoorwaarden',
            'slug' => 'Gebruikersvoorwaarden',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Gebruikersvoorwaarden beschrijving',
        ]);
        DB::table('pages')->insert([

            'PageName' => 'Privacy',
            'slug' => 'Privacy',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Privacy beschrijving',
        ]);
        DB::table('pages')->insert([

            'PageName' => 'Vacatures',
            'slug' => 'Vacatures',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Vacatures beschrijving',
        ]);

        DB::table('pages')->insert([

            'PageName' => 'Reclamecampagnes',
            'slug' => 'Reclamecampagnes',
            'body' => $faker->paragraphs($nb = 4, $asText = true),
            'Excerpt' => 'Reclamecampagnes beschrijving',
        ]);

    }
}
