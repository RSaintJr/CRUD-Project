<style>
  body{
    background-image: linear-gradient(to right, white,gray);
  }
</style>
<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $rede_social = $_POST["rede_social"];
            $telefone = $_POST["telefone"];
            $passatempo = $_POST["passatempo"];
            $cidade = $_POST["cidade"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome,email,rede_social,telefone,passatempo,cidade,data_nasc) VALUES ('{$nome}','{$email}','{$rede_social}','{$telefone}', '{$passatempo}', '{$cidade}', '{$data_nasc}')";

            $res = $conn->query($sql);

            if($res==true)
            {
                print "<script>alert('Cadastro com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else
            {
                print "<script>alert('Não foi possível');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $rede_social = $_POST["rede_social"];
            $telefone = $_POST["telefone"];
            $passatempo = $_POST["passatempo"];
            $cidade = $_POST["cidade"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', rede_social='{$rede_social}', telefone='{$telefone}' ,passatempo='{$passatempo}' ,cidade='{$cidade}', data_nasc='{$data_nasc}' WHERE id=".$_POST["id"];

            $res = $conn->query($sql);

            if($res==true)
            {
                print "<script>alert('Edição bem Sucedida');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else
            {
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true)
            {
                print "<script>alert('Exclusão bem Sucedida');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else
            {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
            break;
         
    }
?>