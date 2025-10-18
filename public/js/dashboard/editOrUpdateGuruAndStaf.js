// * preview image action
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const preview = document.getElementById('photo_preview');
        preview.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
