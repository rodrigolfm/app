<!-- Tratamento de acentos -->
<?php header ( "Content-Type: text/html; charset=ISO-8859-1", true ); ?>

<h1 align="center">Registros: </h1>
<a href="editar.php?id= <?php echo $funcionario['id']; ?>"> <span class="glyphicon glyphicon-pencil"></span> Editar </a> -
<a href="remover.php?id= <?php echo $funcionario['id']; ?>"> <span class="glyphicon glyphicon-remove"></span> Excluir </a>


<br> <br>


  <?php
  $conn = mysql_connect("localhost","root","");
  $db = mysql_select_db("gestaodeclientes");
  ?>

 
  <?php
  $busca = "SELECT * FROM clientes";
  ?>

 
  <?php
  $total_reg = "1"; // número de registros por página
  ?>
  
  <?php
  $pagina=$_GET['pagina'];
  if (!$pagina) {
  $pc = "1";
  } else {
  $pc = $pagina;
  }
  ?>

  
  <?php
  $inicio = $pc - 1;
  $inicio = $inicio * $total_reg;
  ?>
  
  <?php
  $limite = mysql_query("$busca LIMIT $inicio,$total_reg");
  $todos = mysql_query("$busca");
 
  $tr = mysql_num_rows($todos); // verifica o número total de registros
  $tp = $tr / $total_reg; // verifica o número total de páginas
 
  // vamos criar a visualização
  while ($dados = mysql_fetch_array($limite)) {
  $id = $dados["id"];
  $nome = $dados["nome"];
  $contacto = $dados["contacto"];
  $email = $dados["email"];
  $nif = $dados["nif"];

  echo "--------------------------------------------<br>";

  echo "ID: $id<br>";
  echo "Nome: $nome<br>";
  echo "Contacto: $contacto<br>";
  echo "Email: $email<br>";
  echo "NIF: $nif<br>";
  
  echo "--------------------------------------------<br>";


  }
 
  // agora vamos criar os botões "Anterior e próximo"
  $anterior = $pc -1;
  $proximo = $pc +1;
  if ($pc>1) {
  echo " <a href='?pagina=$anterior'><- Anterior</a> ";
  }
  echo "|";
  if ($pc<$tp) {
  echo " <a href='?pagina=$proximo'>Próxima -></a>";
  }
  ?>
<hr>
</div>
