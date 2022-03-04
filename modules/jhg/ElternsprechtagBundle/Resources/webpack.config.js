let merge = require('webpack-merge');
let path = require('path');
let baseConfig = require(path.join(process.env.WEBPACK_BASE_PATH, 'webpack.config.base.js'));

let webpackConfig = {
    entry: {
        'js/printnacs': './assets/js/printnacs.js',
        'css/internet': './assets/less/internet.less',
    },
};

module.exports = merge(baseConfig.get(__dirname), webpackConfig);