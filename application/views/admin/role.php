<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <!-- pesan error -->
            <?= form_error(
                'menu',
                '<div class="alert alert-success" role="alert">
                </div>'
            ); ?>

            <?= $this->session->flashdata('message'); ?>
            <!-- akhir pesan error -->

            <!-- tombol tambah -->
            <a href="" class="btn btn-primary mb-3" class="btn btn-primary" data-toggle="modal" data-target="#Addnewrole">Add New Role</a>

            <!-- Tabel -->

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['role']; ?></td>

                            <td>
                                <a href="<?= base_url('admin/roleAccess/') . $r['id'] ?>"
                                class="badge badge-warning">Access</a>
                                <a href="#" class="badge badge-success" data-toggle="modal"
                                data-popup="tooltip" data-placement="top" title="edit" data-target="#editrole<?= $r['id']; ?>">Edit</a>
                                <a href="#" onclick="hapusRole" href="<?= base_url('admin/hapusrole/').$r['id'] ?>"
                                id="tombol-hapus-role" class="badge badge-danger tombol-hapus">Delete</a>
                                 
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- akhir table -->

        </div>
    </div>

</div>
</div>
<!-- End of Main Content -->



<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="Addnewrole" tabindex="-1" aria-labelledby="AddnewroleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddnewroleLabel">Add new Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name="role" id="role" placeholder="Role Name">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal edit-->
<?php foreach ($role as $r) : ?>

    <div class="modal fade" id="editrole<?= $r['id']; ?>" tabindex="-1" aria-labelledby="editroleLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editroleLabel">Add new Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="<?= base_url('admin/edit_role/'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="role" id="role" placeholder="Role Name" value="<?= $r['role']; ?>">
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" id="id" readonly value="<?= $r['id']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>