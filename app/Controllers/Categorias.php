<?php
    namespace App\Controllers;
    
    use CodeIgniter\Cotroller;   
    
    class Categorias extends BaseController
    {
                         
        public function index() {
            
            //chamar uma view que exibe todas as categorias
            $categoriaModel = new \App\Models\CategoriaModel();
            //armazena todos os registros da tabela
            $data['categorias'] = $categoriaModel->find();
            $data['titulo'] = 'Gerenciar Informações das Categorias';
                       
            echo view ('categorias/index',$data);    
        }
        
        
        public function cadastrar()
        {
            $data['titulo'] = 'Inserir nova categoria';
            $data['acao'] = 'Inserir';
            $data['msg'] = '';
            $data['erros'] = '';
            
            //avaliar se o formulário foi submetido
            if($this->request->getPost()){
                
                $categoriaModel = new \App\Models\CategoriaModel();
                $categoriaModel->set('nome', $this->request->getPost('nome'));
                
                if($categoriaModel->insert()){
                    $data['msg'] = 'Categoria inserida com sucesso';   
                }
                else{
                    $data['msg'] = 'Erro ao inserir a categoria';
                    $data['erros'] = $categoriaModel->errors();
                }
            }
            
            echo view ('categorias/cadastrar',$data);
        }

        public function excluir($id = null){

            $data['titulo'] = 'Excluir categoria';
            $data['msg'] = '';

            $produtoModel = new \App\Models\ProdutoModel();

            $produtos = $produtoModel->where('categoria_id',$id)->get();

            if($produtos->resultID->num_rows>= 1){
                $data['msg'] = 'Erro ao excluir a Categoria, pois existe produto vinculado a mesma '. $id;
            }else{

                $categoriaModel = new \App\Models\CategoriaModel();

                if($categoriaModel->delete($id)){
                    $data['msg'] = 'A Categoria ' .$id. ' foi excluida com sucesso';
                }else{
                    $data['msg'] = 'Erro ao excluir a Categoria' . $id;
                }

            }
    
                echo view('categorias\excluir',$data);

            }

            public function editar($id){
                $data['titulo'] = 'Editar nova categoria';
                $data['acao'] = 'Editar';
                $data ['msg'] = '';
                $data['erros'] = '';

                $categoriaModel = new \App\Models\CategoriaModel();


                $categoria = $categoriaModel->find($id);


                if($this->request->getPost()){
                    $categoria->nome = $this->request->getPost('nome');

                    if($categoriaModel->update($id,$categoria)){
                        $data['msg'] = 'Categoria editada com sucesso';
                    }else{
                        $data['msg'] = 'Erro ao editar a categoria';
                        $data['erros'] = $categoriaModel->errors();
                    }
                }

                $data['categoria'] = $categoria;
                echo view ('categorias/editar', $data);
            }

        
        
    }

