var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var sass        = require('gulp-sass');
var concat      = require('gulp-concat');

// browser-sync task for starting the server.
gulp.task('browser-sync', function() {
//watch files
    var files = [
    './sass/*.scss',
    './*.php'
    ];

//initialize browsersync
    browserSync.init(files, {
    //browsersync with a php server
    proxy: "http://localhost:8888/",
    notify: true
    });
});

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function () {
    return gulp.src([
	  'sass/*.scss'
	])
	.pipe(sass({outputStyle: 'compact'}))
	.pipe(concat('style.css'))
	.pipe(gulp.dest('./'))
	.pipe(reload({stream:true}));
});

// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
  gulp.watch("sass/**/*.scss", ['sass']);
});