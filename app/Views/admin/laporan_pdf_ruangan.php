<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		.table-data{
			width: 100%;
			border-collapse: collapse;
		}

		.table-data tr th, .table-data tr td{
			border: 1px solid black;
			font-size: 10pt;
		}
	</style>
	<h3>Laporan Data</h3>
	<br>
	<table class="table-data">
		<thead>
		<tr>
			<th>No</th>
			<th>Ruangan</th>
			<th>Deskripsi</th>
			<th>Status</th>
		</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($ruangan as $r) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $r->ruangan; ?></td>
				<td><?php echo $r->deskripsi; ?></td>
				<td><?php echo $r->status; ?></td>
			</tr>
			<?php } ?>
		</tbody>
</body>
</table>
</html>
