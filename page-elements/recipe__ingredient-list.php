<?php
/**
Recipe - ingredient list
*/

/**
 If this is the first ingredient list on the page, make a constant so we can
 ensure all auto-generated ingredient list ids are unique!
 NOTE: we can prevent duplicate ids passed in $data by not doing that. ;-)
*/
$id_suffix = '';
if ( !defined( 'RECIPE_INGREDIENT_LIST' ) ) {
  define( 'RECIPE_INGREDIENT_LIST', true );
}
else {
  $id_suffix = '-' . mt_rand();
}

$_defaults = array(
  'tag' => 'section',
  'id' => 'ingredients' . $id_suffix,
  'class' => 'recipe-section recipe__ingredient-list',
  'headline' => 'Ingredients',
  'copy' => '',
  'list' => array(
    'stuff to buy',
  ),
);

$data = array_merge( $_defaults, $data );

// $ingredients = isset( $ingredients ) ?
//   $ingredients :
//   array(
//     'headline' => 'Ingredients',
//     'list' => array()
//   );

?>
<section id="<?php echo $data['id'] ?>"
  class="<?php echo $data['class'] ?>">
  <h2 class="headline font-50 font--white font--900"><?php echo $data['headline'] ?></h2>
  <?php if ( !empty( $data['copy'] ) ): ?>
  <p class="recipe__ingredient-list--text font-31 font--424242"><?php echo $data['copy'] ?></p>
  <?php endif; ?>
  <ul class="font-31">
  <?php foreach( $data['list'] as $ingredient ): ?>
    <li><span class="recipe__ingredient font--black font--400" itemprop="recipeIngredient"><?php echo htmlspecialchars( $ingredient ) ?></span></li>
  <?php endforeach; ?>
  </ul>
</section>
