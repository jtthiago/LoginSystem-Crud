<?php
session_start();

if(isset($_POST['email']) && empty($_POST['email']) == false) {
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha'])); 
	 
	$dsn = "mysql:dbname=test;host=localhost";
    $dbuser = "root";
    $dbpass = "";


try {
    $db = new PDO($dsn, $dbuser, $dbpass);
    $sql = $db->query("SELECT * FROM usuariovip WHERE email = '$email' AND senha = '$senha'");

    if($sql->rowCount() > 0){
        $dado = $sql->fetch();

        $_SESSION['id'] = $dado['id'];

        header("Location: index.php");
    }

} catch(PDOException $th) {
    echo " Falhou".$th->getMessage();
}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Th</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <div class="container">
		<form  method="POST" class="d-flex justify-content-center h-100">
	 <div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Entrar</h3>
				
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="E-mail">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="senha"  class="form-control" placeholder="senha">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Lembre me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" >
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Não tem uma conta? <a href="#">Inscrever-se</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Esqueceu sua senha?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
    
</body>
</html>