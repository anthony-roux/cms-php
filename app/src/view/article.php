<?php


// var_dump($posts);

?>

<?php foreach ($posts as $post) {

?>
  <article id="article_<?= $post->getId() ?>" class="article_<?= $post->getId() ?> article card m-3" style="width:100%; max-width:388px;">
    <img src="../<?= $post->getImage() ?>" class="card-img-top img-thumbnail" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?= $post->getTitle() ?></h5>
      <p class="card-text"><?= $post->getContent() ?></p>
      <a href="#" class="btn btn-primary btn-primary--custom">Voir plus</a>
    </div>
  </article>
<?php } ?>