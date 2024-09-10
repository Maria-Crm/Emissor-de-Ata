<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EMISSOR ATAS - TDS04</title>
        <style>
            .header { float: right;}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <h2><b>EMISSOR ATAS - TDS04</b></h2>
    <hr/>
    <nav>
    <?php
        include 'menu.php';
    ?>
    </nav>
    <br/>
    <br/>
    <div class="row justify-content-center row-cols-2 row-cols-md-1 mb-4 text-center">
        <div class="col">
            <div class="card mb-2 rounded-3 shadow-sw">
                <div class="card-header py-3">
                    <h3 class="my-0 fw-normal">
                    <b>SUGESTÃO</b></h3>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">SUGERIR</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sugestões</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="cadsugest.php" method="post">
                        
                        <label class="form-label">Descrição</label>
                        <input class="form-control" type="text" name="descricao" required placeholder="Digite a sugestão." />
                        <br/>
                        <br/>
                        <input type="submit" class="btn btn-outline-success" value="ENVIAR"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">FECHAR</button>
                </div>
            </div>
        </div>
    </div>
    </body>