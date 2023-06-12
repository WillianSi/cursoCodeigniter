<?php
    namespace App\Models;
    
    
    use CodeIgniter\Model;
    
    class ProdutoModel extends Model{
        
        protected $table = 'produto';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nome','valor','categoria_id'];
        protected $returnType = 'object';  
        
        protected $validationRules = [
            'nome' => 'required|min_length[3]|is_unique[produto.nome]',
            'valor' => 'required|numeric',
            'categoria_id' => 'required'
        ];
               
        protected $validationMessages = [
            'nome' => [
                'required' => 'O campo nome do produto é obrigatório',
                'min_length' => 'O campo nome do produto tem que possuir mais de 3 caracteres',
                'is_unique' => 'Já existe um produto com o nome informado'
            ],
            'valor' => [
                'required' => 'O campo valor do produto é obrigatório',
                'numeric' => 'O valor do campo deve ser numérico'
            ],
            'categoria_id' => [
                'required' => 'O campo valor do produto é obrigatório'
            ]
        ];
        
    }

    
    