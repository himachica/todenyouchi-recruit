const gulp         = require('gulp');
const dartSass     = require('gulp-dart-sass');
const sourcemaps   = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const browsersync  = require('browser-sync');

const scssEntry    = '_source/scss/**/!(_)*.scss';
const cssDest      = 'public_html/wp-content/themes/';

gulp.task('sass', function () {
  return gulp
    .src(scssEntry)                 // ★ パーシャルは入れない
    // .pipe(sourcemaps.init())
    .pipe(
      dartSass.sync({ outputStyle: 'expanded' })
        .on('error', dartSass.logError)
    )                               // ★ 1回だけコンパイル
    .pipe(autoprefixer({ cascade: false, grid: true }))
    // .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(cssDest))
    .pipe(browsersync.stream());
});

gulp.task('browserSync', function (done) {
  browsersync.init({
    server: { baseDir: 'public_html/' },
    port: 3000,
  });
  done();
});

gulp.task('bs-reload', function (done) {
  browsersync.reload();
  done();
});

gulp.task('watch', function (done) {
  // SCSSの監視はパーシャルも含める（エントリを再ビルドする）
  gulp.watch('_source/scss/**/*.scss', gulp.task('sass'));
  gulp.watch(
    [
      'public_html/**/*.html',
      'public_html/**/*.js',
      'public_html/**/*.jpg',
      'public_html/**/*.png',
      'public_html/**/*.gif',
      'public_html/**/*.svg',
    ],
    gulp.task('bs-reload')
  );
  done();
});

gulp.task('default', gulp.series('sass', 'browserSync', 'watch'));




