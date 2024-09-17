<?php
    //$matricula = $_SESSION["matricula"];
    include 'conecta.php';
    //$tipo = mysqli_query($mysqli, "SELECT matricula,tipo FROM funcionario WHERE matricula=$matricula");
    //$dados = mysqli_fetch_assoc($tipo);
    //$admin = $dados["tipo"];
    //if ($admin == "Admin") {
        echo "<a href='cadastrarata.php' style='color: black; text-decoration: none'>EMITIR ATA</a>";
        echo "<b> | </b>";
        echo "<a href='emitirsugest.php' style='color: black; text-decoration: none'>SUGESTÃO</a>";
        echo "<b> | </b>";
        /*echo "<a href='concluirata.php' style='color: black; text-decoration: none'>CONCLUIR ATA</a>";
        echo "<b> | </b>";
        echo "<a href='consultarata.php' style='color: black; text-decoration: none'>CONSULTAR ATA</a>";
        echo "<b> | </b>";
        echo "<a href='relatorios.php' style='color: black; text-decoration: none'>RELATORÍOS</a>";*/
    //}
    /*else {
        echo "<a href='emitirsugest.php' style='color: black; text-decoration: none'>SUGESTÃO</a>";
        echo "<b> | </b>";
        echo "<a href='consultarata.php' style='color: black; text-decoration: none'>CONSULTAR ATA</a>";
        echo "<b> | </b>";
        echo "<a href='relatorios.php' style='color: black; text-decoration: none'>RELATORÍOS</a>";
    }*/
?>
