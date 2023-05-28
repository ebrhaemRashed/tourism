<textarea class="form-control description" id="description" value="{{old('description')}}" name="{{'description'}}"/></textarea>
<script>
CKEDITOR.replace('description', {
    height: 300,
    filebrowserUploadUrl: "{{Route('upload.image',['_token'=>csrf_token()])}}"
, });
</script>
