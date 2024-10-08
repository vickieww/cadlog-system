<?php
require_once 'models/database.php';
//Faz consulta dos dados cadastrais do usuário dentro do BD
class User{
    //Função para localizar o usuário pelo e-mail
    public static function findByEmail($email){
        $conn = Database::getConnection();//Os :: servem para declarar a classe 
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email"); //STMT = statement - estado recebe a instrução SQL selecionada junto aos :: que indica a posição da mesma, aumentando a segurança da consulta
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //Função para encontrar o usuário pelo ID
        public static function find($id){
            $conn = Database::getConnetion();
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        //Função para criar um novo usuário no banco de dados
        public static function create($data){
            $conn = Database::getConnection();
            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
            $stmt->execute($data);
        }
}
?>