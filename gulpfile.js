var gulp = require('gulp');

gulp.task('default', function() {
    gulp.src('./node_modules/bootstrap/dist/css/bootstrap.min.css')
        .pipe(gulp.dest('./web/vendor/css/'));

    gulp.src('./node_modules/select2/dist/css/select2.min.css')
        .pipe(gulp.dest('./web/vendor/css/'));

    gulp.src('./node_modules/font-awesome/css/font-awesome.min.css')
        .pipe(gulp.dest('./web/vendor/css/'));

    gulp.src('./node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('./web/vendor/js/'));

    gulp.src('./node_modules/bootstrap/dist/js/bootstrap.min.js')
        .pipe(gulp.dest('./web/vendor/js/'));

    gulp.src('./node_modules/select2/dist/js/select2.min.js')
        .pipe(gulp.dest('./web/vendor/js/'));

    gulp.src('./node_modules/font-awesome/fonts/*.*')
        .pipe(gulp.dest('./web/vendor/fonts/'));
});
