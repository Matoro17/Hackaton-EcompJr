<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
   
    <h1>Titulo</h1>
    <ul>
        <?php foreach($listaCats as $cat){
                echo("<li>$cat->foto</li>");
                echo("<li>$cat->nome</li>");
                echo("<li>$cat->descricao</li>");
              }
        ?>

    </ul>
</body>
</html>