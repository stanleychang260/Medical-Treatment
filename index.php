<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">

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

    /* 播放照片 */
    .carousel {

        width: 80%;
        margin: 0 auto;
        position: relative;
        margin-top: 0;
        overflow-y: hidden;
        overflow-x: hidden;
    }

    .carousel img {
        width: 100%;
        display: block;
        overflow-y: hidden;
    }

    .progress_container {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .progress-bar {
        width: 40%;
        height: 5px;
        background-color: #ddd;
        position: relative;

    }

    .progress {
        width: 0;
        height: 100%;
        background-color: rgb(79, 214, 199);
        transition: 0.5s;

    }


    @media screen and (max-width: 1000px) {
        .carousel {
            height: 28em;
        }
    }

    @media screen and (max-width: 700px) {
        .carousel {
            height: 20em;
        }
    }

    .intro {
        width: 100%;
        height: 50vh;
        background-color: white;
        animation: slidein 1s forwards;
    }

    .introh2 {
        color: cadetblue;
        margin-top: 1em;
    }

    .intro_in {
        display: flex;
        width: 90%;
        height: 20em;
        align-items: center;
        justify-content: center;

        border-radius: 2em;
        width: 92%;
        height: 12em;
        margin-top: 2em;
        margin-bottom: 2em;
        margin-left: 2em;
        margin-right: 2em;
        transition: 0.8s;
    }

    .intro_change {
        display: flex;
        justify-content: center;
        align-items: center;
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
        align-items: flex-start;
        padding-left: 1em;
        word-break: break-all;
        word-wrap: break-word;
    }

    @media screen and (max-width:1220px)and(min-width: 1000px) {
        .intro_in>img {
            width: 7em;
            height: 7em;
        }

        .intro_in>img:hover {
            width: 8em;
            height: 8em;
        }

        .intro_in {
            margin: 0px;
            width: 20em;
        }

        .team_img {
            width: 7em;
            height: 7em;
        }
    }

    @media screen and (max-width: 1000px) {
        .intro_change {
            display: flex;
            flex-direction: column;

        }

        .intro_in {
            width: 25em;
            margin: 3px;
        }

        .team_in {
            margin-bottom: 1em;
        }
    }

    .team {
        width: 100%;
        height: 50vh;
        color: #2D2E33 animation: slidein 1s forwards;
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

    .team_in_p {
        color: #2D2E33;
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
        .team_change {
            display: flex;
            flex-direction: column;
        }

        .team_in {
            margin-bottom: 0em;
        }
    }

    .intro_p {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* 設定顯示 3 行 */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* .carousel_img img {
        width: 100%;
        display: none;
        
    }

    .carousel_img img.active {
        display: block;
        
    } */

    /* 圖片翻轉 */
    .flip-card {
        background-color: transparent;
        width: 200px;
        height: 200px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card.fliped .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }

    .flip-card-front {
        color: black;
    }

    .flip-card-back {
        transform: rotateY(180deg);
    }

    .flip-btn {
        text-align: center;
        width: 100px;
        height: 30px;
        line-height: 30px;
        background: #000;
        color: #DDD;
        border-radius: 5px;
        margin-top: 5px;
        cursor: pointer;
    }

    .flip-btn:hover {
        background: #666;
    }
</style>

<body>
    <div class="header">
        <div id="menu">
            <img class="menuimg" src="./img/menu.svg" alt="">
        </div>
        <div class="logodiv">
            <a href="./index.php"><img src="./img/logo.png" width="50"></a>
        </div>
        <div class="menutext">
            <h3 style="color:rgb(119, 133, 128);">e起來e療</h3>
        </div>
        <div class="logindiv"><button><a style="text-decoration:none;" href="./otherphp/login.php">
                    <p style="color: white;font-size: 1.2em;">login</p>
                </a></button></div>
    </div>
    <?php
    include ('Create_Database.php');
    if (isset($_COOKIE['user_id'])) {
        // 刪除 'user_id' 這個 cookie
        setcookie('user_id', '', time() - 3600, '/');  // 設置過期時間為過去，實現刪除

        // 如果有其他與用戶登錄相關的 cookie 需要刪除，也可以一併刪除
        setcookie('another_cookie_name', '', time() - 3600, '/');
    }
    ?>
    <div class="div1">
        <!-- /* 隱藏側邊欄 */ -->
        <div id="menuleft">
            <div class="menuheader">
                <div id="menu">
                    <img class="menuimg" src="./img/menu.svg" alt="">
                </div>
                <div class="logodiv">
                    <a href="./index.php"><img src="./img/logo.png" width="50"></a>
                </div>
            </div>
            <div style="
                display: flex;
                flex-grow: 1;
                   flex-direction:column;
                 
                   align-items: center;
                ">
                <a style="text-decoration: none;" href="./index.php">
                    <button class="menuitem">
                        <p style="color: white;">首頁</p>
                    </button></a>
                <a style="text-decoration: none;" href="./otherphp/date.php">
                    <button class="menuitem">
                        <p style="color: white;">個人紀錄</p>
                    </button></a>
                <a style="text-decoration: none;" href="./otherphp/map.php">
                    <button class="menuitem">
                        <p style="color: white;">診所資訊</p>
                    </button></a>
                <a style="text-decoration: none;" href="./otherphp/evaluate.php">
                    <button class="menuitem">
                        <p style="color: white;">自我評估</p>
                    </button></a>
                <a style="text-decoration: none;" href="./otherphp/chat.php">
                    <button class="menuitem">
                        <p style="color: white;">即時客服</p>
                    </button></a>
                <a style="text-decoration: none;" href="./otherphp/cart.php">
                    <button class="menuitem">
                        <p style="color: white;">醫療用品</p>
                    </button></a>
            </div>
        </div>
        <div id="menuright">
            <div style="flex-grow: 1;">
                <div class="carousel">
                    <div><img src="./img/index_img/carousel/img1.jpg" alt="圖片1"></div>
                    <div><img src="./img/index_img/carousel/img2.jpg" alt="圖片2"></div>
                    <div><img src="./img/index_img/carousel/img3.jpg" alt="圖片3"></div>
                    <div><img src="./img/index_img/carousel/img4.jpg" alt="圖片4"></div>
                    <div><img src="./img/index_img/carousel/img5.jpg" alt=""></div>
                    <div><img src="./img/index_img/carousel/img6.jpg" alt=""></div>
                </div>
                <div class="progress_container">
                    <div class="progress-bar">
                        <div class="progress"></div>
                    </div>
                </div>
                <div class="team">
                    <div style="display:flex; justify-content:center">
                        <h1 class="introh2">團隊成員</h1>
                    </div>
                    <div class="team_change">
                        <div class="team_in">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./img/施景和.jpg" alt="Avatar" style="width:100%;height:100%;">
                                    </div>
                                    <div class="flip-card-back">
                                        <img src="./img/index_img/intro_in1.jpg" alt="Avatar"
                                            style="width:100%;height:100%;">
                                    </div>
                                </div>
                            </div>
                            <h3>施景瀚</h3>
                        </div>
                        <div class="team_in">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./img/張凱哨.jpg" alt="Avatar" style="width:100%;height:100%;">
                                    </div>
                                    <div class="flip-card-back">
                                        <img src="./img/廖成好.jpg" alt="Avatar" style="width:100%;height:100%;">
                                    </div>
                                </div>
                            </div>
                            <h3>張凱紹</h3>
                        </div>
                        <div class="team_in">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./img/廖成好.jpg" alt="Avatar"
                                            style="width:100%;height:100%;overflow:hidden">
                                    </div>
                                    <div class="flip-card-back">
                                        <img src="./img/index_img/intro_in1.jpg" alt="Avatar"
                                            style="width:100%;height:100%;">
                                    </div>
                                </div>
                            </div>
                            <h3>廖辰皓</h3>
                        </div>
                        <div class="team_in">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="./img/蔡珮婷.jpg" alt="Avatar" style="width:100%;height:100%;">
                                    </div>
                                    <div class="flip-card-back">
                                        <img src="./img/index_img/intro_in1.jpg" alt="Avatar"
                                            style="width:100%;height:100%;">
                                    </div>
                                </div>
                            </div>
                            <h3>蔡珮婷</h3>
                        </div>
                        <div class="team_in">
                            <div class="flip-card">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front">
                                        <img src="img\講冠翔.jpg" alt="Avatar" style="width:100%;height:100%;">
                                    </div>
                                    <div class="flip-card-back">
                                        <img src="./img/index_img/intro_in1.jpg" alt="Avatar"
                                            style="width:100%;height:100%;">
                                    </div>
                                </div>
                            </div>
                            <h3>蔣冠翔</h3>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <h1 class="introh2">相關網站</h1>
                    <p>
                        <a href="https://hl7.org/fhir/">https://hl7.org/fhir/</a>
                    </p>

                </div>
            </div>
        </div>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        //翻轉照片
        $(document).ready(function () {
            $('.flip-card').on('click', function () {
                $(this).toggleClass('fliped');
            });

            $('.flip-card').on('mouseleave', function () {
                $(this).removeClass('fliped');
            });

        });
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
        //播放照片
        $(document).ready(function () {
            var $carousel = $('.carousel');
            var $progressBar = $('.progress');
            var slideCount = null;

            $carousel.on('init', function (event, slick) {
                slideCount = slick.slideCount;
                updateProgressBar(0);
            });

            $carousel.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                updateProgressBar(nextSlide);
            });

            $carousel.slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true,
                autoplay: true,
                autoplaySpeed: 2000,
            });

            function updateProgressBar(index) {
                var progressPercentage = (index / (slideCount)) * 100;
                $progressBar.css('width', progressPercentage + '%');
            }
        });
    </script>

</body>

</html>