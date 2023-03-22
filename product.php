<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="product.css">
    <title>Products</title>
    <style>
        #gvi{
            display: none;
        }
        #gvb{
            display: none;
        }
        #gvo{
            display: none;
        }
    </style>
</head>
<body>
    <section class="container">
        <nav class="navbar">
            <div class="logo">
              <img src="sunsolar2.png">
            </div>
             <ul>
              <li><a href="index.html">HOME |</a></li>
              <li><a href="#">PRODUCTS |</a></li>
              <li><a href="offers.php">OFFERS |</a></li>
              <li><a href="#">CONTACT |</a></li>
             </ul>
            </nav>
    

    
            <section class="main">
              <div class="selectcon">
                <select id="prodcat" onchange="popgv();">
                    <option value="1">Panels</option>
                    <option value="2">Inverters</option>
                    <option value="3">Battries</option>
                    <option value="4">Others</option>
                </select>
              </div>









              <div class="prodview">
                <div class="gridviewpanles" id="gvp">
                  <?php $db=@mysqli_connect('localhost','root','');
                        if (!$db) die("no connection"); 
                        if (!@mysqli_select_db($db,'suntronics')) die("no db");
                        $q="select * from product inner join Category on product.Cat_Id = Category.Cat_Id where Cat_Name='Panel'"; 
                        $result=mysqli_query($db,$q) or die("query failed");
                        while ($row=mysqli_fetch_array($result)){ 
                        echo '
                        <div class="card">
                        <div class="image">
                            <img src="'.$row["Img_Url"].'">
                        </div>
                        <div class="title">
                            '.$row["Product_Name"].'
                        </div>
                        <div class="des">
                        '.$row["Product_Des"].'
                        </div>
                        <div class="price">
                            <span class="ptext">'.$row["Price"].'</span> $
                        </div>
                    </div>
                        ';
                        }
                    ?>
                    
                </div>
                <div class="gridviewinverters" id="gvi">
                  <?php $db=@mysqli_connect('localhost','root','');
                      if (!$db) die("no connection"); 
                      if (!@mysqli_select_db($db,'suntronics')) die("no db");
                      $q="select * from product inner join Category on product.Cat_Id = Category.Cat_Id where Cat_Name='Inverter'"; 
                      $result=mysqli_query($db,$q) or die("query failed");
                      while ($row=mysqli_fetch_array($result)){ 
                      echo '
                      <div class="card">
                      <div class="image">
                          <img src="'.$row["Img_Url"].'">
                      </div>
                      <div class="title">
                          '.$row["Product_Name"].'
                      </div>
                      <div class="des">
                      '.$row["Product_Des"].'
                      </div>
                      <div class="price">
                          <span class="ptext">'.$row["Price"].'</span> $
                      </div>
                  </div>
                      ';
                      }
                  ?>
                </div>
                <div class="gridviewbattery" id="gvb">

                <?php $db=@mysqli_connect('localhost','root','');
                      if (!$db) die("no connection"); 
                      if (!@mysqli_select_db($db,'suntronics')) die("no db");
                      $q="select * from product inner join Category on product.Cat_Id = Category.Cat_Id where Cat_Name='Battery'"; 
                      $result=mysqli_query($db,$q) or die("query failed");
                      while ($row=mysqli_fetch_array($result)){ 
                      echo '
                      <div class="card">
                      <div class="image">
                          <img src="'.$row["Img_Url"].'">
                      </div>
                      <div class="title">
                          '.$row["Product_Name"].'
                      </div>
                      <div class="des">
                      '.$row["Product_Des"].'
                      </div>
                      <div class="price">
                          <span class="ptext">'.$row["Price"].'</span> $
                      </div>
                  </div>
                      ';
                      }
                  ?>

                </div>
                <div class="gridviewinothers" id="gvo">
                <?php $db=@mysqli_connect('localhost','root','');
                      if (!$db) die("no connection"); 
                      if (!@mysqli_select_db($db,'suntronics')) die("no db");
                      $q="select * from product inner join Category on product.Cat_Id = Category.Cat_Id where Cat_Name='Other'"; 
                      $result=mysqli_query($db,$q) or die("query failed");
                      while ($row=mysqli_fetch_array($result)){ 
                      echo '
                      <div class="card">
                      <div class="image">
                          <img src="'.$row["Img_Url"].'">
                      </div>
                      <div class="title">
                          '.$row["Product_Name"].'
                      </div>
                      <div class="des">
                      '.$row["Product_Des"].'
                      </div>
                      <div class="price">
                          <span class="ptext">'.$row["Price"].'</span> $
                      </div>
                  </div>
                      ';
                      }
                  ?>

                </div>
              </div>
            </section>











    
    
    
    
            <footer class="foot">
                <ul><span class="ultit">Shop</span>
                  <br><br><li><a href="#"></a>Panels</li>
                  <li><a href="#"></a>Batteries</li>
                  <li><a href="#"></a>Inverters</li>
                  <li><a href="#"></a>Others</li>
                </ul>
                <ul><span class="ultit">Our Store</span>
                  <br><br><li><a href="https://goo.gl/maps/DUm1ScFWJw6GebeEA"><i class="fa fa-map-marker"></i> location</a></li>
                  <li><i class="fa fa-phone"></i> +961 3856394</li>
                  <li><i class="fa fa-envelope"></i>
                    chawki@suntronicslebanon.com</li>
                </ul>
                <ul><span class="ultit">Customer Service</span>
                  <br><br><li><i class="fa fa-phone"></i> +961 71209102</li>
                  <li><i class="fa fa-envelope"></i>
                    chawki@suntronicslebanon.com</li>
                  <br>
                  <li id="copyright"><a href="https://wa.me/+96181865479">
                    © 2023 by JOETECH. Powered and <br>secured by Ali Youssef.</a></li>
                  </ul>
            </footer>
    </section>
    <script src="product.js"></script>
</body>
</html>