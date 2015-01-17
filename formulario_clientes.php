<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="../../assets/ico/favicon.png">

<?php header ( "Content-Type: text/html; charset=ISO-8859-1", true ); ?>

<title>Sistema de Clientes</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/estilo_clientes.css" rel="stylesheet">

  </head>

  <body>


  <!-- Wrap all page content here -->
  <div id="wrap">

  <!-- Begin page content -->
  <div class="container">
  <div class="page-header">
  <h1>DETALHE CLIENTE</h1>
  </div>
  <div class="lead">

  <!-- 1ª coluna -->
  <div class="col-lg-8">

  <form method="post">
		
		<!-- Id Hidden -->
		<input type="hidden" name="id" value="<?php echo $funcionario['id']; ?>" />
		
  		Nome:
  		<div class="input-group">
  		
  		<input type="text" name ="nome" value="<?php echo $funcionario['nome']; ?>"
  		class="form-control" placeholder="Nome Cliente">

  		Morada:
  		<input type="text" name ="morada" value="<?php echo $funcionario['morada']; ?>"
      	class="form-control" placeholder="Morada Cliente">

  		Contacto:
  		<input type="text" name="contacto" value="<?php echo $funcionario['contacto']; ?>"
  		class="form-control" placeholder="Contacto Cliente">
        
        Email:
        <input type="text" name="email" value="<?php echo $funcionario['email']; ?>"
  		class="form-control" placeholder="Email Cliente">
        
        NIF:
        <input type="text" name="nif" value="<?php echo $funcionario['nif']; ?>"
  		class="form-control" placeholder="NIF Cliente">
        
        Data Nascimento:
        <input type="text" name="data" value="<?php echo $funcionario['data']; ?>"
  		class="form-control" placeholder="0000-00-00">
  				<br> <br>

  	<!-- Botão Cadastrar-->
  	<div class="btn-group">
  			<input type="submit" class="btn btn-success dropdown-toggle"
  			value = "<?php echo ($funcionario['id'] > 0) 
  			? 'ATUALIZAR'
  			: 'CADASTRAR' ?>" >
  			</div>

  	</form>
    

  		</div>
		</div>
		</div>
		</div>