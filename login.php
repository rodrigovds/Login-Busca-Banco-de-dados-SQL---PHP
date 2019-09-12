<!DOCTYPE html>
<html>
<head>


<title>Arquivando</title>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       
<style>
  a:link, a:visited {
background-color: green;
color: white;
padding: 15px 35px;
text-decoration: none;
display: inline-block;
box-shadow: 2px 2px 4px #000000;
width: 100;
  }


div{


  padding: 30px;
  


}   

</style>
</head>

<body>

    <div class="menu-top" align="center">
        <a href="index.php" target="_self"><b>Página Inicial</b></a>
        <a href="login.php" target="_self"><b>Login</b></a>
        <a href="cadastrar.html" target="_self"><b>Cadastrar</b></a>
        <a href="cadastro.php" target="_self"><b>Cadastros</b></a>
        <a href="gerenciando.php" target="_self"><b>Gerenciando</b></a>
      </div>
      
<script src="http://code.jquery.com/jquery-latest.min.js"></script>


<div align="center" id="divConteudo">

<b>Insira os dados abaixo para login:</b><br><br>

<form action="ope.php" method="post">

<b>E-mail:</b> <input type=text placeholder="Digite E-mail cadastrado"  name=email><br><br>

<b>Senha:</b> <input type=password placeholder="Digite a senha cadastrada" name=senha><br><br>

<button type="submit" class="btn" id="btnMostrarEsconder">Acessar</button><br><br>

</form></div>

<script type="text/javascript">
    $(document).ready(function (e) {
        if ($_SESSION != ""){
        $("#divConteudo").hide();
}
else{
        $("#btnMostrarEsconder").click(function (e) {
            $("#divConteudo").toggle();
     }   });
    });
</script>




</body>
</html>
