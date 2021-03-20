var gulp = require("gulp"),
  /* Packages For HTML */

  pug = require("gulp-pug"), // Компиляция Pug в HTML
  /* Packages For CSS */

  cleanCSS = require("gulp-clean-css"), // Минимизация CSS-файлов
  // -------------------------------------------------------------
  less = require("gulp-less"), // Компилятор Less в CSS
  // -------------------------------------------------------------
  sass = require("gulp-sass"), // Компилятор Sass в CSS
  // -------------------------------------------------------------
  stylus = require("gulp-stylus"), // Компилятор Stylus в CSS
  /* Packages For JavaScript */

  jshint = require("gulp-jshint"), // Проверка JS-файлов
  // -------------------------------------------------------------
  uglify = require("gulp-uglify"), // Сжатие JS-файлов
  // -------------------------------------------------------------
  babel = require("gulp-babel"), // Транспайлер ES6 / ES7 / ES8
  // -------------------------------------------------------------
  coffee = require("gulp-coffee"), // Компилятор CoffeeScript в JS
  // -------------------------------------------------------------
  ts = require("gulp-typescript"), // Компилятор TypeScript в JS
  /* Other Packages */

  rename = require("gulp-rename"), // Для переименовывания файлов
  // -------------------------------------------------------------
  clean = require("gulp-clean"), // Удаление файлов
  // -------------------------------------------------------------
  notify = require("gulp-notify"); // Для уведомлений о завершении процесса

/* ===================== Watcher ===================== */

var path = {
  pug: ["Views/**/*.pug"],
  less: ["Styles/**/*.less"],
  scss: ["Styles/**/*.scss"],
  styl: ["Styles/**/*.styl"],
  coffee: ["JS/*.coffee"],
  ts: ["JS/*.ts"],
};

/* ===================== Подзадачи ===================== */

/* ---------------- Компиляция Pug в HTML5 ---------------- */

gulp.task("pug", async () => {
  await gulp
    .src("Views/*.pug")
    .pipe(pug({ pretty: true })) //Не в одну строку компиляция
    .pipe(gulp.dest("Build"))
    .pipe(notify("Pug complete!"));
});

/* ---------------- Компиляция Less в CSS ---------------- */

gulp.task("less", async () => {
  await gulp
    .src("Styles/*.less")
    .pipe(less())
    .pipe(gulp.dest("Build"))
    .pipe(notify("Less complete!"));
});

/* ---------------- Компиляция Sass в CSS ---------------- */

gulp.task("sass", async () => {
  await gulp
    .src("Styles/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("Build"))
    .pipe(notify("Sass complete!"));
});

/* ---------------- Компиляция Stylus в CSS ---------------- */

gulp.task("stylus", async () => {
  await gulp
    .src("Styles/*.styl")
    .pipe(stylus())
    .pipe(gulp.dest("Build"))
    .pipe(notify("Stylus complete!"));
});

/* ---------------- Минимизация CSS-файлов ---------------- */

gulp.task("mincss", async () => {
  await gulp
    .src(["Build/*.css", "!Build/*.min.css"])
    .pipe(cleanCSS())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("Build"))
    .pipe(notify("CSS-minify complete!"));
});

/* ---------------- Компиляция CoffeeScript в JS ---------------- */

gulp.task("coffee", async () => {
  await gulp
    .src("JS/*.coffee")
    .pipe(coffee({ bare: true }))
    .pipe(gulp.dest("Build"))
    .pipe(notify("Coffee complete!"));
});

/* ---------------- Компиляция TypeScript в JS ---------------- */

gulp.task("type", async () => {
  await gulp
    .src("JS/*.ts")
    .pipe(ts())
    .pipe(gulp.dest("Build"))
    .pipe(notify("TS complete!"));
});

/* ---------------- Babel ---------------- */

gulp.task("babel", async () => {
  await gulp
    .src(["JS/*.js", "!JS/*.min.js"])
    .pipe(babel())
    .pipe(gulp.dest("Build"))
    .pipe(notify("Babel complete!"));
});

/* ---------------- Проверка JS-файлов ---------------- */

gulp.task("default", async () => {
  await gulp.src("Build/*.js").pipe(jshint()).pipe(notify("JShint complete!"));
});

/* ---------------- Сжатие JS-файлов ---------------- */

gulp.task("minjs", async () => {
  await gulp
    .src(["Build/*.js", "!Build/*.min.js"])
    .pipe(uglify())
    .pipe(rename({ suffix: ".min" }))
    .pipe(gulp.dest("Build"))
    .pipe(notify("Minify complete!"));
});

/* ---------------- Удаление файлов ---------------- */

gulp.task("clean", async () => {
  await gulp
    .src(["Build/*.css", "!Build/*.min.css", "Build/*.js", "!Build/*.min.js"])
    .pipe(clean())
    .pipe(notify("Clean complete!"));
});
