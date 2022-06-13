<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/teste.css">
    <title>cadastro</title>

    </head>

<input type="checkbox" id="check">
<label for="check" id="icone"><img src="https://i.imgur.com/RWHvwPE.png"/></label>
<div class="barra">	
	<nav>
        <a href="hotelzinho.html"><div class="link">Home</div></a>
        <a href="https://api.whatsapp.com/send?phone=5519987075090&app=facebook&entry_point=page_cta&fbclid=IwAR3nSaBx_VBNHNEyS9KpsAuvQgcZIrPWioEQkFf_I7q8CIktmN4z0GcXKqk"><div class="link">whatsapp</div></a>
        <a href="https://www.google.com/maps/dir//-22.8364042,-47.1590028/@-22.8322823,-47.2067979,13z"><div class="link">Localização</div></a>
   
	</nav>	
</div><br>
    
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistema de Login</title>
    


</head>

<?php
session_start();

?>



<h1>Olá, <?php echo $_SESSION['usuario'];?></h1>
<form action="sair.php">
<input type="submit" value="Sair" name="deslogar">
</form>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Testando conexão ao banco de dados </title>
</head>
<body>
<h3>Formulário de Consulta novo Clientes</h3><br>
<form name="Cadastr" action="painel.php" method="POST">
<label>Consulta a Banco de Dados completo:</label>
<input type="submit" name="consulta-completa" value="Consultar">
</form>
</body>
</html>
</html>
<body>
    

<h2><div class="area">


<?php
echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>Endereco</th>";
echo "<th>CPF</th>";
echo "<th>Telefone</th>";
echo "<th>Email</th>";
echo "<th>Horario</th>";
echo "<th>Criança</th>";
echo "<th>Nascimento</th>";
echo "<th>Mensagem</th>";
echo "</tr>";


$strcon=mysqli_connect('localhost', 'root', '', 'hotelzinho');
$sql = "SELECT * FROM cadastr";
$resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($resultado))
{
$id = $registro['id'];
$nome = $registro['nome'];
$endereco = $registro['endereco'];
$cpf = $registro['cpf'];
$telefone = $registro['telefone'];
$email = $registro['email'];
$horario = $registro['horario'];
$crianca = $registro['crianca'];
$nascimento = $registro['nascimento'];
$mensagem = $registro['mensagem'];

echo "<tr>";
echo "<td>".$id."</td>";
echo "<td>".$nome."</td>";
echo "<td>".$endereco."</td>";
echo "<td>".$cpf."</td>";
echo "<td>".$telefone."</td>";
echo "<td>".$email."</td>";
echo "<td>".$horario."</td>";
echo "<td>".$crianca."</td>";
echo "<td>".$nascimento."</td>";
echo "<td>".$mensagem."</td>";
echo "</tr>";
}

mysqli_close($strcon);
echo "</table>";
?>

<body>


<form class="formulario"  action="../Controller/excluir.php" method="POST">
<h1> <?php echo "<span>"; echo " Olá,"; echo "</span>"; echo "<span>"; echo $_SESSION['usuario']; echo "</span>";?> <br><br></h1>
<div class="field"> 
    <h1>Excluir Pré-Cadastro:</h1><br>
<h1><label>Digite o Código ID:</label><input type="text" name="codigo_trecho"></h1><br><br>
<input type="submit" value="Excluir " name="acao"><br>
</form>
</div>


<h1><form action="sair.php">
<input type="submit" value="Deslogar" name="deslogar">
</form></h1>



    <div id="area">
  
    
        <h1>Seja bem vindo:</h1>

        <h1>Ficha Cadastral do Aluno:</h1><BR>


   
        <form action="../controller/cadastrar.php" method ="post" >  
    
        <div class="field">
        <label for="Nome">responsal:</label>
        <input type="text" id="responsal" name="responsalvel" placeholder="*Digite nome responsal*" required>
        </div>
        <div class="field">
        <label for="Endereço"> Seu endereco:</label>
        <input type="text" id="Endereço" name="Endereco" placeholder="*Digite seu endereço*" required>
        </div>
        <div class="field">
        <label for="Digite seu CPF">CPF:</label>
        <input type="text" id="CPF" name="CPF" placeholder="*Digite seu CPF*" required>
        </div>
        <div class="field">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="*Digite seu Telefone">
        </div>
        <div class="field">
        <label for="email">E-Mail:</label>
        <input type="email" id="email" name="email" placeholder="*Digite seu E-Mail*" required>
        </div>
        <div class="field">
        senha:  <input type="password" name="senha"
        placeholder="Digite sua Senha"><br>
        Confirma:<input type="password" name="senha"
        placeholder="*Digite sua Senha*"><br> 
        </div>
        <div class="field"> 
        <label for="Horario">Horário:</label>       
        <input type="text"id="horario" name="horario" placeholder="*Digite Manha ou Tarde*"><br>  
        </div>
        <div class="field">
        <label for="Criança">Criança:</label>
        <input type="text" id="nome" name="nome" placeholder="*Digite nome criança*" required>
        </div>
        <div class="fied">
        <label for="data">Nascimento da Criança:</label>
        <input id="date"type='date' name="date" placeholder="">
        </div>
        <label for="data">Mensagem</label>
        <textarea name="mensagem" id="mensagem" placeholder="*Mensagem*" required></textarea><br>
        <input type="submit" value="cadastro" name="Enviar"><br>
    </form><br>
 
    <form action="Login.html">
    <input type="submit" value=" login" />
     </form><br><br>
</div><br>
<div>


<form name="Cadastr" action="painel_adm.php" method="POST">
<label>Consulta a Banco de Dados completo:</label>
<input type="submit" name="consulta-completa" value="Consultar">
</form><br><br><br>






<footer id="rodape"> 
   <h4 style="color: blue;">Feito por:BIT...</h4>
   </footer>

  </body> 
</html>