<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
    form{
        margin-top: 15%;
    }
    select{
        width: 200px;
    }
    input{
        height: 30px;
        width: 202px;
        border-radius: 4px;
    }
    #ipt{
        background: green;
        height: 30px;
        width: 202px;
        border-radius: 4px;
    }
    
    
    
    
    
    </style>
</head>
<body>
    

<center>

    <form action="../Control/controleRegistro.php" method="POST">
        <h1>Registro do atraso</h1>

        <select name="id_aluno">
            
        <?php

        require("../Model/Aluno.class.php");
        $x = new Aluno;
        $x->listarAluno();





        ?>

        </select><br>

        <select name="motivo">
            <option>Banheiro</option>
            <option>Pessoal</option>
            <option>Consulta</option>
            <option>Lanche</option>
            <option>Projeto</option>
        </select><br>
         
        <input type="submit" name="cadastrar_registro" value="Cadastrar" id="ipt">


    
    
    </form>

</center>

</body>
</html>