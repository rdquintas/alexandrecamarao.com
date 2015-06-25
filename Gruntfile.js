module.exports = function(grunt) {

    var css_start_here = [
        'C://SAP//zrq.test//dist//less//start_here.less'
    ];


    var _js_libs = [
        'bower_components/jquery/dist/jquery.min.js'
        // 'bower_components/handlebars/handlebars.min.js',
        // 'bower_components/packery/dist/packery.pkgd.min.js',
        // 'bower_components/slick-carousel/slick/slick.min.js'
    ];

    var _js_custom = [
        'js/app.js'
    ];


    // grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    // grunt.loadNpmTasks('grunt-contrib-concat');
    // grunt.loadNpmTasks('grunt-contrib-rename');
    // grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    // grunt.loadNpmTasks('grunt-contrib-clean');
    // grunt.loadNpmTasks('grunt-contrib-connect');
    // grunt.loadNpmTasks('grunt-contrib-compress');
    // grunt.loadNpmTasks('grunt-contrib-less');
    // grunt.loadNpmTasks('grunt-contrib-copy');
    // grunt.loadNpmTasks('grunt-libsass');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // // ================================
        // // jshint: JS Hint
        // // ================================          
        // jshint: {
        //     js_custom: {
        //         src: _js_custom
        //     }
        // },


        // // ================================
        // // concat: Concatenation
        // // ================================          
        // concat: {
        //     js_libs: {
        //         src: _js_libs,
        //         dest: 'js/libs.dist.js'
        //     },
        //     js_custom: {
        //         src: _js_custom,
        //         dest: 'js/app.dist.js'
        //     }
        // },


        // // ================================
        // // uglify: JS minify
        // // ================================  
        // uglify: {
        //     js_custom: {
        //         src: 'js/app.dist.js',
        //         dest: 'js/app.dist.js'
        //     }
        // },


        // // ================================
        // // cssmin: CSS minify
        // // ================================        
        // cssmin: {
        //     css_custom: {
        //         files: {
        //             'css/style.dist.css': ['css/style.dist.css']
        //         }
        //     }
        // },



        // ================================
        // less: LESS compilation
        // ================================  
        less: {
            css_custom: {
                options: {
                    cleancss: false,
                    compress: false
                },
                files: {
                    'C://SAP//zrq.test//dist//css//style.css': css_start_here
                }
            }
        },

        // ================================
        // watch: WATCH me now
        // ================================          
        watch: {
            js_custom: {
                files: _js_custom,
                tasks: [
                    'jshint:js_custom',
                    'concat:js_custom'
                ],
                options: {
                    event: ['all'],
                    interrupt: true
                }
            },
            css_custom: {
                files: "C://SAP//zrq.test//dist//less//*.less",
                tasks: [
                    'less:css_custom'
                ],
                options: {
                    event: ['all'],
                    interrupt: true
                }
            }
        }


        // // ================================
        // // copy: Copy files
        // // ================================  
        // copy: {
        //     purecss: {
        //         src: 'bower_components/pure/pure-min.css',
        //         dest: 'css/pure-min.css'
        //     }
        // },


        // // ================================
        // // clean: Deletes files
        // // ================================          
        // clean: ['js/<%= pkg.name %>.js'],


        // // ================================
        // // rename: Rename files
        // // ================================          
        // rename: {
        //     // css: {
        //     //     files: [{
        //     //         src: 'css/teste.css',
        //     //         dest: 'css/teste.min.css'
        //     //     }]
        //     // }
        // },


        // // ================================
        // // connect: HTTP server
        // // ================================
        // connect: {
        //     server: {
        //         options: {
        //             port: 8080,
        //             keepalive: true
        //         }
        //     }
        // }

    });


    // ================================
    // Task:    default
    // ================================
    grunt.registerTask('default', [
        // 'concat:js_libs',
        // 'jshint:js_custom',
        // 'concat:js_custom',
        // 'uglify:js_custom',
        // 'libsass:css_custom'
        // 'copy:purecss',
        // 'cssmin:css_custom'
    ]);

    // ================================
    // Task:    prod
    // ================================    
    grunt.registerTask('prod', [
        // 'concat:js_libs',
        // 'jshint:js_custom',
        // 'concat:js_custom',
        // 'uglify:js_custom',
        // 'libsass:css_custom',
        // 'copy:purecss',
        // 'cssmin:css_custom'
    ]);

};
