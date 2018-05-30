var gulp = require('gulp');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssnano');
var concat = require('gulp-concat');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var rename      = require('gulp-rename');

gulp.task('default', ['css', 'watch']);

gulp.task('css', function() {
	return gulp.src('./assets/scss/*.scss')
					.pipe(concat('main.scss'))
					.pipe(sass())
					.pipe(postcss([ autoprefixer() ]))
					.pipe(cssmin())
					.pipe(rename({ suffix: '.min' }))
					.pipe(gulp.dest('./assets/css'))
});

gulp.task('watch', function() {
	gulp.watch('./assets/scss/*.scss', ['css']);
});