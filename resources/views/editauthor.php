<form action="" method="post">
    Name:<br><input type="text" name="name" value="<?= htmlspecialchars($author->name) ?>"><br>
    Birth:<br><input type="date" name="birth" value="<?= htmlspecialchars($author->birth) ?>"><br>
    Biography:<br><textarea name="biography" id="" cols="30" rows="10">
                        <?= htmlspecialchars($author->biography) ?>
                    </textarea><br>
    Photo:<br><input type="text" name="photo" value="<?= htmlspecialchars($author->photo) ?>"><br>
    <input type="submit">
</form>