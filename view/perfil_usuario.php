<?php
session_start();
            
            $_SESSION['usuarioEmail'] ;           
            $_SESSION['usuarioSenha'];
			$_SESSION['nome'];
			$_SESSION['aluno'];
			$_SESSION['nascimento'];


if(!isset($_SESSION["usuarioEmail"]) || !isset($_SESSION["usuarioSenha"])){
    


		header("Location: logout.php");
                
		exit;
		}else{
			
?>

<html>
<head>
<title>Perfil Usuário </title>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css"  href="../view/css/teste.css"> 
</head>
<body>
<div><br>

<?php echo "<span>"; echo "Email: "; echo "</span>"; echo "<span>"; echo $_SESSION['usuarioEmail']; echo "</span>";?>
<br><br>


<fieldset>
<legend> Area responsalvel.</legend>
<?php echo "<span>"; echo "Seja bem vinda, "; echo "</span>"; echo "<span>"; echo $_SESSION['nome']; echo "</span>";?><br>
<a href="logout.php">Aluno.</a>
<?php echo "<span>"; echo "Olá, "; echo "</span>"; echo "<span>"; echo $_SESSION['aluno']; echo "</span>";?>
<?php echo "<span>"; echo "    Nascimento: , "; echo "</span>"; echo "<span>"; echo $_SESSION['nascimento']; echo "</span>";?>
<br><br>
</fieldset>

<br>
<form action="sair.php">
<input type="submit" value="Deslogar" name="deslogar">
</form>
</div>
</body>
</html>
<?php 

}?>	