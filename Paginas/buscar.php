<?php
require_once './../Paginas/Classes/Conexao.php';
require_once './../Paginas/Classes/Horarios.php';
header('location:./listarDisciplinas.php');
 
if(isset($_POST['dis'])){
  $horario = new Horarios();
  $horario->getDda($_POST['dis']);
  $horario->Segunda($horario);
}


?>