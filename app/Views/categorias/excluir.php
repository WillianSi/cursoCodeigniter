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
        </div>
    </div>
</body>
</html>



