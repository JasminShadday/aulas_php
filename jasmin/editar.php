<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'sebrae123';
$banco = 'etec';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if ($conexao -> connect_error){
      echo "não foi possível conectar";
}else{
    echo "conectado com sucesso";
}
?> 