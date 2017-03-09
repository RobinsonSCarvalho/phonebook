function handleFileSelect(evt) {
    var obj = document.getElementById(evt.target.id).parentNode.parentNode.getElementsByClassName('listFileUpload');
    var div = obj;
    div[0].innerHTML = '' ;
    console.log(obj);
    var files = evt.target.files; // FileList object
    for (var i = 0, f; f = files[i]; i++) {
        if (!f.type.match('image.*')) {
            continue;
        }
        var reader = new FileReader();
        reader.onload = (function (theFile) {
            return function (e) {
                var span = document.createElement('span');
                span.innerHTML = ['<img style=\"margin-left: 20px;\" class=\"img-lg img-border img-thumbnail\" src=\"', e.target.result, '\" title=\"', escape(theFile.name), '\"/>'].join('');
                obj[0].insertBefore(span, null);
            };
        })(f);
        reader.readAsDataURL(f);
    }
}