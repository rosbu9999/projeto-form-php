<?php
    if (isset($_POST['submit'])) {
        include_once('conect.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['tel'];
        $sexo = $_POST['sexo'];
        $data= $_POST['data'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $resultado = mysqli_query($conexao, "INSERT INTO cadastro (nome, email, tel, sexo, data_nasc, cidade, estado)
        VALUES ('$nome', '$email', '$telefone', '$sexo', '$data', '$cidade', '$estado')");
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <style>
        body {
            background-image: linear-gradient(to right, rgba(11, 71, 201, 1), rgba(2, 96, 155, 1));
            color: white;
            font-family: Arial, sans-serif;
        }
        .sexo {
        margin: 10px 0;
    }
        .caixa {
            position: absolute;
            padding: 20px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
        }
        .field {
            border-radius: 10px;
            padding: 20px;
            border: none;
        }
        input[type="radio"] {
        width: auto;
        margin: 5px;
        }
        legend {
            text-align: center;
            padding: 10px;
            font-size: 1.5em;
        }
        input {
            background: none;
            border: 1px solid #fff;
            outline: none;
            border-radius: 8px;
            color: white;
            padding: 10px;
            width: 100%;
        }
        input::placeholder {
            color: #ddd;
        }
        label {
            margin-left: 5px;
        }
        button {
            background-color: #00c3ff;
            border: none;
            color: white;
            padding: 10px;
            border-radius: 8px;
            width: 100%;
            font-weight: bold;
            cursor: pointer;
        }
        button:hover {
            background-color: #0077ff;
        }
    </style>
</head>
<body>
    <div class="caixa" name="caixa">
        <form action="forms.php" method="POST">
            <fieldset class="field" name="field">
                <legend>Cadastro</legend>

                <div class="nome" name="nome">
                    <input type="text" name="nome" maxlength="60" placeholder="Nome Completo" required> 
                    <br><br>
                </div>

                <div class="email" name="email">
                    <input type="email" name="email" maxlength="60" placeholder="Email" required> 
                    <br><br>
                </div>

                <div class="tel" name="tel">
                    <input type="tel" name="tel" maxlength="15" placeholder="Telefone" required> 
                    <br><br>
                </div>

                <div class="sexo" name="sexo">
                    <label>Masculino</label><input type="radio" name="sexo" value="Masculino" required><br><br>
                    <label>Feminino</label><input type="radio" name="sexo" value="Feminino" required><br><br>
                    <label>Outro</label><input type="radio" name="sexo" value="Outro" required><br>
                </div>

                <div class="data" name="data">
                    <label><strong>Data de Nascimento:</strong></label> <input type="date" name="data" required> 
                   
                    <br><br>
                </div>

                <div class="Cidade" name="cidade">
                    <input type="text" name="cidade" maxlength="60" placeholder="Cidade" required> 
                    <br><br>
                </div>

                <div class="Estado" name="estado">
                    <input type="text" name="estado" maxlength="60" placeholder="Estado" required> 
                    <br><br>
                </div>

                <button type="submit" name="submit" onclick="alert("Enviado com sucesso")">Enviar</button>
            </fieldset>
        </form>
    </div>
</body>

</html>
