<?php


if($_POST["cadsenha"] != $_POST["confsenha"] )
{
    echo ("<script>
                window.alert('As senhas não conferem!!')
                window.location.href='cadastrar.html';
                </script>");
}

if($_POST["cademail"] == "" || $_POST["cadsenha"] == "" || $_POST["nomeCompleto"] == "" )
{
            echo ("<script>
                window.alert('Algum campo ficou em branco!!')
                window.location.href='cadastrar.html';
                </script>");
    
    
} else

  {
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
        die("Falha na conexao: " . mysqli_connect_error());
    
        }

else 
{
$sql = "INSERT INTO cadastro (usu_nome, usu_email, usu_senha)
VALUES ('$nomeCompleto', '$cademail','$cadsenha')";

    if ($conn->query($sql) === TRUE) {
    echo ("<script>
                window.alert('Cadastro efetuado com sucesso')
                window.location.href='index.php';
                </script>");
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}}
?>
