'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var sourcemaps = require('gulp-sourcemaps');
var livereload = require('gulp-livereload');

sass.compiler = require('node-sass');

// compile sass
gulp.task('sass', function () {
	return gulp
		.src('./ui/style.scss')
		.pipe(sassGlob())
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./css'))
		.pipe(livereload());
});

// compile sass
gulp.task('sass-editor', function () {
	return gulp
		.src('./ui/style-editor.scss')
		.pipe(sassGlob())
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', sass.logError))
		.pipe(sourcemaps.write('./'))
		.pipe(gulp.dest('./css'))
		.pipe(livereload());
});

// watch sass
gulp.task('default', function() {
	livereload.listen();
  gulp.watch('./ui/**/*.scss', gulp.series('sass', 'sass-editor'));
  gulp.watch('./ui/**/*.js').on('change', function(file) {
    livereload.changed(file)
  })
  gulp.watch('./ui/**/*.php').on('change', function(file) {
    livereload.changed(file)
  })
  gulp.watch('./**/*.php').on('change', function(file) {
    livereload.changed(file)
  })
});
