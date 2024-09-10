<?php
    include 'conecta.php';
    $data = date('yyyy/MM/dd');
    $descricao = $_POST['descricao'];
    $sql = "INSERT INTO sugestao(data1,descricao) VALUES ('$data','$descricao')";
    if (mysqli_query($mysqli, $sql)) {
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='emitirsugest.php';
        </script>";
    }
    mysqli_close($mysqli);
?>