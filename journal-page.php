<?php session_start();
 if(!isset($_SESSION['journalist'])){
        header("Location:journalist-login.php");
     }
          echo "Login Success";

?>
<?php
    include "scripts/config.php";

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
    
    if(isset($_POST['submit'])){
        $Author = $_POST['author'];
        $Summary = mysqli_real_escape_string($_POST['authorsummary']);
        $Paragraph_1 = mysqli_real_escape_string($_POST['paragraph1']);
        $Paragraph_2 = mysqli_real_escape_string($_POST['paragraph2']);
        $Paragraph_3 = mysqli_real_escape_string($_POST['paragraph3']);
        
        $query = "INSERT INTO journalwrite(Author, Summary, Paragraph_1, Paragraph_2, Paragraph_3) VALUES('$Author', '$Summary', '$Paragraph_1', '$Paragraph_2', '$Paragraph_3')";

        if(mysqli_query($db, $query)){
            echo "success";
        } else {
            echo "fail";
        }
    }
        
        /*$Bannerimg = $_FILES['bannerimg'];
        $BGimg = $_FILES['bgimg'];
        
        $fileName = $_FILES['bgimg']['name'];
        $fileTmpName = $_FILES['bgimg']['tmp_name'];
        $fileSize = $_FILES['bgimg']['size'];
        $fileError = $_FILES['bgimg']['error'];
        $fileType = $_FILES['bgimg']['type'];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 5000) {
                    $fileDestination = 'css/img'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: journal-page.php");
                } else {
                    echo "file too big";
                }
            } else {
                echo " error uploading file";
            }
        } else {
            echo "cannot upload file";
        }*/

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <form method="post" action="journal-page.php" enctype="multipart/form-data">
        <label class="label">Author's Name</label>
        <input class="input" name="author"><br>
        
        <label class="label">Author's Picture</label>
        <input type="file" name="authorimg"><br>
        
        <label class="label">Summary</label>
        <textarea class="textarea" name="authorsummary" placeholder="e.g. I am ..."></textarea><br>

        <label class="label">Banner Picture</label>
        <input type="file" name="bannerimg">
        <label class="label">BG Picture</label>
        <input type="file" name="bgimg"><br><br>

        <label class="label">Paragraph 1</label>
        <textarea class="textarea" name="paragraph1"></textarea>

        <label class="label">Paragraph 2</label>
        <textarea class="textarea" name="paragraph2"></textarea>

        <label class="label">Paragraph 3</label>
        <textarea class="textarea" name="paragraph3"></textarea><br>

        <buttton class="button is-primary" type="submit" value="submit" name="submit">Submit</buttton>
    </form>
    <buttton class="button is-danger"><a href="scripts/logoutJournal.php">Logout</a></buttton>
</body>

</html>
