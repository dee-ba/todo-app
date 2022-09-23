@extends ('layouts.app')
@section ('title', 'Welcome')
@section ('content')





<div class="text-lg mt-5 mx-10">

<div class="text-right text-4xl font-bold">
<span> beeproger </span><span class="text-4xl font-bold text-red-500" >.</span>
</div>

<p class="text-lg bg-red font-bold text-red-500" >De beeproger opdracht</p>
<p class="mt-2"> Zoals aangegeven tijdens het kennismakingsgesprek willen we graag dat je onderstaande opdracht maakt. Dit zodat wij een goed beeld krijgen van jouw skills.
Ontwikkel voor ons een Todo-list en/of Boodschappenlijst. Het dient te bestaan uit een
losse back- en frontend, welke met elkaar communiceren.
</p>


<p class="text-lg mt-5 font-bold text-red-500">De kenmerken hiervoor zijn:</p>
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


<p class="text-lg mt-5 font-bold text-red-500">Vereisten voor de backend:<p>
<ul>
    <li>Laravel Framework - REST</li>
    <li>Database (MySQL, SQLite)</li>
</ul>

<p class="text-lg mt-5 font-bold text-red-500">Docs:</p>

<ul>
    <li>https://laravel.com/docs</li>
    <li>https://scotch.io</li>
    <li>https://laracasts.com</li>
</ul>

<p class="text-lg mt-5 font-bold text-red-500">Voor de Frontend:</p> testing 

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

<p class="mt-5">Graag zien we de opgeleverde opdracht binnen 2 weken tegemoet in een github
repository.</p>

<p class="text-2xl text-center mt-10 font-bold text-red-500"> We drive your innovation.</p>


<div class="text-xl text-center mt-10 font-bold text-red-500">
<p class="text-2xl">Todo-App</p>
<p class="text-blue-600" ><a href="/index">Click Here</a></p>
</div>




</div>




<body class="antialiased">

    <div id="app"></div>

    <h1>Test</h1>

    <script src="{{ asset('js/app.js') }}"></script>


@endsection	