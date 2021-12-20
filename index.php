<?php
require_once 'DBConnection.php';

$database;
$connection = new DBConnection();
$database = $connection->db_connect();
$type = 'dasdad';

//$database->query("INSERT INTO banks_info (name, bic, iban) VALUES ('RAIFAIZEN', '12345678910', 'bg769780dfg8909dgdf09')");
//$database->query("INSERT INTO clients_providers (name, address, country, city, number, vat_number, acc_person, type, bank_ID) VALUES ('Rado EOOD', 'Skokupim 45', 'Sofia', 'Sofia', '14135263213', 'BG14135263213', 'Optimus', 1, 2)");
//$database->query("INSERT INTO services (descrip, sender, receiver, quantity, m_unit, unit_price, total_price, val_price, vat, note) VALUES ('MATBGROTX8100', 'Bg', 'Ro', 45.00, 'Pc.', 45.00 ,45.00 ,45.00 ,45.00 , 'gygyugyu')");
//var_dump($database);

//$database->query("SELECT * FROM clients_providers");
//echo "Affected rows: " . $database -> affected_rows;
//$sql = "SELECT ID, name, iban FROM banks_info WHERE ID = 2" ;
//$result = $database->query($sql);

/*if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["bank_name"]. " -IBAN:" . $row["iban"]. "<br>";
  }
} else {
  echo "0 results";
}*/

//$sql1 = "SELECT ID, name, address, country, city, number,vat_number,acc_person,type, bank_ID FROM clients_providers";
//$result = $database->query($sql1);

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
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>A simple, clean, and responsive HTML invoice template</title>

		<style>
      
			.invoice-box {
        		height: 842px;
				width: 595px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 13px;
				line-height: 24px;
				font-family: '{name', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #1f3c60;
        
			}
			h4 {
 				font-size: 15px;
  				font-family: '{name', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: right;
				}
      		h3 {
 				font-size: 15px;
  				font-family: '{name', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: left;
  				/*color: #003366;*/
				}

			h2 {
  				font-size: 18px;
			}
			p {
  				font-size: 14px;
  				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  				text-align: center;
			}
			p:nth-child() {
				font-size: 14px;
  				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
  				text-align: right;
				height: 14px;
			}
			h1 {
 				overflow: hidden;
 				text-align: center;
				margin: 0;
 				color: #1f3c60;
				position: relative;
  				right: 0;
  				margin-right: 0%;
			}
			h1:before,
			h1:after {
 				background-color: #ffc528;
 				content: "";
 				display: inline-block;
 				height: 20px;
 				position: relative;
 				vertical-align: middle;
 				width: 65%;
			}
			h1:before {
 				right: 0.5em;
 				margin-left: -10%;
			}
			h1:after {
 				left: 0.5em;
 				margin-right: -60%;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left ;
			}

			.invoice-box table td {
				padding: px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 5px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 5px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding: 0px;
				text-align: left;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 5px solid #ddd;
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
				border-top: 1px solid #eee;
				font-weight: bold;
			}
			.inf {
				padding-bottom: 25px;
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
				text-align: left;
			}
			
		</style>
	</head>

	<body>
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="8">
						<table>
							<tr>
								<td class="title">
									<img src="https://nextlogistic.eu/wp-content/uploads/2019/08/NextLogistic_logo.png"
                  					style="width: 50%; max-width: 180px" />
								</td>

								<td style="color: #7c8083;">
									No: 1000052236<br />
									Дата: 07.12.2021<br />
									Място: гр.ПЛОВДИВ
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information lr">
					<td colspan="8">
					<h1>ФАКТУРА</h1>
					<h3 style="color:#7c8083; text-align:right; margin-right: 17.6%">ОРИГИНАЛ</h5>
						<table style="color: #7c8083; line-height: 18px;">
							<tr>
								<td>
                  					<h3></h3>
								</td>

								<td>
                  					<h3 style = color:#1f3c60>Клиент</h3>
								</td>

								<td>
                  					<h3></h3>
								</td>

								<td>
                  					<h3 style = color:#1f3c60>Доставчик</h3>
								</td>

							</tr>
							<tr>
								<td>Име:</td>
    							<td>КЛАС ОЛИО</td>
								<td>Име:</td>
    							<td>НЕКСТ ЛОДЖИСТИКС</td>
							</tr>
							<tr>
								<td>Адрес:</td>
    							<td>ул. "Бачо Киро" №26-28-30</td>
								<td>Адрес:</td>
    							<td>Пловдив<br> 
									ул. Рогошко шосе 36
								</td>
							</tr>
							<tr>
							<td>Номер:</td>
    							<td>14135263452</td>
								<td>Номер:</td>
    							<td>46640013552</td>
							</tr>
							<tr>
							<td>VAT номер:</td>
    							<td>BG14135263452</td>
								<td>VAT Номер:</td>
    							<td>BG46640013552</td>
							</tr>
							<tr>
							<td>МОЛ:</td>
    							<td>Радослав Димитров</td>
								<td>МОЛ:</td>
    							<td>Моника Блажева</td>
							</tr>
							<tr >
							<td>Банка:</td>
    							<td></td>
								<td>Банка:</td>
    							<td>RaiffeisenBank</td>
							</tr>
							<td>BIC:</td>
    							<td></td>
								<td>BIC:</td>
    							<td>76752764843</td>
							</tr>
							<td>IBAN:</td>
    							<td></td>
								<td>IBAN:</td>
    							<td>bg4tjkwbhhj37777w</td>
							</tr>
						</table>
						<hr color="white"  width="100%" >
					</td>
				</tr>

				<table>
                    <tr class="heading" style="height: 15px;">
                        <td width = "5" style = color:#1f3c60><p>№</p></td>
                        <td width = "15" style = color:#1f3c60><p>Описание</p></td>
                        <td width = "10" style = color:#1f3c60><p>От</p></td>
                        <td width = "10" style = color:#1f3c60><p>До</p></td>
                        <td width = "5" style = color:#1f3c60><p>Кол-во</p></td>
                        <td width = "5" style = color:#1f3c60><p>М.Ед.</p></td>
                        <td width = "5" style = color:#1f3c60><p>Ед. цена</p></td>
                        <td width = "5" style = color:#1f3c60><p>Нетна ст.</p></td>
                        <td width = "15" style="max-width: 50px; color:#1f3c60"><p>Забeлежка</p></td>
                    </tr>


                    <tr class="details">
                        <td width = "5"><p1>1</p1></td>
                        <td width = "15"><p1>MAUXJDO-sdcs-sd</p></td>
                        <td width = "10"><p1></p1></td>
                        <td width = "10"><p1></p1></td>
                        <td width = "5"><p1>1.00</p1></td>
                        <td width = "5"><p1>Бр.</p1></td>
                        <td width = "5"><p1>1 080.00</p1></td>
                        <td width = "5"><p1>1 080.00</p1></td>
                        <td width = "15"  style="max-width: 50px; word-wrap: break-word;"><p1>Дълга забележка ще се пренесе на следващия ред.</p1></td>
                    </tr>
                </table>

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
