<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>自我評估</title>
    <link rel="stylesheet" href="../css/evaluate.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

a {
    text-decoration: none;
    color: black;
}

body {
    width: 100vw;

    background-color: rgb(201, 207, 193);
}

.header {
    display: flex;
    width: 100vw;
    height: 3.5em;
    z-index: 10000;
    top: 0;
    background-color: rgb(233, 235, 230);
    box-shadow: 0.3em;
    overflow-x: hidden;
    transition: top 0.5s;
    position: fixed;

}

.hide {
    top: -60px;
}

#menu {
    height: 100%;
    width: 3em;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(170, 170, 170);
}

.menuimg {
    width: 60%;
}


.logodiv {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 3em;
    margin-left: 2em;
    height: 100%;
    margin-right: 2em;
}

.logop {
    font-size: 2em;
}

.menutext {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 2em;
}

.menutext>p {
    font-size: 1.2em;
}

.logindiv {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    flex-grow: 1;
    margin-right: 3em;
}

.logindiv>button {
    width: 6em;
    height: 80%;
    border-radius: 0.5em;
    background-color: rgb(57, 93, 81);
    border: none;
}

.div1 {
    display: flex;

}

#menuleft {
    height: 100vh;
    width: 11em;
    background-color: rgba(215, 215, 215, 0.752);

    display: none;
    animation: slidein 0.3s forwards;
    z-index: 100000;
    position: fixed;
    left: 0px;



}

.menuheader {
    display: flex;
    background-color: rgb(233, 235, 230);
    height: 3.5em;
}

@keyframes slidein {
    from {
        transform: translateX(-100%);

    }

    to {
        transform: translateX(0%);
    }
}


#menuright {
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items:center;
    flex-grow: 1;

}
button {
    width: 5em;
    height: 3em;
    margin-left: 1em;
    margin-right: 1em;
}

input {
    width: 100%;
}

@media screen and (max-width: 650px) {
    .menutext {
        display: none;
    }
}

.menuitem {
    width: 9em;
    height: 3em;
    margin-top: 3em;
    background-color: rgb(189, 184, 154);
    border-radius: 0.5em;
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
    transition: 0.5s;
}

.menuitem:hover {
    background-color: rgb(175, 200, 176);
    width: 9.8em;
}



.intro

{
    width: 100%;
    height: auto;
    margin-top: 4em;
    display: flex;
    flex-direction: column;
    justify-self: start;
    align-items: center;
    padding-bottom: 2em;
}
.input_h1
{
    margin-top: 2em;
}
.check_box
{
   display: grid;
   gap: 20px;
justify-content: center;
    max-width: 70%;
    min-width: 70%;
   
    background-color: rgb(119, 133, 128);
    border-radius: 2em;
    padding: 1em;
    margin-top: 2em;
}
.check{
    display: flex;
    align-items: center;
    justify-content: center;
}

.check_item
{
    padding: 10px;
    text-align: center;
    background-color: white;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
    width: 8em;
    height: 5em;
    border: none;
    cursor: pointer;
    transition: 0.5s;

}
.check_item:hover
{
    
    width: 8.5em;
}
@media (min-width: 1080px) {
    .check_box {
        grid-template-columns: repeat(5, 1fr);
    }
}

