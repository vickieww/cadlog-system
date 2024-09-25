<?php
//Requere arquivo 'user.php' que contém o model user com as funções para manipulação de dados de usuários
require_once 'models/user.php';

class AuthController{
    //Cria função responsável pelo processo de login
    public function login ()
    {
        //Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $user = User::findByEmail($email);

        }
    }
}
?>