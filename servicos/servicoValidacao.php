<?php

function validaNome(string $nome) : bool
{
    if(empty($nome))
    {
        setarMessagemErro('O nome não pode ser vazio');
         return false;
                
    }

else if(strlen($nome)< 3)    
    {

        setarMessagemErro('O nome deve conter mais de três caracteres');
         return false;
    }

 else if(strlen($nome) > 40)
    {  setarMessagemErro('O nome é muito extenso!'); 
        return false;
                
    }
    return true;
}

function validadeIdade (string $idade) : bool
{
  if (!is_numeric($idade))
    {   
       setarMessagemErro('Informe um número para idade');
        return false;
    }
  
    return true;
}