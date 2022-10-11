<?php

require_once 'config.php';

if (
    !empty($_POST['title'])  &&
    !empty($_POST['author']) &&
    !empty($_POST['created_at']) &&
    !empty($_POST['content']) 
) {
    $query = 'UPDATE posts SET title = ?, author = ?, created_at = ?, content = ? WHERE id = ?';
    $sql = $pdo->prepare($query);
    if ($sql->execute([
        $_POST['title'],
        $_POST['author'],
        $_POST['created_at'],
        $_POST['content'],
        $_GET['id']
    ])) {
        echo "Post atualizado com sucesso";
    } else {
        echo "Não foi possível atualizar o post, tente novamente";
    }
} 
    $query = 'SELECT * FROM posts WHERE id = ?';
    $sql = $pdo->prepare($query);
    if ($sql->execute(
        [$_GET['id']])) {
        $post = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        $post = [];
    }

require_once 'head.php'; ?>

<div class="page container">
    <section>
        <h3>Update - Post</h3>
        <form class="form" method="POST" action="blog-update.php?id=<?php echo $_GET['id']; ?>"> 
            <div class="form-field">
                <label for="title">Título</label>
                <input type="text" name="title" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-field">
                <label for="author">Autor</label>
                <input type="text" name="author" value="<?php echo $post['author']; ?>">
            </div>
            <div class="form-field">
                <label for="created_at">Data</label>
                <input type="text" name="created_at" value="<?php echo $post['created_at']; ?>">
            </div>
            <div class="form-field">
                <label for="created_at">Conteúdo</label>
                <textarea name="content" cols="30" rows="10" value="<?php echo $post['content']; ?>"></textarea>
            </div>
            <div class="form-field">
                <button>Guardar</button>
            </div>
        </form>
    </section>
</div>

<?php

require_once 'foot.php';
