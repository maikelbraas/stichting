<footer>
    <section class="container BlocksDimension">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="navbar-collapse collapse justify-content-center" id="navbar2">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/pagina/Adres') }}">Adres </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pagina/Gebruikersvoorwaarden') }}">Gebruikersvoorwaarden</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pagina/Privacy') }}">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pagina/Vacatures') }}">Vacatures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/pagina/Reclamecampagnes') }}">Reclamecampagnes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
</footer>

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../js/app.js"></script>
@show