<?php

namespace App\Controllers;

use CodeIgniter\Cotroller;

class Produtos extends BaseController
{
    public function index()
    {

        //chamar uma view que exibe todas as categorias
        $ProdutoModel = new \App\Models\ProdutoModel();
        //armazena todos os registros da tabela
        $data['produtos'] = $ProdutoModel->find();
        $data['titulo'] = 'Gerenciar Informações dos Produtos';

        echo view('produtos/index', $data);
    }

    public function cadastrar()
    {
        $data['titulo'] = 'Inserir novo produto';
        $data['acao'] = 'Inserir';
        $data['msg'] = '';
        $data['erros'] = '';

        $categoriaModel = new \App\Models\CategoriaModel();
        $data['listaCategorias'] = $categoriaModel->findAll();

        //avaliar se o formulário foi submetido
        if ($this->request->getPost()) {

            $produtoModel = new \App\Models\ProdutoModel();
            $dadosProduto = $this->request->getPost();

            if ($produtoModel->insert($dadosProduto)) {
                $data['msg'] = 'Produto inserido com sucesso';
            } else {
                $data['msg'] = 'Erro ao inserir o produto';
                $data['erros'] = $produtoModel->errors();
            }
        }

        echo view('produtos/cadastrar', $data);
    }

    public function excluir($id = null)
    {

        $data['titulo'] = 'Excluir categoria';
        $data['msg'] = '';

        $produtoModel = new \App\Models\ProdutoModel();

        if ($produtoModel->delete($id)) {
            $data['msg'] = 'A produto ' . $id . ' foi excluida com sucesso';
        } else {
            $data['msg'] = 'Erro ao excluir a produto' . $id;
        }

        echo view('produtos\excluir', $data);
    }

    public function editar($id)
    {
        $data['titulo'] = 'Editar novo produto';
        $data['acao'] = 'Editar';
        $data['msg'] = '';
        $data['erros'] = '';

        $categoriaModel = new \App\Models\ProdutoModel();
        $data['listaCategorias'] = $categoriaModel->findAll();

        $produtoModel = new \App\Models\ProdutoModel();
        $dadosProduto = $this->request->getPost();
        $produto = $produtoModel->find($id);

        if ($this->request->getPost()) {
            $dadosProduto = $this->request->getPost();

            if ($produtoModel->update($id, $dadosProduto)) {
                $data['msg'] = 'Produto editado com sucesso';
            } else {
                $data['msg'] = 'Erro ao editar produto';
                $data['erros'] = $produtoModel->errors();
            }
        }

        $data['produto'] = $produto;
        $categoriaModel = new \App\Models\CategoriaModel();
        
        echo view('categorias/editar', $data);
    }
}
