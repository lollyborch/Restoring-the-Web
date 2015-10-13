<?php header("Content-type: application/javascript"); ?>
(function (){
  var $editorContainer = $('.news-item-container'),
      $html_editor = $('#editor'),
      //added a new variable as the css editor
      $css_editor = $('#csseditor'),
      $preview = $('#preview'),
      aceEditor,
	  //aceEditorCss,
      resizable = true,
      //added a new hardcode that is supposed to have css code inside
      testMarkupCss="echo $uHTML";
	  testMarkup="<?php echo $uHTML; ?>";

	  
  function setupEditor () {
    aceEditor = ace.edit("editor");
    aceEditor.setShowPrintMargin(false);
    aceEditor.getSession().setUseWorker(false);
    aceEditor.getSession().setMode("ace/mode/html");
    aceEditor.getSession().on('change', updatePreview);
    aceEditor.setValue(testMarkup);
  }
  
  //same function as the html editor, but make the inputs as css syntax
  function setupCssEditor () {
  	aceEditor = ace.edit("csseditor");
    aceEditor.setShowPrintMargin(false);
    aceEditor.getSession().setUseWorker(false);
    aceEditor.getSession().setMode("ace/mode/css");
    aceEditor.getSession().on('change', updateCssPreview);
    aceEditor.setValue(testMarkup);
  }


  function updatePreview () {
    var editorContent = aceEditor.getSession().getValue();
    $preview.contents().find('body').html(editorContent);
  }

  //a new update prevew function that is supposed to update the style changing into the webpage
  function updateCssPreview () {
  	var editorContent = aceEditor.getSession().getValue();
  	$preview.contents().find('body').css(editorContent);
  }

  //run both function as the editor
  setupEditor();
  setupCssEditor();



  $(window).trigger('resize');
}());