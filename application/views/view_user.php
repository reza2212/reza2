<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php foreach($user as $u){ //menampilkan semua isi array ?>
		<tr> 
			<td><?php echo $u->nama //menampilkan nama?></td> 
			<td><?php echo $u->alamat //menampilkan alamat ?></td>
			<td><?php echo $u->pekerjaan // menampilkan pekerjaan?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>