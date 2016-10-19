var gulp = require('gulp'),
	sass = require('gulp-sass'),
	plumber = require('gulp-plumber');
	


gulp.task('scss', function () {
	gulp.src('./scss/**/code.scss')
		.pipe(plumber())
		.pipe(sass())
		.pipe(gulp.dest('./css'));
});



gulp.task('watch', function(){
	gulp.watch('./**/*.scss', ['scss']);
});

gulp.task('default',['scss', 'watch']);