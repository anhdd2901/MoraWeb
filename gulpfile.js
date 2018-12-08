'use strict'
const gulp = require('gulp')
const glob = require('glob')
const bs = require('browser-sync')
const $ = require('gulp-load-plugins')()
const mqpacker = require('css-mqpacker')
const autoprefixer = require('autoprefixer')
const assets = require('postcss-assets')
const reportError = require('./report-error')
const files = glob('src/*', {sync: true})
const theme = files[0].replace('src/', '')

gulp.task('sass', function () {
    return gulp.src('src/' + theme + '/assets/scss/style.scss')
               .pipe($.plumber({errorHandler: reportError}))
               .pipe($.sourcemaps.init())
               .pipe($.sassGlobImport())
               .pipe($.sass())
               .pipe($.postcss([autoprefixer({browsers: ['last 2 versions']}), mqpacker({sort: true}),
                                assets({loadPaths: ['src/' + theme + 'assets/images/']})]))
               .pipe($.sourcemaps.write('../sourcemap/', {
                   includeContent: false,
                   sourceRoot    : '../../scss/'
               }))
               .pipe($.lineEndingCorrector())
               .pipe(gulp.dest('src/' + theme + '/'))
})

gulp.task('bs', function () {
    bs.init({
        files: 'src/' + theme + '/*.css'
    })
})

gulp.task('bs-reload', function () {
    bs.reload()
})

gulp.task('watch', function () {
    gulp.watch('src/' + theme + '/assets/scss/**/*.scss', ['sass'])
    gulp.watch('src/' + theme + '/assets/js/**/*.js', ['bs-reload'])
    gulp.watch('src/' + theme + '/**/*.php', ['bs-reload'])
})

gulp.task('default', ['bs', 'sass', 'watch'])