$(document).ready(function () {
    $('#pitchForm').on('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#result').html(response);
            },
            error: function (xhr, status, error) {
                console.error("XHR Object:", xhr);
                console.error("Status:", status);
                console.error("Error:", error);
                $('#result').html('<p>There was an error processing your request. Check console for details.</p>');
            },
        });
    });
});
