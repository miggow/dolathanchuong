<script src="{{ asset('admin/assets/js/ckeditor.js') }}"></script>
<script src="{{ asset('admin/assets/js/uploadadapter.js') }}"></script>
<script>
	ClassicEditor.create( document.querySelector( '#description' ),
    {
        extraPlugins: [ MyCustomUploadAdapterPlugin ],
        ckfinder:
        {
            uploadUrl: "{{ route('ckeditor.upload', ['_token'=>csrf_token()]) }}",
        },
        mediaEmbed: {
            previewsInData: true,
        },
        toolbar: {
            items: [ 'undo', 'redo','|', 'heading',
            '|', 'bold', 'italic', 'underline', 'blockQuote', 'strikethrough', 'subscript', 'superscript', 'code','alignment', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor','sourceEditing',
            '|','link', 'uploadImage', 'insertImage', 'mediaEmbed', 'codeBlock',
            '|','insertTable', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'],
            shouldNotGroupWhenFull: true
        },

    }).catch( error => {
        console.error( error );
    } );
</script>
