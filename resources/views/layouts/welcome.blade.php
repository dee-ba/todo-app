@extends ('layouts.app')
@section ('title', 'Welcome')
@section ('content')




<h1 style="text-align:center;"><a href="/create">Solution</a></h1>

    



<h2>De beeproger opdracht</h2>

<p>
Zoals aangegeven tijdens het kennismakingsgesprek willen we graag dat je
onderstaande opdracht maakt. Dit zodat wij een goed beeld krijgen van jouw skills.
Ontwikkel voor ons een Todo-list en/of Boodschappenlijst. Het dient te bestaan uit een
losse back- en frontend, welke met elkaar communiceren.
</p>

<h2>De kenmerken hiervoor zijn:
</h2>

<ul>
    <li>Een lijst met items tonen;</li>
    <li>Een item kunnen bewerken;</li>
    <li>Een foto van een artikel uploaden bij het item;</li>
    <li>De details van een item bekijken;</li>
    <li>Een item kunnen afvinken (wordt groen, doorgestreept oid. aan jou de visuele keuze);</li>
    <li>Een item kunnen verwijderen van de lijst;</li>
    <li>Foutcontrole;</li>
    <li>De lijst versturen naar de backend;</li>
    <li>De lijst bijwerken nadat een item gewijzigd of aangemaakt is.</li>
</ul>


<h2>Vereisten voor de backend:</h2>
<ul>
    <li>Laravel Framework - REST</li>
    <li>Database (MySQL, SQLite)</li>
</ul>

<h2>Docs:</h2>
<ul>
    <li>https://laravel.com/docs</li>
    <li>https://scotch.io</li>
    <li>https://laracasts.com</li>
</ul>


<h2>Voor de Frontend:</h2>
<p>Het toepassen van een framework die MVVM kan ondersteunen. Dat houd eigenlijk in
dat het een Single Page Application is waarbij de lijst beheert kan worden zonder
herladen van de pagina.</p>
<p>Bij voorkeur met een toepassing van een van de volgende frameworks/libraries:</p>
<ul>
    <li>React</li>
    <li>Angular/Ionic</li>
    <li>VueJS</li>
    <li>Vanilla Javascript.</li>
</ul>

<p>Graag zien we de opgeleverde opdracht binnen 2 weken tegemoet in een github
repository.</p>

<h1>We drive your innovation.</h1>


<body class="antialiased">

    <div id="app"></div>

    <h1>Test</h1>

    <script src="{{ asset('js/app.js') }}"></script>


@endsection	