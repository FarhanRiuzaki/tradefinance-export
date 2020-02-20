var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var clean = require('gulp-clean');
var sourcemaps = require('gulp-sourcemaps');
var conf = require('./Config');

var outputs = conf.dist;
gulp.task('clean',function(done){
    // var newArray = [];
    // var key = 0;
    // for(var obj in outputs){
    //     var dist = outputs[obj]['dist'];
    //     for(var dist_clean in dist){
    //         newArray[key] = dist[dist_clean];
    //         key++;
    //     }
    // }
    // gulp.src(newArray)
    // .pipe(clean({force: true}));
    done();
})

gulp.task('sass', function(done) {
    gulp.src(conf.dist.vendor.style)
      .pipe(sass().on('error', sass.logError))
      .pipe(concat('vendor.bundle.css'))
      .pipe(gulp.dest(conf.dist.vendor.dist.style));
    done();
});
gulp.task('script', function(done) {
    gulp.src(conf.dist.vendor.script)
    .pipe(sourcemaps.init())
    .pipe(concat('vendor.bundle.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(conf.dist.vendor.dist.script));
    done();
});
gulp.task('img', function(done) {
    gulp.src(conf.dist.vendor.img)
    .pipe(gulp.dest(conf.dist.vendor.dist.img));
    done();
});


gulp.task('font', function(done) {
    gulp.src(conf.dist.vendor.font)
    .pipe(gulp.dest(conf.dist.vendor.dist.font));
    done();
});

gulp.task('default', ['clean','sass','script','img','font']);
// gulp.task('default', function() {
//     return gulp.src("bootstrap/scss/boostrap.scss")
//         .pipe(sass())
//         .pipe(gulp.dest('./tot.css'));
// });