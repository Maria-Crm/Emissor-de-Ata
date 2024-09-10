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
                    <h3 class="my-0 fw-normal"><!--<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="green" class="bi bi-journal-richtext" viewBox="0 0 16 16">
                    <path d="M7.5 3.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0m-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047L11 4.75V7a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 7v-.5s1.54-1.274 1.639-1.208M5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                    </svg>&nbsp;&nbsp;--><b>EMITIR ATAS</b></h3>
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">EMITIR ATA</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Se eu tirar essas divs de modal vai ficar sem o modal:)meio obvio -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Emissão de Atas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="cadata.php" method="post">
                        <label class="form-label">Titulo</label>
                        <input class="form-control" type="text" name="titulo" required placeholder="Digite o titulo da ata"/>
                        <br/>
                        <label class="form-label">Data de emissão</label>
                        <input class="form-control" type="text" name="dataemissao" required placeholder="Digite a data de emissao da ata"/>
                        <br/>
                        <label class="form-label">Inicio</label>
                        <input class="form-control" type="text" name="inicio" required placeholder="Digite a data de inicio da ata"/>
                        <br/>
                        <label class="form-label">Fim</label>
                        <input class="form-control" type="text" name="fim" required placeholder="Digite a data de fim da ata"/>
                        <br/>
                        <label class="form-label">Pauta</label>
                        <input class="form-control" type="text" name="pauta" required placeholder="Digite a pauta da ata"/>
                        <br/>
                        <label class="form-label">Descrição</label>
                        <input class="form-control" type="text" name="descricao" required placeholder="Digite a descricao da ata" />
                        <br/>
                        <label class="form-label">Palavra chave</label>
                        <input class="form-control" type="text" name="pchave" required placeholder="Digite as palavras chave da ata" />
                        <br/>
                        <label class="form-label">Tipo</label>
                        <input class="form-control" type="text" name="tipo" required placeholder="Digite o tipo da ata" />
                        <br/>
                        <label class="form-label">Status</label>
                        <input class="form-control" type="text" name="status" required placeholder="Digite o status da ata" />
                        <br/>
                        <label class="form-label">Setor</label>
                        <input class="form-control" type="text" name="nsetor" required placeholder="Digite o setor da ata" />
                        <br/>
                        <label class="form-label">Matricula participantes</label>
                        <input class="form-control" type="text" name="matricula" required placeholder="Digite os participantes da ata" />
                        <?php 
                        /*
                        ===HTML===
                        Não dá pra colocar texto
                        <input class="form-control" type="text" name="participantes" />
                        Não sei fazer esses botoes
                        <input type="button" class="btn btn-outline-success" value="PESQUISAR"/>
                        <input type="button" class="btn btn-outline-success" value="ADICIONAR"/>
                        
                        ===PHP===
                        if (isset($_POST['PESQUISAR'])){
                            $sql = "SELECT * FROM funcionario WHERE matricula='$matricula'";
                            if ($sql > 0) {
                             $dados = mysqli_fetch_assoc($sql);
                             $participante = $dados['nome'];
                             $_POST['participantes']=$participante;
                            }
                         }*/
                        ?>
                        <br/>
                        <input type="submit" class="btn btn-outline-success" value="CADASTRAR"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">FECHAR</button>
                </div>
            </div>
        </div>
    </div>
    </body>