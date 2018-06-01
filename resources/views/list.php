<h1>LIST OF SONGS</h1>

<h2><a href=<?= SITE_URL . "/?page=authors" ?>>LIST OF AUTHORS</a></h2>
<table>
    <tr>
        <th>Name</th>
        <th>Code</th>
        <th>Author</th>
        <th>Description</th>
        <th>Date</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($songs as $song) : ?>
        <tr>
            <td><a href=<?= SITE_URL . "/?page=detail&id={$song->id}" ?>><?= $song->name ?></a></td>
            <td><a href="https://www.youtube.com/watch?v=<?= $song->code ?>">Youtube</a></td>
            <td><a href=<?= SITE_URL . "/?page=author&id={$song->author_id}" ?>><?= $song->author_name ?></a></td>
            <td><?= $song->description ?></td>
            <td><?= $song->date ?></td>
            <td><a href=<?= SITE_URL . "/?page=edit&id={$song->id}" ?>>EDIT</a></td>
            <td><a onclick="return confirm('Are you sure you want to delete <?= $song->name ?>?')" href=<?= SITE_URL . "/?page=delete&id={$song->id}" ?>>DELETE</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href=<?= SITE_URL . "/?page=edit" ?>>INSERT</a>

<style>
    th {
        text-align: left;
    }
</style>
