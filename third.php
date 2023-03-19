<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Повернутись до замовлення</a>
    <form action="third.php" method="post">
        <input type="hidden" name="water" value="<?php echo($choise) ?>">
        <input type="hidden" name="sugar" value="<?php echo($sugar) ?>">
        <input type="hidden" name="time" value="<?php echo($time) ?>">
        <input type="hidden" name="lime" value="<?php echo($lime) ?>">
        <input type="hidden" name="street" value="<?php echo($tea) ?>">
        <button type="submit">sub</button>
    </form>
    <?php
        if($_POST) {
            $choise = $_POST["water"];
            $sugar = $_POST["sugar"];
            $time = $_POST["time"];
            if(isset($_POST["lime"])) {
                $lime = $_POST["lime"];
            }
            if (isset($_POST["choise"])) {
                $tea = $_POST["choise"];
            }
            echo "<p>Ваше замовлення</p>";
            if (isset($lime)) {
                echo "<p>Чай з лимоном</p>";
            } else {
                echo "<p>Чай бeз лимону</p>";
            }
            if (isset($tea)) {
                echo "<p>$tea</p>";
            }
            echo '
            <p>Вода мл = "'.$choise.'"</p>
            <p>Цукор л = "'.$sugar.'"</p>
            <p>Міцність = 
            ';
            if ($time == 1) {
                echo "Легкий";
            } else if ($time == 2) {
                echo "Середній";
            } else {
                echo "Міцний";
            }
            echo "<p>Чайник закипів</p>";
        }
        $cup = 250;
        $sugarSecond = round(($sugar*50/$choise)*5, 2);
        if ($choise <= $cup) {
            for($i = 0 && $choise = $choise -= 50; $i <= $cup && $i <= $choise; $i += 50) {
                echo "<p>Налито $i мл води</p>";
            }
            if ($choise <= $cup) {
                $time = $time*$choise/$cup;
                echo "<p>Заварюємо $time хв</p>";
                echo "<p>кидаємо $sugar ч/л</p>";
            }
        }
        $timeLeft = round(($time*50/$choise)*5, 1);
        $time -= $timeLeft;
        $sugarSecond = round(($sugar*50/$choise)*6, 1);
        $sugar -= $sugarSecond;
        if ($choise > $cup) {
            for($i = 0 && $choise = $choise -= 50; $i <= $cup && $i <= $choise; $i += 50) {
                echo "<p>Налито $i мл води</p>";
            }
            echo "<p>Заварюємо $timeLeft хв</p>";
            echo "<p>Кидаємо $sugarSecond ч/л</p>";
            echo "<p>Чашка повна</p>";
            echo "<p>Беремо наступу чашку</p>";
        }
        if($choise > $cup) {
            for ($water = $choise; $water >= 0; $water -= $cup){
                if($choise >= $cup){
                    $sugarSecond = round((50*$sugar/$choise)*6, 1);
                    $sugar -= $sugarSecond;
                    $timeLeft = round(($time*50/$choise)*5, 1);
                    $time -= $timeLeft;
                    $water = $choise -= $cup;
                    for($i = 50; $i <= $water & $i <= $cup; $i+=50){
                        echo "<p class='water'>Налито $i мл води</p>";
                    }
                    echo "<p>Чашка повна</p>";
                    echo "<p>Заварюємо $timeLeft хв</p>";
                    echo "<p>Кидаємо $sugarSecond ч/л</p>";
                    echo "<p>Беремо наступу чашку</p>";
                }
            }
        }
        echo "<p>Ваше замовлення готове! Приємного чаювання!</p>";
    ?>
</body>
</html>