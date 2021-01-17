/*Dropzone Init*/
$(function(){
	"use strict";
	Dropzone.options.myAwesomeDropzone = {
		addRemoveLinks: true,
		dictResponseError: 'Server not Configured',
        acceptedFiles: ".png,.jpg,.jpeg,.gif,.bmp,.zip",
        maxFilesize: 12,
        addRemoveLinks: true,
        timeout: 5000,
        removedfile: function(file)
        {
            var name = file.name;
            console.log(document.querySelector('input[name="_token"]'));
            var CSRF_TOKEN = document.querySelector('input[name="_token"]').value;
            console.log(name);

            $.ajax({
                type: 'DELETE',
                url: '{{ route("admin.images.delete", $project->slug) }}',
                data: {filename: name, _token: CSRF_TOKEN},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function(file, response)
        {
            // var hello = file.ils');

            console.log(response);
            return true
        },
        error: function(file, response)
        {
           return false;
        }
	};
});

