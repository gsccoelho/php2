<?php 

$hierarquia = array(
				array(
					'nome_cargo'=>'CEO',
					'subordinados'=>array(
						//Início Diretor Comercial
						array(
								'nome_cargo'=>'Diretor Comercial',
								'subordinados'=>array(
								array(
									'nome_cargo'=>'Gestor de Vendas', 
									'subordinados'=>array(
										array('nome_cargo'=>'Vendor'),
										array('nome_cargo'=>'Auxiliar de Vendas')
									),
									array(
										'nome_cargo'=>'Gestor do Pos Vendas',
										'subordinados'=>array(
											array('nome_cargo'=>'Pos Vendedor'),
											array('nome_cargo'=>'Pos Auxiliar do Vendor')
										)
									)
								)
							)
						),
						//Fim Diretor Comercial
						//Início Diretor Financeiro
						array(
							'nome_cargo'=>'Diretor Financeiro',
							'subordinados'=>array(
								array(
									'nome_cargo'=>'Gestor Financeiro',
									'subordinados'=>array(
										array('nome_cargo'=>'Auxiliar Financeiro'),
										array('nome_cargo'=>'Auxiliar de Negócio'),
										array('nome_cargo'=>'Auxiliar de Teste'),
									)
								),
								array(
									'nome_cargo'=>'Gestor Investimentos',
									'subordinados'=>array(
										array('nome_cargo'=>'Auxiliar Investimentos'),
										array('nome_cargo'=>'Auxiliar de Day Trade')
									)
								)
							)
						)
					)
				),
				array(
					'nome_cargo'=>'CIO'
				)
);

//print_r($hierarquia);


function exibir($hierarquia){

	$html = '<ul>';
	foreach ($hierarquia as $key => $value) {
		$html .= '<li>';	
		$html .= $value['nome_cargo'];
		if (isset($value['subordinados']) && count($value['subordinados']) > 0) {
			$html .= exibir($value['subordinados']);
		}
		$html .= '</li>';	
	}
	$html .= '</ul>';
	return $html;
}

echo exibir($hierarquia);

 ?>