<form id="register" enctype="multipart/form-data" action="<?=base_url('Dashboard/edit')?>" method="POST">
    <input type="hidden" name="id" value="<?=$id?>">
                    
    <div class="form-group">
        <label class="form-label" for=""><b>Username</b> </label>
        <input class="form-control" type="text" name="username" value="<?=$username?>" id="username" placeholder="Masukkan Username Anda" required>
        <div class="feedback text-danger">

        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="form-group">
        <label class="form-label" for=""><b>Password</b> </label>
        <input class="form-control" type="passsword" name="password" placeholder="Masukkan password" required>
        <div class="feedback text-danger">

        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    
    <div class="form-group">
        <label class="form-label" for=""><b>Confirm Password</b> </label>
        <input class="form-control" type="passsword" name="cnfPassword" id="cnfPassword" placeholder="Konfirmasi Password" required>
        <div class="feedback text-danger">

        </div>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
                    

    <div class="btn-group w-100 justify-content-end">
        <a class="btn bg-danger" href="<?=base_url('Dashboard')?>"><button type="button" class="btn bg-danger"  data-bs-dismiss="modal">Kembali</button></a>
        <button type="submit" class="btn bg-success btnSubmit">simpan</button>
    </div>
            
</form>