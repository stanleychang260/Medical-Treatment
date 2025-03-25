<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>輸入血糖及血壓</title>
    <link rel="stylesheet" href="../css/suger.css">
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
        top: 0px;
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
        display: flex;
        justify-content: center;
        align-items: start;
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
        ;
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

    .footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        height: 10em;
        color: #E9EBE6;
        background-color: #2D2E33;
        animation: slidein 1s forwards;
    }

    .footer>p {
        margin-top: 2em;
        width: 70%;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* 設定顯示 3 行 */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

.intro {
    background-color: rgb(201, 207, 193);
    width: 100%;
    height: 70vh;
    display: flex;
    flex-direction: column;
    animation: slidein 1s forwards;
    margin-top: 3.5em;
    align-items: center;
    padding-top: 2em;
    justify-content: center;
    text-align: center;
    padding-bottom: 2em;
}

/* 輸入血壓血糖 */
.input_h1 {
    margin-bottom: 2em;
    color: rgb(125, 160, 161);
}

.input_suger {

    display: flex;
    flex-direction: column;
    max-width: 70%;
    justify-content: center;
    align-items: center;
    background-color: rgb(119, 133, 128);
    border-radius: 2em;
    box-shadow: 0.2em 0.2em 0.2em;
}

.input_suger>button {
    width: 5em;
    font-size: 20px;
    background-color: rgb(234, 177, 138);
    transition: 1s;
    margin-bottom: 1em;
    border: none;
    border-radius: 1em;
}

.input_suger>button:hover {
    background-color: rgb(251, 151, 70);
    font-size: 22px;
    color: white;
    cursor: pointer;

}
.footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 10em;
        color: #E9EBE6;
        background-color: #2D2E33;
        animation: slidein 1s forwards;
    }

    .footer>p {
        margin-top: 2em;
        width: 70%;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* 設定顯示 3 行 */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .footer>p>a {
        color:rgb(233, 235, 230);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
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
            <div style="
                display: flex;
                flex-grow: 1;
                   flex-direction:column;
                 
                   align-items: center;
                ">
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
                        <p style="color: white;">個人頁面</p>
                    </button></a>
            </div>
        </div>

        <div id="menuright">
            <div style="flex-grow: 1;">
                <form id="Blood_Data_Form" action="../Deliver_Blood_Data_to_Table.php" method="post">
                    <input type="hidden" name="date" id="date">
                    <div class="intro">
                        <div class="input_h1">
                            <h1>紀錄數值</h1>
                            <h1 id="displayDate">2023/01/01</h1>
                        </div>
                        <div class="input_suger">
                            <div class="input_str">
                                <h2>血壓</h2>
                                <input type="text" name="pressure" id="stress" class="input_num"
                                    placeholder="100(mmHg)">
                            </div>
                            <div class="input_str">
                                <h2>血糖</h2>
                                <input type="text" name="sugar" id="suger" class="input_num" placeholder="100(mg/dl)">
                            </div>
                            <button type="submit" id="sub">送出</button>
                        </div>
                    </div>
                </form>
                <script>
                    window.onload = function () {
                        const urlParams = new URLSearchParams(window.location.search);
                        const dateParam = urlParams.get('date');
                        console.log("Received date:", dateParam);
                        if (dateParam) {
                            document.getElementById('date').value = dateParam;
                            document.getElementById('displayDate').innerText = dateParam;
                        }
                    };
                </script>
                <div class="footer">
                    <h1 class="introh2">相關網站</h1>
                    <p >
                   <a href="https://hl7.org/fhir/">https://hl7.org/fhir/</a>
                   </p>
                </div>
            </div>


        </div>
    </div>

    <script>
        var i = new Boolean(false)
        var menu = document.getElementById("menu")
        var menuleft = document.getElementById("menuleft")
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
            if (menuleft.style.display == "block") {
                menuleft.style.display = "none";
                i = true;
            }
        }, true);
        menu.style.cursor = 'pointer';
        menu.addEventListener("click", function () {

            if (menuleft.style.display === "block") {
                menuleft.style.display = "none"

                i = true;
            } else {
                menuleft.style.display = "block"

                i = false;
            }

        }, true);

        $(document).ready(function () {
            $(function () {
                var page_heig = $(document).scrollTop(); /* 初始化。用于第一次获取滚动条的高度 */
                var header = $('.header').outerHeight(); /* 获取该元素的高度 */

                $(window).scroll(function () {
                    /* 滚动条触发事件 */
                    var real_heig = $(document).scrollTop(); /* 事件触发后获取滚动条高度 */

                    if (real_heig > header) {
                        /* 触发后的高度 与 元素的高度对比 */
                        $('.header').addClass('hide'); /* True 添加隐藏属性 */
                    } else {
                        $('.header').removeClass('hide'); /* False 删除隐藏属性 */
                    }

                    if (real_heig < page_heig) {
                        /* 触发后的高度 与 上次触发后的高度 */
                        $('.header').removeClass('hide'); /* True 删除隐藏属性 */
                    }
                    page_heig = $(document).scrollTop(); /* 再次获取滚动条的高度，用于下次触发事件后的对比 */
                });
            });

            $("#Blood_Data_Form").submit(function (event) {
                var stressValue = $("#stress").val();
                var sugerValue = $("#suger").val();
                if (isNaN(parseInt(stressValue)) || isNaN(parseInt(sugerValue))) {
                    event.preventDefault();
                    alert("您輸入的資料並非阿拉伯數字，請重新輸入!");
                    window.location.href = "/Medical_Treatment/otherphp/sugar.php?date=" + $("#date").val();
                }
                else if (parseInt(stressValue) <= 0 || parseInt(sugerValue) <= 0) {
                    event.preventDefault();
                    alert("您輸入的資料小於或等於0，請重新輸入!");
                    window.location.href = "/Medical_Treatment/otherphp/sugar.php?date=" + $("#date").val();
                }
                else if (parseInt(stressValue) >= 1000) {
                    event.preventDefault();
                    alert("您輸入的血壓資料不符合現實，請重新輸入!");
                    window.location.href = "/Medical_Treatment/otherphp/sugar.php?date=" + $("#date").val();
                }
                else if (parseInt(sugarValue) >= 3000) {
                    event.preventDefault();
                    alert("您輸入的血糖資料不符合現實，請重新輸入!");
                    window.location.href = "/Medical_Treatment/otherphp/sugar.php?date=" + $("#date").val();
                }
            });
        });
    </script>


</body>

</html>