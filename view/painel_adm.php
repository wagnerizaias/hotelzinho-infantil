

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/teste.css">
    <title>cadastro</title>

</head>


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
</form><br><br>
<form action="painel.php">
<input type="submit" value="volta" name="deslogar">
</form><br><br>



<h2><div class="area">
<body>
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
$sql = "SELECT * FROM cadastro1";
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
echo "<td>".$horario ."</td>";
echo "<td>".$crianca."</td>";
echo "<td>".$nascimento."</td>";
echo "<td>".$mensagem."</td>";
echo "</tr>";
}

mysqli_close($strcon);
echo "</table>";
?><br><br>

<form name="Cadastr" action="painel_adm.php" method="POST">
<label>Consulta a Banco de Dados completo:</label>
<input type="submit" name="consulta-completa" value="Consultar">
</form>


</div>

<html>
<body><br>

    <div id="area"><br>
    <h1> Preenchendo o formulário alteração</h1><br>
   
    <form action="../Controller/alterar.php" method ="post" >  
    
<label>Digite  ID:</label><input type="text" name="codigo_trecho" placeholder="*Digite ID aluno*"required><br><br>

    <div class="field">
        <label for="Nome">responsal:</label>
        <input type="text" id="responsal" name="responsalvel" placeholder="*Digite nome responsal*" >
    </div>
    <div class="field">
        <label for="Endereço"> Seu endereco:</label>
        <input type="text" id="Endereço" name="Endereco" placeholder="*Digite seu endereço*" >
    </div>
    <div class="field">
        <label for="Digite seu CPF">CPF:</label>
        <input type="text" id="CPF" name="CPF" placeholder="*Digite seu CPF*" >
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
        <input type="text" id="nome" name="nome"  placeholder="*Digite nome criança*"required>
    </div>

    <div class="fied">
    <label for="data">Nascimento da Criança:</label>
    <input id="date"type='date' name="date" placeholder="">
</div>
<label for="data">Mensagem</label>
<textarea name="mensagem" id="mensagem" placeholder="*Mensagem*" ></textarea><br>


<input type="submit" value="alterar" name="acao"><br>

</form><br>
<form action="Login.html">
  <input type="submit" value=" login" />
  
</form><br><br><br><br><br><br><br><br>

</div>





<footer id="rodape"> 
   <h4 style="color: blue;">Feito por:BIT...</h4>
   </footer>

  </body> 
</html>