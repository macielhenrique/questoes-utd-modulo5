<?php if (isset($_GET['form'])){$form = $_GET['form'];}
	  if (isset($_GET['form1'])){$form = $_GET['form1'];}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Criar ai meu chapa o Formulario</title>
</head>
<body>

	<?php if (isset($_GET['criarForm0'])){
		echo '<form>';
		for ($i=0; $i < $form; $i++) { ?>
			<div>
				<h3> Digite <?php echo $_GET['criarForm'.$i.'']; ?> </h3>
				<?php echo '<input type="text" name="criarForm'.$i.'">'?>
			</div>
	<?php } ?>
		<br>
		<br>
		<button type="submit">Finalizar Cadastro</button>
		</form>
	<?php } elseif (isset($_GET['form'])){
		echo '<form method="GET">';
		echo '<input type="hidden" name="form1" value="'.$form.'">';
		for ($i=0; $i < $form; $i++) { ?>
			<div>
				<h3> Digite o nome do campo? </h3>
				<?php echo '<input type="text" name="criarForm'.$i.'">'?>
			</div>
	<?php } ?>
		<br>
		<br>
		<button type="submit">Criar Formulario</button>
		</form>
	<?php }else{ ?>
	<form method="GET">
		<h3> Quantos  campos tu deseja criar meu chapa? </h3>
		<input type="number" name="form">
		<button type="submit">Numerar Formulario</button>
	</form>
	<?php } ?>
</body>
</html>