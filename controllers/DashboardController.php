<?php

class DashboardController{
    public function index(){
        //inicia a sessão para verificar se o usuário está autenticado
        session_start();

        //Verifica se a variável de sessão "usuario_id" está definida caso não estiver significa que o usuário não está autenticado
        if (!isset($_SESSION['usuario_id'])){
            header('Location: index.php');
            exit; //garante que o script seja interrompido após o redirecionamento
        }
        include 'views/dashboard.php';
    }

}
?>