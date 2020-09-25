$(document).on('click', '.delete', function () {
    var form = $('#'+$(this).data('target'));
    Swal.fire({
        title: 'پاک شود؟',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#ffc107',
        cancelButtonColor: '#999',
        confirmButtonText: 'YESSSS'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
    })

})
