<?php 
require_once 'config.php';
require_once 'head.php';


if (
    !empty($_POST['title'])  && 
    !empty($_POST['author']) && 
    !empty($_POST['content']) 
) {
    $query = 'INSERT INTO posts (title, author, content) VALUES (?, ?, ?)';
    $sql = $pdo->prepare($query);
    if ($sql->execute([
        $_POST['title'],
        $_POST['author'],
        $_POST['content']
    ])) {
        echo "Post criado com Sucesso!";
    } else {
        echo "Erro ao criar Post. Tente novamente!";
    }
};

?>


<div class="page container">
    <section>
        <h3>Create - Post</h3>
        <form class="form" method="POST" action="blog-create.php">
            <div class="form-field">
                <label for="">Título</label>
                <input type="text" name="title">
            </div>
            <div class="form-field">
                <label for="">Autor</label>
                <input type="text" name="author">
            </div>
            <div class="form-field">
                <label for="created_at">Data</label>
                <input type="date" id="datepicker" name="created_at">
            </div>
            <div class="form-field">
                <label for="created_at">Conteúdo</label>
                <textarea id="editor" name="content" cols="30" rows="10"></textarea>
            </div>
            <div class="form-field">
                <button>Guardar</button>
            </div>
        </form>
    </section>
</div>

<?php

require_once 'foot.php';