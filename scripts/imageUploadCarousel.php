<?php #1
        $ImageOne = $_FILES['one'];
        $fileName = $_FILES['one']['name'];
        $fileTmpName = $_FILES['one']['tmp_name'];
        $fileSize = $_FILES['one']['size'];
        $fileError = $_FILES['one']['error'];
        $fileType = $_FILES['one']['type'];
    
        $newName = "1.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/carousel/'.$newName;
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
<?php #2
        $ImageTwo = $_FILES['two'];
        $fileName = $_FILES['two']['name'];
        $fileTmpName = $_FILES['two']['tmp_name'];
        $fileSize = $_FILES['two']['size'];
        $fileError = $_FILES['two']['error'];
        $fileType = $_FILES['two']['type'];
    
        $newName = "2.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/carousel/'.$newName;
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
<?php #3
        $ImageThree = $_FILES['three'];
        $fileName = $_FILES['three']['name'];
        $fileTmpName = $_FILES['three']['tmp_name'];
        $fileSize = $_FILES['three']['size'];
        $fileError = $_FILES['three']['error'];
        $fileType = $_FILES['three']['type'];
    
        $newName = "3.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/carousel/'.$newName;
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
<?php #4
        $ImageFour = $_FILES['four'];
        $fileName = $_FILES['four']['name'];
        $fileTmpName = $_FILES['four']['tmp_name'];
        $fileSize = $_FILES['four']['size'];
        $fileError = $_FILES['four']['error'];
        $fileType = $_FILES['four']['type'];
    
        $newName = "4.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/carousel/'.$newName;
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
<?php #5
        $ImageFive = $_FILES['five'];
        $fileName = $_FILES['five']['name'];
        $fileTmpName = $_FILES['five']['tmp_name'];
        $fileSize = $_FILES['five']['size'];
        $fileError = $_FILES['five']['error'];
        $fileType = $_FILES['five']['type'];
    
        $newName = "5.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/carousel/'.$newName;
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
<?php #6
        $ImageSix = $_FILES['six'];
        $fileName = $_FILES['six']['name'];
        $fileTmpName = $_FILES['six']['tmp_name'];
        $fileSize = $_FILES['six']['size'];
        $fileError = $_FILES['six']['error'];
        $fileType = $_FILES['six']['type'];
    
        $newName = "6.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/carousel/'.$newName;
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
<?php #7
        $ImageSeven = $_FILES['seven'];
        $fileName = $_FILES['seven']['name'];
        $fileTmpName = $_FILES['seven']['tmp_name'];
        $fileSize = $_FILES['seven']['size'];
        $fileError = $_FILES['seven']['error'];
        $fileType = $_FILES['seven']['type'];
    
        $newName = "7.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/carousel/'.$newName;
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
<?php #8
        $ImageEight = $_FILES['eight'];
        $fileName = $_FILES['eight']['name'];
        $fileTmpName = $_FILES['eight']['tmp_name'];
        $fileSize = $_FILES['eight']['size'];
        $fileError = $_FILES['eight']['error'];
        $fileType = $_FILES['eight']['type'];
    
        $newName = "8.jpg";
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('jpg', 'jpeg', 'png');
        
        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 999999999) {
                    $fileDestination = 'css/img/carousel/'.$newName;
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