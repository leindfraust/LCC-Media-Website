<?php #background image
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
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/'.$fileName;
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
        }
?>
<?php #banner image
        $Bannerimg = $_FILES['bannerimg'];
        $fileName = $_FILES['bannerimg']['name'];
        $fileTmpName = $_FILES['bannerimg']['tmp_name'];
        $fileSize = $_FILES['bannerimg']['size'];
        $fileError = $_FILES['bannerimg']['error'];
        $fileType = $_FILES['bannerimg']['type'];
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/news01/'.$fileName;
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
        }
?>
<?php #author image
        $Authorimg = $_FILES['authorimg'];
        $fileName = $_FILES['authorimg']['name'];
        $fileTmpName = $_FILES['authorimg']['tmp_name'];
        $fileSize = $_FILES['authorimg']['size'];
        $fileError = $_FILES['authorimg']['error'];
        $fileType = $_FILES['authorimg']['type'];
    
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/authors/'.$fileName;
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
        }
?>