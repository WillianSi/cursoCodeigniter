
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title><?php echo $titulo?></title>
</head>
<body>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url('public/categorias/');?>">Categoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url('public/produtos/');?>">Produto</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <div class="card">
            <div class="card-header">
                <h5><?php echo $titulo ?></h5>
            </div>
            <div class="card-body">                
                <div class="col-lg-12 card_button_title" style="text-align: right;" >
                    <p>
                        <a title="Adicionar nova categoria" href="<?php echo base_url('public/categorias/cadastrar'); ?>"><button type="button" class="btn btn-primary btn-sm card_button_title" data-toggle="modal" id=" "> Adicionar Nova Categoria</button></a>
                    </p>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Código da Categoria</th>
                            <th>Nome da Categoria</th>
                            <td>Editar</td>
                            <td>Excluir</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categorias as $categoria) : ?>
                            <tr>
                                <td><?php echo $categoria->id ?></td>
                                <td><?php echo $categoria->nome ?></td>
                                <td><a href="<?php echo base_url('public/categorias/editar/'.$categoria->id);?>">Editar</a></td>
                                <td><a href="<?php echo base_url('public/categorias/excluir/'.$categoria->id);?>">Excluir</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>


