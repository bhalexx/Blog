var gulp = require('gulp');
var sass = require('gulp-sass');

/************
 *** SASS ***
 ************/
gulp.task('compileStyle', function() {
    gulp.src(['public/sass/*.scss', '!public/sass/common.scss'])
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/'))
});

gulp.task('compileStyleAdmin', function() {
    gulp.src('public/sass/admin/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('public/css/admin/'))
});

//Watch task
gulp.task('sass', function() {
    gulp.watch('public/sass/**/*.scss', ['compileStyle', 'compileStyleAdmin']);
});