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
        <?php foreach($listaMembros as $membro){
                echo("<li>$membro->mem_nome</li>");
              }
        ?>

    </ul>
</body>
</html>