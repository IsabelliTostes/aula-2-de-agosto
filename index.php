<?php
/*1-
echo date ('Y-m-d H:i:s') . "<br/>";
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i');


echo date ('D');

2-
$pudim= ['calda' , 'açúcar' , 'gelatina'];
echo $pudim[1];
echo $pudim[0];
echo $pudim[2];


$feijao=[
 "qualidade" => "preto",
 "preço" => 9.99,
 "prato" => "feijoada"
];
echo $feijao ["qualidade"];
echo $feijao ["prato"]


3-
$bebidas=
[

    [
        "sabor" => "coca-cola",
        "categoria" => "refrigereante",
        "marca" => "coca-cola"
    ],

    [
        "sabor" => "blueberry",
        "categoria" =>"bebida alcoolica",
        "marca" => "asKov"
    ],

    [
        "sabor" => "maracujá",
        "categoria" =>"concentrado de suco",
        "marca" => "manguari"
    ]

];

echo $bebidas [2] ["sabor"];
echo $bebidas [2] ["categoria"];
echo $bebidas [2] ["marca"]


Desafio pra casa-
*/
$lista_frutas= ['Banana' , 'Pera' , ' Tomate' , 'Goiaba'];
$existe = array_search ('Banana' , $lista_frutas);

if($existe != null) 
{
    echo "o valor existe";
}
else {
    echo "o valor nao existe";
}

/*

$lista_frutas= ['Banana' , 'Pera' , ' Tomate' , 'Goiaba'];
$existe = in_array ('Banana' , $lista_frutas);
echo ($existe);
*/

?>


