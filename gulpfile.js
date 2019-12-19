var gulp = require('gulp');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var uglify = require('gulp-uglify');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');



var mainstylesSRC = './src/scss/cru-portal.scss';
var compstylesSRC = './src/scss/cru-components.scss';
var styleDIST = './dist/css';
var styleWatch = './src/scss/**/*.scss';
var jsWatch = './src/js/**/*.js';



// Compile SASS
gulp.task('sass', async function(){
    gulp.src(mainstylesSRC)
    .pipe(sourcemaps.init())
    .pipe(sass ({
      errorLogToConsole:true,
      outputStyle:'compressed'
    }))
    .on('error', console.error.bind(console))
    .pipe(autoprefixer ({
      overrideBrowserslist: ['last 2 versions'],
      cascade:false
    }) )
    .pipe(rename( { suffix: '.min' } ))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(styleDIST));

    gulp.src(compstylesSRC)
    .pipe(sourcemaps.init())
    .pipe(sass ({
      errorLogToConsole:true,
      outputStyle:'compressed'
    }))
    .on('error', console.error.bind(console))
    .pipe(autoprefixer ({
      overrideBrowserslist: ['last 2 versions'],
      cascade:false
    }) )
    .pipe(rename( { suffix: '.min' } ))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(styleDIST));

});


// Optimize Images
gulp.task('imageMin', () =>
  gulp.src('src/img/*')
    .pipe(imagemin())
    .pipe(gulp.dest('dist/img'))
);

// Minify JS
gulp.task('minifyJS', () =>
  gulp.src('src/js/**/*.js')
    .pipe(uglify())
    .pipe(rename( { suffix: '.min' } ))
    .pipe(gulp.dest('dist/js'))
);

gulp.task('watchSCSS', function(){
    gulp.watch(styleWatch, gulp.series('sass'));
});

gulp.task('watchJS', function(){
    gulp.watch(jsWatch, gulp.series('minifyJS'));
});


gulp.task('default', gulp.series('sass', 'imageMin', 'minifyJS', 'watchSCSS', 'watchJS'));
