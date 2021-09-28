<?php



function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{   

    $categorias = [];
    $categorias[] = 'infantil';
    $categorias[] = 'adolescente';
    $categorias[] = 'adulto';

    if(validaNome($nome)&&validadeIdade($idade))

    if($idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
        {
         setarMessagemSucesso('O nadador '.$nome. ' compete na categoria infantil e tem ' .$idade.' anos.');          
           return null;
        }
    }
        
}
else if($idade >= 13 && $idade <= 18)
{
for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
        {
           setarMessagemSucesso('O nadador '.$nome. ' compete na categoria adolescente e tem '.$idade.' anos.');           
            return null;
        }
    }
   
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'adulto')
        {
            setarMessagemSucesso('O nadador '.$nome. ' compete na categoria adulto e tem ' .$idade.' anos.');
           
            return null;
        }
    }
}
else
{
    return obterMensagemErro();

}

}




