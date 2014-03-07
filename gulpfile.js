var gulp = require('gulp'),
    gutil = require('gulp-util'),
    sass = require('gulp-ruby-sass'),
    autoprefix = require('gulp-autoprefixer'),
    minifyCSS = require('gulp-minify-css'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat');

var exec = require('child_process').exec;
var sys = require('sys');

// Where do you store your Sass files?
var sassDir = 'app/assets/sass';

// Which directory should Sass compile to?
var targetCSSDir = 'public/css';

// Where do you store your Javascript files?
var jsDir = 'app/assets/js';

// Which directory should Javascript compile to?
var targetJSDir = 'public/js';


// Compile Sass, autoprefix CSS3,
// and save to target CSS directory
gulp.task('css', function () {
    return gulp.src(sassDir + '/main.sass')
        .pipe(sass({ style: 'compressed' }).on('error', gutil.log))
        .pipe(autoprefix('last 5 version'))
        .pipe(gulp.dest(targetCSSDir))
});

// Handle Javascript compilation
gulp.task('js', function () {
    return gulp.src(jsDir + '/**/*.js')
        .pipe(concat('app.js'))
        .pipe(uglify({mangle: false}))
        .pipe(gulp.dest(targetJSDir))
});


// Keep an eye on Sass, JS, and PHP files for changes...
gulp.task('watch', function () {
    gulp.watch(sassDir + '/**/*.sass', ['css']);
    gulp.watch(jsDir + '/**/*.js', ['js']);
});

// What tasks does running gulp trigger?
gulp.task('default', ['css', 'js', 'watch']);