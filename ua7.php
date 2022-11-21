<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="cadastro" method="post" action="ua7exibe.php">
        <table>
            <tr>
                <td><label for="">Nome</label></td>
                <td><input type="text" name="nome" id="" size="20"></td>
            </tr>
            <tr>
                <td><label for="">Idade</label></td>
                <td><input type="text" name="idade" id="" size="20"></td>
            </tr>
            <tr>
                <td><label for="">Cidade</label></td>
                <td><input type="text" name="cidade" id="" size="20"></td>
            </tr>
            <tr>
                <td valign="top"><label>Estados</br>que visitou:</label></td>
            
                <td>
                    <select name="uf[]" multiple="multiple" size="10">
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="am">Amazonas</option>
                        <option value="ap">Amapá</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espírito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pr">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="ro">Rondônia</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="se">Sergipe</option>
                        <option value="sp">São Paulo</option>
                        <option value="to">Tocantins</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="enviar" value="Envar">
                </td>
            </tr>
        </table>
    
    </form>
</body>
</html>