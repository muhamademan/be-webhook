<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?= $this->session->flashdata('message') ?>
            <div class="card h-100">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-hover table-bordered" style="width:100%">
                            <thead class="thead-light">
                                <tr class="text-center">
                                    <th>NO</th>
                                    <th>NAMA CUSTOMER</th>
                                    <th>STATUS WEBHOOK</th>
                                    <th>QUERY</th>
                                    <th>CREATE DATE</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($dataWebhook)) {
                                    $no = 1;
                                    foreach ($dataWebhook as $data) {
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['NAMA_CUSTOMER'] ?></td>
                                    <td><?= $data['STATUS_WEBHOOK'] ?></td>
                                    <td><?= $data['QUERY'] ?></td>
                                    <td><?= $data['CREATE_DATE'] ?></td>
                                    <td>
                                        <!-- Action Edit -->
                                        <a href="<?= base_url('be_webhook/edit/') . $data['ESB_ID'] ?>"
                                            class="tombol-edit-user" data-toggle="modal"
                                            data-target="#editModal<?= $data['ESB_ID'] ?>"><span
                                                class="bg-success rounded py-2 pl-1 pr-0 rounded-circle"><i
                                                    class="fa fa-edit text-light mx-2"></i></span>
                                        </a>
                                        <!-- End Modal Edit -->

                                        <!-- Action delete -->
                                        <!-- <a href="<?= base_url('be_webhook/delete/') . $data['ESB_ID'] ?>"
                                            class="tombol-delete-user"><span
                                                class="bg-danger rounded py-2 pl-1 pr-0 rounded-circle"><i
                                                    class="fa fa-trash text-light mx-2"></i></span>
                                        </a> -->
                                        <a href="#" id="tombol-delete-user" class="tombol-delete-user"
                                            data-id="<?= $data['ESB_ID'] ?>">
                                            <span class="bg-danger rounded py-2 pl-1 pr-0 rounded-circle delete-icon">
                                                <i class="fa fa-trash text-light mx-2"></i>
                                            </span>
                                        </a>

                                    </td>
                                </tr>


                                <!-- Modal for editing data -->
                                <div class="modal fade" id="editModal<?= $data['ESB_ID'] ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit
                                                    Data</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form for editing data -->
                                                <form action="<?= base_url('be_webhook/edit') ?>" method="post">
                                                    <input type="hidden" name="ESB_ID" id="esb_id"
                                                        value="<?= $data['ESB_ID'] ?>">
                                                    <div class="form-group">
                                                        <label for="nama_customer">Nama Customer</label>
                                                        <input type="text" class="form-control" id="nama_customer"
                                                            value="<?= $data['NAMA_CUSTOMER'] ?>" name="NAMA_CUSTOMER"
                                                            autocomplite="off" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="status_webhook">Status Webhook</label>
                                                        <input type="text" class="form-control" id="status_webhook"
                                                            value="<?= $data['STATUS_WEBHOOK'] ?>" name="STATUS_WEBHOOK"
                                                            autocomplite="off" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="query">Query</label>
                                                        <textarea type="text" class="form-control" id="query"
                                                            name="QUERY" autocomplite="off"
                                                            required><?= $data['QUERY'] ?></textarea>
                                                    </div>
                                                    <!-- Add more form fields for editing other data -->
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>