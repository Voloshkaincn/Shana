var gulp 	 	     = require('gulp'),
		sassToCss 	 = require('gulp-sass'),
		concat       = require("gulp-concat"),
		uglifyjs     = require("gulp-uglify"),
		//uglifycss    = require("gulp-uglifycss"),
		cleanCSS = require('gulp-clean-css');
		autoprefixer = require("gulp-autoprefixer"),
		rename       = require("gulp-rename"),
		browserSync  = require('browser-sync'),
		sourcemaps = require('gulp-sourcemaps'),
		cssnano = require('gulp-cssnano'),
		iconfont = require('gulp-iconfont'),
		iconfontCss = require('gulp-iconfont-css');
var		fontName = 'iconfont';

//Compile CSS file from Sass
gulp.task('compileSass', function(){
	return gulp.src(['app/sass/**/*.{sass,scss}'])
	.pipe(sourcemaps.init())
	.pipe(sassToCss({outputStyle: 'expanded'}).on('error', sassToCss.logError))
	.pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {cascade: true}))
	.pipe(cleanCSS())
    .pipe(cssnano())
    .pipe(rename({suffix: '.min'}))
    .pipe(sourcemaps.write())
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.stream({ match: '**/*.css' }));
});

//Concat all library js files into libs.min.js
gulp.task('createJsLibs', function(){
	return gulp.src([
			'app/libs/jquery/dist/jquery.min.js',
			'app/libs/slick-carousel/slick.js',
			// 'app/libs/Event/Event.js',
			// 'app/libs/Magnifier/Magnifier.js',
			'app/libs/Sprite-Zoom/src/jquery.spritezoom.js'
		])
	.pipe(concat('libs.min.js'))
	.pipe(uglifyjs())
	.pipe(gulp.dest('app/js'))
	.pipe(browserSync.reload({stream: true}));
});

//Compress JSFiles
gulp.task('compressJs', function(){
	return gulp.src([
			'app/js/common.js'
		])
	.pipe(uglifyjs())
	.pipe(rename({
		suffix: ".min"
	}))
	.pipe(gulp.dest('app/js'))
	.pipe(browserSync.reload({stream: true}));
});

gulp.task('code', function(){
	return gulp.src([
			'app/**/*.{php, html}'
		])
	.pipe(browserSync.reload({stream: true}));
});

// LiveReload
gulp.task('browserSync', function serverStart(){
	browserSync({
		proxy: "shana"
	});
});


// Watch
gulp.task('watch', gulp.parallel('code', 'compileSass', 'createJsLibs', 'compressJs', 'browserSync', function startWatching(){
	
	gulp.watch('app/sass/**/*.{css,sass,scss}', gulp.parallel('compileSass'));
	gulp.watch('app/js/common.js', gulp.parallel('compressJs'));
	gulp.watch('app/**/*.{php,html}', gulp.parallel('code'));
}));

// Default Gulp function
gulp.task('default', gulp.parallel('watch'));