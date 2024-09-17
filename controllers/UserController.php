<?php
//Definição da classe UserController, responsável por gerenciar as ações relacionadas aos usuários
class UserController{
    //Cria a função responsável por cadastrar o usuário
    public function register(){
    if($_SEVER['REQUEST_METHOD'] == 'POST'){
       $data = [
        'nome'=> $_POST['nome'],
        'email'=> $_POST['email'],
        //O método password_hash encripta a senha para uma linguagem de criptografia padrão(PASSWORD_DEFAULT) 
        'senha'=>password_hash($_POST['senha'], PASSWORD_DEFAULT),
        'perfil'=>$_POST['perfil']
           ];
           User::create($data);
    }else{
        //Se a requisição não for POST, por exemplo "GET", carrega a página de registro
        include 'views/register.php';
    }
    }
}
?>