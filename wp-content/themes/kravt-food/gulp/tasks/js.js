import rename from "gulp-rename";
import webpack from "webpack";
import webpackStream from "webpack-stream" ;

export const js = () => {
    return app.gulp
        .src(app.path.src.js, { sourcemaps: true })
        .pipe(app.plugins.plumber(
            app.plugins.notify.onError({
                title: "JS",
                message: "Error: <%= error.message %>"
            })
        ))
        .pipe(webpackStream({
            mode: "production",
            plugins: [
                new webpack.ProvidePlugin({
                    $: "jquery",
                    jquery: "jQuery",
                    "window.jQuery": "jquery"
                }),
            ],
            output: {
                filename: 'index.min.js'
            },
        }))
        .pipe(app.gulp.dest(app.path.build.js));
};