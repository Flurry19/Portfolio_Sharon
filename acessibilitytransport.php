<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/chat.css">
    <script src="js/chat.js"></script>
</head>

<body>
<!-- Chatbox -->
<button class="open-button" onclick="openForm()">Chat</button>
<!-- Begin Section -->
<section class="chat-popup" id="myForm">
    <form action="mailto:sharonirenedewit@gmail.com" method="phost" class="form-container">
        <h1>Chat</h1>
        <label for="msg"><b>Bericht:</b></label>
        <textarea placeholder="Type hier" name="msg" required></textarea>
        <button type="submit" class="submit btn">Verstuur</button>
        <button type="button" class="close btn" onclick="closeForm()">Sluiten</button>
    </form>
</section>
<!-- Begin Navigation -->
<nav>
    <!-- Begin Section -->
    <section class="nav-container">
        <a href="index.html#home">Home</a>
        <a href="index.html#overmij">Over mij</a>
        <a href="index.html#projecten">Projecten</a>
        <a href="index.html#hobby">Hobby's</a>
        <a href="contact.html#contact">Contact</a>
    </section>
</nav>
<!-- Begin Header -->
<header>
    <img class="bigimageproject" id="home" src="images/ProjectCLE1.jpeg">
    <h2 class="projecttitle">NekoClock</h2>
</header>
<!-- Begin Main -->
<main>
    <!-- Begin Section -->
    <section class="container">
        <h2>Startproject</h2>
        <div class="projectcontainer">
            <img class="catsprint2" src="images/Catsprint2.JPG" alt="Project Kat Sprint 2">
            <p>Het project begon toen wij individueel een oplossing moesten bedenken voor onze
                doelgroep. Vanuit die 4 projecten hebben wij er één gekozen om te verbeteren. Ons initiele project
                in sprint 2
                was qua vorm minder en had ook veel minder functies. Hiernaast zie je een foto van het
                desbetreffende project.</p>
        </div>
    </section>
    <!-- Begin Section -->
    <section class="container">
        <h2>Functies</h2>
        <div class="projectcontainer">
            <video controls width="250">
                <source src="images/WhatsApp Video 2022-10-19 at 19.56.34.mp4">
            </video>
            <p>In de video hiernaast leg ik de functies van de NekoClock uit.</p>
        </div>
        <p>Hierbij geef ik ook nog een geschreven uitleg van de NekoClock:
            De NekoClock heeft meerdere functies. Allereerst geeft hij overdag wanneer er geen wekker ingepland
            staat de temperatuur weer. Dit kan je zien aan de hoeveelheid brandende lampjes:</p>
        <ul>
            <li>0-5 graden = 1 LEDs</li>
            <li>6-9 graden = 2 LEDs</li>
            <li>10-13 graden = 3 LEDs</li>
            <li>14-17 graden = 4 LEDs</li>
            <li>18-21 graden = 5 LEDs</li>
            <li>22-25 graden = 6 LEDs</li>
            <li>26-29 graden = 7 LEDs</li>
            <li>30-33 graden = 8 LEDs</li>
            <li>34-37 graden = 9 LEDs</li>
            <li>38-50 graden = 10 LEDs</li>
        </ul>
        <p>Verder leg ik nog uit wat alle knoppen doen:</p>
        <ul>
            <li>A korte klik: Met A voeg je een half uur toe bij het instellen van de tijd.</li>
            <li>B korte klik: Met B haal je er een half uur af bij het instellen van de tijd.</li>
            <li>A lange klik: Door A ingedrukt te houden stel je de timer in, vanaf nu gaat de timer aftellen.</li>
            <li>B lange klik: Door B ingedrukt te houden kan je een andere modus instellen, je kan kiezen tussen
                normaal, halloween, mario en sirene. Per modus is er een andere melodie en zijn er andere kleuren
                van de LEDjes.</li>
            <li>AB korte klik: Met AB stop je de timer, als hij afgaat of eerder. </li>
        </ul>
        <p>Met de NekoClock kan je dus zelf je wekker instellen. Met A voeg je een half uur toe en met B haal je er
            een half uur af. Een half uur op de wekker geeft een geel LEDje en een uur een groen LEDje, zo zie je
            precies welke tijd je instelt. Nadat je de wekker hebt aangezet door A ingedrukt te houden, telt de
            wekker af. Elk half uur zie je een LEDje uitgaan of het LEDje van kleur veranderen, van groen naar geel.
            Als de wekker afgaat na de ingestelde tijd speelt er een melodie af met de LED ring. Na een halve minuut
            speelt de melodie luider af en worden de LEDjes fel, dit zorgt ervoor dat je op een natuurlijke manier
            wakker kan worden. Dit gaat 10 minuten door. Als je echter eerder de wekker uit wilt zetten kan dat door
            AB in te drukken.
        </p>
    </section>
    <!-- Begin Section -->
    <section class="container">
        <h2>Extra ideeën</h2>
        <section class="projectcontainer">
            <img src="images/LuckyCatHeads.png" alt="Verschillende Lucky Cat hoofd ontwerpen">
            <p>Het idee voor de toekomst is om meerdere opzetbare hoofden te maken. Op het moment hebben we alleen
                het hoofd van de Lucky Cat geprint en geverfd, echter willen we in de toekomst meerdere hoofden
                maken zodat je de wekker kan aankleden hoe je wilt! In de afbeelding hiernaast staan de schetsen die
                we hebben gemaakt als ideeën voor nieuwe hoofden. </p>
        </section>
        <!-- Begin Section -->
        <section class="projectcontainer">
            <img src="images/Webshop.png" alt="Getekende webshop">
            <p>Ook was dit een idee voor een webshop voor de NekoClock. </p>
        </section>
    </section>
</main>
<!-- Begin Footer -->
<footer>
    <h3 id="socials">Socials</h2>
        <!-- Begin Section -->
        <section class="social-container">
            <a class="icons" href="https://www.instagram.com/databaseofdoggos/"><img src="images/Instagram-Logo.png"
                                                                                     class="instagram" alt="Instagram Logo"></a>
            <a class="icons" href="https://www.etsy.com/nl/shop/Nerdyglazen?ref=seller-platform-mcnav"><img
                    src="images/Etsy-Logo.png" class="etsy" alt="Etsy Logo"></a>
            <a class="icons" href="https://www.facebook.com/sharon.dewit.7587/"><img
                    src="images/Facebook_icon_2013.svg.webp" class="facebook" alt="Facebook Logo"></a>
        </section>
</footer>

</body>

</html>