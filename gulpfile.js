const
  autoprefixer = require('autoprefixer'),
  browsersync = require("browser-sync").create(),
  cache = require('gulp-cache'),
  cssnano = require('cssnano'),
  del = require('del'),
  fileinclude = require('gulp-file-include'),
  gulp = require('gulp'),
  babel = require('gulp-babel');
  gulpIf = require('gulp-if'),
  imagemin = require('gulp-imagemin'),
  objectFitImages = require('postcss-object-fit-images'),
  plumber = require('gulp-plumber'),
  postcss = require('gulp-postcss'),
  sass = require('gulp-sass'),
  terser = require('gulp-terser-js'),
  rename = require("gulp-rename"),
  useref = require('gulp-useref'),
  webpack = require('webpack-stream'),
  dir = {
    node        : 'node_modules/',
    src         : 'src/',
    htmls       : 'src/htmls/',
    sass        : 'src/scss/',
    images      : 'src/images/',
    layouts     : 'src/layouts/',
    pages       : 'src/pages/',
    js          : 'src/js/',
    babelJS     : 'src/js/babel/',
    build       : 'dist/'
  };


// BrowserSync
function browserSync(done) {
  browsersync.init({
    server: {
      baseDir: dir.build
    },
    port: 3000,
    reloadDelay: 2000
  });
  done();
}

// BrowserSync Reload
function browserSyncReload(done) {
  browsersync.reload();
  done();
}

/* compile pages */
gulp.task('fileinclude', async function() {
  return gulp
    .src([dir.pages + '**/*.html'])
    .pipe(fileinclude({
      prefix: '@@',
      basepath: '@file'
    }))
    .pipe(gulp.dest(dir.htmls));
});

function js() {
  return gulp
    .src(dir.js + '**/*.js')
    .pipe(webpack(require('./webpack.config.js')))
    .pipe(babel({
        presets: ['@babel/env']
    }))
    .pipe(gulp.dest(dir.js))
}

/* concatenate resource files */
function concatAssets() {
  return gulp
    .src(dir.htmls + '**/*.html')
    .pipe(plumber())
    .pipe(useref())
    .pipe(gulp.dest(dir.build))
}

function icons() {
  return gulp
  .src(dir.node + 'feather-icons/dist/feather-sprite.svg')
  .pipe(gulp.dest(dir.build + 'fonts'));
}

/* compile and optimize css */
function css() {
  var plugins = [
    autoprefixer(),
    objectFitImages(),
    cssnano({
      'zIndex': false
    })
  ];
  return gulp
    .src(dir.sass + 'styles.scss')
    .pipe(plumber())
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(gulp.dest(dir.build + 'css'))
    .pipe(rename({ suffix: ".min" }))
    .pipe(postcss(plugins))
    .pipe(gulp.dest(dir.build + 'css'))
    .pipe(browsersync.stream());
}


/* optimize images */
function images() {
  return gulp
    .src(dir.images + '**/*.+(png|jpg|gif|svg)')
    .pipe(cache((imagemin([
      imagemin.gifsicle({ interlaced: true }),
      imagemin.jpegtran({ progressive: true }),
      imagemin.optipng({ optimizationLevel: 5 }),
      imagemin.svgo({
        plugins: [
          {
            removeViewBox: false,
            collapseGroups: true
          }
        ]
      })
    ]))))
    .pipe(gulp.dest(dir.build + 'images'))
}

/* clean compiled files */
function clean() {
  return del([dir.build, dir.htmls]);
}

function cleanHTMLS() {
  return del([dir.htmls]);
}



/* Watch Task */
function watchFiles() {
  gulp.watch(dir.sass + "**/*", css);
  gulp.watch(dir.js + "**/*", concatAssets);
  gulp.watch(
    [
      dir.layouts + "**/*",
      dir.pages + "**/*"
    ],
    gulp.series(cleanHTMLS, 'fileinclude', concatAssets)
  );
  gulp.watch(dir.images + "**/*", images);
}

/* Complex Tasks */
const build = gulp.series(clean, 'fileinclude', images, icons, js, css, concatAssets);
const watch = gulp.parallel(watchFiles, browserSync);

// export tasks
exports.images = images;
exports.css = css;
exports.concatAssets = concatAssets;
exports.clean = clean;
exports.build = build;
exports.watch = watch;
exports.default = build;