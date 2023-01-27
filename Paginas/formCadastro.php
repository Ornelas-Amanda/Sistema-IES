<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/estilo-cadastro.css" />
    <title>Formulario</title>
</head>

<body class="body-formCadastro">
    <div class="container-cadastro">
        <h1 class="titulo-principal" style="color:black; margin-bottom:10px">Cadastrar</h1>
        <form method="POST" action="formProfessor.php">
            <table class="caixa-informacoes">
                <tr>
                    <td>
                        <label class="letra" style="margin: 0 90px 0 0;">Codigo Professor:</label>
                        <label class="letra" >Nome Professor:</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="codProf" id="codProf" style="margin: 0 30px 0 0;" required>
                        <input type="text" name="nomeProf" id="nodProf" required>
                    </td>
                </tr>
            </table>
            <table id="caixa-horarios">
                <thead>
                    <th>...</th>
                    <th class="letra">Matutino</th>
                    <th class="letra">Noturno</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="letra">Segunda-Feira</td>
                        <td><input type="text" name="txtSegm" id="txtSegm"></td>
                        <td><input type="text" name="txtSegn" id="txtSegn"></td>
                    </tr >
                    <tr>
                        <td class="letra">Terça-Feira</td>
                        <td><input type="text" name="txtTerm" id="txtTerm"></td>
                        <td><input type="text" name="txtTern" id="txtTern"></td>
                    </tr>
                    <tr>
                        <td class="letra">Quarta-Feira</td>
                        <td><input type="text" name="txtQuam" id="txtQuam"></td>
                        <td><input type="text" name="txtQuan" id="txtQuan"></td>
                    </tr>
                    <tr>
                        <td class="letra">Quinta-Feira</td>
                        <td><input type="text" name="txtQuim" id="txtQuim"></td>
                        <td><input type="text" name="txtQuin" id="txtQuin"></td>
                    </tr>
                    <tr>
                        <td class="letra">Sexta-Feira</td>
                        <td><input type="text" name="txtSexm" id="txtSexm"></td>
                        <td><input type="text" name="txtSexn" id="txtSexn"></td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" value="Cadastrar" onclick="BTN()" class="btn">
        </form>
        <a href="index.php" class="volta">Voltar</a>
    </div>
    <footer>
        <div class="footer">
        </div>
        <script>
           function BTN(){
                alert('Cadastrado Com sucesso');
            }
        </script>
    </footer>
</body>

</html>