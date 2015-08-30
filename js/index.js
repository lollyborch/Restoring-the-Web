(function (){
  var $editorContainer = $('.news-item-container'),
      $editor = $('#editor'),
      $preview = $('#preview'),
      $editorControls = $('.editor-controls'),
      $editorControlsToggle = $('.editor-controls-toggle'),
      $editorControlButtons = $('.control-buttons'),
      aceEditor,
      resizable = true,
      testMarkup = '<h1>News Item Title</h2>\n<section>\nPop-up artisan reprehenderit single-origin coffee. Wolf voluptate pickled, lomo Bushwick non labore. Neutra selvage readymade tote bag, irure consectetur gluten-free aliquip fugiat pop-up. Vice eu vero anim, cray McSweeneys you probably havent heard of them pickled. Est small batch bespoke drinking vinegar. Direct trade delectus mustache, elit viral ennui master cleanse literally nostrud pickled street art swag small batch dolore mlkshk. Try-hard disrupt sapiente tattooed master cleanse.\n</section>\n<br />\n<section>\nAdipisicing anim PBR&B, mixtape American Apparel voluptate VHS kale chips jean shorts. Leggings qui magna shabby chic, swag laborum 3 wolf moon semiotics ethical brunch ad Neutra. Kale chips freegan letterpress dolor ea. Marfa single-origin coffee blog cillum Intelligentsia. Ex High Life ea, hashtag dolor ethnic fingerstache Portland +1 gastropub cred quis Blue Bottle Tumblr. Ethnic VHS et food truck consequat, PBR&B Tonx brunch cred freegan fap. Typewriter Helvetica church-key, small batch id pop-up hashtag readymade actually cliche kogi sapiente synth ethical.\n</section>';
  
  
  function setupEditor () {
    aceEditor = ace.edit("editor");
    aceEditor.setShowPrintMargin(false);
    aceEditor.getSession().setUseWorker(false);
    aceEditor.getSession().setMode("ace/mode/html");
    aceEditor.getSession().on('change', updatePreview);
    aceEditor.setValue(testMarkup);
  }
  
  function setupEvents () {
    $editorControlsToggle.on('click', toggleEditorControls);
    $editorControlButtons.find('.btn').on('click', controlButtonClicked);
  }
  
  function toggleEditorControls (evt) {
    //$(this).find('i').toggleClass('fa-chevron-down');
    //$(this).find('i').toggleClass('fa-chevron-up');
    $editorControls.toggleClass('open');
    $editor.toggleClass('controls-open');
  }
  
  function controlButtonClicked (evt) {
    var action = $(this).data('action');
    console.log("action: ", action);
  }
  
  function updatePreview () {
    var editorContent = aceEditor.getSession().getValue();
    $preview.contents().find('body').html(editorContent);
  }

  setupEditor();
  setupEvents();



  $(window).trigger('resize');
}());