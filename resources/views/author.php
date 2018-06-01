<h1><?= $author->name ?></h1>
<p><?= $author->birth ?></p>
<p><?= $author->biography ?></p>
<h2>Songs</h2>
<table>
    <th>Song</th>
    <th>Youtube</th>
    <?php foreach ($songs as $song) : ?>
        <tr>
            <td><a href=<?= SITE_URL . "/?page=detail&id={$song->id}" ?>><?= $song->name ?></a></td>
            <td><a href="https://www.youtube.com/watch?v=<?= $song->code ?>">Youtube</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<p><?= $author->photo ?></p>

<a href="/">BACK</a>

<style>
    th {
        text-align: left;
    }
</style>