<?php
/**
Recipe - ingredient list
*/

$ingredients = isset( $ingredients ) ?
  $ingredients :
  array(
    'headline' => 'Ingredients',
    'list' => array()
  );

?>
<h2 class="headline"><?php echo $ingredients['headline'] ?></h2>
<ul class="ingredient-list">
<?php foreach( $ingredients['list'] as $ingredient ): ?>
  <li itemprop="recipeIngredient"><?php echo htmlspecialchars( $ingredient ) ?></li>
<?php endforeach; ?>
</ul>
