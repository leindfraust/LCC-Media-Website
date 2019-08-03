<?php #banner image
        $Bannerimg = $_FILES['bannerimg'];
        $fileName = $_FILES['bannerimg']['name'];
        $fileTmpName = $_FILES['bannerimg']['tmp_name'];
        $fileSize = $_FILES['bannerimg']['size'];
        $fileError = $_FILES['bannerimg']['error'];
        $fileType = $_FILES['bannerimg']['type'];
    
        $newName = "featuredbg.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/featuredbg/'.$newName;
                    move_uploaded_file($fileTmpName, $fileDestination);
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