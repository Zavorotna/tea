<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="body">
    <div class="fon"></div>
    <div class="box"></div>
        <div class="wrapper">
            <h1> Вітаємо у Tea-Bar</h1>
            <h2>Зробіть ваше замовлення</h2>
            <form class="form" action="second.php" method="post">
                <p>
                    <p>Виберіть сорт чаю</p>
                    <label for="sort"><input type='radio' name='sort' value='1' checked>Зелений чай (+2грн)</label>
                    <label for="sort"><input type='radio' name='sort' value='2'>Чорний чай (+3грн)</label>
                    <label for="sort"><input type='radio' name='sort' value='3'>Трав'яний чай (+4грн)</label>
                </p>
                <p>
                    Виберіть обєм води
                    <input type='range' name='water' value='50' min='50' max='1000' step='50' oninput='this.nextElementSibling.value = this.value'>
                    <input type='text' name='water' value='50' oninput='this.previousElementSibling.value = this.value'>
                </p>
                <p>
                    Виберіть кількість цукру ч.л
                    <input type='range' name='sugar' value='1' min='1' max='10' step='1' oninput='this.nextElementSibling.value = this.value'>
                    <input type='text' name='sugar' value='1' oninput='this.previousElementSibling.value = this.value'>
                </p>
                <p>
                    <p>Виберіть міцність</p>
                    <label for="time"><input type='radio' name='time' value='1' checked>Легкий</label>
                    <label for="time"><input type='radio' name='time' value='2'>Середній</label>
                    <label for="time"><input type='radio' name='time' value='3'>Міцний</label>
                </p>
                <p>Також оберіть</p>
                <label for='lime'><input type='checkbox' name='lime' value="з лимоном">Лимон (+5грн)</label>
                <label for='milk'><input type='checkbox' name='milk' value="з молоком">Молоко (+7грн)</label>
                <p><label for='street'><input type='radio' name='street' value="Чай з собою">Чай з собою</p></label>
                <p><label for='street'><input type='radio' name='street' value="Чай в кафе">Чай в кафе</p></label>
                <p><button class="button" type='submit'>Підтвердити</button></p>
            </form>
        </div>
  
</body>
</html>