<?php

namespace Luscalopez\Asaas;

use Luscalopez\Asaas\Connection;

class Conta {
    public $http;
    protected $cobranca;

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }

    // Retorna a listagem de contas
    public function getAll(array $filtros = []){
        $filtro = '';
        if(is_array($filtros)){
            if($filtros){
                foreach($filtros as $key => $f){
                    if(!empty($f)){
                        if($filtro){
                            $filtro .= '&';
                        }
                        $filtro .= $key.'='.$f;
                    }
                }
                $filtro = '?'.$filtro;
            }
        }
        return $this->http->get('/accounts'.$filtro);
    }

    // Retorna a listagem de contas
    public function getConta(){
        return $this->http->get('/wallets');
    }

    // Insere uma nova contas
    public function create(array $dadosConta){
        return $this->http->post('/accounts', $dadosConta);
    }

}
