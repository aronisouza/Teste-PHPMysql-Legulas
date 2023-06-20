<?php
/**
 * @author Abner
 * @param $className, nome da classe com namespace
 * facilita os imports, porém torna-se
 */

 session_start();

function autoload($ClassName)
{
	$arquivo = __DIR__."/../".strtr($ClassName,'\\','/').".php";
	if(file_exists($arquivo))
	{
		include_once $arquivo;
	}
}

// Apenas para verificar alguns arrays :: Uso para DEV
function getPreA(array $string){
    echo '<pre>';
        print_r($string);
    echo '</pre>';
}

function getPre($string){
    echo '<pre>';
		print_r($string);
    echo '</pre>';
}

spl_autoload_register('autoload');
?>