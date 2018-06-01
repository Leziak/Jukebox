<h1>LIST OF SONGS</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Code</th>
        <th>Author</th>
        <th>Decription</th>
        <th>Date</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($songs as $song) : ?>
        <tr>
            <td><?= $song->id ?></td>
            <td><?= $song->name ?></td>
            <td><a href="https://www.youtube.com/watch?v=<?= $song->code ?>">Youtube</a></td>
            <td><?= $song->author ?></td>
            <td><?= $song->description ?></td>
            <td><?= $song->date ?></td>
            <td><a href=<?= SITE_URL . "/?page=detail&id={$song->id}" ?>>DETAIL</a></td>
            <td><a href=<?= SITE_URL . "/?page=edit&id={$song->id}" ?>>EDIT</a></td>
            <td><a href=<?= SITE_URL . "/?page=delete&id={$song->id}" ?>>DELETE</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href=<?= SITE_URL . "/?page=edit" ?>>INSERT</a>

<style>
    th {
        text-align: left;
    }
</style>
