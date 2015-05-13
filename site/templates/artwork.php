<?php snippet('header') ?>

<main class="main" role="main">
<?php echo param("tag") ?>
<div class="text">
<h1><?php echo $page->title()->html() ?></h1>
<?php echo $page->text()->kirbytext() ?>
</div>

<!-- 	// $cena = date('Y')
	// echo date('Y');
	// $items = $page->children()->filterBy('date', '<', time());
	// print_r($items);  -->  
 <?php foreach($page->children()->filterBy('year', '<', '2014-01-01') as $article): ?>

  <article>
    <h1><?php echo $article->title()->html() ?></h1>
    <p><?php echo $article->year() ?></p>
    <p><?php echo $article->text()->excerpt(300) ?></p>
  </article>

  <?php endforeach ?>
	


  </main>

<?php snippet('footer') ?>