<?php


if($_POST["cadsenha"] != $_POST["confsenha"] ) // 1º Passo: verificar se as senhas conferem!
{
    echo ("<script>
                window.alert('As senhas não conferem!!') // Se no conferir avisar ao usuário e redirecionar para a página de cadastro (neste caso pagina de login para clicar em ccadastrar novamente
                window.location.href='cadastrar.html';
                </script>");
}

if($_POST["cademail"] == "" || $_POST["cadsenha"] == "" || $_POST["nomeCompleto"] == "" ) // se ter algum campo em branco avisar o usuário
{
            echo ("<script>
                window.alert('Algum campo ficou em branco!!')
                window.location.href='cadastrar.html';
                </script>");
    
    
} else

  { // abaixo pegará os dados do formulário e inserir em variáveis / também passar os dados para criar a conexão ao db
    $cademail = $_POST["cademail"];
    $nomeCompleto = $_POST["nomeCompleto"];
    $cadsenha = $_POST["cadsenha"];
    
    $servidor = "localhost";
    $usuario = "id8700332_root";
    $senha = "12345";
    $dbname = "id8700332_empresa";
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error()); // se a conexo falhar mostre um erro
    
        }

else 
{
$sql = "INSERT INTO cadastro (usu_nome, usu_email, usu_senha) //se der certo insira os dados (Aqui substitui os dados da coluna para as variáveis (em cada coluna será adionado a variavel que vem do formulário)
VALUES ('$nomeCompleto', '$cademail','$cadsenha')";

    if ($conn->query($sql) === TRUE) {
    echo ("<script>
                window.alert('Cadastro efetuado com sucesso') // se a conexão for bem sucedida avisará ao usuário e redirecionara para pagina que você desejar
                window.location.href='index.php';
                </script>");
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); // fecha a conexão
}}
?>
