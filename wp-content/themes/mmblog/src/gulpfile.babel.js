import gulp from 'gulp';
import gulpLoadPlugins from 'gulp-load-plugins';
import browserSync from 'browser-sync';
import path from "path";

const $ = gulpLoadPlugins();
const reload = browserSync.reload;

const distPath = "../";
console.log(distPath);

gulp.task('scripts', () => {
  return gulp.src('scripts/*.js')
    .pipe($.plumber())
    .pipe($.sourcemaps.init())
    .pipe($.sourcemaps.write('.'))
    .pipe(gulp.dest(distPath+'js'))
    .pipe(reload({stream: true}));
});

gulp.task('fonts', function () {
  return gulp.src('./node_modules/**/*.{eot,svg,ttf,woff,woff2}')
    .pipe($.flatten())
    .pipe(gulp.dest(distPath+"/fonts"));
});

gulp.task('styles', () => {
  return gulp.src('scss/*.scss')
    .pipe($.plumber())
    .pipe($.sass.sync({
      outputStyle: 'expanded',
      precision: 10,
      includePaths: ['.', 'node_modules']
    }).on('error', $.sass.logError))
    .pipe($.autoprefixer({browsers: ['> 1%', 'last 2 versions', 'Firefox ESR']}))
    .pipe(gulp.dest(distPath+'/css'))
    .pipe(reload({stream: true}));
});

gulp.task('serve', ['styles', 'scripts'], () => {
  browserSync({
    proxy: "http://localhost/~syphez/mm/"
  });

  gulp.watch([
    distPath+'**/*.html',
    distPath+'**/*.php',
  ]).on('change', reload);

  gulp.watch('scss/**/*.scss', ['styles']);
  gulp.watch('scripts/**/*.js', ['scripts']);
});
