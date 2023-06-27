<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="header">
        <div class="header-item">
            <a href="">войти</a>
        </div>
    </div>
    <section>
        <div class="grid">
        <?php
                $mysqli= new mysqli("localhost", 'root', '', 'practica');
                $query = "set names utf8";
                $mysqli->query($query);
                $query = "select * from product";
                $results = $mysqli->query($query);
                while($row = $results->fetch_assoc()){
                    echo '<div class="grid-item">
                <div class="grid-title">
                    '.$row["title"].'
                </div>
                <div class="grid-text">
                '.$row["text"].'
                </div>
                <div class="grid-price">
                '.$row["price"].'
                </div>
                </div>
                ';}
                
            ?>
        </div>
    </section>
</body>
</html>