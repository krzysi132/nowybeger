<?php
include 'db.php'; // Upewnij się, że masz plik db.php z odpowiednim połączeniem

// Sprawdzenie, czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nazwisko = $_POST['nazwisko'];
    $ciezar = $_POST['ciezar'];

    // Przygotowanie i wykonanie zapytania
    $sql = "INSERT INTO records (name, nazwisko, ciezar) VALUES (?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssd", $name, $nazwisko, $ciezar); // ssd - typy danych: string, string, decimal

    if ($stmt->execute()) {
        echo "Nowy rekord został dodany pomyślnie!";
    } else {
        echo "Błąd: " . $stmt->error;
    }

    $stmt->close(); // Zamknij przygotowane zapytanie
}

$conn->close(); // Zamknij połączenie z bazą danych
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Rekord</title>
</head>
<body>
    <h1>Dodaj Rekord</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Imię:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="nazwisko">Nazwisko:</label>
        <input type="text" id="nazwisko" name="nazwisko" required>
        <br>
        <label for="ciezar">Ciężar:</label>
        <input type="number" id="ciezar" name="ciezar" step="0.01" required>
        <br>
        <input type="submit" value="Dodaj Rekord">
    </form>
</body>
</html>