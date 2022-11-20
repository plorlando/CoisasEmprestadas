<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilo.css" rel="stylesheet">
        <title>Coisas Emprestadas</title>
    </head>

    <body>
        <h1>REGISTRO DE EMPRÉSTIMO</h1>
    
        <form method="post" action="">
            <table>
                <h2>Insira os dados do item emprestado</h2>
                <p>  
                    <strong>(apagar posteriormente!!)</strong> Certamente precisamos substituir os campos abaixo por campos de seleção de itens e de usuários
                </p>
                <tr>
                    <td><label for="cpItem">Item:</label></td>
                    <td>
                        <select id="cpItem" name="cpItem" required="required" size="">
                            <option value="">Selecione o item</option>
                            <option value="item1">Exemplo item 1</option>
                            <option value="item2">Exemplo item 2</option>
                            <option value="item3">Exemplo item 3</option>
                        </select>   
                    </td>
                </tr>
                <tr>
                    <td><label for="cpNome">Nome completo:</label></td>
                    <td><input id="cpNome" name="cpNome" required="required" type="text" placeholder="Digite seu nome"/></td>
                </tr>
                <tr>
                    <td><label for="cpData">Data de empréstimo:</label></td>
                    <td><input id="cpData" name="cpData" required="required" type="date" placeholder="00/00/0000"/></td>
                </tr>
                <tr>
                    <td><label for="cpDevolucao">Data de devolução:</label></td>
                    <td><input id="cpDevolucao" name="cpDevolucao" required="required" type="date" placeholder="00/00/0000"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Registrar"/>
                        <input type="reset" value="Limpar"/>
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <div class="container"></div>
        <p class="link">
            Não encontrou o que procurava? Cadastre um novo item aqui:
            <a href="cadastro_itens.php"><strong>Cadastro de Itens</strong></a><br>
        </p>
        <a href="index.php">Voltar ao menu principal</a><br>
        <a href="dados_usuario.php">Meus dados</a><br>
        <a href="login.php">Logout</a>
    </body>
</html>