<?php
/**
Tip box
*/

// defaults
$_def = array(
  'label' => 'Tip',
  'headline' => '', // bold part
  'text' => '', // reg'l'r part
);

/**
NOTE: $data is preserved in a variable named $__data by the element() function
  just in case you need it later!
*/
$data = array_merge( $_def, $data );

?>
<aside class="tip-box">
  <div class="tip-box__head font--white font-50 lh-sm"><?php echo $data['label'] ?></div>
  <div class="tip-box__body font--black">
  <?php if ( !empty( $data['headline'] ) ): ?>
    <div class="tip-box__body--headline font--700 font-31 lh-sm"><?php echo $data['headline'] ?></div>
  <?php endif; ?>
  <?php if ( !empty( $data['text'] ) ): ?>
    <div class="tip-box__body--text font-31 lh-sm"><?php echo $data['text'] ?></div>
  <?php endif; ?>
  </div>
</aside>
<?php
