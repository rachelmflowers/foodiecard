const
  autoprefixer = require('autoprefixer'),
  browsersync = require("browser-sync").create(),
  cache = require('gulp-cache'),
  concat = require('gulp-concat'),
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
function buildHTML() {
  return gulp
    .src(dir.htmls + '**/*.html')
    .pipe(plumber())
    .pipe(useref())
    .pipe(gulpIf('*.css', postcss(cssnano({
      'zIndex': false
    }))))
    .pipe(gulp.dest(dir.build))
}

function icons() {
  return gulp
  .src(dir.node + 'feather-icons/dist/feather-sprite.svg')
  .pipe(gulp.dest(dir.build + 'fonts'));
}

/* compile and optimize css */
function vendorCSS() {
  var plugins = [
    cssnano({
      'zIndex': false
    })
  ];
  return gulp
  .src([
    dir.node + 'flickity/dist/flickity.min.css',
    dir.node + 'flickity-fade/flickity-fade.css',
    dir.node + 'flatpickr/dist/flatpickr.css'
  ])
  .pipe(concat('vendor.css'))
  .pipe(gulp.dest(dir.build + 'css'))
  .pipe(rename({ suffix: ".min" }))
  .pipe(postcss(plugins))
  .pipe(gulp.dest(dir.build + 'css'))
  .pipe(browsersync.stream());
}

function mainCSS() {
  var plugins = [
    autoprefixer({
        grid: 'autoplace'
    }),
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
  gulp.watch(dir.sass + "**/*", mainCSS);
  gulp.watch(dir.js + "**/*", buildHTML);
  gulp.watch(
    [
      dir.layouts + "**/*",
      dir.pages + "**/*"
    ],
    gulp.series(cleanHTMLS, 'fileinclude', buildHTML)
  );
  gulp.watch(dir.images + "**/*", images);
}

/* Complex Tasks */
const styles = gulp.parallel(mainCSS, vendorCSS);
const build = gulp.series(clean, 'fileinclude', images, icons, js, styles, buildHTML);
const watch = gulp.parallel(watchFiles, browserSync);

// export tasks
exports.images = images;
exports.mainCSS = mainCSS;
exports.vendorCSS = vendorCSS;
exports.buildHTML = buildHTML;
exports.clean = clean;
exports.build = build;
exports.watch = watch;
exports.default = build;