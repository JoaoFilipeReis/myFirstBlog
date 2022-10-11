<?php

require_once 'config.php';
require_once 'head.php'; 

$query = 'SELECT * FROM posts';
$sql = $pdo->prepare($query);

if ($sql->execute()) {
    $posts = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    $posts = [];
}

?>

<div class="page container">
    <section>
        <h3>Latest Posts</h3>
        <div class="news">
            <?php foreach ($posts as $post) : ?>
            <div class="content">
                <h2><?php echo $post['title']; ?></h2>
                <p><?php echo $post['content']; ?></p>
            </div>
            <p>Author: <span class="author"><?php echo $post['author']; ?></span></p>
            <p>Date: <span class="date"><?php echo $post['created_at']; ?></span></p>
            <div class="blog-action flex flex-end">
                <a href="blog-update.php?id=<?php echo $post['id'] ?>">"Editar"</a> | 
                <a onclick="return confirm('Tem certeza?');" href="blog-delete.php?id=<?php echo $post['id'] ?>">Apagar</a>
            </div>
            <?php endforeach; ?>
        </div>

<?php

require_once 'foot.php';