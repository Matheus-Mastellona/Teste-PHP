<?php
class Address {
    public $cep;
    public $logradouro;
    public $bairro;
    public $uf;

    public function get_address($cep) {
        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";

        $xml = simplexml_load_file($url);
        if ($xml) {
            $this->cep = $cep;
            $this->logradouro = $xml->logradouro;
            $this->bairro = $xml->bairro;
            $this->uf = $xml->uf;
        } else {
            throw new Exception("Não foi possível obter o endereço.");
        }
    }
}
