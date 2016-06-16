module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less:{
      development:{
        files:{
          "css/src/app.css" : "css/src/less/app.less"
        }
      },
    },
    concat: {
      js: {
        src: [
          'js/src/jquery.js',
          'js/src/**/*.js'],
        dest: 'js/app.js'
      },
      css: {
        src: [
          'css/src/imports.css',
          'css/src/foundation.css',
          'css/src/app.css',
          'css/src/featherlight.css'
        ],
        dest: 'css/src/app.combined.css'
      }
    },
    cssmin: {
      css:{
        src: 'css/src/app.combined.css',
        dest: 'css/app.min.css'
      }
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

    watch:{
      css:{
        files: ['less/**/*.less'],
        tasks: ['less', 'cssmin'],
      },
      js:{
        files: ['js/src/app.js'],
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
