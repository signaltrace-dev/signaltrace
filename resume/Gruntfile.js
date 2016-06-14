module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      js: {
        src: [
          'js/src/**/*.js'],
        dest: 'js/app.js'
      },
    },
    less:{
      development:{
        files:{
          "css/app.css" : "less/app.less"
        }
      },
    },
    uglify: {
      options: {
        // the banner is inserted at the top of the output
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      js: {
        files: {
          'js/app.min.js': ['<%= concat.js.dest %>']
        }
      },
    },
    cssmin: {
      css:{
        src: 'css/app.css',
        dest: 'css/app.min.css'
      }
    },
    watch:{
      css:{
        files: ['less/**/*.less'],
        tasks: ['less', 'cssmin'],
      },
      js:{
        files: ['js/src/*'],
        tasks: ['concat', 'uglify'],
      }
    },
  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['concat', 'less', 'uglify', 'cssmin']);
};
