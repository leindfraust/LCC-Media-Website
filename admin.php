<?php
if($_POST){
include 'scripts/config.php';
    
    $code = $_POST['code'];
    
        $sql = "SELECT * FROM admins WHERE Code='$code' ";
        $result = mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['admin'] = 'true';
            header('location:data-display.php');
        } else {
            echo "something wrong";
        }
}
?>
<!DOCTYPE Html>
<html>

<head>
    <title></title>
    <link rel="shortcut icon" type="image/png" href="css/img/lcclogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css.map">
    <style>
        .input {
            width: 50%;
        }
        form {
            margin-top: 13%;
        }
        @media screen and (max-width: 1000px) {
            .input {
                width: 40% !important;
            }
        }

    </style>
</head>

<body>
    <center>
        <form method="post">
            <h1 class="title has-text-centered">LCC-Bais InfoMedia</h1>
            <h1 class="title has-text-centered">ADMIN PAGE</h1>
            <input type="text" class="input" placeholder="input code" name="code">
            <button type="submit" value="submit" class="button is-primary">ENTER</button>
        </form>
    </center>
</body>

</html>