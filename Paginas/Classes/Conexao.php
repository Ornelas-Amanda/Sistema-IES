<?php 
class Conexao{

     public static function pegarConexao(){

            $Conexao = New PDO("mysql:host=localhost;dbname=banco","root","");

            $Conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $Conexao->exec("SET CHARACTER SET utf8");
             return $Conexao;
   
        
    }
}
?>