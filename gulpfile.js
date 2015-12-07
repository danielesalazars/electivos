var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.sass("app.scss")
		.styles([
			"./public/css/app.css",
			"./resources/assets/css/global.css"
		])
		.version("css/app.css");

    mix.scripts([
    	'./resources/assets/lib/jquery-2.1.4.min.js',
    	'./resources/assets/lib/bootstrap.min.js'
    	]);
});
