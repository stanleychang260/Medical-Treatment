<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>個人記錄日期</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../css/date.css">
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

    html {
        width: 100vw;
        height: 100vh;
    }

    body {
        width: 100vw;
        height: 100vh;
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

    /**------------------calendar */
    .intro {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        margin-top: 3.5em;
        margin-bottom: 2em;
        width: 100%;
        height: auto;
    }

    .year_change {
        cursor: pointer;
        margin-left: 2em;
        margin-right: 2em;
        transition: 1s;
    }


    .month_change {
        margin-left: 2em;
        margin-right: 2em;
        cursor: pointer;
    }

    .calendar_header {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin-top: 2em;
        font-size: 25px;
        height: auto;
        color: rgb(220, 235, 239);
    }


    .calendar {
        width: 70%;
        height: auto;

        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        background-color: rgb(202, 233, 239);
        animation: slidein 1s forwards;
        padding-top: 1em;
        border-radius: 3em;
        text-align: center;

    }

    .year_picker {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: center;
    }

    .calendar_week {
        margin-top: 0.2em;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        margin-bottom: 1em;

        gap: 1em;


    }

    .calendar_week_day {
        padding-top: 0.2em;
        margin-right: 2.3em;
        margin-left: 2.3em;

    }

    .calendar_date {
        display: grid;
        height: auto;
        margin-bottom: 1em;
        grid-template-columns: repeat(7, 1fr);
        gap: 1em;
    }

    .calendar_date>div {
        padding-top: 0.2em;
        margin-right: 0.3em;
        margin-left: 0.3em;
        background-color: antiquewhite;
        width: 5em;
        height: 5em;
        display: flex;
        flex-direction: column;

        transition: 1s;
    }

    .calendar_date>div:hover {
        background-color: rgb(121, 154, 220);
        color: white
    }

    .calendar_hover .curr_date {
        background-color: rgb(218, 218, 218);
    }

    .hover_color {
        color: rgb(182, 168, 42);
    }

    .sugar_and_stress {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;

    }

    @media screen and (min-width:1080px) {
        /* .calendar_date>div {
        gap: 0.1em;
        margin-left: 0.3em;
        margin-right: 0.3em;
        width: 4.8em;
    } */

        /* .calendar_date {
        gap: 0.2em;
    } */
        .calendar_week_day {
            margin-left: 2.3em;
            margin-right: 2.3em;
        }

    }

    @media screen and (max-width:1080px) {
        .calendar_date>div {
            gap: 0.1em;
            margin-left: 0.3em;
            margin-right: 0.3em;
            width: 4.8em;
        }

        .calendar_date {
            gap: 0.2em;
        }

        .calendar_week {
            gap: 0.05em;
        }

        .calendar_week_day {
            padding-top: 0.2em;
            margin-right: 2.2em;
            margin-left: 2.2em;

        }


    }

    @media screen and (max-width:950px) {
        .calendar_date>div {
            gap: 0.05em;
            margin-left: 0.1em;
            margin-right: 0.1em;
            width: 4.8em;
        }

        .calendar_date {
            gap: 0.2em;
        }

        .calendar_week_day {
            padding-top: 0.2em;
            margin-right: 2em;
            margin-left: 2em;

        }
    }

    @media screen and (max-width:880px) {
        .calendar_date>div {
            gap: 0.05em;
            margin-left: 0.1em;
            margin-right: 0.1em;
            width: 3.8em;
        }

        .calendar_date {
            gap: 0.2em;
        }

        .calendar_week_day {
            padding-top: 0.2em;
            margin-right: 1.6em;
            margin-left: 1.6em;

        }
    }

    @media screen and (max-width:715px) {
        .calendar_date>div {
            gap: 0.05em;
            margin-left: 0.1em;
            margin-right: 0.1em;
            width: 3.8em;
        }

        .calendar {
            width: 90%;
        }

        .calendar_date {
            gap: 0.2em;
        }

        .calendar_week_day {
            padding-top: 0.2em;
            margin-right: 1.6em;
            margin-left: 1.6em;

        }
    }

    @media screen and (max-width:560px) {
        .calendar_date>div {
            gap: 0.05em;
            margin-left: 0.1em;
            margin-right: 0.1em;
            width: 3em;
        }

        .calendar {
            width: 98%;
        }

        .calendar_date {
            gap: 0.2em;
        }

        .calendar_week_day {
            padding-top: 0.2em;
            margin-right: 1.15em;
            margin-left: 1.15em;

        }
    }

    @media screen and (max-width:430px) {
        .calendar_date>div {
            gap: 0.05em;
            margin-left: 0.1em;
            margin-right: 0.1em;
            width: 3em;

        }

        .calendar {
            width: 98%;
            border-radius: none;
        }

        .calendar_date {
            gap: 0.2em;
        }

        .calendar_week_day {
            padding-top: 0.2em;
            margin-right: 1.15em;
            margin-left: 1.15em;

        }
    }

    #chart-container {
        width: 100vw;
        height: 100vh;
        position: relative;
    }

    canvas {
        width: 100%;
        height: 100%;
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
                        <p style="color: white;">個人頁面</p>
                    </button></a>
            </div>
        </div>

        <div id="menuright">
            <div class=""></div>
            <div style="flex-grow: 1;">
                <div class="intro">
                    <div class="calendar_header">
                        <div class="year_picker" id="year_picker">
                            <span class="year_change" id="prev_year">
                                <pre><</pre>
                            </span>
                            <span id="year">2020</span>
                            <span class="year_change" id="next_year">
                                <pre>></pre>
                            </span>
                        </div>

                        <div class="year_picker">
                            <span class="month_change" id="prev_month">
                                <pre><</pre>
                            </span>
                            <span class="month_picker">february</span>
                            <span class="month_change" id="next_month">
                                <pre>></pre>
                            </span>
                        </div>
                    </div>

                    <div class="calendar">
                        <div class="calendar_week">
                            <div class="calendar_week_day">日</div>
                            <div class="calendar_week_day">一</div>
                            <div class="calendar_week_day">二</div>
                            <div class="calendar_week_day">三</div>
                            <div class="calendar_week_day">四</div>
                            <div class="calendar_week_day">五</div>
                            <div class="calendar_week_day">六</div>
                        </div>
                        <div class="calendar_date">
                        </div>
                    </div>
                </div>

                <div class="chart-container">
                    <canvas id="bloodDataChart"></canvas>
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

    <script>
        function clearSession() {
            sessionStorage.clear();
        }
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
        const month_names = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"]

        //閏月
        isLeapYear = (year) => {
            return (year % 4 === 0 && year % 100 != 0 && year % 400 != 0) || (year % 100 === 0 && year % 400 === 0)
        }

        getFebDays = (year) => {
            return isLeapYear(year) ? 29 : 28
        }

        //將日期調整為YYYY-MM-DD
        function formatDate(date) {
            let d = new Date(date),
                month = '' + (d.getMonth() + 1),
                day = '' + d.getDate(),
                year = d.getFullYear();
            if (month.length < 2) month = '0' + month;
            if (day.length < 2) day = '0' + day;
            return [year, month, day].join('-');
        }

        generateCalendar = (month, year) => {
            let calendar_date = document.querySelector(".calendar_date");
            let calendar_header_year = document.getElementById("year");
            let month_picker = document.querySelector(".month_picker");
            let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

            let currDate = new Date();
            if (month === undefined) month = currDate.getMonth();
            if (year === undefined) year = currDate.getFullYear();

            let curr_month = month_names[month];

            calendar_header_year.innerHTML = year;
            month_picker.innerHTML = curr_month;

            calendar_date.innerHTML = "";

            let first_day = new Date(year, month, 1);

            let bloodPressureData = [];
            let bloodSugarData = [];
            let labels = [];

            for (let i = 0; i < days_of_month[month] + first_day.getDay(); i++) {
                let day = document.createElement("div");
                if (i >= first_day.getDay()) {
                    let dayDate = i - first_day.getDay() + 1;
                    let dateStr = formatDate(new Date(year, month, dayDate));

                    day.classList.add("calendar_hover");
                    day.innerHTML = dayDate;

                    $.ajax({
                        url: '../Get_Blood_Pressure_and_Sugar.php',
                        type: 'POST',
                        data: { date: dateStr },
                        dataType: 'json',
                        success: function (data) {
                            let bloodPressure = data.blood_pressure ? data.blood_pressure : '0';
                            let bloodSugar = data.blood_sugar ? data.blood_sugar : '0';

                            day.innerHTML += `
                    <a href="./sugar.php?date=${dateStr}">
                        <hr style="color:white;">
                        <div class="sugar_and_stress">
                            <div id="sugar" class="hover_color">${bloodSugar}</div>
                            <div id="stress" class="hover_color">${bloodPressure}</div>
                        </div>
                        <span></span>
                    </a>`;

                            if (dayDate === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                                day.classList.add("curr_date");
                            }

                            bloodPressureData.push(bloodPressure);
                            bloodSugarData.push(bloodSugar);
                            labels.push(dayDate);

                            if (i === days_of_month[month] + first_day.getDay() - 1) {
                                generateChart(bloodPressureData, bloodSugarData, labels);
                            }
                        },
                        error: function () {
                            day.innerHTML += `
                    <a href="./sugar.php?date=${dateStr}">
                        <hr style="color:white;">
                        <div class="sugar_and_stress">
                            <div id="sugar" class="hover_color">N/A</div>
                            <div id="stress" class="hover_color">N/A</div>
                        </div>
                        <span></span>
                    </a>`;

                            bloodPressureData.push('0');
                            bloodSugarData.push('0');
                            labels.push(dayDate);

                            if (i === days_of_month[month] + first_day.getDay() - 1) {
                                generateChart(bloodPressureData, bloodSugarData, labels);
                            }
                        }
                    });

                    day.addEventListener("click", function () {
                        let dateStr = formatDate(new Date(year, month, dayDate));

                        $.ajax({
                            url: '../Deliver_Blood_Data_to_Table.php',
                            type: 'POST',
                            data: { date: dateStr },
                            success: function (response) {
                                console.log(response);
                            },
                            error: function (xhr, status, error) {
                                console.log(error);
                            }
                        });
                    });
                }
                calendar_date.appendChild(day);
            }
        }


        let next_month = document.querySelector("#next_month");
        let prev_month = document.getElementById("prev_month");
        let next_year = document.getElementById("next_year")
        let prev_year = document.getElementById("prev_year")
        let currDate = new Date()
        let curr_month = { value: currDate.getMonth() };
        let curr_year = { value: currDate.getFullYear() };
        generateCalendar(curr_month.value, curr_year.value)

        prev_month.onclick = () => {
            --curr_month.value
            if (curr_month.value < 0) {
                curr_month.value = 11;
                --curr_year.value;
            }
            generateCalendar(curr_month.value, curr_year.value)
        }

        next_month.onclick = () => {
            ++curr_month.value
            if (curr_month.value > 11) {
                curr_month.value = 0;
                ++curr_year.value;
            }
            generateCalendar(curr_month.value, curr_year.value)
        }

        prev_year.onclick = () => {
            --curr_year.value
            generateCalendar(curr_month.value, curr_year.value)
        }

        next_year.onclick = () => {
            ++curr_year.value
            generateCalendar(curr_month.value, curr_year.value)
        }

        window.onload = function () {
            generateCalendar(curr_month.value, curr_year.value);
        };

        let bloodDataChart;

        const generateChart = (bloodPressureData, bloodSugarData, labels) => {
            const ctx = document.getElementById('bloodDataChart').getContext('2d');
            if (bloodDataChart) {
                bloodDataChart.destroy();
            }
            bloodDataChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: '血壓',
                            data: bloodPressureData,
                            backgroundColor: 'rgba(2255, 255, 255, 1)',
                            borderColor: 'rgba(255, 255, 255, 1)',
                            borderWidth: 1,
                            fill: false,
                        },
                        {
                            label: '血糖',
                            data: bloodSugarData,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1,
                            fill: false,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true,
                        },
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
        };
        window.onload = function () {
            generateCalendar(curr_month.value, curr_year.value);
        };
    </script>

</body>

</html>