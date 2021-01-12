module.exports = function(grunt) {
	const mozjpeg = require('imagemin-mozjpeg');

	grunt.initConfig({
    concat: {
      dist: {
        src: [
							'bower_components/jquery/dist/jquery.min.js',
							'bower_components/bootstrap/dist/js/bootstrap.min.js',
							'bower_components/jquery.countdown/dist/jquery.countdown.min.js',
							'js/jquery.ihavecookies.js',
							'js/GDPR-cookie.js',
							'js/countdown.js',
							'js/main.js'],
        dest: 'dist/built.js',
      },
    },

		cssmin: {
		  options: {
		    mergeIntoShorthands: false,
		    roundingPrecision: -1
		  },
		  target: {
		    files: {
		      'dist/built.css': [
										'bower_components/bootstrap/dist/css/bootstrap.css',
										'css/GDPR-cookie.css',
										'css/tailwind.css'
										]
		    }
		  }
		},

		imagemin: {
			static: {
					options: {
							optimizationLevel: 3,
							svgoPlugins: [{removeViewBox: false}],
							use: [mozjpeg()] // Example plugin usage
					},
					files: [{
							expand: true,
							cwd: 'img/prodotti/',
							src: ['**/*.{png,jpg,gif}'],
							dest: 'dist/img/prodotti'
					}]
			}
		}
	});

	//load concat plugin
	grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	//create default task
	//grunt.registerTask("default", ["concat"], ["imagemin"]);
	// grunt.registerTask("default", ["concat"]);
	//grunt.registerTask("default", ["imagemin"]);
	grunt.registerTask("default", ["cssmin"]);

};
