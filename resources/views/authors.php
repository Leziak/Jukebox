<h1>LIST OF AUTHORS</h1>

<h2><a href="/">LIST OF SONGS</a></h2>
<table>
    <tr>
        <th>Name</th>
        <th>Birth</th>
        <th>Biography</th>
    </tr>
    <?php foreach($authors as $author) : ?>
        <tr>
            <td><a href=<?= SITE_URL . "/?page=author&id={$author->id}" ?>><?= $author->name ?></a></td>
            <td><?= $author->birth ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<style>
    th {
        text-align: left;
    }
</style>