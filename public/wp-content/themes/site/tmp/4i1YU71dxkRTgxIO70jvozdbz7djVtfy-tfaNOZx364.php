<home-page inline-template<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
  <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'home-page',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
    <div id="top_left"<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'clouds_TL',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>></div>
    <div id="middle"<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'clouds_M',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>></div>
    <div id="top_right"<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'clouds_TR',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>></div>
    <div id="layer1"<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'layer1_car',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>></div>
    <div id="layer2"<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'layer2_building',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>></div>
    <div id="layer3"<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'layer3_sky',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>></div>
    <?php echo \Jade\Compiler::getUnescapedValue(pug('home/featured_box')) ?> 
    <?php echo \Jade\Compiler::getUnescapedValue(pug('home/middle_content')) ?> 
    <?php echo \Jade\Compiler::getUnescapedValue(pug('home/home_hero')) ?> 
  </div>
</home-page>
