<html>
<head>
<title>Undian PT. Bla Bla Bla</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 0.13" />
<meta name="robots" content="noindex,nofollow">
<link rel="shortcut icon" type="image/ico" href="images/icon.ico">
<link href="css/base.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	@import url("css/blue.css");
</style>	
</head>

<body>
<center>

<div id="content_logo"><img src="../control/images/u1.jpg" /></div>
<div id="content">
	Undian Berhadian Nasabah PT. Bla Bla Bla
	<table width="100%" cellpadding="3" cellspacing="2" border="0" class="rounded">
        <tr>
        	<td align="center"><a href="#" class="option btn btn-primary" action="undian/kategori1.php">Mulai</a></td>
        </tr>
	</table>
    <div id="loading" style="display:none;"><img src="undian/images/loading.gif" alt="loading..." /></div>
    <div id="display" style="display:none;"></div>
</div>

</center>
</body>
<script language="javascript" src="jquery.min.js"></script>
<script type="text/javascript">
	$(document).ajaxStart(function() {
		$('#loading').show();
		$('#display').hide();
	}).ajaxStop(function() {
		$('#loading').hide();
		$('#display').fadeIn('slow');
	});
	
	$(document).ready(function() {
		$(".option").click(function () {
			$.ajax({
				type: "POST",
				url: $(this).attr('action'),
				data: $(this).serialize(),
				success: function(data) {
					$('#display').html(data);
				}
			});
		});
	});
</script>
</html>