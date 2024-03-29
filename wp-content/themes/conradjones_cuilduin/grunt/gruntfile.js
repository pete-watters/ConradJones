module.exports = function(grunt) {

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		// chech our JS
		jshint: {
			options: {
				"bitwise": true,
				"browser": true,
				"curly": true,
				"eqeqeq": true,
				"eqnull": true,
				"esnext": true,
				"immed": true,
				"jquery": true,
				"latedef": true,
				"newcap": true,
				"noarg": true,
				"node": true,
				"strict": false,
				"trailing": true,
				"undef": true,
				"globals": {
					"jQuery": true,
					"alert": true
				}
			},
			all: [
				'gruntfile.js',
				'../js/script.js'
			]
		},

		// concat and minify our JS
		uglify: {
			dist: {
				files: {
					'../js/scripts.min.js': [
						'../js/scripts.js'
					]
				}
			}
		},

		// compile your sass
		sass: {
			dev: {
				options: {
					style: 'expanded'
				},
				src: ['../scss/style.scss'],
				dest: '../style.css'
			},
			prod: {
				options: {
					style: 'compressed'
				},
				src: ['../scss/style.scss'],
				dest: '../style.css'
			},
			editorstyles: {
				options: {
					style: 'expanded'
				},
				src: ['../scss/wp-editor-style.scss'],
				dest: '../css/wp-editor-style.css'
			}
		},

		// watch for changes
		watch: {
			scss: {
				files: ['../scss/**/*.scss'],
				tasks: [
					'sass:dev',
					'sass:editorstyles',
					'notify:scss'
				]
			},
			js: {
				files: [
					'<%= jshint.all %>'
				],
				tasks: [
					'jshint',
					'uglify',
					'notify:js'
				]
			}
		},

		// check your php
		phpcs: {
			application: {
				dir: '../*.php'
			},
			options: {
				bin: '/usr/bin/phpcs'
			}
		},

		// notify cross-OS
		notify: {
			scss: {
				options: {
					title: 'Grunt, grunt!',
					message: 'SCSS is all gravy'
				}
			},
			js: {
				options: {
					title: 'Grunt, grunt!',
					message: 'JS is all good'
				}
			},
			dist: {
				options: {
					title: 'Grunt, grunt!',
					message: 'Theme ready for production'
				}
			}
		},

		clean: {
			dist: {
				src: ['../dist'],
				options: {
					force: true
				}
			}
		},

		copyto: {
			dist: {
				files: [
					{cwd: '../', src: ['**/*'], dest: '../dist/'}
				],
				options: {
					ignore: [
						'../dist{,/**/*}',
						'../doc{,/**/*}',
						'../grunt{,/**/*}',
						'../scss{,/**/*}'
					]
				}
			}
		},
		'ftp-deploy': {
   build: {
   auth: {
      host: 'peterjwatters.com',port: 21,authKey: 'key1'},
      src: '../dist/',
      dest: '/public_html/comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/themes/conradjones_cuilduin',
      exclusions: ['../dist/node_modules/*', '../dist/images/*', '../dist/fonts/*','path/to/source/folder/**/Thumbs.db', 'path/to/dist/tmp'],
			forceVerbose: true
		}
		},
		'ftp-deploy-live': {
      build: {
        auth: { host: 'peterjwatters.com', port: 21, authKey: 'key1' },
				src: '../dist/',
				dest: '/public_html/comhairleteicneolaiochta.ie/projects/cuilduin/wp-content/themes/conradjones_cuilduin',
				exclusions: ['../dist/node_modules/*', '../dist/images/*', '../dist/fonts/*','path/to/source/folder/**/Thumbs.db', 'path/to/dist/tmp'],
				forceVerbose: true
			}
		}

	});

	// Load NPM's via matchdep
	require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);


grunt.registerTask('default', ['ftpPut']);

	// Development task
	grunt.registerTask('default', [
		'jshint',
		'uglify',
		'sass:dev',
		'sass:editorstyles'
	]);

	grunt.registerTask('ftp-demo', [
		'ftp-deploy'
	]);
	grunt.registerTask('ftp-live', [
		'ftp-deploy-live'
	]);
	// Demo Production task
	grunt.registerTask('dist-demo', function() {
		grunt.task.run([
			'jshint',
			'uglify',
			'sass:prod',
			'sass:editorstyles',
			'clean:dist',
			'copyto:dist',
			'notify:dist',
			'ftp-demo'
		]);
	});

	// Live Production task
	grunt.registerTask('dist-production', function() {
		grunt.task.run([
			'jshint',
			'uglify',
			'sass:prod',
			'sass:editorstyles',
			'clean:dist',
			'copyto:dist',
			'notify:dist',
			'ftp-live'
		]);
	});
};
