/**
 * Created by Nihrom on 20.06.2017.
 */
const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const spritesmith = require('gulp.spritesmith');
const rimraf = require('rimraf');
const autoprefixer = require('gulp-autoprefixer');
const rename = require("gulp-rename");

/* -------- Server  -------- */
gulp.task('server', function() {
    browserSync.init({
        proxy: 'domain.dev',
    });

    gulp.watch(['style.css', 'vendor/bootstrap/dist/**/*.scss', '*.php']).on('change', browserSync.reload);
});

/*---------------------- SASS Compile ------------------------*/
gulp.task('styleScss:compile', function () {
    return gulp.src('scss/style.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)) 
        .pipe(autoprefixer())
        //.pipe(rename("style.css"))
        .pipe(gulp.dest('css'));
});


gulp.task('bootstrapScss:compile', function () {
    return gulp.src('scss/bootstrap.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(rename("bootstrap.min.css"))
        .pipe(gulp.dest('css'));
});

/*---------------------- Sprites ------------------------*/

gulp.task('sprite', function (cb) {

    const spriteData = gulp.src('images/icons/**/*.png').pipe(spritesmith({
        imgName: 'sprite.png',
        imgPath:'../images/sprite.png',
        cssName: 'sprite.scss'
    }));

    spriteData.img.pipe(gulp.dest('build/images/'));
    spriteData.css.pipe(gulp.dest('source/styles/global/'));

    cb();
});

/* --------  js -------- */
gulp.task('js', function() {
    return gulp.src([
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/bootstrap/dist/js/bootstrap.min.js',
        'node_modules/aos/dist/aos.js',
        'node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js'

    ]).pipe(gulp.dest('js'));
});


/* ------------ Watchers ------------- */
gulp.task('watch', function() {
    gulp.watch(['scss/**/*.scss', '!scss/**/bootstrap-custom.scss'], gulp.series('styleScss:compile'));
    gulp.watch(['scss/**/bootstrap-custom.scss', 'scss/**/bootstrap.scss'], gulp.series('bootstrapScss:compile'));
});

gulp.task('default', gulp.series(
    //'clean',
    gulp.parallel('styleScss:compile', 'bootstrapScss:compile', 'js'),
    gulp.parallel('watch') //, 'server'
    )
);