<!--ADD PRODUCTS FORM, DONE BY FATIMA M. ALNASSER, 2190003750, CS MAJGOR LEVEL 8 GROUP 1.-->

<!--HTML & PHP Part-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>새로운 식물 추가</title>
    <link rel="stylesheet" type="text/css" href="admin-forms1.css?<?php echo time(); ?>">
    <!--LINK TO STYLESHEET-->
    <script type="text/javascript" src="admin-forms1.js"></script>
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
        <h2>새로운 식물 추가</h2>

    </header>
    <!--END OF HEADER-->

    <!--ADD FORM-->
    <div class="background">
        <form id="form" method="post" action="code_plant.php">
            <p>
                <label>식물 이름:</label>
                <input type="text" placeholder="식물 이름 입력" id="product_name" name="product_name" size="25"
                    autofocus><br>
                <small id="helpText1"></small>
            </p>

            <p>
                <label>종류:</label><br>
                <select name="category" id="category">
                    <option>Plants</option>
                </select><br>
                <small id="helpText2"></small>
            </p>

            <p>
                <label>수량:</label>
                <input type="number" placeholder="숫자 입력" id="product_stock" name="product_stock" step="1"><br>
                <small id="helpText3"></small>
            </p>

            <p>
                <label>식물 가격:</label>
                <input type="number" placeholder="가격 입력" id="product_price" name="product_price" min="1"
                    step="1"><br>
                <small id="helpText4"></small>
            </p>

            <p>
                <label> 이미지 1:</label>
                <input type="file" accept="image/*" id="product_pic1" name="product_pic1"><br>
                <small id="helpText5"></small>
            </p>

            <p>
                <label> 이미지 2:</label>
                <input type="file" accept="image/*" id="product_pic2" name="product_pic2"><br>
                <small id="helpText6"></small>
            </p>

            <p>
                <label> 이미지 3:</label>
                <input type="file" accept="image/*" id="product_pic3" name="product_pic3"><br>
                <small id="helpText7"></small>
            </p>

            <p>
                <label> 이미지 4:</label>
                <input type="file" accept="image/*" id="product_pic4" name="product_pic4"><br>
                <small id="helpText8"></small>
            </p>

            <p>
                <label> 이미지 5:</label>
                <input type="file" accept="image/*" id="product_pic5" name="product_pic5"><br>
                <small id="helpText9"></small>
            </p>

            <p>
                <label>설명: </label><br>
                <textarea name="product_desc" id="product_desc" cols="50" rows="5"
                    placeholder="식물에 대한 전반적인 설명 입력"></textarea><br>
                <small id="helpText10"></small>
            </p>
            <p>
                <label>습도: </label><br>
                <textarea name="product_humidity" id="product_humidity" cols="50" rows="5"
                    placeholder="좋아하는 습도 입력"></textarea><br>
                <small id="helpText11"></small>
            </p>
            <p>
                <label>햇빛: </label><br>
                <textarea name="product_light" id="product_light" cols="50" rows="5"
                    placeholder="좋아하는 햇빛 정도 입력"></textarea><br>
                <small id="helpText12"></small>
            </p>
            <p>
                <label>물 주는 양: </label><br>
                <textarea name="product_watering" id="product_watering" cols="50" rows="5"
                    placeholder="좋아하는 물 주는 양 입력"></textarea><br>
                <small id="helpText13"></small>
            </p>

            <div class="submit_area">
                <input type="submit" id="submit" value="추가" name="add_product">
                <input type="reset" id="reset" value="초기화">
            </div>
        </form>
        <!--END OF ADD FORM-->

    </div>


</body>
<!--END OF BODY-->

<!--PHP include statement for footer.-->
<?php include('includes/admin-footer.html');?>

</html>