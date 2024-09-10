<?php
    include 'conecta.php';
    $titulo = $_POST['titulo'];
    $dataemissao = $_POST['dataemissao'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $pauta = $_POST['pauta'];
    $descricao = $_POST['descricao'];
    $pchave = $_POST['pchave'];
    $tipo = $_POST['tipo'];
    $status = $_POST['status'];
    $setor = $_POST['nsetor'];
    $matricula = $_POST['matricula'];
    if (isset($_POST['PESQUISAR'])){
       /*$sql = "SELECT * FROM funcionario WHERE matricula='$matricula'";
       if ($sql > 0) {
        $dados = mysqli_fetch_assoc($sql);
        $participante = $dados['nome'];
        $_POST['participantes']=$participante;
       }*/
    }
    elseif (isset($_POST['ADICIONAR'])) {
        
    }
    else {
        $query1 = $mysqli->query("SELECT * FROM funcionario WHERE matricula='$matricula'");
        if (mysqli_num_rows($query1)) {
            $dados1 = mysqli_fetch_assoc($query1);
            $idparticipantes = $dados1["id"];
            //$_POST['participantes']=$participante;
        }
       $query2 = $mysqli->query("SELECT * FROM setor WHERE nome='$setor'");
       if (mysqli_num_rows($query2)) {
            $dados2 = mysqli_fetch_assoc($query2);
            $idsetor = $dados2["id"];
       }
       $sql = "INSERT INTO ata(titulo,dataemissao,inicio,fim,pauta,descricao,pchave,tipo,status1,idsetor,idfuncionario,idexterno) VALUES ('$titulo','$dataemissao','$inicio','$fim','$pauta','$descricao','$pchave','$tipo','$status','$idsetor','$idparticipantes','')";
       if (mysqli_query($mysqli, $sql)) {
            echo "<script language='javascript' type='text/javascript'>
            window.location.href='cadastrarata.php';
            </script>";
        }
    }
    mysqli_close($mysqli);
?>