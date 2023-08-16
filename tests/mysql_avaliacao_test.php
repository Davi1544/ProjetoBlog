<?php

/*
CREATE TABLE avaliacao (
    id int NOT NULL AUTO_INCREMENT, 
    nota int NOT NULL,
    comentario varchar(255) NOT NULL,
    usuario_id int NOT NULL,
    post_id int NOT NULL,
    data_criacao datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    CONSTRAINT fk_avaliacao_usuario FOREIGN KEY (usuario_id) REFERENCES usuario (id), CONSTRAINT fk_avaliacao_post FOREIGN KEY (post_id) REFERENCES post (id)
);
*/
    require_once '../includes/funcoes.php';
    require_once '../core/conexao_mysql.php';
    require_once '../core/sql.php';
    require_once '../core/mysql.php';

    insert_teste ('Que meu', 2, 1, 2, 'now()'); 
    buscar_teste(44);
    update_teste (44, 'Não ficou legal', 34, 1, 2, 'now()'); 
    //delete_teste(2);
    /*
    update_teste (2, 'murilo', 'silva@gmail.com'); 
    buscar_teste();*/

    //Teste inserção banco de dados
    function insert_teste ($comment, $nota, $usuario_id, $post_id, $data_criacao): void{
        $dados = ['comentario' => $comment, 'nota' => $nota, 'usuario_id' => $usuario_id, 'post_id' => $post_id, 'data_criacao' => $data_criacao]; insere ('avaliacao', $dados);
    }

    // Teste select banco de dados 
    function buscar_teste($id): void{
        $usuarios = buscar ('avaliacao', ['*'], [['id', '=', $id]], ''); print_r($usuarios);
    }
    
    // Teste update banco de dados
    function update_teste ($id, $comment, $nota, $usuario_id, $post_id, $data_criacao): void{

        $dados = ['comentario' => $comment, 'nota' => $nota, 'usuario_id' => $usuario_id, 'post_id' => $post_id, 'data_criacao' => $data_criacao]; 
        $criterio = [['id', '=', $id]];
        atualiza ('avaliacao', $dados, $criterio);
    }
   
    function delete_teste($id): void{
        $usuarios = deleta ('avaliacao', [['id', '=', $id]], ''); print_r($usuarios);
    }
?>