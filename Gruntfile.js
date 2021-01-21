module.exports = function(grunt) {
	const mozjpeg = require('imagemin-mozjpeg');

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

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
		},

		rsync: {
			options: {
				args: [
					//"--dry-run",
					//"--progress",
					"--delete",		// !!!! PAY ATTENTION TO THE 'dest' BELOW. If set wrongly --delete can fuck all your data !!!!
					"--verbose",
					"-e 'ssh -p <%= pkg.ssh_port %>'",
				],
				include: ["dist/*"],
				exclude: ["css","img/prodotti","package.json","node_modules","README.md",".git*",],
				recursive: true,
			},
			dev: {
				options: {
					src: ["dist","img","js","pages","shared","xml","inc","*.php"],
					//src: ['/'],
					dest: "<%= pkg.development_dir %>",
					host: "<%= pkg.ssh_user %>@<%= pkg.ssh_hostname %>"
				},
			}
		}
	});

	//load concat plugin
	grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-rsync');

	//create default task
	// grunt.registerTask("default", ["concat","cssmin","imagemin"]);
	//grunt.registerTask('default', 'Build for upload to development', ["concat","cssmin","imagemin"]);
	grunt.registerTask('default', 'Build and upload to development', ["rsync:dev"]);
};
