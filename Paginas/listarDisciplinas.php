<?php
require_once './../Paginas/Classes/Conexao.php';
require_once './../Paginas/Classes/Horarios.php';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/estilo-buscaDisciplina.css" />
    <title>Listar disciplinas</title>
</head>
<?php
try{
    $horario = new Horarios();
      
    $listaSegunda = $horario->Segunda(isset($dis));

    // $listaTerca = $horario->Terca(isset($dis));
    // $listaQuarta = $horario->Quarta(isset($dis));
    // $listaQuinta = $horario->Quinta(isset($dis));
    // $listaSexta = $horario->Sexta(isset($dis));
     
}catch(Exception $e){
    echo '<pre>';
        print_r($e);
        echo '</pre>';
        echo $e->getMessage();
}
?>
?>
<body>
    <h1 class="titulo-principal">Disciplinas</h1>
    <form action="buscar.php" method="$_POST" class="form-busca">
        <p class="letra">Digite uma disciplina:</p>
        <input type="text" name="dis" style="height: 30px;" required>
        <button type="submit" class="btn">Buscar</button>
        <a href="index.php" class="volta">Voltar</a>
    </form>

    <section>
       <div>
           <!-- <?php  foreach($listaSegunda as $linha) { ?> -->
                    <!-- <?php
                      echo "manha:". $linha['segManha'].'</br>';
                    ?>
                   <?php
                      echo 'noite:'. $linha['segNoite'].'</br>';
                    ?>
                   <?php
                      echo $linha['nome'].'</br>'
                    ?> -->
<!-- 
            <?php }?> -->
      </div>
       <!-- <div>
           <?php  foreach($listaTerca as $linha) { ?>
                   <?php
                      echo $linha['terManha']
                    ?>
                   <?php
                      echo $linha['terNoite']
                    ?>
            <?php }?>
      </div>
       <div>
           <?php  foreach($listaQuarta as $linha) { ?>
                   <?php
                      echo $linha['quaManha']
                    ?>
                   <?php
                      echo $linha['quaNoite']
                    ?>
            <?php }?>
      </div>
       <div>
           <?php  foreach($listaQuinta as $linha) { ?>
                   <?php
                      echo $linha['quiManha']
                    ?>
                   <?php
                      echo $linha['quiNoite']
                    ?>
            <?php }?>
      </div>
      <div>
           <?php  foreach($listaSexta as $linha) { ?>
                   <?php
                      echo $linha['sexManha']
                    ?>
                   <?php
                      echo $linha['sexNoite']
                    ?>
            <?php }?>
      </div> -->
   </section>
    <footer>
        <div class="footer">
        </div>
    </footer>
</body>

</html>