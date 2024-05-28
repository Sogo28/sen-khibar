<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=News+Cycle:wght@400;700&display=swap" rel="stylesheet">
  <title>Sen Khibar</title>
</head>

<body>
  <div class="top-bar">
    <div class="logo-container"><span class="logo">Sen Khibar</span></div>
    <?php require_once 'components/header.php' ?>
  </div>
  <div class="container">
    <div class="articles-container">
      <?php if (!empty($articles)): ?>
        <?php foreach ($articles as $article): ?>
          <a href="index.php?action=article&id=<?= $article['id'] ?>">
            <div class="article">
              <h3 class="titre"><?= $article['titre'] ?></h3>
              <p class="contenu"><?= $article['contenu'] ?></p>
            </div>
          </a>
        <?php endforeach ?>
      <?php else: ?>
        <div>Pas d'informations croustillantes pour le moment.</div>
      <?php endif ?>
    </div>
  </div>
</body>

</html>