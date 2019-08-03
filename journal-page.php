<?php session_start();
 if(!isset($_SESSION['journalist'])){
        header("Location:journalist-login01.php");
     }
          echo "Login Success";

    include "scripts/config.php";

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
    
    if(isset($_POST['submit'])){
        $Author = $_POST['author'];
        $Summary = trim($_POST['authorsummary']);
        $Paragraph_1 = mysqli_real_escape_string($db, $_POST['paragraph1']);
        $Paragraph_2 = mysqli_real_escape_string($db, $_POST['paragraph2']);
        $Paragraph_3 = mysqli_real_escape_string($db, $_POST['paragraph3']);
        
        $query = "INSERT INTO news01(Author, Summary, Paragraph_1, Paragraph_2, Paragraph_3) VALUES('$Author', '$Summary', '$Paragraph_1', '$Paragraph_2', '$Paragraph_3')"; 


        if(mysqli_query($db, $query)) {
            echo "success";
        }
        
        include "scripts/imageUploadJournal01.php";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="css/img/lcclogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css.map">
    <title>Journalist</title>
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
    <h1 class="subtitle has-text-centered" style="color: red">NOTE: We do not support png files.</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <label class="label">Author's Name</label>
        <input class="input" name="author" ><br>

        <label class="label">Author's Picture</label>
        <input type="file" name="authorimg" ><br>
        
        <label class="label">Summary</label>
        <textarea class="textarea" name="authorsummary" placeholder="e.g. I am ..." ></textarea><br>

        <label class="label">Banner Picture</label>
        <input type="file" name="bannerimg" >
        <label class="label">BG Picture</label>
        <input type="file" name="bgimg" ><br><br>

        <label class="label">Paragraph 1</label>
        <textarea class="textarea" name="paragraph1"></textarea>

        <label class="label">Paragraph 2</label>
        <textarea class="textarea" name="paragraph2" ></textarea>

        <label class="label">Paragraph 3</label>
        <textarea class="textarea" name="paragraph3" ></textarea><br>

        <button type="submit" name="submit" value="Submit" class="button is-primary">Submit</button>
    </form>
    <buttton class="button is-danger"><a href="scripts/logoutJournal01.php">Logout</a></buttton>
</body>

</html>
