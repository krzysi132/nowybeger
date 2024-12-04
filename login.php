<?php
session_start();
include 'db.php';

// Sprawdzenie, czy użytkownik jest zalogowany
if (isset($_SESSION['user_id'])) {
    // Pobranie danych użytkownika z bazy danych
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM uzytkownicy WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $email = $user['email'];
    } else {
        // Jeśli użytkownik nie został znaleziony, wyloguj go
        session_destroy();
        header("Location: index.php");
        exit();
    }
    $stmt->close();
} else {
    $email = null; // Użytkownik nie jest zalogowany
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_input = $_POST['email'];
    $haslo = $_POST['haslo'];

    $sql = "SELECT * FROM uzytkownicy WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email_input);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($haslo, $user['haslo'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php"); // Przekierowanie do tej samej strony
            exit();
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
    <?php if ($email): ?>
        <p>Witaj, <?php echo htmlspecialchars($email); ?>! Jesteś zalogowany.</p>
        <a href="index.php">Wyloguj się</a>
    <?php else: ?>
        <form method="post">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Hasło:</label>
            <input type="password" name="haslo" required>
            <button type="submit">Zaloguj się</button>
        </form>
    <?php endif; ?>
</body>
</html>

<?php
$conn->close();
?>