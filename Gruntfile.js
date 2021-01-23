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
		      			'dist/css.min.css': [
								// 'bower_components/bootstrap/dist/css/bootstrap.css',
								// 'bower_components/animate.css/animate.min.css',
								'css/GDPR-cookie.css',
								//'css/tailwind.css'
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
				dest: 'dist/img/prodotti_responsive'
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
						cwd: 'dist/img/prodotti_responsive',
						src: ['**/*.{png,jpg,gif}'],
						dest: 'dist/img'
				}]
			}
		},

	 	copy: {
			main: {
				expand: true,
				src: 'xml/*',
				dest: 'dist',
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
				files: {'dist/': ['*.php','inc/*.php','pages/*.php','shared/*.php']}
			}
		},

		php2html: {
			default: {
			options: {
				processLinks: true,
				haltOnError: false
			},
			files: [
				{expand: true, cwd: '.', src: ['index.php'], dest: 'dist', ext: '.html' }
			]
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
				exclude: ["img/prodotti","package.json","README.md",".git*",],
				recursive: true,
			},
			dev: {
				options: {
					//src: ["/"],
					src: ["dist","img","css","js","pages","shared","xml","inc","*.php"],
					dest: "<%= pkg.development_dir %>",
					host: "<%= pkg.ssh_user %>@<%= pkg.ssh_hostname %>"
				}
			}
		},

		clean: {
		 prodotti_compress: ['dist/img/prodotti_responsive']
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
	grunt.loadNpmTasks('grunt-php2html');

	//create default task
	// grunt.registerTask('compress_js_css', 'Compress Js and Css', ["concat","cssmin"]);
	// grunt.registerTask("default", ["concat","responsive_images","imagemin","clean:prodotti_compress"]);
	// grunt.registerTask("default", ['phpmin','copy','concat','cssmin', 'responsive_images','imagemin','clean:prodotti_compress']);
	// grunt.registerTask('test', [ 'phpmin','copy','concat','cssmin']);
	// grunt.registerTask('test', ['cssmin']);
//	grunt.registerTask('test', ['php2html']);
	// grunt.registerTask('push_dev', 'Build and upload to development', ["rsync:dev"]);

};
