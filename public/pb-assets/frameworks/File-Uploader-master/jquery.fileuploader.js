
(function($, window, document, undefined) {

	var FileUploader = function() {
        this.$elem;
        this.options;
    }
    
    FileUploader.fn = FileUploader.prototype;

    FileUploader.fn.properties = {
    	jqXHR: null // The XHR object from the $.ajax call
    }

    FileUploader.fn.elements = {}

    /**
    *   Init File Uploader
    */ 
    FileUploader.fn.init = function(options, elem) {
    	
        this.$elem = $( elem );                        
            
        this.options = $.extend( {}, $.fn.fileUploader.options, options);

        if (this.options.formUpload) {
        	this.prepFileInput();
        }

        if (this.options.dragUpload) {
            this.prepDrag();
        }

        this.elements.$cancelBtn = $("#fUpCancel");
        if (this.elements.$cancelBtn.length > 0) {
            this.elements.$cancelBtn.on("click", $.proxy(this.cancelUpload, this));
        }
    };

    /**
    *   Prepare the elements for Form File input
    */
    FileUploader.fn.prepFileInput = function(){

    	// Set the elements
    	this.elements.$form = this.$elem.find("#fUForm");
    	this.elements.$input = this.$elem.find("#fUInput");

    	// Bind the events
    	this.elements.$input.on("change", $.proxy(this.onFileChange, this));
    	this.elements.$form.on("submit", $.proxy(this.onFileChange, this));

    };

    /**
    *   Prepare the elements for drag and drop files
    */
    FileUploader.fn.prepDrag = function(){

    	// Set the elements
    	this.elements.$dragContainer = this.$elem.find("#fUDragContainer");

    	// Bind the events
    	this.elements.$dragContainer.on("drop", $.proxy(this.onDrop, this));
    	this.elements.$dragContainer.on("dragenter", $.proxy(this.onDragEnterAndOver, this));
    	this.elements.$dragContainer.on("dragover", $.proxy(this.onDragEnterAndOver, this));

    };

    /**
    *   On change on the file input element. 
    *   Get the file and validate and then get form data and send to upload.
    */
    FileUploader.fn.onFileChange = function(event) {
    	event.preventDefault();

    	var file, formData;

		file = this.elements.$input.get(0).files[0];			
		
		if (this.validateFile(file)){
			formData = new FormData(this.elements.$form[0]);

            if (typeof this.options.onUploadStart === 'function') {
                this.options.onUploadStart(file);
            }
            
			this.upload(formData);
		}
    }

    FileUploader.fn.onSubmit = function(event) {
    	event.preventDefault();
    };

    FileUploader.fn.onDrop = function(event) {
    	event.preventDefault();

        var file, formData;

        file = event.originalEvent.dataTransfer.files[0];
        
        if (this.validateFile(file)){
            formData = new FormData();
            formData.append('file', file, file.name);  

            if (typeof this.options.onUploadStart === 'function') {
                this.options.onUploadStart(file);
            }

            this.upload(formData);
        }
    };

    FileUploader.fn.onDragEnterAndOver = function(event) {
    	event.preventDefault();
        event.stopPropagation();
    };

    FileUploader.fn.validateFile = function(file) {

            var fileSize, fileName, valid;

            fileSize = (Math.round(file.size * 100 / (1024 * 1024)) / 100);
            fileName = file.name;
            valid = false;

            if (!this.validateFileSize(fileSize)) {
                this.sendError(0);
            }
            else if (!this.validateFileFormat(file.type)) {
                this.sendError(1);
            }
            else if (!this.validateFileName(file.name)) {
                this.sendError(2);
            }
            else {
                valid = true;
            }

            return valid;

    };

    FileUploader.fn.validateFileSize = function(size){
        return size < this.options.maximumFileSize || this.options.maximumFileSize === 0 ? true : false;
    };

    FileUploader.fn.validateFileFormat = function(fileFormat){

        if (this.options.validFileFormats.length === 0) {
            return true;
        }
        else {

            var valid = false;

            for ( var i = 0, len = this.options.validFileFormats.length; i < len; i++) {
                if (this.options.validFileFormats[i] === fileFormat){
                    valid = true;
                }
            }
        }

        return valid;
    };


    FileUploader.fn.validateFileName = function(fileName){
        return fileName.length > 0 ? true : false;
    }

    FileUploader.fn.upload = function(formData) {

        var self = this;

        this.properties.jqXHR = $.ajax({
            url: self.options.url,  
            type: self.options.action,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            xhr: function() { 
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload){
                    // Add listener to the progress event
                    myXhr.upload.addEventListener('progress', $.proxy(self.onProgress, self), false);
                }
                return myXhr;
            },
            success: function(data){
                if (typeof self.options.onUploadDone === 'function') {
                    self.options.onUploadDone(data);
                }
            },
            error: function(error) {
                if (typeof self.options.onError === 'function') {
                    self.options.onError({
                        status: 3,
                        statusCode: error.status,
                        message: error.statusText
                    });
                }
            }
        });
    };

    /**
    *   Cancel the file upload. Trigger by click on #fUpCancel
    */
    FileUploader.fn.cancelUpload = function(event) {

        this.properties.jqXHR.abort(); 

        if (typeof this.options.onCancelUpload === 'function') {
            this.options.onCancelUpload();
        }
    };

    /**
    *   Send the progress in decimails to the progress callback function
    */
    FileUploader.fn.onProgress = function(event) {        

        if (typeof this.options.onProgress === 'function') {

            var total, done, percent;

            total = event.totalSize;
            done = event.position;
            value = done/total;

            this.options.onProgress(value)
        }


    }

    FileUploader.fn.sendError = function(code) {

        if (typeof this.options.onError === 'function') {

            var error = {
                status: code,
                message: this.options.errorMessages[code] 
            }

            this.options.onError(error);

        }
    };

	$.fn.fileUploader = function( options ) {
        var fileuploader = new FileUploader();
        fileuploader.init( options, this );
    };
    
    $.fn.fileUploader.options = {
        validFileFormats: [],
		maximumFileSize: 0,
		errorMessages: [
            "File is to big",
			"Forbidden file format",
			"File name is not correct"
		],
        onUploadStart: null,
		onUploadDone: null, 
		onProgress: null,
        onCancelUpload: null,
		onError: null,
		url: "/upload",
		action: "POST",
		formUpload: true,
		dragUpload: true		
    };

})( jQuery, window, document);
