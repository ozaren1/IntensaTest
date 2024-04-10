<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/normalize.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">

    <div class="result">
        <ul>
            <li>Имя</li>
            <li>Почта</li>
            <li>Номер телефона</li>
            <li>
                <select class="filter-city" name="filter-city" id="filter-city">
                    <option value="Город">Город</option>
                    <option value="Москва">Москва</option>
                    <option value="Санкт-Петербург">Санкт-Петербург</option>
                    <option value="Тула">Тула</option>
                </select>
            </li>
        </ul>
        <?php
        	$host = 'localhost'; // имя хоста
        	$user = 'root';      // имя пользователя
        	$pass = '';          // пароль
        	$name = 'testIntensa';      // имя базы данных

        	$link = mysqli_connect($host, $user, $pass, $name);
        	mysqli_query($link, "SET NAMES 'utf8'");

            $inpName=$_POST['name'];
            $inpMail=$_POST['mail'];
            $inpNumber=$_POST['number'];
            $inpCity=$_POST['city'];
            $flag=false;

            if (!empty($_POST)) {
                $query = "SELECT * FROM form";
                $result = mysqli_query($link, $query) or die(mysqli_error($link));
                for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
                if (!empty($data)) {
                    foreach ($data as $elem) {
                        if($elem['email']!==$inpMail and $inpNumber!==$elem['number']){
                            $flag=true;
                        }else{
                            $flag=false;
                        }
                    }
                    if($flag===true){
                        $query = "INSERT INTO form (name, email, number, city) VALUES ('$inpName', '$inpMail', '$inpNumber','$inpCity')     ";
                        mysqli_query($link, $query) or die(mysqli_error($link));
                        $flag=false;
                    }
                }else{
                    $query = "INSERT INTO form (name, email, number, city) VALUES ('$inpName', '$inpMail', '$inpNumber','$inpCity')";
                    mysqli_query($link, $query) or die(mysqli_error($link));
                } 


        	}


            $query = "SELECT * FROM form";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));
            for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
            if (!empty($data)) {
                $result = '';
                foreach ($data as $elem) {
                    $result .= '<ul>';  

		                $result .= '<li>' . $elem['name'] . '</li>';
		                $result .= '<li>' . $elem['email'] . '</li>';
		                $result .= '<li>' . $elem['number'] . '</li>';
                        $result .= '<li class="city">' . $elem['city'] . '</li>';

		                $result .= '</ul>';

                    }
                    echo $result;
                
                    

            }
        
        
        
        ?>
    </div>
</div>
<script src="../scripts/filter.js"></script>
</body>
</html>