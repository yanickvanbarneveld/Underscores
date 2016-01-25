<?php if (!defined('FW')) die('Forbidden'); ?>

<<?php echo esc_attr($atts['size']) ?>>
	<?php echo esc_attr($atts['label']) ?>

	<?php echo (isset($atts['secondary']) && $atts['secondary']) ? '<small class="text-muted">' . esc_attr($atts['secondary']) . '</small>' : ''; ?>
</<?php echo esc_attr($atts['size']) ?>>