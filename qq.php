<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea - приготування чаю</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper sell">
    <?php
        $sugar = $_POST["sugar"];
        $teaStrong = $_POST["teaStrong"];
        $water = $_POST["water"];
        $lemon = $_POST["lemon"];
        $cup = $_POST["cup"];
        $waterHands = $_POST["waterHands"];
        echo "<h1>Ваше замовлення:</h1>";
        echo "<h3>$water мл чаю</h3>";
        echo "<h3>$sugar ч.л. цукру</h3>";
        echo "<h3>$teaStrong хвилини пекетик чаю у воді на 250мл</h3>";
        if($waterHands == 250){
            echo "<br><p>Чайник закипів</p>";
        }else if($waterHands == 50){
            echo "<br><p>Чайник не закипів</p>";
        }
        if($waterHands == 50){
            for ($i = 50; $i <= $water; $i+=50){
                echo "Наставляйте руку!";
                echo "<p class='water'>Налито 50 мл води</p>";
                $sugarCount2 = round($sugarCount2 = $sugar*50/$water, 2);
                echo "<p class='green'>Рука повна</p>";
                echo "<p class='sugar'>Кидаємо $sugarCount2 ч.л. цукру</p>";
                $teaStrongHand = $teaStrong*100/250;
                echo "<p class='sugar'>Опускаємо чайний пакетик на $teaStrongHand хв</p>";
                echo "<p>Розмішуємо</p>";
                if($lemon == "yes"){
                    echo "<h2 class='lemon'>Додаємо лемончик!</h2>";
                }
                // if($water > 50){
                // echo "<h2>Бистро пийте і наставляйте другу руку!</h2><br>";
                // }if(){
                // echo "готово!";
                // }
            }
        }else{
    
            for($i = 50; $i <= $water && $i <= 250; $i+=50){
                echo "<p class='water'>Налито $i мл води</p>";
            }
            if($water >= 250){
                echo "<p class='green'>Кружка повна</p>";
        }else if($water < 250){
            echo "<p class='green'>Вода закінчилась</p>";
        }
        if($water <= 250){
            echo "<p class='sugar'>Кидаємо $sugar ч.л. цукру</p>";
        }else if($water > 250){
            $sugarCount = round($sugarCount = $sugar*250/$water, 2);
            echo "<p class='sugar'>Кидаємо $sugarCount ч.л. цукру</p>";
        }
        if($water == 250){
            echo "<p class='sugar'>Опускаємо чайний пакетик на $teaStrong хв</p>";
        }else if($water > 250){
            $teaLeft = 250*$teaStrong/250;
            echo "<p class='sugar'>Опускаємо чайний пакетик на $teaLeft хв</p>";
        }else if($water < 250){
            $teaLeft1 = $water*$teaStrong/250;
            echo "<p class='sugar'>Опускаємо чайний пакетик на $teaLeft1 хв</p>";
        }
        echo "<p>Розмішуємо</p>";
        if($lemon == "yes"){
            echo "<h2 class='lemon'>Додаємо лемончик!</h2>";
        }
        echo "<p>Кружка чаю готова!</p>";
        if($water > 250){
            for ($waterLeft = $water; $waterLeft >= 1; $waterLeft-=250){
                if($water >= 250){
                    echo "<p class='green'>Беремо наступу кружку</p>";
                    $waterLeft=$water-=250;
                    for($i = 50; $i <= $waterLeft & $i <= 250; $i+=50){
                        echo "<p class='water'>Налито $i мл води</p>";
                    }
                    if($waterLeft >= 250){
                        echo "<p class='green'>Кружка повна</p>";
                    }else if($waterLeft < 250){
                        echo "<p class='green'>Вода закінчилась</p>";
                    }
                    if($waterLeft >= 250){
                        echo "<p class='sugar'>Кидаємо $sugarCount ч.л. цукру</p>";
                    }elseif($waterLeft < 250){
                        $sugarCount1 = round($sugarCount1 = $waterLeft*$sugarCount/250, 2);
                        echo "<p class='sugar'>Кидаємо $sugarCount1 ч.л. цукру</p>";
                    }
                    $teaLeftStrong = $waterLeft*$teaStrong/250;
                    if($waterLeft >= 250){
                        echo "<p class='sugar'>Опускаємо чайний пакетик на $teaStrong хв <br></p>";
                    }else if($i <= 250){
                        $teaLeft = $waterLeft*$teaStrong/250;
                        echo "<p class='sugar'>Опускаємо чайний пакетик на $teaLeft хв</p> <br>";
                    }
                }
                echo "<p>Розмішуємо</p>";
                if($lemon == "yes"){
                    echo "<h2 class='lemon'>Додаємо лемончик!</h2>";
                }
            }
        }
    }
        echo "<h2 class='green'>Смачного чаювання!</h2>";
    ?>
    <a href="index.php">На головну</a>
</div>
</body>
</html>