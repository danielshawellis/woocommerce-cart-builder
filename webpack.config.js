let adminConfig = {
  entry:  __dirname + '/admin/js/admin.js',
  output: {
    path: __dirname + '/assets/js',
    filename: 'admin.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: 'babel-loader'
      }
    ]
  },
  mode: 'development'
}

let publicConfig = {
  entry:  __dirname + '/public/js/public.js',
  output: {
    path: __dirname + '/assets/js',
    filename: 'public.js'
  },
  module: {},
  mode: 'development'
}

module.exports = [
  adminConfig, publicConfig
];
