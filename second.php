<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="fon"></div>
    <form action="second.php" method="post">
        <input type="hidden" name="water" value="<?php echo($choise) ?>">
        <input type="hidden" name="sugar" value="<?php echo($sugar) ?>">
        <input type="hidden" name="time" value="<?php echo($time) ?>">
        <input type="hidden" name="lime" value="<?php echo($lime) ?>">
        <input type="hidden" name="street" value="<?php echo($tea) ?>">
        <input type="hidden" name="sort" value="<?php echo($sort) ?>">
        <input type="hidden" name="milk" value="<?php echo($milk) ?>">
    </form>
    <?php
        if($_POST) {
            $choise = $_POST["water"];
            $sugar = $_POST["sugar"];
            $time = $_POST["time"];
            $sort = $_POST["sort"];
            if(isset($_POST["street"])) {
                $tea = $_POST["street"];
            }
            if(isset($_POST["milk"])) {
                $milk = $_POST["milk"];
            }
            if(isset($_POST["lime"])) {
                $lime = $_POST["lime"];
            }
            if (isset($_POST["choise"])) {
                $tea = $_POST["choise"];
            }
    ?>
    <div class="box"></div>
    <div class="flex wrapper">
            <div class="list">
                <?php
                echo "<h2>Чек</h2>";
                echo "<p>Ваше замовлення</p>";
                if (isset($lime)) {
                    echo "<p>Чай з лимоном</p>";
                } else {
                    echo "<p>Чай бeз лимону</p>";
                }
                if (isset($milk)) {
                    echo "<p>Чай з молоком</p>";
                } else {
                    echo "<p>Чай бeз молока</p>";
                }
                echo '
                <p>Вода мл = "'.$choise.'"</p>
                <p>Цукор л = "'.$sugar.'"</p>
                Міцність =
                ';
                if ($time == 1) {
                    echo "Легкий";
                } else if ($time == 2) {
                    echo "Середній";
                } else {
                    echo "Міцний";
                }
                echo '<p>Сорт = ';
                if ($sort == 1) {
                    echo "Зелений чай";
                } else if ($sort == 2) {
                    echo "Чорний чай";
                } else {
                    echo "Трав'яний чай";
                }
                $cup = 250;
                $price = 15;
                if ($choise < $cup) {
                    $price += 10;
                } else if ($choise == $cup) {
                    $price += 15;
                } else if ($choise > $cup) {
                    $price += 20;
                }
                if (isset($lime)) {
                    $price +=5;
                } else if(isset($milk)) {
                    $price +=7;
                }
                if ($sort == 1) {
                    $price += 2;
                    echo "<p>Вартість грн $price</p>";
                } else if ($sort == 2) {
                    $price += 3;
                    echo "<p>Вартість грн $price</p>";
                } else if ($sort == 3) {
                    $price += 4;
                    echo "<p>Вартість грн $price</p>";
                } else {
                    echo "<p>Вартість грн $price</p>";
                }
            }
            ?>
            <a class="button" href="index.php">Повернутись до замовлення</a>
            </div>
            <div class="tea">
                <?php
                echo "<h1><i>Чайник закипів</i></h1>";
                if($choise > $cup || $choise < $cup || $choise == $cup) {
                    for ($choise; $choise >= 0; $choise -= $cup){
                        if($choise >= $cup || $choise <= $cup || $choise == $cup) {
                            for($i = 50; $i <= $cup && $i <= $choise; $i += 50) {
                                echo "<p class='water'>Налито $i мл води</p>";
                                $sugarSecond = round((50*$sugar/$choise)*5, 2);
                                $timeLeft = round(($time*50/$choise)*5, 1);
                            }
                            if ($choise <= $cup) {
                                $time = $time*$choise/$cup;
                                $sugar = $sugar*$choise/$cup;
                                echo "<p><i>Заварюємо $time хв</i></p>";
                                echo "<p><i>Кидаємо $sugar ч/л</i></p>";
                            } else {
                                if ($tea == "Чай з собою") {
                                    echo "<h3>Стаканчик повний</h3>";
                                } else {
                                    echo "<h3>Чашка повна</h3>";
                                }
                                $sugarSecond = round((50*$sugar/$choise)*5, 2);
                                $timeLeft = round(($time*50/$choise)*5, 2);
                                $time -= $timeLeft;
                                $sugar -= $sugarSecond;
                                echo "<p><i>Заварюємо $timeLeft хв</i></p>";
                                echo "<p><i>Кидаємо $sugarSecond ч/л</i></p>";
                                if ($tea == "Чай з собою") {
                                    echo "<p><i><b>Беремо наступний стаканчик</b></i></p>";
                                } else {
                                    echo "<p><i><b>Беремо наступну чашку</b></i></p>";
                                }
                            }

                        }
                    }
                }
                if (isset($milk)) {
                    echo "<p><i>Налито молоко!</i></p>";
                }
                if (isset($lime)) {
                    echo "<p><i>Лимончик додано!</i></p>";
                }
                echo "<p><b>Вода закінчилася!</b></p>";
                echo "<p><b><i>Ваше замовлення готове! Приємного чаювання!</i></b></p>";
                ?>
            </div>
        </div>
</body>
</html>