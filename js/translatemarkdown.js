
$(function () {
  var converter = new Showdown.converter();
  $('*[data-markdown=""]').each(function () {
    var $this = $(this);
    $this.html( converter.makeHtml($this.html().trim()) );
  });
});

