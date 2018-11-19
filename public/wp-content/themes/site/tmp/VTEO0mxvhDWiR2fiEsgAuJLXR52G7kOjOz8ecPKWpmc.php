<hero inline-template<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
  <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'hero',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
    <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'logo',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
      <?php if($image = get_field('kitty_logo')) { ?> 
        <img<?php if (true === ($__value = $image['url'])) {  ?> src<?php } else if (\Jade\Compiler::isDisplayable($__value)) {  ?> src="<?php echo \Jade\Compiler::getEscapedValue($__value, '"') ?>"<?php } ?><?php if (true === ($__value = $image['alt'])) {  ?> alt<?php } else if (\Jade\Compiler::isDisplayable($__value)) {  ?> alt="<?php echo \Jade\Compiler::getEscapedValue($__value, '"') ?>"<?php } ?><?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>      <?php } ?> 
    </div>
    <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'headline',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
      <h1><?php echo \Jade\Compiler::getUnescapedValue(get_field('headline')) ?></h1>
    </div>
  </div>
</hero>
