
<?php include __DIR__ . '/../head-html.php'?>

<a href="/form-novo-curso" class="btn btn-primary mb-2">Add curso</a>
<ul class="list-group" style="display:flex; justify-content:space-between" >
    <?php foreach ($cursos as $curso): ?>
        <li class="list-group-item">
            <?= $curso->getDescricao(); ?>
            <a href="/del-curso?id=<?= $curso->getId(); ?>" class="btn btn-danger btn-sm">Excluir</a>
            <a href="/alt-curso?id=<?= $curso->getId(); ?>" class="btn btn-warning btn-sm">Alterar</a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include __DIR__ . '/../footer-html.php'?>
