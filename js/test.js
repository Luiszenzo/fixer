$(document).ready(function() {
    $('#pdf-upload-form').on('submit', function(e) {
        e.preventDefault(); 

        var formData = new FormData(this);
        var url = "<?= site_url('test/upload') ?>"; 

        $('#resultado').html('<div class="alert alert-info">Subiendo archivo...</div>');

        $.ajax({
            url: url, 
            type: 'POST',
            data: formData,
            processData: false, 
            contentType: false,
            success: function(data) {
                $('#resultado').html(''); 

                if (data.success) {
                    toastr.success(data.message, 'Éxito'); 
                } else {
                    toastr.error(data.message, 'Error');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               
                var errorMsg = 'Error al subir el archivo: ' + textStatus + ' - ' + errorThrown;
                if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMsg += '<br>Detalles del error: ' + jqXHR.responseJSON.message;
                }
                toastr.error(errorMsg, 'Error'); 
            }
        });
    });
});


function verPDF(idEjercicio) {
    // Hacer una solicitud AJAX para obtener la URL del PDF
    $.ajax({
        url: "<?= site_url('ejercicios/verpdf') ?>/" + idEjercicio,
        method: "GET",
        dataType: "json",
        success: function(response) {
            if (response.success) {
                // Cargar el PDF en el iframe dentro del modal
                $('#pdfFrame').attr('src', response.pdfUrl);
                // Mostrar el modal
                $('#pdfModal').modal('show');
            } else {
                alert(response.message);
            }
        },
        error: function() {
            alert('Error al obtener el PDF.');
        }
    });
}