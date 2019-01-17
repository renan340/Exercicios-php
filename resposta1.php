<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    $valor = $_POST['valor'];
    $parcelas = $_POST['parcelas'];
    $parcelas = $valor / $parcelas;
    $parcelas = number_format($parcelas, 2,',','.');

    for($i = 1; $i <= $parcelas; $i++){
        $data = date ("d/m/y", strtotime("+$i mouth"));
        echo "<p> Parcela $i - Valor: $parcelas</p>";
    }
    ?>
</body>
</html>