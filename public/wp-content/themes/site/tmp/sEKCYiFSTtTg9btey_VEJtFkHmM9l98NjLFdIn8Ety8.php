<featured_box inline-template<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
  <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'home-page-featured-boxes',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
    <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'wrapped',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
      <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'featured_box_container',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
        <?php if(have_rows('featured_box')) { ?> 
          <?php while(have_rows('featured_box')) { ?> 
            <?php the_row() ?> 
            <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'featured-box',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
              <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'featured-video',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
                <?php if($image = get_sub_field('featured_img')) { ?> 
                  <visual<?php if (true === ($__value = visualImgs($image))) {  ?> :image<?php } else if (\Jade\Compiler::isDisplayable($__value)) {  ?> :image="<?php echo \Jade\Compiler::getEscapedValue($__value, '"') ?>"<?php } ?> background=""<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>></visual>
                <?php } ?> 
              </div>
              <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'featured-logo',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
                <?php if($simage = get_sub_field('featured_logo')) { ?> 
                  <img<?php if (true === ($__value = $simage['url'])) {  ?> src<?php } else if (\Jade\Compiler::isDisplayable($__value)) {  ?> src="<?php echo \Jade\Compiler::getEscapedValue($__value, '"') ?>"<?php } ?><?php if (true === ($__value = $simage['alt'])) {  ?> alt<?php } else if (\Jade\Compiler::isDisplayable($__value)) {  ?> alt="<?php echo \Jade\Compiler::getEscapedValue($__value, '"') ?>"<?php } ?><?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>                <?php } ?> 
              </div>
              <p<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'copy',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>><?php echo \Jade\Compiler::getUnescapedValue(get_sub_field('featured_copy')) ?></p>
              <div<?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
  0 => 'featured-btn',
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>
                <?php $ctaurl != get_sub_field("fetured_cta") ?> 
                <a<?php if (true === ($__value = $ctaurl)) {  ?> href<?php } else if (\Jade\Compiler::isDisplayable($__value)) {  ?> href="<?php echo \Jade\Compiler::getEscapedValue($__value, '"') ?>"<?php } ?><?php $__classes = implode(" ", array_unique(array_merge(empty($__classes) ? array() : explode(" ", $__classes), array (
), array())) ); ?><?php if (!empty($__classes)) { echo ' class="' . $__classes . '"'; } unset($__classes);  ?>>Launch Site</a>              </div>
            </div>
          <?php } ?> 
        <?php } ?> 
      </div>
    </div>
  </div>
</featured_box>
