<!-- JavaScript Opsional; pilih salah satu dari dua! -->


<!-- Opsi 1: Bundle Bootstrap dengan Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

<!-- plugin datatables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<!-- memuat fontawesome dari cdn -->
<script defer src="https://use.fontawesome.com/releases/v6.1.1/js/all.js"
integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L5MraO5QpJHC+oUOE+FvJbgBZ0U9Kc3V+JhE3"
crossorigin="anonymous"></script>

<!-- memuat ckeditor dari cdn -->
<script src="https://cdn.ckeditor.com/4.24.0-lts/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace('alamat', {
        filebrowserBrowseUrl: 'assets/ckfinder/ckfinder.html',
        filebrowserUploadUrl: 'assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        height: '400px'
    });
</script>

<script>
$(document).ready(function() {
    $('#table').DataTable();
});
</script>

</body>
</html>