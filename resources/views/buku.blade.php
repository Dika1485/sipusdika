<!DOCTYPE html>
<html lang="en">
<head>
  <title>SipusDIKA - Buku</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Buku</h2>
  <p>
  	<a href="/insert"><button type="button" class="btn btn-success btn-md">Tambah Data Transaksi</button></a>
  </p>
  <p>
  	<a href="/"><button type="button" class="btn btn-secondary btn-md">Data Transaksi</button></a>
  	<a href="/peminjam"><button type="button" class="btn btn-secondary btn-md">Data Peminjam</button></a>
  	<a href="/buku"><button type="button" class="btn btn-secondary btn-md">Data Buku</button></a>
  </p>            
  <table id="myTable" class="table table-hover">
    <thead>
      <tr>
        <th>No.</th>
        <th>ID Buku</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>No. ISBN</th>
      </tr>
    </thead>
    <tbody>
    <?php
    	$no=1;
    ?>
    @foreach($buku as $buku)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$buku->id}}</td>
        <td>{{$buku->judul}}</td>
        <td>{{$buku->pengarang}}</td>
        <td>{{$buku->isbn}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
<script>
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>
