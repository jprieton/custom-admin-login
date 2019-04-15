module.exports = function ( grunt ) {
  grunt.initConfig( {

    pkg: grunt.file.readJSON( 'package.json' ),

    copy: {
      svn: {
        files: [
          {
            expand: true,
            src: ['*.md', '*.php', 'readme.txt', 'includes/*', 'languages/*', 'LICENSE'],
            dest: '../svn-custom-admin-login/trunk/'
          }
        ]
      }
    }

  } );

  grunt.loadNpmTasks( 'grunt-contrib-copy' );
};