module.exports = function(grunt) {

	grunt.initConfig({
		watch: {
			options: {
				livereload: true,
			},
			files: ['**/*.html', '**/*.php', '**/*.css', '**/*.js'],
		}
	});

	grunt.loadNpmTasks('grunt-contrib-watch');

	grunt.registerTask('default', ['watch']);

};