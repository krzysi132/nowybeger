<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog sterydy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<!-- Nawigacja -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Mój Blog o sterydach i treningach</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <form action="add_record.php" method="post" id="formularz">
        <label for="name">Podaj swojego maksa na klatkę:</label>
        <input type="text" id="maks" name="maks" required>
    
        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="imie" required>
    
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" id="nazwisko" name="nazwisko" required>
    
        <input type="submit" value="Wyślij">
    </form>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Strona główna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.html">O mnie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Strona główna bloga -->
<div class="container mt-5">
    <h1 class="text-center mb-4">tematy</h1>

    <!-- Wpis 1 -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">czy MK677 dobry na odblok</h2>
            <p class="card-text">Dobrą opcja jest dodac MK677/Ibutamporen bardzo dobrze bedzie sie zgrywał z róznymi sarmami na odbloku.
                Na spokojnie można do tego protokołu można dodac hgh ewentualnie jakies igf-2 jak liczymy na wiekszy wyrzut hormonu wzrostu.
                dochodzc do końca tematu mk677 samo w sobie nie bedzie idealnym protokołem ale po dodaniu igf-2 bedzie to idealny na odblokowanie sie po hgh i testosteronie krótkim lub długim .



            </p>
            <p class="text-muted">Opublikowano: 12 listopada 2024</p>
        </div>
    </div>

    <!-- Wpis 2 -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">Makro na twarze</h2>
            <p class="card-text">
                Podczas brania sterydów poczatkujący adepci dopingu zastanawiaja się czy powinni zmienic rozkład makroskładników podczas cyklu.
                Tak naprawde nic się nie zmienia, chociaż trzeba pamietac o zdrowym jedzeniu bez fast foodów i innych takich.


            </p>


            <p class="text-muted">Opublikowano: 10 listopada 2024</p>
        </div>
    </div>

    <!-- Wpis 3 -->
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">skótki uboczne testosteronu (Teścia)</h2>
            <p class="card-text">
                testosteron:Najpopularnijszy ze steryd.
                Jednym z głównych i najbardziej interesujacych dla facetów skutkiem jest pomiejszenie jąder.
                Co wystepuje rzeczywiscie poniewaz , produkcja testosteronu w jądrach naturalnie jest nie potrzebna.<br>
                Problemy skórne: Testosteron może powodować trądzik, łojotok i nadmierne owłosienie ciała.<br>

                Retencja płynów: Może prowadzić do zatrzymywania płynów i obrzęków, zwłaszcza w nogach.<br>

                Zmiany nastroju: Wzrost drażliwości, agresji, lęków i wahań emocjonalnych.<br>

                Problemy z układem krążenia: Zwiększone ryzyko podwyższonego ciśnienia krwi, zawału serca i udaru mózgu.<br>

                Problemy z wątrobą: Wysokie dawki mogą powodować uszkodzenia wątroby (zmęczenie, ból brzucha, żółtaczka, ciemny mocz).<br>

                Zaburzenia snu: Testosteron może prowadzić do bezsenności i bezdechu sennego.<br>


            </p>
            <p class="text-muted">Opublikowano: 8 listopada 2024</p>
        </div>
    </div>

</div>

<!-- Bootstrap JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!-- pasek nawigacyjny rezponsywny saklowalny do  rozmiaru telefonu i innych urządzeń -->