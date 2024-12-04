<?php
$servername = "localhost";
$username = "root";
$password = ""; // Upewnij się, że hasło jest poprawne
$dbname = "sterydy.pl"; // Upewnij się, że ta baza danych istnieje

// Utworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>