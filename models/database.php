<?php
class Database{
    //Utiliza padrão singleton cujo objetivo é garantir que apenas uma única instância de classe seja criada duante a execução do programa, e que essa instância seja utilizada sempre que necessário
    private static $instance =  null;
    //Método público que retorna a conexão com o BD
    public static function getConnection(){
        //Verifica se a instância de conexão ainda não foi criada
        if(!self::$instance){
            $host ='localhost';
            $db = 'sistema_usuarios';
            $user = 'root';
            $password = '';
//A conexão utiliza o driver MySQL (mysql:) e as informações de host e DB
            self::$instance = new PDO("mysql:host=$host;dbname=$db", $user, $password);
//Define modo de erro para exceções, facilitando a depuração e tratamento do erro
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                return self::$instance;
    }
    }
?>