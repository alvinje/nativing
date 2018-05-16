var gulp = require('gulp');
var sass = require('gulp-sass');
var jshint = require('gulp-jshint');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');


gulp.task('sass', function () {

    gulp.src('../css/sass/*.scss')
        .pipe(sass())
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('../css'));

});

gulp.task('js', function () {

    gulp.src('../js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(concat('front.js'))
        // activer la minification en production
        // .pipe(uglify())
        .pipe(gulp.dest('../js'));

});

gulp.task('vendors-js', function () {

    gulp.src('../assets/js/*.js')
        .pipe(jshint())
        .pipe(concat('vendors.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('../assets/js'));

});

gulp.task('vendors-sass', function () {

    gulp.src('../assets/css/*.css')
        .pipe(sass())
        .pipe(concat('vendors.min.css'))
        .pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('../assets/css'));

});

gulp.task('watch', function() {

  gulp.watch('../css/sass/*.scss', ['sass']);
  gulp.watch('../css/sass/*.css', ['vendors-sass']);
  gulp.watch('../js/*.js', ['js']);
  gulp.watch('../assets/js/*.js', ['vendors-js']);

});

gulp.task('default', ['sass', 'js', 'vendors-js', 'vendors-sass', 'watch']);
