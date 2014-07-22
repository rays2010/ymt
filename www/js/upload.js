require(['./common'], function(common){
	
	requirejs.config({
		"shim": {
	        "jquery.uploadify": ["jquery"],
	    }
	})

	require(["app/uploadify"]);
});