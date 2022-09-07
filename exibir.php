<html>

<head>
    <title> .: Pagina com a criação da tabela :. </title>
    <link rel="stylesheet" href="/yuri/ads101yuri/for/trabalho/estilo.css">
    <meta charset='utf-8'>
</head>

<body>
<table border='1'>
    <tr>
        <td>Tabela criada pelo FOR</td>
    </tr>
    <?php
    $quantidade = $_POST['quantidade'];
    echo "Quantidade de linhas: "; 
    echo $quantidade;
    for ($i = 1; $i <= $quantidade; $i++) {
        echo "<tr><td>Linha $i</td></tr>";
    }
    ?>
</table>
</body>

</html>