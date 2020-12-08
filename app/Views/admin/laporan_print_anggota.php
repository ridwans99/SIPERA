<!DOCTYPE html>
<html>
<head>
	<title>SIPERA | Laporan Print Buku</title>
</head>
<body>
<style>
	.table-data{
		width: 100%;
		border-collapse: collapse;
	}

	.table-data tr th,
	.table-data tr td{
		border: 1px solid #000;
		font-size: 10pt;
		text-align: center;
	}
</style>
<h3>Laporan Data</h3>
<br>
<table class="table-data">
	<thead>
		<tr>
			<th>No</th>
	        <th>NIM</th>
	        <th>Nama Anggota</th>
	        <th>Jenis Kelamin</th>
	        <th>Prodi</th>
		</tr>
	</thead>
	<tbody>
      <?php
      $no = 1;
      foreach ($anggota as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->nim ?></td>
        <td><?php echo $a->nama_anggota ?></td>
        <td><?php echo $a->jenis_kelamin ?></td>
        <td><?php echo $a->prodi ?></td>
      </tr>
      <?php } ?>
  </tbody>
</table>
<script type="text/javascript">
	window.print();
</script>

</body>
</html>
