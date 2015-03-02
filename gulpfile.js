var gulp      = require('gulp');
var watch     = require('gulp-watch');
var compass   = require('gulp-compass');
var minifyCSS = require('gulp-minify-css');
var imagemin  = require('gulp-imagemin');
var pngquant  = require('imagemin-pngquant');


var paths = {
	css: {
		src: ['assets/css/*.css'],
		dest: 'assets/css'
	},

	sass: {
		src: 'assets/sass/*.scss',
		dest: 'assets/css',
		config: {
			css: 'assets/css',
			sass: 'assets/sass',
			image: 'assets/img'
		}
	},

	img: {
		src: ['assets/img/*.{jpg,png,jpeg,gif,svg,ico,JPG,PNG,JPEG,GIF,SVG,ICO}'],
		dest: 'assets/img'
	}
};


// TASKS

gulp.task('compass', function () {
	return gulp.src( paths.sass.src )
		.pipe(compass({
			css   : paths.sass.config.css,
			sass  : paths.sass.config.sass,
			image : paths.sass.config.image
		}))
		.pipe(gulp.dest( paths.sass.dest ));
});


gulp.task('styles', ['compass'], function () {
    return gulp.src( paths.css.src )
        .pipe(minifyCSS({ keepSpecialComments: 0 }))
        .pipe(gulp.dest( paths.css.dest ));
});


gulp.task('images', function () {
    return gulp.src( paths.img.src )
        .pipe(imagemin({
        	optimizationLevel: 5,
        	svgoPlugins: [{removeViewBox: false}],
        	use: [pngquant()]
        }))
        .pipe(gulp.dest( paths.img.dest ));
});


gulp.task('default', function () {
	gulp.watch(paths.sass.src, ['styles']);
});