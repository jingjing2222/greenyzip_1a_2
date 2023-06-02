<!--EDIT PRODUCTS FORM, DONE BY FATIMA M. ALNASSER, 2190003750, CS MAJGOR LEVEL 8 GROUP 1.-->

<!--HTML & PHP Part-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>활동 수정</title>
    <link rel="stylesheet" type="text/css" href="admin-forms2.css">
    <script type="text/javascript" src="admin-forms2.js"></script>
    <!--LINK TO STYLESHEET-->
</head>

<!--BODY-->

<body>

    <!--HEADER-->
    <header>

        <!--BACK BUTTON-->
        <button class="back_button">
            <a href="admin.php"><img src="img/back.png" alt="Back Button" width="25px" height="25px"></a>
        </button>

        <!--FORM TITLE-->
        <h2>활동 수정</h2>
    </header>
    <!--END OF HEADER-->

    <!--PHP code to retrive data from the database.-->
    <?php
        include('includes/db-con.php'); //Database Connection
        if(isset($_POST['edit_button']))
        {
            $id = $_POST['edit_id'];
            $query = "SELECT * FROM products WHERE PID ='$id'";
            $query_run = mysqli_query($conn, $query);
            foreach($query_run as $row)
            {
                ?>

    <div class="background">
        <form method="post" id="form" action="code_works.php" enctype="multipart/form-data">
            <p>
                <input type="hidden" placeholder="식물의 ID를 입력해주세요" id="product_ID"  name="product_ID" size="25"
                    value="<?php echo $row['PID'];?>">

                <label>활동 이름:</label>
                <input type="text" placeholder="식물의 이름을 입력해주세요" id="product_name" name="product_name" size="25"
                    value="<?php echo $row['PName'];?>" autofocus> <br>
                <small id="helpText1"></small>
            </p>

            <p>
                <label>종류:</label>
                <select name="category" id="category">
                    <option Value="Works"> Works</option>
                </select>
                <small id="helpText2"></small>
            </p>


            <p><label> 이미지 1 선택:</label>
                <input type="file" accept="image/*" id="product_pic1" name="product_pic1" value="<?php echo $row['Pic1'];?>"><br>
                <span><?php echo " ".$row['Pic1'];?></span>
                <small id="helpText5"></small>
            </p>

            <p><label> 이미지 2 선택:</label>
                <input type="file" accept="image/*" id="product_pic2" name="product_pic2" value="<?php echo $row['Pic2'];?>"><br>
                <span><?php echo " ".$row['Pic2'];?></span>
                <small id="helpText6"></small>
            </p>

            <p><label> 이미지 3 선택:</label>
                <input type="file" accept="image/*"  id="product_pic3" name="product_pic3" value="<?php echo $row['Pic3'];?>"><br>
                <span><?php echo " ".$row['Pic3'];?></span>
                <small id="helpText7"></small>
            </p>

            <p><label> 이미지 4 선택:</label>
                <input type="file" accept="image/*" id="product_pic4" name="product_pic4" value="<?php echo $row['Pic4'];?>"><br>
                <span><?php echo " ".$row['Pic4'];?></span>
                <small id="helpText8"></small>
            </p>

            <p><label> 이미지 5 선택:</label>
                <input type="file" accept="image/*" id="product_pic5" name="product_pic5" value="<?php echo $row['Pic5'];?>"><br>
                <span><?php echo " ".$row['Pic5'];?></span>
                <small id="helpText9"></small>
            </p>

            <p>
                <label>설명: </label><br>
                <textarea name="product_desc" id="product_desc"cols="50" rows="5"><?php echo $row['P_Description'];?></textarea><br>
                <small id="helpText10"></small>

            </p>

            <div class="submit_area">
                <input type="submit" id="submit" value="업데이트" name="update">
            </div>
        </form>
        <!--END OF ADD FORM-->
        <?php
            }
        }                   
    ?>
    </div>
</body>
<!--END OF BODY-->

<!--PHP include statement for footer.-->
<?php include('includes/admin-footer.html');?>

</html>