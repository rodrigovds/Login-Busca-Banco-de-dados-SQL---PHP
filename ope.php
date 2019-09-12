<?php
 session_start();

if($_POST["email"] == "" and $_POST["senha"] == "")
{
            echo ("<script>
                window.alert('Digite algo, por favor!')
                window.location.href='login.php';
                </script>");
    
    
}

else
{

$con = mysqli_connect("localhost","id8700332_root","12345","id8700332_empresa") or die(mysql_error());


 
$email = $_POST["email"];

$senha = $_POST["senha"];

 
$query = mysqli_query($con,"SELECT usu_email, usu_senha from cadastro where usu_email = '$email' and usu_senha = '$senha'")or die(mysql_error());

$numrow = mysqli_num_rows($query);

if($numrow > 0)

{

while($row=mysqli_fetch_array($query))

{

    if($row['usu_email'] == $email)

    {
    
       session_start();
       header('location:index.php'); 
       $_SESSION['email'] = $email;
      // $_SESSION['senha'] = $senha;
      $_SESSION['logado'] = $_POST["email"];
 

    }
    

}

}

    else

        {
        unset ($_SESSION['email']);
        unset ($_SESSION['senha']);
        echo ("<script>
                window.alert('Usuário não cadastrado ou senha incorreta')
                window.location.href='index.php';
                </script>");


        }
}
 

?>
