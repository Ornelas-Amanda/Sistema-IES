<?php
require_once "./../Paginas/Classes/Horarios.php";
require_once "./../Paginas/Classes/Conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/estilo-listarHorario.css" />
    <title>Horários dos professores</title>
</head>

<body>
    <section>
        <?php
        try {
            $horario = new Horarios();


            $listaHorario = $horario->listar();
        } catch (Exception $e) {
            echo '<pre>';
            print_r($e);
            echo '</pre>';
            echo $e->getMessage();
        }

        ?>
        <form method="POST" action="../classes/cadastrar.php">
            <article class="caixa1">
                <div>
                    <h1 class="titulo-principal">Horários</h1>
                    <?php foreach ($listaHorario as $linha) {  ?>
                        <table class="lista-tabela">
                            <tr>
                                <td>
                                    <p class="letra">Codigo:<?php echo $linha['id'] ?></p>
                                </td>
                                <td>
                                    <p class="letra">Nome:<?php echo $linha['nome'] ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="letra">Segunda</p>
                                </td>
                                <td>
                                    <p class="letra">Matutino</p>
                                    <p class="letra"><?php echo $linha['segManha'] ?></p>
                                </td>
                                <td>
                                    <p class="letra">Noturno</p>
                                    <p class="letra"><?php echo $linha['segNoite'] ?> </p>
                                </td>
                            </tr></br>
                            <tr>
                                <td>
                                    <p class="letra">Terça</p>
                                </td>
                                <td>
                                    <p class="letra"><?php echo $linha['terManha'] ?> </p>
                                </td>
                                <td>
                                    <p class="letra"><?php echo $linha['terNoite'] ?> </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="letra">Quarta</p>
                                </td>
                                <td>
                                    <p class="letra"><?php echo $linha['quaManha'] ?> </p>
                                </td>
                                <td>
                                    <p class="letra"> <?php echo $linha['quaNoite'] ?> </p>

                                </td>
                            </tr>
                            <tr>
                                <td class="letra">
                                    <p>Quinta</p>
                                </td>
                                <td>
                                    <p class="letra"><?php echo $linha['quiManha'] ?> </p>

                                </td>
                                <td>
                                    <p class="letra"> <?php echo $linha['quiNoite'] ?> </p>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="letra">Sexta</p>
                                </td>
                                <td>
                                    <p class="letra"> <?php echo $linha['sexManha'] ?> </p>

                                </td>
                                <td>
                                    <p class="letra"> <?php echo $linha['sexNoite'] ?></p>

                                </td>
                            </tr>
                        </table>
                    <?php } ?>

                    <a href="./index.php" class="volta">Voltar</a>
                </div>
            </article>
    </section>
</body>

</html>