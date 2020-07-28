import gulp from 'gulp';
import watch from 'gulp-watch';
import browserSync from 'browser-sync'; // ファイルの変更を検知してブラウザを自動でリロード
import notify from 'gulp-notify'; // gulpタスクがエラーになった時に通知してくれる
import plumber from 'gulp-plumber'; // gulpタスクがエラーになっても止まらずに実行してくれる
import sass from 'gulp-sass'; // sassファイルをコンパイルする
import sassGlob from 'gulp-sass-glob'; // sassの分割したファイルをまとめてimportする
import minifycss from 'gulp-minify-css'; // cssファイルを圧縮する
import webpack from 'webpack';
import webpackConfig from './webpack.config.js';
import webpackStream from 'webpack-stream'

gulp.task('build', function() {
    plumber({
        errorHandler: notify.onError("Error: <%= error.message %>")
    })
    .pipe(webpackStream(webpackConfig, webpack))
    .pipe(gulp.dest('./dist/js/'));
});

gulp.task('sass', function() {
    gulp.src('./src/sass/**/*.scss')
    .pipe(plumber({
        errorHandler: notify.onError("Error: <%= error.message %>")
    }))
    .pipe(sassGlob())
    .pipe(sass())
    .pipe(gulp.dest('./src/css/'));
});

gulp.task('minifycss', function(){
    gulp.src('./src/css/*.css')
    .pipe(minifycss())
    .pipe(gulp.dest('./dist/css/'));
})

gulp.task('browser-sync', function(){
    browserSync.init({
        server: {
            baseDir: './',
            index: 'index.html'
        }
    });
});

gulp.task('bs-reload', function(){
    browserSync.reload();
});

gulp.task('watch', function() {
    watch('./src/js/**/*.js', function(event) {
        gulp.start('build')
    })
    watch('./src/js/components/**/*.vue', function(event) {
        gulp.start('build')
    })
    watch('./src/sass/**/*.scss', function(event) {
        gulp.start('sass');
    });
    watch('./src/css/*.css', function(event) {
        gulp.start('minifycss');
        gulp.start('bs-reload');
    });
    watch('./**/*.html', function(event) {
        gulp.start('bs-reload');
    });
});

gulp.task('default', ['watch', 'build', 'sass', 'browser-sync', 'browser-sync']);

