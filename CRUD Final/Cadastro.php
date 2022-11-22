<h1>Novo contato</h1>
<br>
<br>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Rede Social</label>
        <input type="text" name="rede_social" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="telefone" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Passatempo</label>
        <input type="text" name="passatempo" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" required>
    </div>
    <div class="mb-3">
    <button type="submit" name="submit" id="submit" class="btn btn-primary">Enviar</button>       
    </div>
</form>