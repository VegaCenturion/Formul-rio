<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Form Horta</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body, html
{
background-image: url(https://images.hdqwalls.com/wallpapers/bthumb/green-blue-violet-gradient-8k-xv.jpg);
background-repeat: no-repeat;
background-attachment: fixed;
background-position: center;
background-size: cover;
}
    </style>

    
  </head>
<body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
        <h4 class="text-white">Preenche ai professor.</h4>
          <h4 class="text-white">Sobre:</h4>
          <p class="text-muted">Formulário para aula de HTML</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contatos</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white"><a href="https://github.com/VegaCenturion/">Segue la no Git</a></li>
            <li><a href="#" class="text-white">Like no Insta</a></li>
            <li><a href="#" class="text-white">DM via discord</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Formulário Mine Horta Verde</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>
<center>
<h1 style="color:whitesmoke;">Maior distrubuidora de Martinópolis</h1>
<p style="color:whitesmoke;">O melhor hortifruti da região</p>
</center>
<form action="saveforms.php" method="post">
  <div class="container fs-4">
    <div class="row">
      <div class="col-md-4">
        <label for="nome" style="color:whitesmoke;">Firma:</label>
        <input class="form-control" type="text" name="firma" placeholder="Digite o nome da sua Firma">
      </div>
      <div class="col-md-4">
        <label for="Data" style="color:whitesmoke;">Data</label>
        <input class="form-control" type="text" name="data" placeholder="DD/MM/AA">
      </div>
      <div class="col-md-4">
            <label for="N°" style="color:whitesmoke;">N°</label>
          <input class="form-control" type="text" name="N°" placeholder="Número">
  </div>
  <div class="container fs-4">
    <div class="row">
      <div class="col-lg-8">
      <label for="Ender" style="color:whitesmoke;">Endereço:</label>
      <input class="form-control" type="text" name="endereco"  placeholder="Digite seu endereço">
      </div>
      <div class="col-lg-4">
      <label for="text" style="color:whitesmoke;">Complemento</label>
      <input type="text" class="form-control" name="complemento"  placeholder="Complemento">
      </div>
    </div>
  </div>
  <div class="container fs-5">
    <div class="row">
      <div class="col-lg-5">
        <label for="bairro" style="color:whitesmoke;">Bairro:</label>
        <input type="text" class="form-control" name="bairro"  placeholder="Bairro">
      </div>
      <div class="col-lg-5">
      <label for="bairro" style="color:whitesmoke;">Cidade:</label>
      <input type="text" class="form-control" name="cidade" placeholder="Cidade">
      </div>
      <div class="col-lg-2">
      <label for="bairro" style="color:whitesmoke;">Estado:</label>
      <input type="text" class="form-control" name="estado" placeholder="Estado">
      </div>
      <div class="col-lg-2">
      <label for="bairro" style="color:whitesmoke;">CEP:</label>
      <input type="text" class="form-control" name="cep" placeholder="CEP">
      </div>
      <div class="col-lg-5">
      <label for="bairro" style="color:whitesmoke;">CNPJ:</label>
      <input type="text" class="form-control" name="cnpj" placeholder="CNPJ">
      </div>
        <div class="col-lg-5">
        <label for="bairro" style="color:whitesmoke;">Inscrição:</label>
        <input type="text" class="form-control" name="inscricao"  placeholder="Inscrição">
        </div>
      <div class="col-lg-8">
      <label for="bairro" style="color:whitesmoke;">Tels:</label>
      <input type="text" class="form-control" name="tels" placeholder="Tels"> 
     </div>
      <div class="col-lg-4">
      <label for="bairro" style="color:whitesmoke;">Celular:</label>
      <input type="text" class="form-control" name="celular" placeholder="celular">
      </div>
      <div>
      <label for="nome" style="color:whitesmoke;">E-Mail:</label>
      <input class="form-control" type="text" name="e-mail" placeholder="Digite o seu E-Mail">
      </div>
      <div>
      <label for="nome" style="color:whitesmoke;">Observações:</label>
      <input class="form-control" type="text" name="obs" placeholder="Observações">
      </div>
      </div>
  </div>      
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar Formulário</button>
  </div>
</form>     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<main>
<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1" style="color:whitesmoke;">Trabalho feito por Guilherme de Almeida "Schneider" Torrão&copy;. Pode preencher sem medo não vou clonar seu cartão</p>
    <p class="mb-0" style="color:whitesmoke;">Pelo menos não agora. <a href="https://github.com/VegaCenturion/">Visite meu perfil no Git</a> e segue la.</p>
  </div>
</footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
     
</body>
</html>
