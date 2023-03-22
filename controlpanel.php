<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="control.css">
    <title>Control Panel</title>
</head>
<body>
    <div class="container">


        <div class="title">
            <h1>CONTROL PANEL</h1>
            <h2>Product Manager</h2>
        </div>

        <form method="post">
            <div class="inputs">
                <input type="text" placeholder="Product Name" name="name">
                <select name="cat">
                    <?php 
                        $db=@mysqli_connect('localhost','id20467820_suntronicsdb','Suntronicss[2023]');
                        if (!$db) die("no connection"); 
                        if (!@mysqli_select_db($db,'id20467820_suntronics')) die("no db");
                        $q="select * from Category"; 
                        $result=mysqli_query($db,$q) or die("query failed");
                        while ($row=mysqli_fetch_array($result)){ 
                        echo '<option value="'.$row["Cat_Id"].'">'.$row["Cat_Name"].'</option>';
                        }
                    ?>
                </select>
                <input type="text" placeholder="Product Description" name="des">
                <input type="number" placeholder="Product Price" name="price">
                <input type="text" placeholder="Product Image" onfocus="this.type='file' "name="image">
                <button type="submit" name="createbtn">Create</button>
            </div>
        </form><br><br>

        <div class="outputs">
            <div class="searchblock">
                <input type="text" id="searchtitle" placeholder="Search">
                <div class="searchbtn">
                    <button id="searchbytitle"> Search By Title</button>
                <button id="searchbytitle"> Search By Catergory </button>
                </div>
            </div>
        </div>
    </div>
    <?php
// Check if image file has been uploaded
if(array_key_exists("createbtn",$_POST)) {
    $pname=$_POST["name"];
    $pcat=$_POST["cat"];
    $pdes=$_POST["des"];
    $pprice=$_POST["price"];

    $targetDirectory = $_SERVER['DOCUMENT_ROOT']."/product_images/"; // Target directory where the image file will be stored
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]); // Path of the uploaded file
    $uploadOk = 1; // Flag to check if file is uploaded successfully

    // Check if file already exists
    if(file_exists($targetFile)) {
        echo "<script>alert('Sorry, image already exists.');</script>";
        $uploadOk = 0;
    }

    // Check file size
    if($_FILES["image"]["size"] > 500000) {
        echo "<script>alert('Sorry, your image is too large.');</script>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your product was not uploaded.');</script>";
    } else {
        // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $url =  $_FILES["image"]["name"];
            $db=@mysqli_connect('localhost','id20467820_suntronicsdb','Suntronicss[2023]');
                        if (!$db) die("no connection"); 
                        if (!@mysqli_select_db($db,'id20467820_suntronics')) die("no db");
            $q = "insert into Product (Product_Name, Cat_Id, Img_Url, Product_Des, Price) values('$pname',$pcat,'$url','$pdes',$pprice)";
            $result=mysqli_query($db,$q) or die("query failed");
            echo "<script>alert('The Product has been uploaded.');</script>";
        } else {
            echo "<script>alert('Sorry, there was an error uploading your image.');</script>";
        }
    }
    
}
?>
</body>
</html>