     <footer> 
       <div class="container">
           <div class="row">
               <div class="col-lg-12" >
                  
                   <p class="copyright text-muted small"> &copy; 2016  Sukron Ma'mun.  </p>
               </div>
           </div>
       </div>
   </footer>

     <script src="../control/js/jquery-1.9.1.min.js" type="text/javascript"></script>
     <script src="../control/js/datatables/jquery.dataTables.js" type="text/javascript"></script>
     <script src="../control/js/common.js" type="text/javascript"></script>
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
                   <input type="password" class="form-control" name="pass" placeholder="Password" style="max-width:300px" title="Minimum 6 karakter" />
               </div>
               <div class="form-group">
                   <label for="">Konfirmasi Sandi Anda</label>
                   <input type="password" class="form-control" name="pass1" placeholder="Password" style="max-width:300px" title="Harus sesuai dengan password anda" />
               </div>
                <div class="form-group">
                   <img src="../gambar.php" alt="gambar"  style="margin-bottom:10px;">
                   <input name="nilaiCaptcha" class="form-control" value="" maxlength="6"/>
               </div>
               <div class="text-right">
                   <button name="regis" class="btn btn-primary">Next</button>
               </div>
           </form>
           <p class="return-home"><a href="./../"><em class="glyphicon glyphicon-menu-left"></em>Halaman Depan</a></p>      
     </div>

     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     </div>
     </div></div>
   </div>
 </div>
</div>

