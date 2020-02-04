const path = require('path');
const outputDir = path.resolve(__dirname, 'dist/js');
module.exports = {
    entry: ["./src/js/site_scripts.js"],
    output: {
        path: outputDir,
        filename: 'site-bundle.js'
    },
    externals: {
        "jquery": "jQuery"
    },  
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
            use: {
                loader: 'babel-loader',
                options: {
                    presets: ['@babel/preset-env'],
                    plugins: ["@babel/transform-runtime"]
                }
            }
        }]
   }
};