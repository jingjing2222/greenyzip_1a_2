//ADMIN FORMS VALIDATION. DONE BY FATIMA M. ALNASSER, 2190003750, CS MAJGOR LEVEL 8 GROUP 1.
var product_name;
var product_price;
var product_stock;
var product_desc;
var category;
var product_pic1;
var product_pic2;
var product_pic3;
var product_pic4;
var product_pic5;

var helpText1;
var helpText2;
var helpText5;
var helpText6;
var helpText7;
var helpText8;
var helpText9;
var helpText10;


function init() {
    var form = document.getElementById("form");
    product_name = document.getElementById("product_name");
    product_desc = document.getElementById("product_desc");
    category = document.getElementById("category");
    product_pic1 = document.forms['form']['product_pic1'];
    product_pic2 = document.forms['form']['product_pic2'];
    product_pic3 = document.forms['form']['product_pic3'];
    product_pic4 = document.forms['form']['product_pic4'];
    product_pic5 = document.forms['form']['product_pic5'];

    helpText1 = document.getElementById("helpText1");
    helpText2 = document.getElementById("helpText2");
    helpText5 = document.getElementById("helpText5");
    helpText6 = document.getElementById("helpText6");
    helpText7 = document.getElementById("helpText7");
    helpText8 = document.getElementById("helpText8");
    helpText9 = document.getElementById("helpText9");
    helpText10 = document.getElementById("helpText10");


    form.onsubmit = check;
    form.onreset = func2;
} // end function init

function check() {
    var pass = "";

    if (product_name.value == "") {
        pass = "*식물 이름은 필수입니다. 기입해주세요.<br/>";
        helpText1.innerHTML = pass;
        return false;
    }

    if (category.value == "") {
        pass = "*카테고리는 필수입니다. <br/>";
        helpText2.innerHTML = pass;
        return false;
    }

    if (product_pic1.value == "") {
        pass = "*이미지1은 필수입니다. 기입해주세요.<br/>";
        helpText5.innerHTML = pass;
        return false;
    }

    if (product_pic2.value == "") {
        pass = "*이미지2는 필수입니다. 기입해주세요.<br/>";
        helpText6.innerHTML = pass;
        return false;
    }

    if (product_pic3.value == "") {
        product_pic3.value = "image/noimage.png";
    }

    if (product_pic4.value == "") {
        product_pic4.value = "image/noimage.png";
    }

    if (product_pic5.value == "") {
        product_pic5.value = "image/noimage.png";
    }

    if (product_desc.value == "") {
        pass = "*설명은 필수입니다. 기입해주세요.<br/>";
        helpText10.innerHTML = pass;
        return false;
    }
}

function func2() {
    return confirm("초기화 하시겠습니까?");
}

window.addEventListener("load", init, false);


