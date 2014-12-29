<?php 
	$sugerencia='';
	$datosRecibidos = $_POST['datos'];
	$sugerencias = array(

		'Ana',
		'Ava',
		'Anita',
		'Azul',
		'Becerra',
		'Bacca',
		'Bicho',
		'Carlos',
		'Camello',
		'Charles',
		'Camilo',
		'Crhistian',
		'Daniel',
		'Daniela',
		'Duvan',
		'Deisy',
		'Dylan',
		'Eduard',
		'Edwardo',
		'Fabian',
		'Fabio',
		'Flavia',
		'Fontana',
		'Gerardo',
		'German',
		'hernando',
		'Ivan',
		'Irvin',
		'Ivanna',
		'Jhon',
		'Joan',
		'Johanna',
		'jhonny',
		'Joao',
		'Juan',
		'Jose',
		'James',
		'Kelly',
		'Kimberly',
		'Karen',
		'Lorena',
		'Lalo',
		'Lala',
		'Lila',
		'Laila',
		'Luz',
		'maria',
		'marcela',
		'mabel',
		'melva',
		'monica',
		'molina',
		'mario',
		'mercedes',
		'norma',
		'nancy',
		'nando',
		'ñañe',
		'oso',
		'oscar',
		'orlando',
		'oriana',
		'pedro',
		'pablo',
		'pipe',
		'perlaza',
		'pepito',
		'perez',
		'quimbaya',
		'quiroz',
		'queretaro',
		'raul',
		'rodrigo',
		'ramiro',
		'rosa',
		'romario',
		'ronaldo',
		'rodriguez',
		'stevens',
		'salgado',
		'samuel',
		'sevilla',
		'sami',
		'tovar',
		'tito',
		'tomas',
		'tobias',
		'ursula',
		'uriel',
		'umaña',
		'victor',
		'valencia',
		'varon',
		'velez',
		'vanegas',
		'walter',
		'wilson',
		'xiomara',
		'ximera',
		'xilofono',
		'xoxo',
		'yamile',
		'yesenia',
		'yiyi',
		'yuyis',
		'zeppelin',
		'zambrano',
		'zeta',
		'zion',	
	);
	
	if(strlen($datosRecibidos)>0){

		for( $i=0; $i < count($sugerencias); $i++){

			if(strtolower($datosRecibidos) == strtolower(substr($sugerencias[$i],0,strlen($datosRecibidos)))){
				if($sugerencia == ''){
					$sugerencia = $sugerencias[$i];
				}else{
					$sugerencia = $sugerencia . ' , ' . $sugerencias[$i];
				}
			}
		}
	}

	// Si no hay sugerencias se coloca esto en el Div
	if($sugerencia == ''){
		$sugerencia = 'No hay Sugerencias :( ';
	}
	// si la hay, muestra la o las sugerencias.
	echo $sugerencia;
 ?>