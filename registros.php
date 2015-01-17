<!-- Tratamento de acentos -->
<?php header ( "Content-Type: text/html; charset=ISO-8859-1", true ); ?>

<h1 align="center">Registros: </h1>
<br> <br>

<?php foreach ($lista_funcionarios as $funcionario) : ?>

<div class="col-lg-4">
<p><b>Nome: </b><?php echo $funcionario['nome']; ?> </p>
<p><b>Contacto: </b><?php echo $funcionario['contacto']; ?> </p>
<p><b>Email: </b><?php echo $funcionario['email']; ?> </p>
<p><b>NIF: </b><?php echo $funcionario['nif']; ?> </p>


<a href="editar.php?id= <?php echo $funcionario['id']; ?>"> <span class="glyphicon glyphicon-pencil"></span> Editar </a> -
<a href="remover.php?id= <?php echo $funcionario['id']; ?>"> <span class="glyphicon glyphicon-remove"></span> Excluir </a>

<hr>
</div>
<?php endforeach; ?>