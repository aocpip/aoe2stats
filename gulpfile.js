const gulp = require('gulp');
const fs = require('fs')
const concat = require('gulp-concat');
const replace = require('gulp-replace')
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const stripDebug = require('gulp-strip-debug');
const rename = require('gulp-rename');
const run = require('gulp-run');
const spawn = require('gulp-spawn');

var getPackageJson = function () {
    return JSON.parse(fs.readFileSync('./package.json', 'utf8'));
};

const devBuild = ((process.env.NODE_ENV || 'development').trim().toLowerCase() === 'development');
const releaseDir = devBuild ? 'dist/' : 'dist/'
const version = devBuild ? 'dev' : getPackageJson().version
var nodeDir = "node_modules/";

gulp.task('watch', function () {
    // gulp.watch('stats/*', ['build']);
});


function buildStats() {
    return gulp.src('src/stats/@(aoc|dlc)_*.js')             // get input files.
        .pipe(spawn({
            cmd: "node",
            args: [],
            opts: { cwd: './src/stats', env: { STATS_PRINT: true } },
            filename: function (base, _ext) {
                return base + ".json"
            }
        }))
        .pipe(gulp.dest(`${releaseDir}/stats/`))  // profit.
}

function buildAll(cb) {
    //change version
    gulp.src('src/index.html', { base: 'src' })
        .pipe(replace(/%VERSION%/g, version))
        .pipe(gulp.dest(`${releaseDir}`))
    gulp.src('src/compare.html', { base: 'src' })
        .pipe(replace(/%VERSION%/g, version))
        .pipe(gulp.dest(`${releaseDir}`))
    gulp.src('src/favicon.png', { base: 'src' })
        .pipe(gulp.dest(`${releaseDir}`))

    gulp.src('src/js/main.js', { base: 'src' })
        .pipe(rename(`main.${version}.js`))
        .pipe(gulp.dest(`${releaseDir}/js`))

    gulp.src('src/js/compare.js', { base: 'src' })
        .pipe(rename(`compare.${version}.js`))
        .pipe(gulp.dest(`${releaseDir}/js`))

    gulp.src('src/css/style.css', { base: 'src' })
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
        .pipe(rename(`style.${version}.css`))
        .pipe(gulp.dest(`${releaseDir}/css`))

    gulp.src('src/images/**', { base: 'src' })
        .pipe(gulp.dest(`${releaseDir}`))

    // concat all vendor css
    gulp.src([nodeDir + 'bootstrap/dist/css/bootstrap.min.css',
    nodeDir + 'font-awesome/css/font-awesome.min.css',
    //nodeDir + 'drmonty-datatables/css/jquery.dataTables.min.css',
    nodeDir + 'drmonty-datatables/css/dataTables.bootstrap.min.css',
    nodeDir + 'drmonty-datatables-responsive/css/responsive.bootstrap.css',
    nodeDir + 'drmonty-datatables-fixedheader/css/fixedHeader.bootstrap.css',
    nodeDir + 'select2/dist/css/select2.min.css',
    nodeDir + 'tooltipster/dist/css/tooltipster.bundle.css',
    nodeDir + 'tooltipster/dist/css/plugins/tooltipster/sideTip/themes/tooltipster-sideTip-light.min.css'],
        { base: nodeDir })
        //.pipe(cleanCSS())
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9'))
        .pipe(concat(`vendor.min.${version}.css`))
        .pipe(gulp.dest(`${releaseDir}css`))

    //copy over bootstrap fonts
    gulp.src(nodeDir + 'bootstrap/fonts/*', { base: nodeDir + 'bootstrap/fonts' })
        .pipe(gulp.dest(`${releaseDir}fonts/`));

    //copy over font-awesome fonts
    gulp.src(nodeDir + 'font-awesome/fonts/*', { base: nodeDir + 'font-awesome/fonts' })
        .pipe(gulp.dest(`${releaseDir}fonts/`));

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
    nodeDir + 'sticky-table-headers/js/jquery.stickytableheaders.min.js',
    nodeDir + 'vue/dist/vue.min.js'
    ],
        { base: nodeDir })
        .pipe(concat(`vendor.${version}.js`))
        .pipe(stripDebug())
        .pipe(gulp.dest(`${releaseDir}js/`));

    cb()
}

exports.stats = buildStats
exports.resources = buildAll
exports.default = gulp.parallel(buildAll, buildStats)
