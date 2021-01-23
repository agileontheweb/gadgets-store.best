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
        dest: 'dev/built.js',
      },
    },

		cssmin: {
		  options: {
		    mergeIntoShorthands: false,
		    roundingPrecision: -1
		  },
		  target: {
		    files: {
		      			'dev/built.css': [
								'bower_components/bootstrap/dist/css/bootstrap.css',
								'bower_components/animate.css/animate.min.css',
								'css/GDPR-cookie.css',
								'css/tailwind.css'
								]
		    }
		  }
		},

		responsive_images: {
			dev: {
				options: {
					engine: 'gm',
					sizes: [{width: 320, name: 'small'},
									{width: 640, name: 'medium'},
									{width: 800, name: 'large' }
									]
				},
			 files: [{
				expand: true,
				src: ['**/*.jpg'],
				cwd: 'img/prodotti',
				dest: 'dev/img/prodotti_responsive'
				}],
			}
	  },

		imagemin: {
			static: {
				options: {
						optimizationLevel: 7,
						use: [mozjpeg()] // Example plugin usage
				},
				files: [{
						expand: true,
						cwd: 'dev/img/prodotti_responsive',
						src: ['**/*.{png,jpg,gif}'],
						dest: 'dev/img'
				}]
			}
		},

	 	copy: {
			main: {
				expand: true,
				src: 'xml/*',
				dest: 'dev',
			},
 		},

		phpmin: {
			default_options: {
				options: {
					singleline: true,
					tabs: true,
					multiline: true,
					newline: true,
				},
				files: {'dev/': ['*.php','inc/*.php','pages/*.php','shared/*.php']}
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
				include: ["dev/*"],
				exclude: ["img/prodotti","package.json","node_modules","README.md",".git*",],
				recursive: true,
			},
			dev: {
				options: {
					src: ["dev/"],
					//src: ["dist","img","css","js","pages","shared","xml","inc","*.php"],
					dest: "<%= pkg.development_dir %>",
					host: "<%= pkg.ssh_user %>@<%= pkg.ssh_hostname %>"
				}
			}
		},

		clean: {
		 prodotti_compress: ['dev/img/prodotti_responsive']
		},
	});

	//load concat plugin
	grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-image-resize');
	grunt.loadNpmTasks('grunt-rsync');
	grunt.loadNpmTasks('grunt-responsive-images');
	grunt.loadNpmTasks('grunt-phpmin');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-copy');


	//create default task
	grunt.registerTask('compress_js_css', 'Compress Js and Css', ["concat","cssmin"]);
	grunt.registerTask("default", ["responsive_images","imagemin","clean:prodotti_compress"]);
	//grunt.registerTask("imagemin", ["imagemin"]);
	// grunt.registerTask("default", ['phpmin','copy','concat','cssmin', 'responsive_images','imagemin','clean:prodotti_compress']);
	// grunt.registerTask('test', [ 'phpmin','copy','concat','cssmin']);
	grunt.registerTask('push_dev', 'Build and upload to development', ["rsync:dev"]);

};
