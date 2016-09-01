<?php 
	/*
	if (isset($_GET['subENVIAR'])) {
		@$nome = $_GET['txtNOME'];
		@$senha = $_GET['txtSENHA'];
	}
	*/
?>
<!DOCTYPE html>
<html lang="pt-br"> 
	<head>
		<title>Hello World</title>
		<meta charset="UTF-8">
		<style type="text/css">

			* { padding: 0; margin: 0; }	 

			header {
				width: 100%;
				height: 100px;
				background: #ecf0f1;
				opacity: 0.9;
				position: relative;
			}

			header p {
				float: left;
				margin-top: 70px; 
				margin-left: 0;
				position: relative;
			}

			h1 {
				float: left;
			}

			section {
				float: left;
				position: relative;
				margin: 30px 0 20px 10px;
				height: 300px;
				width: 100%;
			}

			.linkAula {
				float: left;
				position: absolute;
				margin: 40px 0 0 10px;
				position: absolute;
			}


		</style>
	</head>
	<body>

		<header>
			
			<?php /*
				echo "<p> Valor digitado:  ". @$nome ."</p>" ;

				if(isset($_GET['subENVIAR'])) {
					if ($nome == 'admin' && $senha == '1234') {
						echo '<h1>Acertou miseraviiiiiiii </h1>';
						echo '<a href="aula2.php" class="linkAula">Aula2 </a>';
					} else {
						echo '<h1>Erouuuuuu</h1>';	
					}	
				}	
			*/?>

		</header>

		<section>
		
			<form method="post" name='form' action="aula2.php">
				<label>Nome</label>
				<input type="text" name="usuario" placeholder="Digite o nome">

				<label>Senha</label>
				<input type="text" name="senha" >
				

				<label>E-mail</label>
				<input type="text" name="email" >
				<br><br>

				<input type="submit" name="subENVIAR">
			</form>
		
		</section>	

	</body>
</html>


