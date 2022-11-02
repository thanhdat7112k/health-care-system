<script>
    function sweetAlert(icon) {
        return function (message) {
            Swal.fire({
                toast: true,
                icon: icon,
                title: message,
                position: 'top-right',
                showConfirmButton: false,
                timer: 3000,
            });
        }
    }

    const showToastError = sweetAlert('error');
    const showToastInfo = sweetAlert('info');
    const showToastWarning = sweetAlert('warning');
    const showToastSuccess = sweetAlert('success');

    if ('{{ Session::has('success_message') }}') {
        showToastSuccess('{{ session('success_message') }}');
    }

    if ('{{ Session::has('error_message') }}') {
        showToastError('{{ session('error_message') }}');
    }

    if ('{{ Session::has('info_message') }}') {
        showToastInfo('{{ session('info_message') }}');
    }

    if ('{{ Session::has('warning_message') }}') {
        showToastWarning('{{ session('warning_message') }}');
    }
</script>
