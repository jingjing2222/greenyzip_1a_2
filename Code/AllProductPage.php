<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="AllProducts.css">
    <title>한평정원:그린이집</title>
</head>
<body>
 <!-- the header and the connection with the database include-->
<?php  include('includes/header.php'); ?>
<?php  include('includes/db-con.php'); ?>
    
<!--  viewing the PLANTS products-->
    <section id="second">
        <div class="container">
                <h2 class="title"; id="plants">식물들</h2>
                <div class="product-container">
        <?php 

        $sql = "SELECT * FROM Products where PCategory='Plants';";
        $result= mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);

        echo "<div style='display: grid; grid-template-columns: auto auto auto auto;'>";

            for($i=1;$i<=$num;$i++){
            $row = mysqli_fetch_assoc($result);
            $pid = $row['PID'];
            $imgUrl = "img/".$row['Pic1'];
            $pname = $row['PName'];
            $pstock= $row['PStock'];


        echo "

        <div style='margin-top: 20px' class='product-card'>
                <div class='product-img'>
                    <a href='productDetails.php?pid=".$pid."'><img src=$imgUrl alt=$pname></a>
                </div>
                <h3 class='card-name'>$pname</h3>
                <form action='AllProductPage.php?pid=".$pid."&pstock=".$pstock."' method='post' style='border:0px;'> 
                <input type='hidden' name='pname' value=$pname>
                <input type='hidden' name='pimg' value=$imgUrl>
                <input type='hidden' name='quantity' value=1>
                </form>
                <h4></h4></div>
                ";
        }
                    echo"</div>";

        
        ?>

        </div>
    <!-- viewing the CARE TOOLS product -->
        <br><br><br>
            <h2 class="title"; id="tools">활동들</h2>
            <div class="product-container">
        
        <?php 

        $sql = "SELECT * FROM Products where PCategory='works';";
        $result= mysqli_query($conn, $sql);
        $num=mysqli_num_rows($result);
    
        echo "<div style='display: grid; grid-template-columns: auto auto auto auto;'>";
        
        
            for($i=1;$i<=$num;$i++){
            $row = mysqli_fetch_assoc($result);
            $pid = $row['PID'];
            $imgUrl = "img/".$row['Pic1'];
            $pname = $row['PName'];
            $pstock=$row['PStock'];

        echo "<div  style='margin-top: 20px' class='product-card'>
                <div  class='product-img'>
                    <a href='productDetails.php?pid=".$pid."'><img src=$imgUrl alt=$pname></a>
                </div>
                <h3 class='card-name'>$pname</h3>
                <form action='AllProductPage.php?pid=".$pid."&pstock=".$pstock."' method='post' style='border:0px;'> 
                <input type='hidden' name='pname' value=$pname>
                <input type='hidden' name='pimg' value=$imgUrl>
                <input type='hidden' name='quantity' value=1>
                </form>
                <h4></h4>
            </div>";
        }
            echo"</div>";
        ?>
            </div>     
    
    
    
    <br><br><br><br>
    <?php include('includes/footer.html'); ?>
</body>
</html>