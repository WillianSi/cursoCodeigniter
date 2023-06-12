<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title><?php echo $titulo ?></title>
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
                <h1><?php echo $titulo ?></h1>
                <strong><?php echo $msg ?></strong>
            </div>
            <div class="card-body col-md-6">
                <form method="post">
                    <input type="hidden" name="id" value="<?php echo ($categoria->id);?>">
                    <div class="form-group">
                        <label for="nome">Nome da Categoria:</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="<?php echo ($categoria->nome);?>"/> 
                        <?php if (isset($erros['nome']) != ''): ?><small style="color:red;"><?php echo $erros['nome'] ?></small><?php endif; ?>
                    </div>
                    <input type="submit" value="<?php echo $acao ?>"/>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


