//<!-- This script sets up the Editor on working_panel.php--> 
/* HTML editor panes from http://codepen.io/rlo206/pen/ClEti */

var hiddenDiv = document.getElementById('hiddenHTML');
var hiddenDivValue = hiddenDiv.innerHTML;
console.log(hiddenDivValue);
var hiddenCSS = document.getElementById('hiddenCSS');
var hiddenCSSValue = hiddenCSS.innerHTML;


(function (){
  var $editorContainer = $('.news-item-container'),
      $html_editor = $('#editor'),
      //added a new variable as the css editor
      $css_editor = $('#csseditor'),
      $preview = $('#preview'),
      aceEditor,
	  aceEditorCss,
      resizable = true,
      testMarkupCss="";
      testMarkupCss += "<style>";
      testMarkupCss += hiddenCSSValue;
      testMarkupCss += "</style>";
	  testMarkup= hiddenDivValue;

  function setupEditor () {
    aceEditor = ace.edit("editor");
    aceEditor.setShowPrintMargin(false);
    aceEditor.getSession().setUseWorker(false);
    aceEditor.getSession().setMode("ace/mode/html");
    aceEditor.getSession().on('change', updatePreview);
    aceEditor.setValue(testMarkup);
      //setUseWrapMode disablesleft and right scroll and wraps text - yay!
    aceEditor.getSession().setUseWrapMode(true);

  }

  //same function as the html editor, but make the inputs as css syntax
  function setupCssEditor () {
  	aceEditorCss = ace.edit("csseditor");
    aceEditorCss.setShowPrintMargin(false);
    aceEditorCss.getSession().setUseWorker(false);
    aceEditorCss.getSession().setMode("ace/mode/css");
    aceEditorCss.getSession().on('change', updateCssPreview);
    aceEditorCss.setValue(testMarkupCss);
    aceEditorCss.getSession().setUseWrapMode(true);
  }


  function updatePreview () {
    var editorContent = aceEditor.getSession().getValue();
    $preview.contents().find('body').html(editorContent);
  }

  //a new update prevew function that is supposed to update the style changing into the webpage
  function updateCssPreview () {
  	var editorContent = aceEditorCss.getSession().getValue();
  	$preview.contents().find('head').html(editorContent);
  }

  // A function to add an event listener to the save button
  function saveListener() {
	  var saveButton = document.getElementById("saveButton");
	  saveButton.addEventListener("click",saveHTML);
  }

  // A function to save the current content into the hidden div
	function saveHTML() {
		updatedHTML = aceEditor.getValue();
    updatedCSS = aceEditorCss.getValue().slice(7,-8);
		console.log(updatedHTML);
    console.log(updatedCSS);
		$.ajax({
			type: "POST",
			data: {"data": updatedHTML, "cssData": updatedCSS},
			url: "php/save.php",
			success: function(){
				console.log("Success function triggered");
			}
		});
    /*$.ajax({
			type: "POST",
			data: {"cssData": updatedCSS},
			url: "php/save.php",
			success: function(){
				console.log("Success function triggered");
			}
		});*/
	};


  //run both function as the editor
  setupEditor();
  setupCssEditor();
  saveListener();

  /* preset this into the css editor
    <style>
    p {
        color:red;
    }
    </style>
  */

  $(window).trigger('resize');
}());
