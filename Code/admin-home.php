<!--CODE DONE BY DALIA ALZAHRANI-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <title>한평정원:그린이집</title>
</head>

<body>
    <nav>
        <ul class="nav-items">
        <li></li>
            <img src="img/logo.png" alt="Logo" class="logo">
            <li style="width: 110px;"></li>
            <li><a href="index.php" class="logout effect"><img class="logout-img" src="img/logout.png" alt="logout"></a></li>
        </ul>

    </nav>
    <section id="slogan">
        <div class="container">
            <div class="slogan-content" style="font-family: Fantasy;">
                <h4>관생의 심신 안정을 돕는 한평정원:그린이집</h4>
                <h1>그동안의 발자취, 여기서 확인하세요</h1>
                <a href="admin.php" class="slogan-button" type="button">수정하기</a>
            </div>
        </div>
    </section>
    <!-- LEARN MORE SECTION -->
    <section id="first">
    <div class="container">
        <div class="left">
            <h1>한평정원: <span>그린이집</span></h1>
            <p>저희 한평정원:그린이집은 대학혁신사업단체에서 지원하는 비영리 활동 단체입니다. <br> <br> <span>저희 한평정원:그린이집은 생활관내 유휴 공간을 활용해 환경친화적인 공간을 조성해 관생들에게 힐링 공간을 만들어드리는 것 뿐만이 아닌,
            여러가지 사업도 함께 진행하고 있습니다.</span></p>
            <br><br><br>
            <a href="contact.php" class="button" type="button">더 알아보기</a>
        </div>
        <div class="right">
            <img src="img/1a.png" alt="1a">
        </div>
    </div>
</section>


    <?php include('includes/db-con.php'); ?>
    <!-- NEW ARRIVALS SECTION -->
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
    <?php include('includes/admin-footer.html'); ?>
</body>

</html>