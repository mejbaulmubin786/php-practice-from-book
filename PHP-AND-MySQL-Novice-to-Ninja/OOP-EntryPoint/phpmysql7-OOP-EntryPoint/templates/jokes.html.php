<p><?=$totalJokes?> jokes have been submitted to the Internet Joke Database.</p>

<?php foreach ($jokes as $joke): ?>
<blockquote>
  <p>
  <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>

  (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES,'UTF-8'); ?>"><?=htmlspecialchars($joke['name'],ENT_QUOTES, 'UTF-8'); ?></a>)

  <a href="index.php?edit&amp;id=<?=$joke['id']?>">Edit</a>

  <form action="index.php?delete" method="post">
    <input type="hidden" name="id" value="<?=$joke['id']?>">
    <input type="submit" value="Delete">
  </form>
  </p>
</blockquote>
<?php endforeach; ?>