<h1>LIST OF SONGS</h1>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Code</th>
        <th>Author</th>
        <th>Decription</th>
        <th>Date</th>
        <th>Url</th>
        <th>Html_url</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($songs as $song) : ?>
        <tr>
            <td><?= $song->id ?></td>
            <td><?= $song->name ?></td>
            <td><?= $song->code ?></td>
            <td><?= $song->author ?></td>
            <td><?= $song->description ?></td>
            <td><?= $song->date ?></td>
            <td><?= $song->url ?></td>
            <td><?= $song->html_url ?></td>
            <td><a href=<?= SITE_URL . "/?page=detail&id={$song->id}" ?>>DETAIL</a></td>
            <td><a href=<?= SITE_URL . "/?page=edit&id={$song->id}" ?>>EDIT</a></td>
            <td><a href=<?= SITE_URL . "/?id={$song->id}" ?>>DELETE</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<style>
    th {
        text-align: left;
    }
</style>
