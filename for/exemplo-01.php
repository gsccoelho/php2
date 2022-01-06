<?php 	

//////////////////////////////////////////////////////////////////////////////
//for
//////////////////////////////////////////////////////////////////////////////
//exemplo01

/*for ($i = 0; $i <= 1000; $i+= 5) { 
	if ($i >= 200 && $i <= 800) continue;
	if ($i === 900) break;
	echo $i . "<br>";
}
*/

//exemplo02 -- loop infinito

/*for ($i=0; $i < 10; $i++) { 
	echo $i . " ";
}*/


//exemplo03 - mostra 100 últimos anos
/*echo "<select>";
for ($i=date("Y"); $i >= date("Y")-100; $i--) { 
	//echo $i . "<br>";
	echo '<option values="' .$i.  '">'.$i.'</option>';
}
echo "</select>";*/


//////////////////////////////////////////////////////////////////////////////
//forech
//////////////////////////////////////////////////////////////////////////////



/*$meses = array(
	"Janeiro", "Fevereiro","Março",
	"Abril", "Maio","Junho",
	"Julho", "Agosto","Setembro",
	"Outubro", "Novembro","Dezembro"
);


foreach ($meses as $index => $mes) {
	echo "Indice:".$index."<br>";
	echo $mes . "<br><br>";		
	
}*/


//////////////////////////////////////////////////////////////////////////////
//while
//////////////////////////////////////////////////////////////////////////////


/*$condicao = true;

while ($condicao) {
	$num = rand(1,10);
	if ($num === 3) {
			echo "TRES!!!";
			$condicao = false;
	}
	echo $num;
}*/

//////////////////////////////////////////////////////////////////////////////
//do while
//////////////////////////////////////////////////////////////////////////////

$total = 1000000;
$desconto = 0.9;

do {
	$total *= $desconto;
} while ($total > 100);

echo $total;





 ?>