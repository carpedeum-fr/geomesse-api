var gulp = require('gulp');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cleancss = require('gulp-clean-css');
var sourcemaps = require('gulp-sourcemaps');

var cssFolder = './web/vendor/css/';
var jsFolder = './web/vendor/js/';
var fontsFolder = './web/vendor/fonts/';

gulp.task('default', function() {
    gulp.src([
        './node_modules/skeleton-css/css/normalize.css',
        './node_modules/skeleton-css/css/skeleton.css',
        './node_modules/font-awesome/css/font-awesome.min.css',
        './web/bundles/carpedeum/css/admin.css'
    ])
        //.pipe(sourcemaps.init())
        .pipe(concat('vendor.css'))
        .pipe(gulp.dest(cssFolder))
        .pipe(rename('vendor.min.css'))
        .pipe(cleancss({keepSpecialComments: 0, relativeTo: './web/vendor/'}))
        //.pipe(sourcemaps.write())
        .pipe(gulp.dest(cssFolder));

    /*gulp.src([
        './node_modules/select2/dist/js/select2.min.js'
    ])
        .pipe(concat('vendor.js'))
        .pipe(gulp.dest(jsFolder))
        .pipe(rename('vendor.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(jsFolder));*/

    gulp.src('./node_modules/font-awesome/fonts/*.*')
        .pipe(gulp.dest(fontsFolder));
});
