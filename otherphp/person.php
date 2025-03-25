<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Person</title>

</head>

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
        justify-content: flex-start;
        align-items: start;
        flex-grow: 1;
        width: 100vw;
        height: auto;

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

    .name {
        height: 100%;
        width: 15%;
        background-color: rgb(68, 101, 122);
        position: fixed;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        top: 0px;
        padding-top: 3.5em;
        right: 0px;
        display: flex;
        flex-direction: column;
        border: 1px solid white;
        z-index: 100;




    }

    .name_info {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
    }

    #note {
        width: 80%;
        margin-top: 0.3em;


    }

    .some_info {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 0.5em;
        width: 70%;


        background-color: gray;
        border-radius: 20px;
        padding: 0.2em;

    }

    .name>img {
        width: 60%;
        height: auto;
        margin-top: 2em;
        border-radius: 10%;
        margin-bottom: 1em;

    }

    .intro {
        width: 100%;
        margin-top: 3.5em;
        background-color: white;
        animation: slidein 1s forwards;
        height: 75vh;
    }

    .introh2 {
        color: cadetblue;
        margin-top: 1em;
    }

    .intro_in {
        display: flex;
        flex-direction: column;
        width: 100%;
        align-items: center;
        justify-content: center;

        border-radius: 1em;

        height: 12em;

        transition: 0.8s;
    }

    .intro_change {
        margin-top: 6em;
        margin-bottom: 1em;
        margin-left: 1em;
        margin-right: 2em;
    }

    .intro_change {
        display: flex;
        justify-content: center;
        align-items: center;

        flex-direction: row;

    }

    .intro_in:hover {
        background-color: rgb(138, 191, 205);

    }

    .intro_in>img {
        width: 9em;
        height: 9em;
        border-radius: 1em;
        transition: 0.5s;
    }

    .intro_in>img:hover {
        width: 10em;
        height: 10em;
    }


    .intro_in_text {

        width: 7em;
        display: flex;
        flex-direction: column;
        width: 10em;
        align-items: center;

        justify-content: center;

        word-break: break-all;
        word-wrap: break-word;
    }

    .menu_right_all {
        width: 85%;

    }




    .team_change {
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .team_in {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 2em;
        margin-right: 3em;
        margin-left: 3em;

    }

    .team_img {
        margin-top: 2em;
        width: 8em;
        height: 8em;
        border-radius: 50%;
        transition: 0.5s;
    }

    .team_in>h3 {
        color: white;
    }

    .team_in>p {
        color: rgb(175, 221, 206);
    }

    .team_img:hover {
        width: 9em;
        height: 9em;
    }

    @media screen and (max-width: 1000px) {
        .intro_change {
            display: flex;
            flex-direction: column;
            margin: 2em;

        }

        .intro_change>a {
            width: 15em;
        }

        .menu_right_all {
            width: 70%;
        }

        .name {
            width: 30%;
        }


    }

    .intro_p {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* 設定顯示 3 行 */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .intro_change>a {
        margin-left: 0.5em;
        margin-right: 0.5em;
        width: 20em;
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
        color: rgb(233, 235, 230);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>

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
        <div class="logindiv"><button><a style="text-decoration:none;" href="./login.php">
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
            <form action="post">
                <div class="name">
                    <img src="../img/index_img/intro_in1.jpg" alt="">
                    <div class="name_info">
                        <div id="name" class="some_info">金彩原</div>

                        <div id="birth" class="some_info">
                            <p>2020/3/5</p>
                        </div>
                        <div id="heigh" class="some_info">160cm</div>
                        <div id="weight" class="some_info">45kg</div>

                        <p style="color:white;margin-top:0.5em">備註：</p>

                        <textarea name="note" id="note" cols="30" rows="10"></textarea>
                        <button type="submit">
                            備註送出
                        </button>

                    </div>
            </form>
        </div>

        <div class="menu_right_all">
            <div class="intro">
                <div class="intro_change">
                    <a href="./date.php" class="intro_a">
                        <div class="intro_in">
                            <img src="../img/Icon/icon1.png" alt="">
                            <div class="intro_in_text">
                                <h3>
                                    個人紀錄
                                </h3>

                            </div>
                        </div>
                    </a>
                    <a href="./map.php" class="intro_a" onclick="clearSession()">
                        <div class="intro_in">
                            <img src="../img/Icon/icon2.png" alt="">
                            <div class="intro_in_text">
                                <h3>
                                    診所資訊
                                </h3>

                            </div>
                        </div>
                    </a>
                    <a href="./evaluate.php" class="intro_a" onclick="clearSession()">
                        <div class="intro_in">
                            <img src="../img/Icon/icon3.png" alt="">
                            <div class="intro_in_text">
                                <h3>
                                    自我評估
                                </h3>
                            </div>
                        </div>
                    </a>
                    <a href="./chat.php" class="intro_a" onclick="clearSession()">
                        <div class="intro_in">
                            <img src="../img/Icon/icon4.png" alt="">
                            <div class="intro_in_text">
                                <h3>
                                    即時客服
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="footer">
                <h1 class="introh2">相關網站</h1>
                <p>
                <button class="btn" onclick="logout()">登出</button>
                </p>
            </div>
            <!-- <div class="footer">
                <h1 class="introh2">相關網站</h1>
                <p >
                   <a href="https://hl7.org/fhir/"></a>
                   </p>
            </div> -->
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
        });

        function logout() {
            
            let cookies = document.cookie.split(";");

            cookies.forEach(function (cookie) {
                let cookieName = cookie.split("=")[0].trim();
                document.cookie = cookieName + "=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
            });

            
            window.location.href = "../index.php";  
        }
        // document.addEventListener("DOMContentLoaded", function () {
        //     // 檢查是否有session
        //     function checkSession() {
        //         $.ajax({
        //             url: '../session_check.php',
        //             method: 'GET',
        //             success: function (response) {
        //                 if (!response.sessionActive) {
        //                     alert('您尚未登入，請先登入。');
        //                     window.location.href = "/Medical_Treatment/otherphp/login.php";
        //                 }
        //             },
        //             error: function () {
        //                 console.error('檢查 session 時出錯。');
        //             }
        //         });
        //     }
        //     checkSession();
        // });
    </script>
</body>

</html>