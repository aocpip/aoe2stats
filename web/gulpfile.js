var gulp = require('gulp');
var concat = require('gulp-concat');
var cleanCSS = require('gulp-clean-css');
var autoprefixer = require('gulp-autoprefixer');
var stripDebug = require('gulp-strip-debug');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var run = require('gulp-run');
var spawn = require('child_process').spawn;
var watch = require('gulp-watch');

var nodeDir = "node_modules/";

gulp.task('watch', function(){
    gulp.watch('stats/*', ['build']);
});

gulp.task('default', function() {
	
  // concat all vendor css
  gulp.src([nodeDir + 'bootstrap/dist/css/bootstrap.min.css',
                nodeDir + 'font-awesome/css/font-awesome.min.css',
                nodeDir + 'drmonty-datatables/css/jquery.dataTables.min.css',
                nodeDir + 'drmonty-datatables/css/dataTables.bootstrap.min.css',
				nodeDir + 'drmonty-datatables-responsive/css/responsive.bootstrap.css',
				nodeDir + 'drmonty-datatables-fixedheader/css/fixedHeader.bootstrap.css',
                nodeDir + 'select2/dist/css/select2.min.css',
				nodeDir + 'tooltipster/dist/css/tooltipster.bundle.css',
				nodeDir + 'tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.min.css'],
            {base: nodeDir})
        .pipe(cleanCSS())
		.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
		.pipe(concat('vendor.min.css'))
		.pipe(gulp.dest('css'))

    //copy over bootstrap fonts
    gulp.src(nodeDir + 'bootstrap/fonts/*', {base: nodeDir + 'bootstrap/fonts'})
        .pipe(gulp.dest('fonts/'));

    //copy over font-awesome fonts
    gulp.src(nodeDir + 'font-awesome/fonts/*', {base: nodeDir + 'font-awesome/fonts'})
        .pipe(gulp.dest('fonts/'));
	
	//merge all javascript
	gulp.src([nodeDir + 'jquery/dist/jquery.min.js',
                nodeDir + 'bootstrap/dist/js/bootstrap.min.js',
                nodeDir + 'drmonty-datatables/js/jquery.dataTables.min.js',
                nodeDir + 'drmonty-datatables/js/dataTables.bootstrap.min.js',
				nodeDir + 'drmonty-datatables-fixedheader/js/dataTables.fixedHeader.js',
                nodeDir + 'drmonty-datatables-responsive/js/dataTables.responsive.js',
                nodeDir + 'drmonty-datatables-responsive/js/responsive.bootstrap.js',
                nodeDir + 'select2/dist/js/select2.min.js',
				nodeDir + 'js-cookie/src/js.cookie.js',
				nodeDir + 'tooltipster/dist/js/tooltipster.bundle.min.js',
                nodeDir + 'sticky-table-headers/js/jquery.stickytableheaders.min.js'], 
            {base: nodeDir})
    .pipe(concat('vendor.js'))
	.pipe(stripDebug())
    .pipe(gulp.dest('js/'));

});


gulp.task('build', function() {
    var options = {
        cwd: 'stats',
        silent: true
      };
    gulp.src(['stats/dlc_units.php',
        'stats/dlc_structures.php',
        'stats/dlc_technologies.php',
        'stats/dlc_civilizations.php',
        'stats/dlc_gathering.php',
        'stats/aoc_units.php',
        'stats/aoc_structures.php',
        'stats/aoc_technologies.php',
        'stats/aoc_civilizations.php',
        'stats/aoc_gathering.php'])
    .pipe(run('php ', options))
    .pipe(rename(function (path) {
        path.extname = ".json"
    }))
    .pipe(gulp.dest('stats/build/'));
});

var create_tiles = function(version, cb) {
    var dltiles = spawn('./download_tiles.sh', [], {cwd: 'images/techtrees/'+version});

    dltiles.stdout.on('data', function (data) {
        console.log('stdout: ' + data.toString());
    });

    dltiles.stderr.on('data', function (data) {
        console.log('stderr: ' + data.toString());
    });

    dltiles.on('exit', function (code) {
        console.log("Exited " + code);
        cb(null);
    });

};

gulp.task('aoc-tiles', function(cb) {
    create_tiles('aoc', cb);
});

gulp.task('dlc-tiles', ['aoc-tiles'], function(cb){
    create_tiles('dlc', cb);
});

gulp.task('tiles', ['aoc-tiles', 'dlc-tiles']);