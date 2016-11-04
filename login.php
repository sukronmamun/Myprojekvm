<style>
  .mm{
    border: 1px solid #aaa;
    border-radius: 4px;
  }
</style>
   <br>
   <br>
   <br>
   <br>   <br>
   <br>
   <br>
<div id="mainx"> 
    <div class="container bg">
   
   <?php 
   if (@$_GET['actp']) {
     echo "<div class='alert alert-warning alert-dismissible fade in' role='alert'>
        <div class='alert-heading'>Peringatan</div>
        <div class='alert-body'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
      <strong>Maaf!</strong>
      Anda Sekarang Tidak Sedang Menjabat Sebagai Panitia Dan Anda Tidak dapat Mengakses Akun Anda.
  
        </div>
        </div>
";
   }




    ?>
    <div class="row">
    
        <div class="col-md-offset-4 col-md-4 login-from mm">
            <h4><em class="glyphicon glyphicon-log-in"></em>  Halaman Login</h4>
 
            <?php 
            /**
             * Pesan Error Bila terjadi kegagalan dalam login
             */
            if (isset($_GET['error']) && $_GET['error'] == 'salah') {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Wrong ! </strong> Username dan Password tidak ditemukan
                       </div>'; 
            }?>

            <form action="logactiv/loginactive.php" method="POST">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="email" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password" />
                </div>
                <div class="text-right">
                    <button name="act" class="btn btn-primary">Login</button>
                </div>
            </form>
            <p class="return-home"><a href="./index.php"><em class="glyphicon glyphicon-menu-left"></em>Halaman Depan</a></p>
            <!-- <p class="return-home"><a href="registrasi.php">Register</a></p> -->      
        </div>


</div> 
</div>
<br>
<br>
<br>
<br>

<br>
<br>
<br>