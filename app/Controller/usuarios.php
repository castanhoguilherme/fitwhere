<?php

require_once 'crud.php';

class Usuarios extends Crud {

    protected $table = 'tb_usuarios';
    private $nome;
    private $sobrenome;
    private $email;
    private $bairro;
    private $senha;
    private $dnascimento;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
    
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function getBairro() {
        return $this->bairro;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setNascimento($data_nascimento) {
        $this->dnascimento = $data_nascimento;
    }
    public function getNascimento(){
        return $this->dnascimento;
    }

    public function insert(){
		$sql  = "INSERT INTO $this->table (nome, sobrenome, email, bairro, senha, data_nascimento) VALUES (:nome, :sobrenome, :email, :bairro, :senha, :data_nascimento)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
                $stmt->bindParam(':sobrenome', $this->sobrenome);
		$stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':bairro', $this->bairro);
                $stmt->bindParam(':senha', $this->senha);
                $stmt->bindParam(':data_nascimento', $this->dnascimento);                
		return $stmt->execute(); 
	}
	public function update($id){
		$sql  = "UPDATE $this->table SET nome = :nome, sobrenome = :sobrenome, email = :email, bairro = :bairro, senha = :senha, data_nascimento = :data_nascimento WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
                $stmt->bindParam(':sobrenome', $this->sobrenome);
		$stmt->bindParam(':email', $this->email);
                $stmt->bindParam(':bairro', $this->bairro);
                $stmt->bindParam(':senha', $this->senha);
                $stmt->bindParam(':data_nascimento', $this->dnascimento);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}