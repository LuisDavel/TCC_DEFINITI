<?php
	include('../conexao.php');
?>	
<?php
	$nota = $_POST['nota'];
	$validacao = $_POST['valida_exercicio'];
    $id_usuario = $_POST['id_usuario'];
	
    $sql = "INSERT INTO modulo
    VALUES (null, '$id_usuario' , '1', 'exercicio_fruta', 'N', '$nota')";
    
	$query = mysqli_query($con, $sql);
	//echo $sql;

	if( $query ){
		header('Location: ../views/index.php?retorno=2');
	}else{
		echo mysqli_query($con, $sql);
	}

	mysqli_close($con);
?>