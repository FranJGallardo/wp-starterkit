var gulp = require('gulp');
var stylus = require('gulp-stylus');
var minifyCSS = require('gulp-clean-css');
var nib = require('nib');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var watch = require('gulp-watch');
var uglify = require('gulp-uglify');

gulp.task( 'server', function() {
  browserSync.init({
    // Cambiar el proxy por la ruta que esté escuchando nuestra instalación
    // local de Wordpress
    proxy: 'http://localhost:8888/wordpress'
  });

  // Recargamos el navegador si cualquier archivo .php tiene cambios
  watch( './**/*.php', reload);

  // Recompile stylus 
  watch( './stylus/**/*.styl', function() {
    gulp.start( 'stylus' );
  });

  // Falta añadir el tratamiento de los JS, con Browserify y Babel 

});

gulp.task('stylus',function(){
	gulp.src('./stylus/style.styl')
	.pipe(stylus({
		use: nib(),
		'include css': true
	}))
	.pipe(minifyCSS())
	.pipe(gulp.dest('./'))
	.pipe( reload( { stream: true }));

});

gulp.task('default',['server','stylus'], function(){
	console.log('Hecho.');
})