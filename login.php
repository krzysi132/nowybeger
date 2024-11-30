<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $sql = "SELECT * FROM uzytkownicy WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($haslo, $user['haslo'])) {
            $_SESSION['user_id'] = $user['id'];
            echo "Zalogowano pomyślnie!";
            // Przekierowanie do innej strony lub wyświetlenie treści
        } else {
            echo "Błędne hasło.";
        }
    } else {
        echo "Użytkownik nie znaleziony.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <h2>Logowanie</h2>
    <form method="post">
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Hasło:</label>
        <input type="password" name="haslo" required>
        <button type="submit">Zaloguj się</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>