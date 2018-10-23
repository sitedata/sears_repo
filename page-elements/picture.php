<?php
/**
Creates a <picture> element
*/

$_def = array(
  'picture' => array(
    array(
      'media' => '',
      'srcset' => '',
    ),
  ),
  'picture_class' => 'picture',
  // string of attributes, e.g., itemprop, etc.
  'picture_attr' => '',
  'img' => '',
  'alt' => 'Alternative text.',
  'img_class' => 'picture__img',
  // string of attributes, e.g., itemprop, etc.
  'img_attr' => '',
);

$data = array_merge( $_def, $data );


$img_dir = get_image_dir();

?>
<picture <?php echo $data['picture_attr'] ?> class="<?php echo $data['picture_class'] ?>">
<?php foreach ($data['picture'] as $p): ?>
  <source media="<?php echo $p['media'] ?>" srcset="<?php echo $img_dir . $p['srcset'] ?>">
<?php endforeach; ?>
  <img src="<?php echo $img_dir . $data['img'] ?>"
    alt="<?php echo $data['alt'] ?>"
    <?php echo $data['img_attr'] ?>
    class="<?php echo $data['img_class'] ?>">
</picture>
