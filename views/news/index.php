<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($newsList as $newsItem): // выводит данные, полученные с контрллера, который получил эти данные с модели?> 
        <p><?=$newsItem['title']?></p>
        <br>
        <br>
    <?php endforeach; ?>
</body>
</html>