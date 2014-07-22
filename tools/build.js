({
	appDir: "../www",
	baseUrl: "js/lib",
	paths: {
        app: '../app'
    },
    urlArgs: 'v=1.0.0',
	dir: '../www-publish',
    modules: [
        //First set up the common build layer.
        {
            //module names are relative to baseUrl
            name: '../common',
            //List common dependencies here. Only need to list
            //top level dependencies, "include" will find
            //nested dependencies.
            include: []
        },

        //Now set up a build layer for each page, but exclude
        //the common one. "exclude" will exclude
        //the nested, built dependencies from "common". Any
        //"exclude" that includes built modules should be
        //listed before the build layer that wants to exclude it.
        //"include" the appropriate "app/main*" module since by default
        //it will not get added to the build since it is loaded by a nested
        //require in the page*.js files.
        {
            name: '../slider',
            include: ['app/main', 'jquery', 'jquery.localscroll', 'jquery.parallax', 'jquery.scrollTo'],
            exclude: ['../common']
        },

        {
            name: '../upload',
            include: ['app/uploadify', 'jquery', 'jquery.uploadify'],
            exclude: ['../common']
        }

    ]
})