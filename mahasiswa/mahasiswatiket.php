	<br>
	<br>
	<br>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
<table class="table">
	<tr>
		<th width="50px">No</th>
		<th>Tema</th>
		<th>Pembicara</th>
		<th>Waktu</th>
		<th>Act</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Pengenalan Pemrograman Web</td>
		<td>Sukron</td>
		<td>21-08-2015</td>
		<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"> </span> Tiket</button></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Pengenalan Pemrograman Web</td>
		<td>Sukron</td>
		<td>21-12-2015</td>
		<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"> </span> Tiket</button>
</td>
	</tr>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="min-width:250px;">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tiket Masuk Anda</h4>
      </div>
      
      <div class="modal-body">
        <div id="container">
        <center>	
        <?php 
        	qrcode($_SESSION['id']);
         ?>
         <h3>Identitas</h3>
         <hr>
		 <h3><?php echo $_SESSION['id']; ?></h3>
         <h3><?php echo $_SESSION['name']; ?></h3>
		</center>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

