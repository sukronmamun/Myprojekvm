
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
-->
    <script src="assets/js/bootstrap.min.js"></script>
   <!--  <script src="assets/js/vendor/holder.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    --> 

        <script src="../control/js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="../control/js/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../control/js/common.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
    
        <script>
          $('#myAlert').on('closed.bs.alert', function () {
            // do something…
          });

        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.table-message tbody tr').click(
                  function() 
                  {
                   $(this).toggleClass('resolved');
                  }
                );
              } );
  </script>
  </body>
</html>


<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
 <div class="modal-dialog" style="min-width:250px;">
   <div class="modal-content">

     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Tiket Masuk Anda</h4>
     </div>
     
     <div class="modal-body">
       <div id="container">
   
       
           <div class="col-sm-12">
          
           <form action="" method="POST">
              
               <div class="form-group">
                   <label for="">Buat sandi</label>
                   <input type="password" class="form-control" required name="pass" placeholder="Password" style="max-width:300px" title="Minimum 6 karakter" />
               </div>
               <div class="form-group">
                   <label for="">Konfirmasi Sandi Anda</label>
                   <input type="password" class="form-control" required name="pass1" placeholder="Password" style="max-width:300px" title="Harus sesuai dengan password anda" />
               </div>
                <div class="form-group">
                   <img src="../gambar.php" alt="gambar"  style="margin-bottom:10px;">
                   <input name="nilaiCaptcha" class="form-control" required value="" maxlength="6"/>
               </div>
                   
     </div>
</div>
     <div class="modal-footer">
              <div class="text-right">
                  <button name="ubah_dpass" class="btn btn-primary">Simpan</button>
              </div>
           </form>
     </div></div>
   </div>
 </div>
</div>

<?php 
if (isset($_POST['ubah_dpass'])) {
  $pass=$_POST['pass'];
  $pass1=$_POST['pass1'];
      if ($_SESSION['Captcha'] === $_POST['nilaiCaptcha']) {
        
          if ($pass1 === $pass) {
            $passwordm = md5($pass1);
            $qubah = mysql_query("UPDATE user SET password = '$passwordm' WHERE id_user = '$id_user' ");
            if (!$qubah) {
           
              echo "data gagal di ubah";
            }

          }else{
            echo "Password tidak sama";

          }

      }else{
        echo "Captcha Tidak cocok";
      }
}

 ?>

 