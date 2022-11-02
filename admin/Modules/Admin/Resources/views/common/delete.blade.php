<form id="form-delete" action="" method="POST">
    @method('DELETE')
    @csrf
</form>
<script>
    function showDeleteModal(actionUrl) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: `Yes, delete it!`,
            confirmButtonColor: 'dodgerblue',
        }).then((result) => {
            if (result.isConfirmed) {
                const form = $('#form-delete');
                form.attr('action', actionUrl);
                form.submit();
            }
        });
    }
</script>
