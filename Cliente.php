<?php


class Cliente {
	public  $nome;
	public $telefone;
	private $endereco;
	private $cpf;
	public $email;

    public function __construct($nome, $telefone, $endereco, $cpf, $email) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
        $this->email = $email;

	}

	public function Comprar() {
		echo "Comprou";
	}

	public function getNome() {
		return $this->nome;
	}

	public function adicionaCliente($cliente) {
        $this->clientes[] = $cliente;
	}
}

?>