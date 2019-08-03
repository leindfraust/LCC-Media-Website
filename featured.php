<?php session_start();
 if(!isset($_SESSION['admin'])){
        header("Location:featuredlogin.php");
     }
          echo "Hello, Admin";

    include "scripts/config.php";

    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
    
    if(isset($_POST['submit'])){
        $Title = $_POST['title'];
        $Content = trim($_POST['content']);
        
        $query = "INSERT INTO featuredevent(Title, Content) VALUES('$Title', '$Content')"; 


        if(mysqli_query($db, $query)) {
            echo '<p style="color: green">Status: Form Submission successfully updated</p>';
        }
        
        include "scripts/imageUploadFeatured.php";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" type="image/png" href="css/img/lcclogo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css">
    <link rel="stylesheet" href="css/bulma-0.7.1/css/bulma.css.map">
    <title>Featured</title>
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
    <h1 class="subtitle has-text-centered" style="color: red">NOTE: We do not support png files. Only use JPG files.<br> Please use landscape images for Banner Picture.</h1>
    
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <label class="label">Title</label>
        <input class="input" name="title" required><br>
        
        <label class="label">Summary(make it short)</label>
        <textarea class="textarea" name="content" placeholder="e.g. Dates, program flow etc. . . " required></textarea><br>

        <label class="label">Banner Picture</label>
        <input type="file" name="bannerimg" >

        <button type="submit" name="submit" value="Submit" class="button is-primary">Submit</button>
    </form>
    <buttton class="button is-danger"><a href="scripts/logoutfeatured.php">Logout</a></buttton>
</body>

</html>
