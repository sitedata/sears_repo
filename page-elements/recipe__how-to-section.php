<?php
$_defaults = array(
  'how-to-position' => 1,
  'tag' => 'section',
  'id' => 'recipe-section' . mt_rand(),
  'class' => 'recipe-section',
  'extra_classes' => '', // lets us add classes without overwriting defaults!
  'headline' => 'Instructions',
  'copy' => '',
  'steps' => array(
    array(
      'headline' => 'I am an optional headline for this step.',
      'copy' => 'Talking about how to do the thing goes here. Also optional but then why have the step?',
    ),
  ),
);

// backup $data before merging!
// actually, we can do this in element()...

$data = array_merge( $_defaults, $data );

$data['class'] .= ' ' . $data['extra_classes'];

// $i = 1;
?>
<section id="<?php echo $data['id'] ?>"
  class="<?php echo $data['class'] ?>"
  itemprop="step" itemscope
  itemtype="http://schema.org/HowToSection">
  <h2 class="headline font-50 font--900 font--white text-align-center" itemprop="name"><?php echo $data['headline'] ?></h2>
  <meta itemprop="position" content="<?php echo $data['how-to-position'] ?>"/>
  <?php if ( !empty( $data['copy'] ) ): ?>
  <p class="recipe-section__description font-31"><?php echo $data['copy'] ?></p>
  <?php endif; ?>
  <ol class="recipe-section__step-list font-31">
    <?php foreach ( $data['steps'] as $i => $step ): ?>
    <li class="recipe-section__step font-31"
      itemprop="itemListElement"
      itemscope itemtype="http://schema.org/HowToStep">
      <meta itemprop="position" content="<?php echo $i + 1 ?>"/>
      <?php if ( !empty( $step['headline'] ) ): ?>
      <strong class="recipe-section__step--headline font-31"
        itemprop="name"><?php echo $step['headline'] ?></strong>
      <?php endif; ?>
      <?php if ( !empty( $step['copy'] ) ): ?>
<?php
  if ( !is_array( $step['copy'] ) ) {
    $step['copy'] = array(
      array(
        'type' => 'direction',
        'text' => $step['copy'],
      )
    );
  }
?>
        <?php foreach( $step['copy'] as $j => $sc ): ?>
      <span class="font-31"
        itemprop="itemListElement"
        itemscope
        itemtype="http://schema.org/HowTo<?php echo ucfirst( $sc['type'] ) ?>">
        <meta itemprop="position" content="<?php echo $j + 1 ?>"/>
        <span class="recipe-section__step-text font--black font--400 font-31"
          itemprop="text"><?php echo $sc['text'] ?></span>
      </span>
        <?php endforeach; ?>
      <?php endif; ?>
    <?php endforeach; ?>
  </ol>
</section>
