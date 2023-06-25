<link rel="stylesheet" href="../assets/styles/header.css">
<header>
    <div class="container">
        <a href="<?php if ($_SERVER['REQUEST_URI'] !='/'): echo '../'; else: echo './'; endif; ?>"><img class="logo" src="../assets/images/Logo021.png" alt="logo"></a>
        <form class="search" method="get">
            <input type="text" placeholder="Поиск">
            <input type="submit" value="Найти">
        </form>
        <a href="<?php if ($_SERVER['REQUEST_URI'] !='/'):
            echo './products.php';
        else:
            echo './pages/products.php';
        endif; ?>" class="products">Товары</a>
        <a href="<?php if ($_SERVER['REQUEST_URI'] !='/'):
            echo './add_product.php';
        else:
            echo './pages/add_product.php';
        endif; ?>" class="add_product">Добавить товар</a>

        <a href="<?php if (!empty($_SESSION['user_id'])):
            if ($_SERVER['REQUEST_URI'] !='/'):
                echo './profile.php?id='.$_SESSION['user_id'];
            else:
                echo './pages/profile.php?id='.$_SESSION['user_id'];
            endif;
        else:
            if ($_SERVER['REQUEST_URI'] !='/'):
                echo './auth.php';
            else:
                echo './pages/auth.php';
            endif;
        endif;?>">
            <img class="profile" src="../assets/images/avatar01.png" alt="profile">
        </a>
    </div>
</header>
