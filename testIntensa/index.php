<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/normalize.min.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
        <form class="form" action="components/result.php" method="post">
            <input id="name" class="input" class= "" name="name" placeholder="Введите ваше ФИО">
            <input id="email" class="input" name="mail" type="email" placeholder="Введите email">
	        <input id="number" class="input" name="number" placeholder="Введите номер телефона">
            <select class="select" name="city" id="city">
                <option value="Москва">Москва</option>
                <option value="Санкт-Петербург">Санкт-Петербург</option>
                <option value="Тула">Тула</option>
            </select>
	        <input class="submit disabled" type="submit" disabled>
        </form>
        </div>
    </div>   
   


<script src="scripts/script.js"></script>
</body>
</html>