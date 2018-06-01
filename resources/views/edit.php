

<form action="" method="post">
    Name:<br><input type="text" name="name" value="<?= htmlspecialchars($song->name) ?>"><br>
    Code:<br><input type="text" name="code" value="<?= htmlspecialchars($song->code) ?>"><br>
    Author:<br><input type="text" name="author" value="<?= htmlspecialchars($song->author) ?>"><br>
    Description:<br><textarea name="description" id="" cols="30" rows="10">
                        <?= htmlspecialchars($song->description) ?>
                    </textarea><br>
    <input type="submit">
</form>