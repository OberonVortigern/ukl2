<?php include 'header.php'; ?>
<div class="container">
    <br/>
    <br/>
    <br/>
    <div class="col-md-5 col-md-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Admin</h4>
            </div>
            <div class="panel-body">
                <?php
                include '../koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi,"select * from admin where id='$id'");
                while($d=mysqli_fetch_array($data)){
                    ?>
                    <form method="post" action="admin_update.php">
                        <div class="form-group">
                            <label>username</label>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username .." value="<?php echo $d['username']; ?>">
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control" name="password" placeholder="Masukkan password .." value="<?php echo $d['password']; ?>">
                        </div>
                        <div class="form-group">
                            <label>role</label>
                            <input type="text" class="form-control" name="role" placeholder="Masukkan role .." value="<?php echo $d['role']; ?>">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
