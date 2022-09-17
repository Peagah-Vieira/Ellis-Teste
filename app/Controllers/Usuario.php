<?php namespace App\Controllers;

use App\Models\ServicoModel;
use CodeIgniter\Controller;

class Usuario extends Controller{
    public function index(){
        $servicoModel = new ServicoModel();
        $servicos = $servicoModel->findAll();

        $variaveis = [
            'servicos' => $servicos
        ];
        echo view('ellis/ellis_index', $variaveis);
    }
}
?>