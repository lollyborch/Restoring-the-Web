(function (){
  var $editorContainer = $('.news-item-container'),
      $editor = $('#editor'),
      $preview = $('#preview'),
      $editorControls = $('.editor-controls'),
      $editorControlsToggle = $('.editor-controls-toggle'),
      $editorControlButtons = $('.control-buttons'),
      aceEditor,
      resizable = true,
      testMarkup = '<p>Website code here!</p>';
  
  
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