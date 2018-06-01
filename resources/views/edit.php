<?php $authors = \app\Author::select("SELECT * FROM `authors`"); ?>

<form action="" method="post">
    Name:<br><input type="text" name="name" value="<?= htmlspecialchars($song->name) ?>"><br>
    Code:<br><input type="text" name="code" value="<?= htmlspecialchars($song->code) ?>"><br>
    Author:<br>
    <select name="author_id">

        <?php foreach($authors as $author) : ?>
            <option value="<?= $author->id ?>" <?php echo $author->id==$song->author_id ? 'selected' : null ?>><?= $author->name ?></option>
        <?php endforeach; ?>

    </select><br>
    Description:<br><textarea name="description" id="" cols="30" rows="10">
                        <?= htmlspecialchars($song->description) ?>
                    </textarea><br>
    <input type="submit">
</form>