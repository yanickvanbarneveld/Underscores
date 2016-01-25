<?php if (!defined('FW')) die('Forbidden'); ?>

<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="btn <?php echo esc_attr($atts['color']); ?> <?php echo esc_attr($atts['size']); ?>">
	<span><?php echo $atts['label']; ?></span>
</a>