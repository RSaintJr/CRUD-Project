<h1>Lista de Contatos</h1>
<style>
  body{
    background-image: linear-gradient(to right, white,gray);
  }
</style>
<br>
<br>
<?php 
    $sql = "SELECT * FROM usuarios";

    $res = $conn ->query($sql);

    $qtd = $res ->num_rows;

    if($qtd > 0 ){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>E-mail</th>";
        print "<th>Rede Social</th>";
        print "<th>Telefone</th>";
        print "<th>Passatempo</th>";
        print "<th>Cidade</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res -> fetch_object()){
            print "<tr>";
            print "<td>" .$row -> id. "</td>";
            print "<td>" .$row -> nome. "</td>";
            print "<td>" .$row -> email. "</td>";
            print "<td>" .$row -> rede_social. "</td>";
            print "<td>" .$row -> telefone. "</td>";
            print "<td>" .$row -> passatempo. "</td>";
            print "<td>" .$row -> cidade. "</td>";
            print "<td>" .$row -> data_nasc. "</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert
        alert-danger'>Não encontrou resultados !</p>";
    }
?>