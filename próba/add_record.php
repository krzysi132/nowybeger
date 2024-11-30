<?php

$servername = "localhost";
$username = "root";
$password = ""; // Upewnij się, że hasło jest poprawne
$dbname = "sterydy"; // Upewnij się, że ta baza danych istnieje

// Utworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}

// Sprawdzenie, czy dane zostały przesłane
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maks = $_POST['maks'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];

    


    // Zamknięcie przygotowanego zapytania
    
}

// Zamknięcie połączenia
$conn->close();
?>