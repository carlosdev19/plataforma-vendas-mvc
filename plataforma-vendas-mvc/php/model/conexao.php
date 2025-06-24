<?php

class Conexao{
    private $host;
    private $usuario;
    private $senha;
    private $nomeBanco;

    //Construtor da Classe
    //É um metodo que utilizamos para inicializar a classe.
    //Sempre tem o mesmo nome da classe e não possui retorno e tambem nao e void.
    //Chamamos o construtor quando i9nstanciamos a classe, atravces do new

    public function __construct(
        $host = "localhost",
        $usuario = "root",
        $senha = "",
        $nomeBanco = "autopecas_tanaka"
    ){
        $this->host = $host;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->nomeBanco = $nomeBanco;

        $this->connect();
    }
    public function connect(){

        try{
              $dsn = "mysql:host={$this->host};dbname={$this->nomeBanco};charset=utf8";
        $this->conn = new PDO($dsn, usuario, senha);

        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        RETURN $this->conn;

        }catch(PDOException $e){
            die("Erro ao conectar com o banco de dados " . $e->getMessage());
        }

    }
}

?>