<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="112402組員">
    <meta name="description" content="虛擬世界的書架 提供使用者裡用平台了解投資工具並體驗!">
    <meta name="keywords" content="虛擬世界的書架">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>虛擬世界的書架</title>
    <!-- 連結CSS外部檔案 -->
    <link rel="stylesheet" href="Newstyle.css">
</head>

<body>

    <nav>
        <ul>
            <a href=""><img class="logop" src="images/LOGOP3.jpg"></a>
            <li>
                <a href="首頁.php">首頁</a>
            </li>
            <li>
                <a href="關於我們.php">關於我們</a>
            </li>
            <li>
                <a href="園區展示.php">展館園區</a>
            </li>
            <li>
                <a href="">問卷調查</a>
            </li>
            <li style="float: right; font-family: Andale Mono, monospace;">
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<div class="dropdown2">';
                    echo '<a href="index.php">' . $_SESSION['username'] . '</a>';
                    echo '<ul class="dropdown-content2">';
                    echo '<li><a href="logout.php">Log Out</a></li>';
                    // 可以加入其他下拉選單項目
                    echo '</ul>';
                    echo '</div>';
                } else {
                    echo '<a href="index.php">Log In</a>';
                }
                ?>
            </li>
            </ul>

            <div class="dropdown">
                <option class="dropbtn" style="font-weight: bold;">書籍類別</option>
                <div class="dropdown-content">
                    <a href="新股票.php">股票書籍</a>
                    <a href="新不動產.php">不動產書籍</a>
                    <a href="新虛擬貨幣.php">虛擬貨幣書籍</a>
                </div>
            </div>
    </nav>

    <hr class="hr1">
    <nav class="home">
      
      
    </nav>

</body>

</html>