/*!
gulpfile.js

Generic gulpfile for building PureRED WordPress theme files.

Note that the file paths all begin with 'theme'.
The easiest thing to do is to make a symlink to the directory of the WordPress theme you're building.
E.g., if your theme is in `./source/html/wp-content/themes/my-wp-theme`, the command to create a symlink named 'theme' would be (from the terminal in the current directory)
`ln -s ./source/html/wp-content/themes/my-wp-theme theme`
*/

var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var cssnano = require( 'gulp-cssnano')
var pump = require('pump');
var browserSync = require( 'browser-sync' ).create();
var runSequence = require( 'run-sequence' );
var rename = require( 'gulp-rename' );

// create new task
// tasks are executed via `gulp {task_name}`
gulp.task('sass', function(callback){
	console.log( 'Sassin\'...' );
	pump([
		gulp.src('theme/assets/scss/style.scss'),
		sass(),
		gulp.dest('theme/assets/css')
		],
		callback
	);
});

// browserSync task
// at a glance, this may need some massaging
gulp.task('browserSync', function() {
	browserSync.init({
		server: {
			baseDir: '../../..'
		}
	});
});

// compress JS
// may be able to jam this and CSS compress into one...
gulp.task('compress:js', function(cb){
	console.log( 'Compressing JS files...' );
	pump([
		gulp.src('theme/assets/js/*.js'),
		uglify(),
		rename({extname: '.min.js'}),
		gulp.dest('theme/assets/js/min')
		],
		cb
	);
});

// compress CSS
gulp.task( 'compress:css', ['sass'], function(callback){
	console.log( 'Compressing CSS files...' );
	pump([
		gulp.src('theme/assets/css/*.css'),
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
	// watch scss and js files,
	// run build when any of them change!
	gulp.watch(['theme/assets/scss/**/*.scss', 'theme/assets/js/*.js'], ['build']);
	// gulp.watch('assets/scss/**/*.scss', ['sass']);
	// gulp.watch('assets/js/*.js', ['compress:js']);
	// gulp.watch('assets/css/*.css', ['compress:css']);
});

// make a build task to bundle other tasks
gulp.task('build', function(callback){
	console.log( 'building...' );
	runSequence( 'sass', ['compress:js', 'compress:css'],
		callback
	);
});

// default task: runs when you just type `gulp`
gulp.task( 'default', function(callback){
	console.log( 'defaulting...' );
	runSequence( 'build', ['watch'],
		callback
	);
});
