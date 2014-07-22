define(["jquery", "jquery.uploadify"], function($){
	$(document).ready(function(){

		$("#file_upload").uploadify({
	        height        : 30,
	        buttonClass   : 'btn-upload',
	        buttonText 	  : '点击上传图片',
	        buttonCursor  : 'hand',
	        swf           : '/js/lib/uploadify.swf',
	        uploader      : '/uploadify.php',
	        width         : 150,
	        onUploadSuccess : function(file, data, response) {
	            console.log('The file ' + file.name + ' finished processing.');
	            console.log(data);
	            console.log(response);
	        }
	    });

	})
});