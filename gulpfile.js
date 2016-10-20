var gulp = require('gulp'),
	sass = require('gulp-sass'),
	plumber = require('gulp-plumber'),
	browserSync = require('browser-sync'),
	git = require('gulp-git');


gulp.task('scss', function () {
	gulp.src('./scss/**/code.scss')
		.pipe(plumber())
		.pipe(sass())
		.pipe(gulp.dest('./css'))
		.pipe(browserSync.reload({stream: true}));

});

gulp.task('pull', function(){
  git.pull('origin', 'master', {args: '--rebase'}, function (err) {
    if (err){
    	console.log('Did not pull');
    	throw err;
    }
  });
});



gulp.task('watch', function(){
	browserSync.init({
		proxy:  '192.168.1.5:9094'
	});
	gulp.watch('./**/*.scss', ['scss']);
	gulp.watch('./**/*.php').on('change', browserSync.reload);
});

gulp.task('default',['pull','scss', 'watch']);