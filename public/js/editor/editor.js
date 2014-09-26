 tinymce.init({
    selector: "textarea.curriculum",
    theme: "modern",
    skin : 'macaepop',
    language : 'pt_BR',
  	indentation : '10px',


    height: 150,

      menu: { // this is the complete default configuration
        edit   : {title : 'Edit'  , items : 'undo redo | cut copy paste pastetext | selectall'},
        insert : {title : 'Insert', items : 'hr | insertdatetime'},
        tools  : {title : 'Tools' , items : 'spellchecker'}
    },

    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "../../css/content.css",
   toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink | preview fullscreen fullpage", 
   style_formats: [
   
    ]
 }); 

  tinymce.init({
    selector: "textarea.summernote",
    theme: "modern",
    skin : 'macaepop',
    language : 'pt_BR',
  	indentation : '10px',
    menubar : false,
    height: 80,
 

    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "../../css/content.css",
   toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify", 
   style_formats: [
   
    ]
 }); 