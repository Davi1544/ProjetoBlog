<?php
    date_default_timezone_set('America/Sao_Paulo');
    require_once 'includes/funcoes.php'; 
    require_once 'core/conexao_mysql.php';
    require_once 'core/sql.php';
    require_once 'core/mysql.php';

    $salt = 'ifsp';

    $dados = [
        'nome' => 'Davi',
        'email' => 'admin@gmail.com',
        'senha' => crypt ('1234', $salt),
        'ativo' => 1,
        'adm' => 1
    ];

    insere(
        'usuario',
        $dados
    )
?>