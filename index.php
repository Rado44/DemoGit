<?php
require_once 'DBConnection.php';

$database;
$connection = new DBConnection();
$database = $connection->db_connect();

//$database->query("INSERT INTO banks_info (name, bic, iban) VALUES ('RaiffeisenBank', '87537537', 'bg658374347287463742')");
$database->query("INSERT INTO clients_providers (name, address, country, city, number, vat_number, acc_person, type, bank_ID) VALUES ('Rado EOOD', 'Ivan Vazov 75', 'Bulgaria', 'Plovdiv', '46640013552', 'BG449579467775', 'Kiril', 1, 7)");

$sql = "SELECT ID, bank_name, iban FROM banks_info";
$result = $database->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["bank_name"]. " -IBAN:" . $row["iban"]. "<br>";
  }
} else {
  echo "0 results";
}

$sql = "SELECT ID, name, address, country, city, vat_number FROM clients_providers";
$result = $database->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table><tr><th>ID</th><th>Name</th><th>Adress</th><th>Vat Number</th></tr>";
    while($row = $result->fetch_assoc()) 
    {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["address"]." ".$row["country"]." ".$row["city"]."</td><td>".$row["vat_number"]."</td></tr>";
    }
    echo "</table>";
} 
else 
{
    echo "0 results";
}

$sql = "SELECT cp.ID, cp.name, cp.address, cp.country, cp.city, cp.vat_number,
               b.bank_name, b.bic, b.iban    
        FROM clients_providers cp
        INNER JOIN banks_info b
        ON cp.bank_ID = b.ID";
$result = $database->query($sql);

if ($result->num_rows > 0) 
{
    echo "<table><tr><th>ID</th><th>Name</th><th>Adress</th><th>Vat Number</th><th>Bank</th><th>BIC</th><th>IBAN</th></tr>";
    while($row = $result->fetch_assoc()) 
    {
      echo "<tr><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["address"]." ".$row["country"]." ".$row["city"]."</td><td>".$row["vat_number"].
      "</td><td>".$row["bank_name"]."</td><td>".$row["bic"]."</td><td>".$row["iban"]."</td></tr>";
    }
    echo "</table>";
} 
else 
{
    echo "0 results";
}

$database->close();
?>