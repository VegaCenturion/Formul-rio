<style>
    body
    {
        background-image: url(https://images.hdqwalls.com/wallpapers/bthumb/green-blue-violet-gradient-8k-xv.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        background-size: cover;

    }
</style>
<h1 style="color:whitesmoke";>Foi professor agora da 5 na questão ai pls</h1>

<?php

    // http://localhost/Formulário/acessorios/Forms.php?Firma=&Data=&N°=&endereco=&complemento=&bairro=&cidade=&estado=&cep=&cnpj=&inscricao=&tels=&celualar=&e-mail=&obs=
    // $nome = $_GET["nome"];
    // $telefone =  $_GET["telefone"];
    // $email = $_GET["email"];

    //ok //
    $Firma = $_POST["firma"];
    $Data =  $_POST["data"];
    $N° = $_POST["N°"];
    $Enderço = $_POST["endereco"];
    $Bairo = $_POST["bairro"];
    $Cidade = $_POST["cidade"];
    $Estado = $_POST["estado"];
    $compl = $_POST["complemento"];
    $CEP = $_POST["cep"];
    $CNPJ = $_POST["cnpj"];
    $Inscrição = $_POST["inscricao"];
    $Telefone = $_POST["tels"];
    $Celular = $_POST["celular"];
    $Email = $_POST["e-mail"];
    $Observações = $_POST["obs"];

    if(empty($Firma) && empty($Data)) {
        echo "<p>Os campos devem ser informado</p>";
    }
    else {
        echo "<p> Olá <b>$Firma</b>!! Seu telefone de contato é $Telefone e seu email é $Email</p>";
        file_put_contents("Dados Clonados Kappa.csv", "$Firma,$N°,$Enderço,$Bairo,$Cidade,$Estado,$compl,$CEP,$CNPJ,$Inscrição,$Telefone,$Celular,$Email,$Observações\n", FILE_APPEND);    
    }
    
?>
