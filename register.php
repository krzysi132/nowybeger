<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $haslo = password_hash($_POST['haslo'], PASSWORD_DEFAULT); // Hashowanie hasła

    $sql = "INSERT INTO uzytkownicy (email, haslo) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $haslo);
    
    if ($stmt->execute()) {
        echo "Rejestracja zakończona sukcesem!";
    } else {
        echo "Błąd: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Rejestracja</title>
</head>
<body>
    <h2>Rejestracja</h2>
    <form method="post">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Hasło:</label>
        <input type="password" name="haslo" required>
        <button type="submit">Zarejestruj się</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>