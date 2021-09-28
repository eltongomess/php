<?php

include "servico/servicoMensagemsessao.php";
include "servico/servicoValidacao.php";
include "servico/servicoCategoriaCompetidor.php";
   
$nome = $_POST['nome'];
$idade = $_POST ['idade'] ;

defineCategoriaCompetidor($nome,$idade);

header('location:index.php');