<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

//print_r($categorias);

$nome = 'Luiz';
$idade = 16;

//var_dump($nome);
//var_dump($idade);

if($idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo 'O nadador '.$nome. ' compete na categoria infantil e tem ' .$idade.' anos.';
        }
        
}
elseif($idade >= 13 && $idade <= 18)
{
for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo 'O nadador '.$nome. ' compete na categoria adolescente e tem '.$idade.' anos.';
        }
   
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
            echo 'O nadador '.$nome. ' compete na categoria adulto e tem ' .$idade.' anos.';
        }
}
