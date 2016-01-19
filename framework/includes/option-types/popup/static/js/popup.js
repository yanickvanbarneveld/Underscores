(function ($, _, fwEvents, window) {
	var popup = function () {
		var $this = $(this),
			$defaultItem = $this.find('.item.default'),
			nodes = {
				$optionWrapper: $this,
				$itemsWrapper: $this.find('.items-wrapper'),
				$disabledItem: $defaultItem.clone().removeClass('default').addClass('disabled'),
				getDefaultItem: function () {
					return $defaultItem.clone().removeClass('default');
				}
			},
			data = JSON.parse(nodes.$optionWrapper.attr('data-for-js')),
			utils = {
				modal: new fw.OptionsModal({
					title: data.title,
					options: data.options,
					size : data.size
				}),
				editItem: function (item, values) {
					item.find('input').val( JSON.stringify( values ) );
				}
			};

		nodes.$itemsWrapper.on('click', '.item > .button', function (e) {
			e.preventDefault();

			var values = {},
				$item = $(this).closest('.item'),
				$input = $item.find('input');

			if ($input.length && $input.val().length ) {
				values = JSON.parse($input.val());
			}

			utils.modal.set('edit', true);
			utils.modal.set('values', values, {silent: true});
			utils.modal.set('itemRef', $item);
			utils.modal.open();
		});

		utils.modal.on('change:values', function (modal, values) {
			utils.editItem(utils.modal.get('itemRef'), values);

			fwEvents.trigger('fw:option-type:popup:change', {
				element: $this,
				values: values
			});
		});
	};

	fwEvents.on('fw:options:init', function (data) {
		data.$elements
			.find('.fw-option-type-popup:not(.fw-option-initialized)').each(popup)
			.addClass('fw-option-initialized');
	});
})(jQuery, _, fwEvents, window);
