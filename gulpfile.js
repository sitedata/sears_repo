/*!
gulpfile.js

gulpfile for building Sears landing pages

in terminal, change directory to your page's directory.
run `gulp` and it will recompile your SASS every time one of the shared SCSS
files (in scss/) changes or your project-specific SCSS file changes.

*/

var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require( 'gulp-cssnano')
var pump = require('pump');
var runSequence = require( 'run-sequence' );
var rename = require( 'gulp-rename' );

var cwd = process.env.INIT_CWD; // directory where we invoked gulp

// create new task
// tasks are executed via `gulp {task_name}`
gulp.task('sass', function(callback){
	console.log( 'Sassin\'...' );
	pump([
		gulp.src( cwd + '/style.scss'),
		sass(),
		gulp.dest( cwd )
		],
		callback
	);
});

// compress CSS
gulp.task( 'compress:css', ['sass'], function(callback){
	console.log( 'Compressing CSS files...' );
	pump([
		gulp.src('**/*.css'),
		cssnano(),
		rename({extname: '.min.css'}),
		gulp.dest('theme/assets/css/min')
		],
		callback
	);
});

// create a watch task to allow executing diff'rent
// tasks for diff'rent file types
gulp.task('watch', ['sass'], function(){
	console.log( 'watching...' );
	// watch scss files in scss and current working directory (cwd),
	// run build when any of them change!
	gulp.watch(['scss/**/*.scss', cwd + '/*.scss'], ['build']);
});

// make a build task to bundle other tasks
gulp.task('build', function(callback){
	console.log( 'building...' );
	// runSequence( 'sass', ['compress:css'],
	// runSequence( 'sass', ['compress:css'],
	// 	callback
	// );
	runSequence( 'sass', callback	);
});

// default task: runs when you just type `gulp`
gulp.task( 'default', function(callback){
	console.log( 'Running default task from "%s"...', cwd );
	runSequence( 'build', ['watch'],
		callback
	);
});
