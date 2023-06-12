<?php
    namespace App\Controllers;
    
    class Produto extends BaseController
    {
        public function index()
        {  
           $data['titulo'] = "Gerenciar Produtos";
           return View('produto',$data);
        }
        
        public function cadastrar()
        {
           $data['titulo'] = "Cadastrar Produtos";
           return View('cadastrar',$data);
        }
        
        public function excluir()
        {
           $data['titulo'] = "Excluir Produtos";
           return View('excluir',$data);
        }
        
    }



    
    