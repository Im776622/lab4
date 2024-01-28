<!DOCTYPE html>
<html lang="ru">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Лабораторная работа №4</title>
</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Лабораторная работа №4</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">

                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
        <h1 class="mt-5">Определить наибольшую выручку от продажи трех видов товаров</h1>

        <form action="" method="post">
            <div class="form-group">
                <label for="priceProduct1">Цена товара 1, руб:</label>
                <input type="text" class="form-control" id="priceProduct1" name="priceProduct1" required>
                <label for="quantityProduct1">Количество товара 1:</label>
                <input type="text" class="form-control" id="quantityProduct1" name="quantityProduct1" required>
            </div>

            <div class="form-group">
                <label for="priceProduct2">Цена товара 2, руб:</label>
                <input type="text" class="form-control" id="priceProduct2" name="priceProduct2" required>
                <label for="quantityProduct2">Количество товара 2:</label>
                <input type="text" class="form-control" id="quantityProduct2" name="quantityProduct2" required>
            </div>

            <div class="form-group">
                <label for="priceProduct3">Цена товара 3, руб:</label>
                <input type="text" class="form-control" id="priceProduct3" name="priceProduct3" required>
                <label for="quantityProduct3">Количество товара 3:</label>
                <input type="text" class="form-control" id="quantityProduct3" name="quantityProduct3" required>
            </div>

            <button type="submit" class="btn btn-primary">Рассчитать</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Получаем значения из формы для каждого вида товара
            $priceProduct1 = floatval($_POST['priceProduct1']);
            $quantityProduct1 = intval($_POST['quantityProduct1']);

            $priceProduct2 = floatval($_POST['priceProduct2']);
            $quantityProduct2 = intval($_POST['quantityProduct2']);

            $priceProduct3 = floatval($_POST['priceProduct3']);
            $quantityProduct3 = intval($_POST['quantityProduct3']);

            // Рассчитываем выручку от каждого вида товара
            $revenueProduct1 = $priceProduct1 * $quantityProduct1;
            $revenueProduct2 = $priceProduct2 * $quantityProduct2;
            $revenueProduct3 = $priceProduct3 * $quantityProduct3;

            // Находим максимальную выручку
            $maxRevenue = max($revenueProduct1, $revenueProduct2, $revenueProduct3);

            // Выводим результат
            echo '<div class="mt-3 alert alert-success" role="alert">';
            echo 'Наибольшая выручка: ' . number_format($maxRevenue, 2) . ' руб.';
            echo '</div>';
        }
        ?>
    </main>

    <footer class="footer">
    </footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
