<!DOCTYPE html>
<?php
	$eur = 4.55;
	$usd = 4.2;
	$gbp = 4.66;
	$message = "";

	if(isset($_POST['submitButton'])) {
		$input = $_POST['inputNumber'];
		$radio = $_POST['currency'];
		switch ($radio) {
			case "eur":
				$message = "$input PLN to: " . $input * $eur . " EUR";
				break;
			case "usd":
				$message = "$input PLN to: " . $input * $usd . " USD";
				break;
			case "gbp":
				$message = "$input PLN to: " . $input * $gbp . " GBP";
				break;
		}
	}
?>
<html lang="pl-PL">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<main>
			<div class="container">
				<h1>Kalkulator walutowy</h1>
				<h2>Przelicznik pomiędzy walutami - EUR, USD, GBP</h2>
				<form action="" method="post">
					<label for="pln">Wprowadź wartość w PLN</label>
					<input type="number" id="pln" name="inputNumber" />
					<p>Wybierz walutę na którą chcesz przeliczyć podaną wartość</p>
					<div class="checkbox">
						<div class="colcheckbox">
							<input type="radio" name="currency" id="eur" value="eur" />
							<label for="eur">EUR</label>
						</div>
						<div class="colcheckbox">
							<input type="radio" name="currency" id="usd" value="usd" checked />
							<label for="usd">USD</label>
						</div>
						<div class="colcheckbox">
							<input type="radio" name="currency" id="gbp" value="gbp" />
							<label for="gbp">GBP</label>
						</div>
					</div>
					<button type="submit" name="submitButton">Przelicz</button>
					<?php echo("<h3 style='padding-bottom: 20px;'>$message</h3>"); ?>
				</form>
			</div>
		</main>

	</body>
</html>
