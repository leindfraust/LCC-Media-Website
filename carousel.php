<?php session_start();
 if(!isset($_SESSION['admin'])){
        header("Location:carousellogin.php");
     }
          echo "Hello, Admin";

    include "scripts/config.php";

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
    
    if(isset($_POST['submit'])){
        include "scripts/imageUploadCarousel.php";
        echo '<p style="color: green">Status: Photo Submissions success';
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="css/img/lcclogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css.map">
    <title>Featured Photos</title>
    <style>
        .input,
        .textarea {
            width: 50% !important;
        }

        form {
            padding: 50px;
        }
    </style>
</head>

<body>
    <h1 class="subtitle has-text-centered" style="color: red">NOTE: We do not support png files. Only use JPG files.<br>Avoid uploading different resolutions, make sure all photos have the same resolutions.</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        
        <label class="label">Picture #1</label>
        <input type="file" name="one" >
        <label class="label">Picture #2</label>
        <input type="file" name="two" >
        <label class="label">Picture #3</label>
        <input type="file" name="three" >
        <label class="label">Picture #4</label>
        <input type="file" name="four" >
        <label class="label">Picture #5</label>
        <input type="file" name="five" >
        <label class="label">Picture #6</label>
        <input type="file" name="six" >
        <label class="label">Picture #7</label>
        <input type="file" name="seven" >
        <label class="label">Picture #8</label>
        <input type="file" name="eight" ><br><br>

        <button type="submit" name="submit" value="Submit" class="button is-primary">Submit</button>
    </form>
    <buttton class="button is-danger"><a href="scripts/logoutcarousel.php">Logout</a></buttton>
</body>

</html>
