<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>CART</title>
    <link rel="stylesheet" href="../css/cart.css">
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



        /*-------------------------*/
        .cart {
            font-size: 18px;
            right: 1em;

        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
            margin-top: 3.8em;
        }

        .product-item {
            border: 1px solid #ddd;
            padding: 10px;
            width: 220px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .product-item:hover {
            transform: translateY(-5px);
        }

        .product-item img {
            max-width: 100%;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .product-item h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .product-item button {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            width: 100%;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .product-item button:hover {
            background-color: #444;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);

        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #cart-items {
            margin-top: 20px;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .cart-item img {
            max-width: 50px;
            margin-right: 10px;
        }

        .cart-item-details {
            flex-grow: 1;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .cart-item button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .cart-item-quantity button {
            background-color: #000;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .cart-item-quantity input {
            width: 40px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
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
        <div class="cart">
            <a href="#" id="cart-button"><img src="../img/cart.svg" alt=""> (<span id="cart-count">0</span>)</a>
        </div>
    </div>
    <main>
        <div class="product-list">
            <!-- Products will be dynamically loaded here -->
        </div>
    </main>
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
        <div style="flex-grow: 1;">
            <div id="cart-modal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Shopping Cart</h2>
                    <div id="cart-items">
                        <!-- Cart items will be dynamically loaded here -->
                    </div>
                </div>
            </div>

            <div class="footer">
                <h1 class="introh2">相關網站</h1>
                <p >
                   <a href="https://hl7.org/fhir/">https://hl7.org/fhir/</a>
                   </p>
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

                        $('.header').removeClass('hide'); /* True 删除隐藏属性 */
                    }
                    page_heig = $(document).scrollTop(); /* 再次获取滚动条的高度，用于下次触发事件后的对比 */
                });
            });
            var products = [
                { id: 1, name: "耳溫槍", price: 780, image: "../img/cart/1.jpeg" },
                { id: 2, name: "膠片補充包", price: 230, image: "../img/cart/2.jpeg" },
                { id: 3, name: "紅外線耳溫槍", price: 900, image: "../img/cart/3.jpeg" },
                { id: 4, name: "血氧機", price: 600, image: "../img/cart/4.jpeg" },
                { id: 5, name: "體重機", price: 630, image: "../img/cart/5.jpeg" },
                { id: 6, name: "建強體重機", price: 420, image: "../img/cart/6.jpeg" },
                { id: 7, name: "熱敷袋", price: 790, image: "../img/cart/7.jpeg" },

                { id: 8, name: "睡眠眼罩", price: 400, image: "../img/cart/8.jpeg" },
                { id: 9, name: "熱敷墊", price: 200, image: "../img/cart/9.jpeg" },
                { id: 10, name: "支架", price: 100, image: "../img/cart/10.jpeg" },
                { id: 11, name: "醫療箱", price: 150, image: "../img/cart/11.jpeg" },
                { id: 12, name: "手腕帶", price: 1000, image: "../img/cart/12.jpeg" },
            ];

            var cart = [];

            function loadProducts() {
                var productContainer = $('.product-list');
                productContainer.empty();
                $.each(products, function (index, product) {
                    var productItem = `
                        <div class="product-item">
                            <img src="${product.image}" alt="${product.name}">
                            <h3>${product.name}</h3>
                            <p>$${product.price}</p>
                            <button data-id="${product.id}">Add to Cart</button>
                        </div>
                    `;
                    productContainer.append(productItem);
                });
            }

            function updateCartCount() {
                $('#cart-count').text(cart.length);
            }

            function renderCartItems() {
                var cartContainer = $('#cart-items');
                cartContainer.empty();
                $.each(cart, function (index, item) {
                    var cartItem = `
                        <div class="cart-item">
                            <img src="${item.image}" alt="${item.name}">
                            <div class="cart-item-details">
                                <span>${item.name} - $${item.price}</span>
                                <div class="cart-item-quantity">
                                    <button class="decrease" data-id="${item.id}">-</button>
                                    <input type="text" value="${item.quantity}" readonly>
                                    <button class="increase" data-id="${item.id}">+</button>
                                </div>
                            </div>
                            <button class="remove" data-id="${item.id}">Remove</button>
                        </div>
                    `;
                    cartContainer.append(cartItem);
                });
            }

            $(document).on('click', '.product-item button', function () {
                var productId = $(this).data('id');
                var product = products.find(p => p.id === productId);
                var cartItem = cart.find(item => item.id === productId);
                if (cartItem) {
                    cartItem.quantity++;
                } else {
                    cart.push({ ...product, quantity: 1 });
                }
                updateCartCount();
                alert('Product added to cart: ' + product.name);
            });

            $(document).on('click', '#cart-button', function () {
                $('#cart-modal').show();
                renderCartItems();
            });

            $(document).on('click', '.close', function () {
                $('#cart-modal').hide();
            });

            $(document).on('click', '.remove', function () {
                var productId = $(this).data('id');
                cart = cart.filter(item => item.id !== productId);
                updateCartCount();
                renderCartItems();
            });

            $(document).on('click', '.increase', function () {
                var productId = $(this).data('id');
                var cartItem = cart.find(item => item.id === productId);
                cartItem.quantity++;
                renderCartItems();
            });

            $(document).on('click', '.decrease', function () {
                var productId = $(this).data('id');
                var cartItem = cart.find(item => item.id === productId);
                if (cartItem.quantity > 1) {
                    cartItem.quantity--;
                } else {
                    cart = cart.filter(item => item.id !== productId);
                }
                renderCartItems();
                updateCartCount();
            });

            loadProducts();

        });
    </script>


</body>

</html>