(function ($) {
  function bindMedia(wrapper) {
    var $wrap = $(wrapper);
    var $id = $wrap.find('.bdc-hf-media__id');
    var $preview = $wrap.find('.bdc-hf-media__preview');
    var $remove = $wrap.find('.bdc-hf-media__remove');
    var frame;

    $wrap.on('click', '.bdc-hf-media__choose', function (event) {
      event.preventDefault();

      if (frame) {
        frame.open();
        return;
      }

      frame = wp.media({
        title: 'Choose image',
        button: { text: 'Use this image' },
        multiple: false,
      });

      frame.on('select', function () {
        var attachment = frame.state().get('selection').first().toJSON();
        var url = (attachment.sizes && attachment.sizes.medium)
          ? attachment.sizes.medium.url
          : attachment.url;

        $id.val(attachment.id);
        $preview.attr('src', url).prop('hidden', false);
        $remove.prop('hidden', false);
      });

      frame.open();
    });

    $wrap.on('click', '.bdc-hf-media__remove', function (event) {
      event.preventDefault();
      $id.val('0');
      $preview.attr('src', '').prop('hidden', true);
      $remove.prop('hidden', true);
    });
  }

  $(function () {
    $('[data-bdc-media]').each(function () {
      bindMedia(this);
    });
  });
})(jQuery);
