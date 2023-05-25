<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="../assets/css/cadastro_rep.css">
    <title>Tela Login</title>
</head>
<body>
  <div class="principal">
    <div class="container">
     <h2>Cadastro de Representante:</h2>
       <form action="../cadastrar_representante.php" method="post">
        <label for="username">Nome:</label>
        <input type="text" id="username" name="username" required="required">

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco">

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone">

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required="required">

        <label for="CPFCNPJ">CPF/CNPJ:</label>
        <input type="text" id="CPFCNPJ" name="CPFCNPJ" required="required">

        <label for="regioes">Regiões:</label>
        <select id="uf" name="uf" required>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required="required">

       <input type="submit" value="Cadastrar">
      </form>
  </div>
</div>
</body>
</html>