<h1>Editar contato</h1>
<style>
  body{
    background-image: linear-gradient(to right, white,gray);
  }
</style>
<?php 
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<br>
<br>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>"> 
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email;?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Rede Social</label>
        <input type="text" name="rede_social" value="<?php print $row->rede_social;?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="telefone" value="<?php print $row->telefone;?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Passatempo</label>
        <input type="text" name="passatempo" value="<?php print $row->passatempo;?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" value="<?php print $row->cidade;?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>" class="form-control" required>
    </div>
    <div class="mb-3">
    <button type="submit" name="submit" id="submit" class="btn btn-primary">Enviar</button>       
    </div>
</form>