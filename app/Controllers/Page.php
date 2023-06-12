<?php

    namespace App\Controllers;
    
    class Page extends BaseController
    {
        public function index()
        {
            echo '<h1>ESTOU AQUI</h1>';
           
        }
        
        public function personalizado($nome) {
            
            echo "<h1>Meu nome é: $nome</h1>";
            
        }
    }

