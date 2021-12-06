<?php
require_once 'DBConnection.php';

$database;
$connection = new DBConnection();
$database = $connection->db_connect();

//$database->query("INSERT INTO banks_info (name, bic, iban) VALUES ('UNICREDIT', '47214872472', 'bg436492381f61364296f21')");
//$database->query("INSERT INTO clients_providers (name, address, country, city, number, vat_number, acc_person, type, bank_ID) VALUES ('Monika EOOD', 'Skopie 45', 'Bulgaria', 'Plovdiv', '14135263452', 'BG14135263452', 'Kiril', 1, 6)");
//$database->query("SELECT * FROM clients_providers");
//echo "Affected rows: " . $database -> affected_rows;
$sql = "SELECT ID, name, iban FROM banks_info";
$result = $database->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["name"]. " " . $row["iban"]. "<br>";
  }
} else {
  echo "0 results";
}
$database->close();
?>