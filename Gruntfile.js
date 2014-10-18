module.exports = function(grunt) {

    var shelljs = require('shelljs');

    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        compass: {
            dist: {
                options: {
                    config: 'assets/styles/scss/compass_config.rb',
                    outputStyle: 'compressed',
                    bundleExec: true
                }
            },
            dev: {
                options: {
                    config: 'assets/styles/scss/compass_config.rb',
                    bundleExec: true
                }
            }
        },
        watch: {
            css: {
                options: {
                    livereload: true
                },
                files: ['assets/styles/scss/*.scss', 'assets/styles/scss/**/*.scss'],
                tasks: ['compass:dev']
            }
        }
    });

    grunt.registerTask("bundle", 'Do bundle install', function () {
        // This task will try to use the local caches first
        // If that fails, it will just run bundle normally
        if (shelljs.exec('bundle --local --path=vendor/bundle').code !== 0) {
            return shelljs.exec('bundle --path=vendor/bundle').code === 0;
        } else {
            return true;
        }
    });

    grunt.registerTask(
        'default',
        [
            'compass:dist'
        ]
    );

    grunt.registerTask(
        'dev',
        [
            'compass:dev',
            'watch'
        ]
    );

    grunt.registerTask(
        'install-deps',
        [
            'bundle'
        ]
    );
};