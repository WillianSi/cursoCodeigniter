<?php
    namespace App\Models;
    
    //importando a classe padrão já disponível
    use CodeIgniter\Model;
    
    class CategoriaModel extends Model{
        
        protected $table = 'categoria';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nome'];//se a tabela conter mais campos serão add aqui nesta array
        protected $returnType = 'object'; //coleção de registro que ele retorna
        
        //regras de validação
        protected $validationRules = [
            'nome' => 'required|min_length[3]|is_unique[produto.nome]'
        ];
        
        //mensagens de erro
        protected $validationMessages = [
            'nome' => [
                'required' => 'O campo nome da categoria é obrigatório',
                'min_length' => 'O campo nome da categoria tem que possuir mais de 3 caracteres',
                'is_unique' => 'Já existe uma categoria com o nome informado'
            ]
        ];
        
    }

