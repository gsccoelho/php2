<?php 


function trataNome($name){
	if (!$name) {
		throw new Exception("Nenhum nome informado", 1);		
	}
	echo ucfirst($name)."<br>";
}


try 
{
		trataNome("coelho");
		trataNome("");
} catch (Exception $e) {
	echo $e->getMessage();
}finally{
	echo "<br>Executou o try";
}

 ?>