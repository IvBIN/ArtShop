<?php
session_start();
require "../php/db.php";
$item = select('SELECT * FROM products WHERE id = :id',['id' => $_GET['id']]);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $item[0]['title'] ?></title>
</head>
<body>
<?php require "../moduls/header.php"?>
<div class="item">
    <img class="img" src="data:image/png;base64,<?= $item[0]['cover'] ?>" alt="">
    <span class="price">Цена, ₽: <?= $item[0]['price'] ?></span>
    <span class="title">Название: <b><?= $item[0]['title'] ?></b></span>
    <span class="year">Год создания: <b><?= $item[0]['year'] ?></b></span>
    <span class="author">Автор: <b><?= $item[0]['author'] ?></b></span>
    <span class="desc">Описание: <i><?= $item[0]['description'] ?></i></span>
    <pre class="count">Количество: <b><?= $item[0]['count'] ?></b></pre>
    <form class="btn" action="../php/add_cart.php" method="post">
        <input class="btn_sub" type="text" value="<?php echo $_GET['id'] ?>" name="id_item" style="display: none">
        <input class="btn_name" type="submit" value="Купить">
    </form>
</div>
<style>
    .item{
        display: grid;
        width: 1150px;
        margin: 20px auto;
        font-family: 'Arial', sans-serif;
        grid-template-areas: "img title" "img year" "img author" "img desc" "img count" "price btn";
        /*background: #deb5f1;*/
        padding-bottom: 20px;
        padding-top: 20px;
        padding-left: 20px;
        border-radius: 5px;

        background-color: #DEB5F1FF;
        background-image: -webkit-repeating-radial-gradient(circle,
        #e6d3b4, #d0a2e7 50%, #DEB5F1FF 100%
        );
        background-image: repeating-radial-gradient(circle,
        #e6d3b4, #D0A2E7FF 50%, #DEB5F1FF 100%
        );
        background-size: 10px 10px;

    }
    .img{
        grid-area: img;
        background: #cecdcd;
        max-width: 250px;
        border: 10px double rgba(98, 86, 71, 0.75);
        box-shadow: 0 5px 14px rgba(0, 0, 0, 0.15);
    }
    .price{
        margin-top: 20px;
        grid-area: price;
        font-weight: bold;
        margin-left: 20px;
        font-size: 20px;
    }
    .title{
        grid-area: title;
        font-size: 24px;
        color: #04047AFF;
    }
    .year{
        grid-area: year;
        font-size: 20px;
    }
    .author{
        grid-area: author;
        font-size: 20px;
    }
    .desc{
        grid-area: desc;
        font-size: 20px;
    }
    .count{
        grid-area: count;
        font-size: 20px;
        font-family: 'Arial', sans-serif;
    }
    .btn{
        grid-area: btn;
        text-align: center;
        /*height: 40px;*/
        /*width: 80px;*/
        /*color: green;*/

    }
    /*.btn_sub{*/
    /*color: green;*/
    /*}*/
    .btn_name{
        font-size: 15px;
        font-weight: 700;
        height: 40px;
        width: 100px;
        color: darkmagenta;
        border: 2px solid darkmagenta;
        border-radius: 5px;
        box-shadow: 0 5px 14px rgba(0, 0, 0, 0.15);
        background: #EED2E0F4;
    }
    .btn_name:active,
    .btn_name:hover{
        background: #9660B4FF;
        color: white;
        border: 1px solid #9660B4FF;
        transition: .3s;
    }
</style>
</body>
</html>
