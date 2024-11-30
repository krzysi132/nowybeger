<?php
include 'db.php'; // Upewnij się, że masz plik db.php z odpowiednim połączeniem

// Pobieranie tematów z bazy danych
$sql = "SELECT * FROM tematy"; // Upewnij się, że tabela 'tematy' istnieje w bazie danych
$result = $conn->query($sql);
?>
<h1> zrób baze danych do logowan i reszte gówna <h1>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Sterydy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mój Blog o Sterydach</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Tematy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_record.php">Dodaj Rekord</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
            <li class="nav-item">
    <a class="nav-link" href="register.php">Rejestracja</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="login.php">Logowanie</a>
</li>
        </ul>
    </div>
</nav>

<div class="container mt-5">
    <h2>Tematy:</h2>
    <div class="row">
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($row['tytul']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($row['tresc']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Brak tematów do wyświetlenia.</p>
        <?php endif; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close(); // Zamknij połączenie z bazą danych
?>