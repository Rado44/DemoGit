<?php
require_once 'DBConnection.php';

$database;
$connection = new DBConnection();
$database = $connection->db_connect();
$type = 'dasdad';

//$database->query("INSERT INTO banks_info (name, bic, iban) VALUES ('RAIFAIZEN', '12345678910', 'bg769780dfg8909dgdf09')");
//$database->query("INSERT INTO clients_providers (name, address, country, city, number, vat_number, acc_person, type, bank_ID) VALUES ('Rado EOOD', 'Skokupim 45', 'Sofia', 'Sofia', '14135263213', 'BG14135263213', 'Optimus', 1, 2)");
//var_dump($database);

$database->query("SELECT * FROM clients_providers");
//echo "Affected rows: " . $database -> affected_rows;
$sql = "SELECT ID, name, iban FROM banks_info WHERE ID = 2" ;
$result = $database->query($sql);

/*if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["name"]. " " . $row["iban"]. "<br>";
  }
} else {
  echo "0 results";
}*/

$sql1 = "SELECT ID, name, address, country, city, number,vat_number,acc_person,type, bank_ID FROM clients_providers";
$result = $database->query($sql1);

/*if ($result->num_rows > 0) 
{
    
    while($row = $result->fetch_assoc()) 
    {
        if ($row["type"] == 0){$type = "client";}
        else {$type = "provider";}
      echo "id: " . $row["ID"]. " - Name: " . $row["name"]. " - Country:" . $row["country"]." - City: " . $row["city"]." - Number:" . $row["number"]." - Vat:" . $row["vat_number"]." - Accountable person: " . $row["acc_person"]. " - Type:" . $type." - BankID" . $row["bank_ID"]."<br>";
    }
} 
else 
{
    echo "0 results";
}*/
$database->close();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>A simple, clean, and responsive HTML invoice template</title>

        <style>
            .invoice-box {
                height: 842PX;
                max-width: 595px;
                margin: auto;
                padding: 60px;
                border: 1px solid #eee;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
                font-size: 12px;
                line-height: 24px;
                font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                color: #555;
            }
            h1 {
  font-size: 20px;
}

h2 {
  font-size: 18px;
}

p {
  font-size: 14px;
  font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  text-align: center;
}
p1 {
  font-size: 14px;
  font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  text-align: right;
}

            .invoice-box table {
                width: 100%;
                line-height: inherit;
                text-align: left;
            }

            .invoice-box table td {
                padding: 1px;
                vertical-align: top;
            }

            .invoice-box table tr td:nth-child(2) {
                text-align: right;
            }

            .invoice-box table tr.top table td {
                padding-bottom: 20px;
                padding-right: 20px
            }

            .invoice-box table tr.top table td.title {
                font-size: 45px;
                line-height: 45px;
                color: #333;
            }

            .invoice-box table tr.information table td {
                padding-bottom: 20px;
                padding-right: 20px;
            }

            .invoice-box table tr.heading td {
                background: #eee;
                border-bottom: 1px solid #ddd;
                font-weight: bold;
            }

            .invoice-box table tr.details td {
                padding-bottom: 20px;
                
            }

            .invoice-box table tr.item td {
                border-bottom: 1px solid #eee;
            }

            .invoice-box table tr.item.last td {
                border-bottom: none;
            }

            .invoice-box table tr.total td:nth-child(2) {
                border-top: 2px solid #eee;
                font-weight: bold;
            }

            @media only screen and (max-width: 600px) {
                .invoice-box table tr.top table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }

                .invoice-box table tr.information table td {
                    width: 100%;
                    display: block;
                    text-align: center;
                }
            }

            /** RTL **/
            .invoice-box.rtl {
                direction: rtl;
                font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            }

            .invoice-box.rtl table {
                text-align: right;
            }

            .invoice-box.rtl table tr td:nth-child(2) {
                text-align: right;
            }
        </style>
    </head>

    <body>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="10">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="https://nextlogistic.eu/wp-content/uploads/2019/08/NextLogistic_logo.png" style="width: 80%; max-width: 180px; margin-left:auto;" />
                                </td>

                                <td>
                                    Invoice #: 123<br />
                                    Created: January 10, 2015<br />
                                    Due: February 1, 2015
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr class="information">
                    <td colspan="10">
                        <table>
                            <tr>
                                <td>
                                    Sparksuite, Inc.<br />
                                    12345 Sunny Road<br />
                                    Sunnyville, CA 12345
                                </td>

                                <td>
                                    Acme Corp.<br />
                                    John Doe<br />
                                    john@example.com
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr class="heading">
                    <td><p>№</p></td>
                    <td><p>Описание</p></td>
                    <td><p>От</p></td>                    
                    <td><p>До</p></td>
                    <td><p>Кол-во</p></td>
                    <td><p>М.Ед.</p></td>
                    <td><p>Ед. цена</p></td>
                    <td><p>Нетна ст.</p></td>
                    <td><p>Заб.</p></td>                   
                </tr>
                
                <tr class="details">
                    <td><p1>1</p1></td>
                    <td><p1>MAUXJDO-sdcs-sd</p></td>
                    <td><p1></p1></td>                    
                    <td><p1></p1></td>
                    <td><p1>1.00</p1></td>
                    <td><p1>Бр.</p1></td>
                    <td><p1>1 080.00</p1></td>
                    <td><p1>1 080.00</p1></td>
                    <td><p1></p1></td>
                </tr>

                <tr class="heading">
                    <td>Item</td>
                    <td>From</td>                    
                    <td>To</td>
                    <td>Quantity</td>
                    <td>MU</td>
                    <td>Unit price</td>
                    <td>Total price</td>
                </tr>

                <tr class="item">
                    <td>Website design</td>
                    <td>asdasd</td>
                    <td>$300.00</td>
                    <td>$300.00</td>
                    <td>$300.00</td>
                    <td>$300.00</td>
                    <td>$300.00</td>
                    
                </tr>

                <tr class="item">
                    <td>Hosting (3 months)</td>

                    <td>$75.00</td>
                </tr>

                <tr class="item last">
                    <td>Domain name (1 year)</td>

                    <td>$10.00</td>
                </tr>

                <tr class="total">
                    <td></td>

                    <td>Total: $385.00</td>
                </tr>
            </table>
        </div>
    </body>
</html>
