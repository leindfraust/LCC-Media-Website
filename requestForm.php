<?php  

$user = 'root';
$pass = '';

$db = 'orders';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

	if(isset($_POST['submit'])){
		$Name = $_POST['fullName'];
		$YearSectionORAddress = $_POST['gradeSectionAddress'];
		$mobileNumber = $_POST['mobileNumber'];
		$shirtName = $_POST['shirt'];
		$shirtType = $_POST['shirtType'];
		$shirtSize = $_POST['size'];
		$quantity = $_POST['quantity'];
		$OIG = $_POST['DateBrand'];

		$query = "INSERT INTO orderlist (Name, YearSectionORAddress, MobileNumber, ShirtName,ShirtType, ShirtSize, Quantity, OIG) VALUES ('$Name','$YearSectionORAddress','$mobileNumber','$shirtName','$shirtType', '$shirtSize', '$quantity', '$OIG')";

		if(mysqli_query($db, $query)) {
			$query = mysqli_query($db, "SELECT * FROM orderlist ORDER BY ID DESC LIMIT 1");
			$last_id = mysqli_fetch_row($query);
			echo '<h3 style="display: block; background-color: black; z-index: 4; position: absolute; bottom: 50%;  color: white; padding: 15px; text-align: center;"> Your order has been recieved and is being processed, we will contact you soon through a text. Please click  <a href="index.html"> here </a> to avoid multiple order registrations or click <a href="requestForm.php"> here </a> to order again. Thank you for your understanding! Your ticket order is: '.$last_id[8].'-'.$last_id[5].''.$last_id[0].' </h3> ';
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>LCC MEDIA ― Order Form</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="css/img/lcclogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css.map">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css?=v.4">
    <link rel="stylesheet" href="css/customButton.css">
</head>

<body>
    <form action="requestForm.php" method="post">
        <div class="field">
            <h1 class="subtitle has-text-centered"> ORDER FORM </h1>
            <input type="hidden" id="getDate" name="DateBrand">
            <label class="label">Full Name</label>
            <div class="control">
                <input type="text" name="fullName" placeholder="your full name" /required> </div> <p class="help">Input your full name (e.g. John Smith Doe) </p><br>
                <label class="label">Year/Section or Address</label>
                <div class="control">
                    <input type="text" name="gradeSectionAddress" placeholder="your grade and section or address" /required> </div> <p class="help">Input your year and section (e.g. 12-ICT) </p>
                    <p class="help">Or just input your address if you are an outsider/teacher. </p><br>
                    <label class="label">Mobile Number (for contacting you) </label>
                    <div class="control">
                        <input type="number" name="mobileNumber" placeholder="your mobile number" /required> </div> <p class="help">Input your mobile number (e.g. 09888888888) </p>
                        <p class="help">We won't disclose your information as prescribed by the law. </p><br>
                        <label class="label">Type of shirt, size and quantity</label>
                        <div class="control">

                            <span class="select is-rounded">
                                <select id="shirt" name="shirt">
                                    <option id="shirt1" name="shirt-1" selected>LIT: A Star is Born</option>
                                    <option id="shirt2" name="shirt-2">TRIBU LCCIAN SINULOG</option>
                                    <option id="shirt3" name="shirt-3">HALU</option>
                                    <option id="shirt4" name="shirt-4">LCC Intramurals</option>
                                    <input id="shirtConfirm" name="shirtType" type="hidden">
                                </select>
                            </span>
                            <span class="select">
                                <select name="size">
                                    <option name="x-small" selected>XS</option>
                                    <option name="small">S</option>
                                    <option name="medium">M</option>
                                    <option name="large">L</option>
                                    <option name="x-large">XL</option>
                                    <option name="xx-large">XXL</option>
                                    <option name="xxx-large">3XL</option>
                                </select>
                            </span>
                            <span class="select">
                                <select name="quantity">
                                    <option name="1" selected>1</option>
                                    <option name="2">2</option>
                                    <option name="3">3</option>
                                    <option name="4">4</option>
                                    <option name="5">5</option>
                                    <option name="6">6</option>
                                    <option name="7">7</option>
                                    <option name="8">8</option>
                                    <option name="9">9</option>
                                    <option name="10">10</option>
                                </select>
                            </span>
                        </div><br>
                        <button type="submit" name="submit" value="Submit" class="button is-primary fullsub">Submit</button>
                        <button type="reset" class="button is-danger">Clear</button>
                    </div>
    </form>
    <script>
        let date = new Date();

        let day = date.getDate();
        let month = date.getMonth();
        let year = date.getFullYear();

        $('.fullsub').click(function() {
            $('#getDate').val("MAZU" + day + "" + month + "" + year);
            switch ($('#shirt option:selected').attr("name")) {
                case "shirt-1":
                    $('#shirtConfirm').val("L:SB");
                    break;
                case "shirt-2":
                    $('#shirtConfirm').val("TRSNG");
                    break;
                case "shirt-3":
                    $('#shirtConfirm').val("HL");
                    break;
                case "shirt-4":
                    $('#shirtConfirm').val("IRMR");
                    break;
            };
        });

    </script>
</body>

</html>
