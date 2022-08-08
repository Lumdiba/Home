    <?php
    
        include_once "dbconnection.php";

        $folder = "uploads/";
        $fileTempLoc = $_FILES['productimage']['tmp_name'];
        $finalFile = $_FILES['productimage']['name'];


        $sql = $conn->prepare("INSERT INTO products VALUES(:pid, :pname, :pimage, :pcategory, :pprice);");

        if(move_uploaded_file($fileTempLoc, $folder.$finalFile)){
            try{
                $sql->execute(array(':pid'=>'', ':pname'=>$finalFile, ':pimage'=>$finalFile, ':pcategory'=>'tee', ':pprice'=>699));
                echo "Uploaded";
                header("Location: uploadimg.php");
            }
            catch(PDOException $e){
                echo "UploadERROR! - " .$e;
            }
        }
        else{
            echo "Upload Error!";
        }
    
    ?>