/* 当屏幕宽度小于 1080px 时，每行有三个按钮 */
@media (max-width: 1080px) {
    .check_box {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 610px) {

    .check_box {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 370px) {

    .check_box {
        grid-template-columns: repeat(1, 1fr);
    }
}

.check>button>p{
    font-size: 16px;
}
#submitBtn
{
    padding: 10px;
    text-align: center;
    background-color: rgb(57, 93, 81);
    color: white;
    justify-content: center;
    align-items: center;
    border-radius: 1em;
    width: 8em;
    height: 5em;
    border: none;
    cursor: pointer;
    transition: 0.5s;

}
#submitBtn:hover
{
width: 8.5em;
}

.symptom
{
    width: 100vw;
    height: auto;
    display: flex;
    flex-direction: row;
    text-align: center;
    justify-content: center;
    align-items: flex-start;
}
.symptom_check
{
    margin-top: 2em;
    display: grid;
    grid-template-columns: repeat(5,1fr);
}
li
{
    font-size: large;
}
        /* 添加自定义样式 */
       li
       {
        width: auto;
        height: auto;
        margin: 10px;
        font-size: 40px;
        background-color:rgb(146, 190, 190);
        border-radius: 0.2em;
        padding: 3px;
       }
       #possibleDiseases
       {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap

       }
       
    </style>
</head>

<body>
<div class="header">
        <div id="menu">
            <img class="menuimg" src="../img/menu.svg" alt="">
        </div>
        <div class="logodiv">
            <a href="../index.php"><img src="../img/logo.png" width="50"></a>
        </div>
        <div class="menutext">
            <h3 style="color:rgb(119, 133, 128);">e起來e療</h3>
        </div>
        <div class="logindiv"><button><a style="text-decoration:none;" href="./otherphp/login.php">
                    <p style="color: white;font-size: 1.2em;">login</p>
                </a></button></div>
    </div>
   
    <div class="div1">
         <!-- /* 隱藏側邊欄 */ -->
        <div id="menuleft">
            <div class="menuheader">
                <div id="menu">
                    <img class="menuimg" src="../img/menu.svg" alt="">
                </div>
                <div class="logodiv">
                <a href="../index.php"><img src="../img/logo.png" width="50"></a>
                </div>
            </div>
            <div style="display: flex; flex-grow: 1; flex-direction: column; align-items: center;">
                <a style="text-decoration: none;" href="date.php">
                    <button class="menuitem">
                        <p style="color: white;">個人紀錄</p>
                    </button></a>
                <a style="text-decoration: none;" href="map.php">
                    <button class="menuitem">
                        <p style="color: white;">診所資訊</p>
                    </button></a>
                <a style="text-decoration: none;" href="evaluate.php">
                    <button class="menuitem">
                        <p style="color: white;">自我評估</p>
                    </button></a>
                <a style="text-decoration: none;" href="chat.php">
                    <button class="menuitem">
                        <p style="color: white;">即時客服</p>
                    </button></a>
                <a style="text-decoration: none;" href="cart.php">
                    <button class="menuitem">
                        <p style="color: white;">醫療用品</p>
                    </button></a>
                <a style="text-decoration: none;" href="person.php">
                    <button class="menuitem">
                        <p style="color: white;">登出</p>
                    </button></a>
            </div>
        </div>

        <div id="menuright">
            <div style="flex-grow: 1;">
                <div>
                    <form action="" method="post" onclick="return false">
                        <div class="intro">
                            <div class="input_h1">
                                <h1>症狀自我評估</h1>
                            </div>
                            <div class="check_box">
                                <div class="check">
                                    <button class="check_item">
                                        <p>頭痛.頭暈</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>耳鳴</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>呼吸困難</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>發燒</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>疲勞.疲倦</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>感冒</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>頭痛</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>掉頭髮</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>眼睛乾</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>飛蚊症</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>鼻塞流鼻水</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>口腔潰瘍</p>
                                    </button>
                                </div>
                                <div class="check">
                                    <button class="check_item">
                                        <p>喉嚨痛</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="selectedSymptoms" id="selectedSymptoms">
                    </form>
                </div>
                <h1 style="margin-left:20px" >您可能有以下疾病</h1>
                <div class="symptom">
                
                    
                       
                        <ul id="possibleDiseases"></ul>
                   
                </div>

                
            </div>
        </div>
    </div>

    <script>
        var isMenuEnlarged = false;
        $("#menu").hover(
            function () {
                if (!isMenuEnlarged) {
                    $(".menuimg").css("width", "80%");
                    isMenuEnlarged = true;
                }
            },
            function () {
                if (isMenuEnlarged) {
                    $(".menuimg").css("width", "70%");
                    isMenuEnlarged = false;
                }
            }
        );

        document.addEventListener("click", function () {
            var menuleft = document.getElementById("menuleft");
            if (menuleft.style.display == "block") {
                menuleft.style.display = "none";
            }
        }, true);

        $("#menu").click(function () {
            var menuleft = document.getElementById("menuleft");
            if (menuleft.style.display === "block") {
                menuleft.style.display = "none";
            } else {
                menuleft.style.display = "block";
            }
        });

        $(document).ready(function () {
            var buttonStates = [];
            var selectedSymptoms = [];

            $(".check_item").each(function (index) {
                buttonStates[index] = false; // 初始化按钮状态
            });

            $(".check_item").click(function () {
                var index = $(this).parent().index();
                var button = $(this);

                if (buttonStates[index]) {
                    button.css("background-color", "white");
                    buttonStates[index] = false;
                    selectedSymptoms.splice(selectedSymptoms.indexOf(button.text().trim()), 1);
                } else {
                    button.css("background-color", "lightblue");
                    buttonStates[index] = true;
                    selectedSymptoms.push(button.text().trim());
                }

                updateSelectedSymptoms();
                displayPossibleDiseases();
            });

            function updateSelectedSymptoms() {
                $("#selectedSymptoms").val(selectedSymptoms.join(', '));
            }

            function displayPossibleDiseases() {
                var diseases = [
                    "感冒", "偏頭痛", "耳部感染", "哮喘", "腸胃炎",
                    "流感", "糖尿病", "高血壓", "乾眼症", "甲狀腺疾病",
                    "花粉症", "抑鬱症", "貧血", "脫髮", "口腔潰瘍"
                ];

                var randomDiseases = [];
                var diseaseCount = Math.min(diseases.length, selectedSymptoms.length * 2); // 随机选择最多 2n 个疾病
                for (var i = 0; i < diseaseCount; i++) {
                    var randomIndex = Math.floor(Math.random() * diseases.length);
                    if (!randomDiseases.includes(diseases[randomIndex])) {
                        randomDiseases.push(diseases[randomIndex]);
                    }
                }

                $("#possibleDiseases").empty();
                randomDiseases.forEach(function (disease) {
                    $("#possibleDiseases").append('<li>' + disease + '</li>');
                });
            }

            $("#submitBtn").click(function () {
                updateSelectedSymptoms();
                displayPossibleDiseases();
            });
        });
    </script>
</body>

</html>
