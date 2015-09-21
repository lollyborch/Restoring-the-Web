(function (){
  var $editorContainer = $('.news-item-container'),
      $editor = $('#editor'),
      $preview = $('#preview'),
      $editorControls = $('.editor-controls'),
      $editorControlsToggle = $('.editor-controls-toggle'),
      $editorControlButtons = $('.control-buttons'),
      aceEditor,
      resizable = true,
      testMarkup = "";
testMarkup += "<table id=\"header\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n";
testMarkup += "   <tbody><tr>\n";
testMarkup += "    <td colspan=\"2\" background=\"\/web\/20050105050831im_\/http:\/\/www.cricket.com.au\/portal\/templates\/template0008\/acdYVYVYfYZVYUbeWZRYdWRQUUSQaSaQ\/img_header1.jpg\" height=\"20\" valign=\"bottom\">    \n";
testMarkup += "        <img src=\"\/web\/20050105050831im_\/http:\/\/www.cricket.com.au\/cricket_images_www\/images\/img_spacer.gif\" width=\"665\" height=\"1\">\n";
testMarkup += "        <a href=\"\/web\/20050105050831\/http:\/\/www.cricket.com.au\/portal\/site\/cricketaustralia\/menuitem.338f1889253737ed371ae9104420a2a0\/\">Contact Us<\/a>&nbsp;&nbsp;\n";
testMarkup += "        <a href=\"\/web\/20050105050831\/http:\/\/www.cricket.com.au\/portal\/site\/cricketaustralia\/menuitem.4a871880c089f6ed371ae9104420a2a0\/\">Home<\/a>\n";
testMarkup += "    <\/td>   \n";
testMarkup += "    <td rowspan=\"2\" bgcolor=\"#669933\" width=\"100%\">&nbsp;<\/td>\n";
testMarkup += "   <\/tr>\n";
testMarkup += "   <tr>\n";
testMarkup += "    <td><a href=\"\/web\/20050105050831\/http:\/\/www.cricket.com.au\/portal\/site\/cricketaustralia\/menuitem.4a871880c089f6ed371ae9104420a2a0\/\"><img alt=\"Cricket Australia\" height=\"85\" src=\"\/web\/20050105050831im_\/http:\/\/www.cricket.com.au\/portal\/templates\/template0008\/acdYVYVYfYZVYUbeWZRYdWRQUUSQaSaQ\/img_header2-1.jpg\" width=\"301\" border=\"0\"><\/a><\/td>\n";
testMarkup += "    <td><img alt=\"\" height=\"85\" src=\"\/web\/20050105050831im_\/http:\/\/www.cricket.com.au\/portal\/templates\/template0008\/acdYVYVYfYZVYUbeWZRYdWRQUUSQaSaQ\/img_header2-2.jpg\" width=\"466\"><\/td>\n";
testMarkup += "   <\/tr>\n";
testMarkup += "<\/tbody><\/table>\n";

  
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