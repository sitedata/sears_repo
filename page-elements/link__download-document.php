<?php

$_defaults = array(
  'url' => '#',
  'text' => 'Download PDF',
  'icon_dir' => get_icons_dir(),
);

$data = array_merge( $_defaults, $data );

?>
<a href="<?php echo $data['url'] ?>"
  data-href="<?php echo $data['url'] ?>"
  class="link__download link__download-document">
  <img src="<?php echo $data['icon_dir'] . 'icon-document.png' ?>"
    alt="Document Icon"
    class="icon-document icon__document">
  <span class="font--primary3 link--text link__text"><?php echo $data['text'] ?></span>
</a>
