<?php
$servername = "mysql";
$username = "lab11";
$password = "lab11";
$dbname = "lab11db";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Zapytanie SQL do wyświetlenia nazw tabel
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Wyświetlanie nazw tabel
    echo "Tabele w bazie danych:<br>";
    while($row = $result->fetch_assoc()) {
        echo $row["Tables_in_lab11db"]. "<br>";
    }
} else {
    echo "Brak tabel w bazie danych";
}
$conn->close();
?>
