const gulp = require('gulp');
const browserSync = require('browser-sync').create();

gulp.task('watch', function () {
    browserSync.init({
        proxy: "http://localhost/wordpress", // Cambia esto según tu configuración
        files: ["./assets/css/*.css", "./**/*.php"], // Archivos a monitorear
        notify: false
    });

    gulp.watch("./assets/css/*.css").on("change", browserSync.reload);
    gulp.watch("./**/*.php").on("change", browserSync.reload);
});

// Ejecutar con: gulp watch
