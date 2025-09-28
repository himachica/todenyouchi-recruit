const gulp         = require('gulp');
const sass         = require('gulp-dart-sass');
const sourcemaps   = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browsersync  = require('browser-sync');

const scssPath     = '_source/scss/**/*.scss';
const cssPath      = 'public_html/assets/css/';

gulp.task('sass', function(done) {
    return (
        gulp
        .src(scssPath)
        .pipe(sass.sync().on('error', sass.logError))
        .pipe(sass({outputStyle: 'expanded'}))
        .pipe(autoprefixer({
            cascade: false,
            grid: true
        }))
        .pipe(gulp.dest(cssPath))
        .pipe(browsersync.stream())
    );
    done();
});

gulp.task('browserSync', function(done) {
    browsersync.init({
        server: {
            baseDir: "public_html/"
        },
        port: 3000
    });
    done();
});

gulp.task('bs-reload', function(done) {
    browsersync.reload();
    done();
});

gulp.task('watch', (done) => {
    gulp.watch([scssPath], gulp.task('sass'));
    gulp.watch(
        [
            "public_html/**/*.html",
            //"public_html/**/*.css",
            "public_html/**/*.js",
            "public_html/**/*.jpg",
            "public_html/**/*.png",
            "public_html/**/*.gif",
            "public_html/**/*.svg"
        ],
        gulp.task('bs-reload')
    );
    done();
});

gulp.task('default', gulp.series( 'sass', 'browserSync', 'watch', function(done) {
    done();
} ));




