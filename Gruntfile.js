module.exports = function(grunt){

    grunt.initConfig({
      sass: {
        options: {
          outputStyle : 'expanded'
        },
        dist: {
          files: [{
            expand : true,
            cwd: 'sass/',
            src: '*.scss',
            dest: 'css/'
            ext: '.css'
          }]
        }
      }
    });

    grunt.loadNpmTasks('grunt-sass');
};
