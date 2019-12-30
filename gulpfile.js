var gulp = require('gulp');
var sass = require('gulp-sass');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var fileinclude = require('gulp-file-include');
var del = require('del');

/* compile pages */
gulp.task('fileinclude', async function() {
  gulp.src(['src/pages/**/*.html'])
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe(gulp.dest('src/htmls'));
});

/* compile sass */
gulp.task('sass', function(){
    return gulp.src('src/scss/styles.scss')
      .pipe(sass()) // Using gulp-sass
      .pipe(gulp.dest('dist/css'))
});

/* optimize css */
gulp.task('css', function () {
  var plugins = [
    autoprefixer(),
    cssnano({
      'zIndex': false
    })
  ];
  return gulp.src('dist/css/*.css')
  .pipe(postcss(plugins))
  .pipe(gulp.dest('dist/css'));
});

/* optimize images */
gulp.task('images', function(){
  return gulp.src('src/images/**/*.+(png|jpg|gif|svg)')
  .pipe(cache((imagemin())))
  .pipe(gulp.dest('dist/images'))
});

/* concatenate files */
gulp.task('useref', function(){
  return gulp.src('src/htmls/**/*.html')
    .pipe(useref())
    // .pipe(gulpIf('*.js', uglify()))
    .pipe(gulp.dest('dist'))
});

/* clean compiled files */
gulp.task('clean', async function() {
  return del.sync('dist');
})
gulp.task('cleanHTMLS', async function() {
  return del.sync('src/htmls');
})

/* Production Build Task */
gulp.task('concurrent', gulp.series('sass', 'fileinclude', 'images'));

gulp.task('build', gulp.series(['clean', 'cleanHTMLS', 'concurrent', 'useref', 'css']));

/* Watch Task */
gulp.task('watch', function(){
  gulp.watch('src/scss/**/*.scss', gulp.series('sass'));
  gulp.watch('src/js/**/*.js', gulp.series('usehref'));
});