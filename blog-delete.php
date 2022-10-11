<?php 
require_once 'config.php';

if (empty($_GET['id']) && !(int)$_GET['id']) {
    // Disparamos a mensagem abaixo.
    echo "Identificação inválida, tente novamente";
};

// declaração
$query = 'DELETE from posts WHERE id = ?';
// preparação 
$sql = $pdo->prepare($query);
// execução
if ($sql->execute([$_GET['id']])) {
    echo "Post apagado com sucesso.";
} else {
    echo "Não foi possível apagar o post, tente novamente.";
}

