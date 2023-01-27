<?php
require_once './../Paginas/Classes/Conexao.php';
require_once './../Paginas/Classes/Horarios.php';



try {
  header("Location:formCadastro.php");
  $pessoa = new Horarios();

  $pessoa->setId($_POST['codProf']);
  $pessoa->setNome($_POST['nomeProf']);
  $pessoa->setSegManha($_POST['txtSegm']);
  $pessoa->setTerManha($_POST['txtTerm']);
  $pessoa->setQuaManha($_POST['txtQuam']);
  $pessoa->setQuiManha($_POST['txtQuim']);
  $pessoa->setSexManha($_POST['txtSexm']);
  $pessoa->setSegNoite($_POST['txtSegn']);
  $pessoa->setTerNoite($_POST['txtTern']);
  $pessoa->setQuaNoite($_POST['txtQuan']);
  $pessoa->setQuiNoite($_POST['txtQuin']);
  $pessoa->setSexNoite($_POST['txtSexn']);

  $id = $_POST['codProf'];
  $aux =$pessoa->compara($id);

  if(!empty($aux['id']) == $id ){ 
    echo $pessoa->atualizar($pessoa,$id);
  }
  else{
     echo $pessoa->cadastrar($pessoa);
  }
} catch (Exception $e) {
  echo '<pre>';
  print_r($e);
  echo '</pre>';
  echo $e->getMessage();
}
