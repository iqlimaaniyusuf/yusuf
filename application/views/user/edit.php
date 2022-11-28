<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <!--kartu my profie-->
    <div class="row">
        <div class="col-lg-8">
            <?= from_open_multipart('user/rdit'); ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email"
                    name="email" value="<? $user['email']; ?>" readonly>
             </div>
        </div>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-from-label">Full Name</label>
            <div class="col-sm-10">
                <<input type="text" class="form-control" id="name"
                    name="name" value="<? $user['name']; ?>">
                    <?= form_error('name','<small class="text-danger pl-3">', '</small>'); ?>
              </div>
        </div> 
        <div