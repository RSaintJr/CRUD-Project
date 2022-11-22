<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <title>Contatos</title>
</head>
<style>
  body{
    background-image: linear-gradient(to right, white,gray);
  }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Contatos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=novo">Cadastro de Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=listar">Lista de Contatos</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
            include ("Config.php"); 
            switch(@$_REQUEST["page"]){
            case "novo":
                include ("Cadastro.php");
            break;
            case "listar":
                include ("Lista.php");
            break;
            case "salvar":
                include ("Store.php");
            break;
            case "editar":
              include ("Edit.php");
            break;
            default:
                print "<h1> Bem vindo </h1>";
                print "<br>";
                print "<br>";
                print "<div>
                  <li>
                    <a href='https://www.ifc-riodosul.edu.br/site/'> Instituto Federal Catarinense - Câmpus Rio do Sul</a>
                  </li>
                  <br>
                  <li>
                    BCC 2° Fase
                  </li>
                  <br>
                  <li>
                    <a>Esse é um projeto CRUD com uso de banco de dados SQL</a>
                  </li>
                  </div>";
                
        }
    ?>
        </div>
    </div>
</div>
</body>
</html>