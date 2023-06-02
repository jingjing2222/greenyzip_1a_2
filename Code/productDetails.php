<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./product.css">
    <title>한평정원:그린이집</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    <?php 
    include('includes/header.php');
    include('includes/db-con.php');
    include('includes/helpPopup.php');
    ?>	

    <?php 
            $pid = $_GET['pid'];
            $sql = "SELECT * FROM Products WHERE PID= $pid;";
            $result= mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $imgUrl = "img/".$row['Pic1'];
            $PDes = $row['P_Description'];
            $PName = $row['PName'];
            $PStock = $row['PStock'];
            $PCategory = $row['PCategory'];
            $Phumidity = $row['Phumidity'];
            $Plight = $row['Plight'];
            $Pwatering = $row['Pwatering'];
    echo "
        <section class='product-section'>
        <div class='left'>
        <div class='big-img'>
            <img src=$imgUrl alt=$PName>
            </div>";

        $sql = "SELECT Pic2, Pic3, Pic4, Pic5 FROM products WHERE PID= $pid;";
        $result= mysqli_query($conn, $sql);
        $row = mysqli_fetch_row($result);
        
        echo "<div class='images'>";
        for($i=0 ; $i<=3; $i++){
            echo"
                <div class='smll-img'>
                    <img src='img/".$row[$i]."' onclick='showImg(this.src)' >
                </div>";
        }
        echo "        
        </div> 
        </div> 
        
            <div class='product-detail' style='width: 50vw;'>
                <h1 class='product-title'> $PName </h1>
                <p class='product-des'> $PDes</p>
                <div class='quantity' style='width: 12.5vw;'>
                 </div>

            </div>
        </section> ";
        ?>
    <?php if (strcmp($PCategory,"Plants")==0) { ?>
  <section class="details-des">
        <h1 class="titles"><i class="fa fa-heart" aria-hidden="true"></i> <?php echo $PName; ?> 특성!<br></h1><br><br>
        <table class="table-venues">
        
            <tr>
            <th class="section-title">좋아하는 습도</th>
            <th class="section-title">조명 정도</th>
            <th class="section-title">물주는 정도</th>
           </tr>
            <tr >
                <td class="des"><?php echo $Phumidity; ?></td>
                <td class="des"><?php echo $Plight; ?></td>
                <td class="des"><?php echo $Pwatering; ?></td>
            </tr>
        </table>
    </section>

    <?php } ?>
        <br><br><br><br>
     
   
    
        <section id="second">
        <div class="container">
    <h2 class="title">다른 식물 및 활동</h2>
    <div class="product-container">
    <?php 
        $sql = "SELECT * FROM Products ORDER BY PID DESC LIMIT 4;";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            $pid = $row['PID'];
            $imgUrl = "img/".$row['Pic1'];
            $pname = $row['PName'];
            $pstock = $row['PStock'];

            echo "<div class='product-card'>
                <div class='product-img'>
                    <a href='productDetails.php?pid=".$pid."'><img src='$imgUrl' alt='$pname'></a>
                </div>
                <h3 class='card-name'>$pname</h3> 
                <input type='hidden' name='pname' value='$pname'>
                <input type='hidden' name='pimg' value='$imgUrl'>
                <input type='hidden' name='quantity' value='1'>
            </div>";
        }
    ?>
    </div>
</div>
</section>


    <br><br><br><br>
    <?php include('includes/footer.html'); ?>
    <script >
         let bigImg= document.querySelector('.big-img img');
         function showImg(pic){
            bigImg.src = pic;
        }
    </script>
    <script src="script.js"></script>
    <script src="qty.js"></script>

</body>
</html>