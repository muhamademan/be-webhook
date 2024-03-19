<!-- Footer -->
<!-- <footer class="sticky-footer bg-dark">
    <div class="copyright text-right my-auto float-right justify-content-end mr-3">
        <span class="text-primary">Build by <i class="fa fa-heart heart text-danger"></i> IT CGK
            2024</span>
    </div>
</footer> -->
<!-- End of Footer -->

</div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap4.js"></script>


<script>
new DataTable('#example');
</script>

<style>
footer.sticky-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 1000;
}
</style>



<!-- Modal tambah data -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk membuat data baru -->
                <form method="post" action="<?php echo base_url('be_webhook/create_data'); ?>">
                    <div class="form-group">
                        <label for="nama_customer">Nama Customer</label>
                        <input type="text" class="form-control" id="nama_customer" name="NAMA_CUSTOMER"
                            autocomplite="off" required>
                    </div>
                    <div class="form-group">
                        <label for="status_webhook">Status Webhook</label>
                        <input type="text" class="form-control" id="status_webhook" name="STATUS_WEBHOOK"
                            autocomplite="off" required>
                    </div>
                    <div class="form-group">
                        <label for="query">Query</label>
                        <textarea type="text" class="form-control" id="query" name="QUERY" autocomplite="off"
                            required></textarea>
                    </div>
                    <!-- Tambahkan input untuk kolom-kolom lainnya sesuai kebutuhan -->
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var deleteButtons = document.querySelectorAll('.tombol-delete-user');
    deleteButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            var id = this.dataset.id;
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = "<?= base_url('be_webhook/delete/') ?>" + id;
                    }
                });
        });
    });
});
</script>


</body>

</html>