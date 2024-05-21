<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div>LOGONE PAZZESCO</div>
            <ul class="link-list">
                <li><a href="{{ route('about') }}">Chi siamo: AboutUs</a></li>
                <li><a href="{{ route('mission') }}">Cosa facciamo: Mission</a></li>
                <li><a href="{{ route('sponsor') }}">Con chi lo facciamo: Sponsor</a></li>
                <li><a href="{{ route('donation') }}">Cosa vogliamo da te: Donation</a></li>
            </ul>
        </nav>
    </header>
    <h1> Hi to you!</h1>
</body>

</html>