<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Login</title>
    <link rel="stylesheet" href="cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body class="Body ">
</body>


<div class="Cadastro">

 <form method="POST" action="funcionamento.php">
        <label id="Nome"> Nome: </label>
        <input type="text" id="CampoNome" name="Nome" placeholder="Digite seu nome ">
        <label id="Sobrenome"> Sobrenome: </label>
        <input type="text" id="CampoSobrenome" name="Nome" placeholder="Digite seu sobrenome ">
        <br>
        <br>
        <label id="dataNascimento:"> Data de Nascimento: </label>
        <input type="date" id="CampoDataNascimento" name="Data de nascimento ">
        <br>
        <br>
        <label id="Email"> Email:</label>
        <input type="email" id="CampoEmail" name="Email">

        <label id="NumeroTelefone "> Número de telefone : </label>
        <input type="tel" id="CampoNumeroTelefone" required placeholder="(xx) xxxxx-xxxx">
        <br>
        <br>
        <label id="cpf">CPF:</label>
        <input type="text" id="CampoCpf" name="CPF" required placeholder=" ###.###.###-##">
        <label id="rg">RG:</label>
        <input type="text" id="CampoRg" name="RG" required placeholder="#####-###">
        <br>
        <br>
        <label id="campoCep"> CEP: </label>
        <input type="text" id="CampoCep" name="CEP" required placeholder="##.###.###-#">
        <br>
        <br>
        <label id="Senha"> Senha:</label>
        <input type="password" id="CampoSenha" name="Senha ">
        <br>
        <ol>
            <p>Para criar uma senha siga as regras abaixo:</p>
            <li>pelo menos 8 caracteres</li>
            <li>Não mais do que 128 caracteres</li>
            <li>pelo menos uma letra maiúscula e uma minúscula</li>
            <li>Somente caracteres do alfabeto latino ou cirílico</li>
            <li>Pelo menos um numeral</li>
            <li>Numerais arábicos apenas</li>
            <li>Sem espaços</li>
            <li>Outros caracteres que também são válidos:~ ! ? @ # $ % ^ & * _ - + ( ) [ ] { } > < / \ | " ' . , : ;</li>
            </ol> 
                    <br>
                    <button type="submit" id="botaoCadastrar">Cadastrar</button>
                    <br>
                    <br>
                    <p id="cadastro">Possui uma conta?
                        <br>
                        <a href="paginaLogin.php">Faça Login</a>
                    </p>


    </form>
</div>

</html>