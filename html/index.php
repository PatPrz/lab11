<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "lab11docker";

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
while($row = $result->fetch_array()) {
    echo $row[0]. "<br>";
}
} else {
    echo "Brak tabel w bazie danych";
}
$conn->close();
?>
