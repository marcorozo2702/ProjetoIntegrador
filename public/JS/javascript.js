//Pré Visualizar
$(function() {
    $("#inputGroupFile01").change(function() {
        if (this.files && this.files[0]) {
            //Cria variável, Usa função FileReader
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#view').attr('src', e.target.result);
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
});
