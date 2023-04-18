<!DOCTYPE html>
<html lang="en">
<head>
  <title>SipusDIKA - Tambah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>Tambah Data</h3>
  <p></p>
    
  <form action="/insert" class="was-validated" method="post">
  	@csrf
    <div class="mb-3">
      <label for="loc" class="form-label">Peminjam:</label>
      <select class="select2js form-control" name="id_peminjam" required>
      	<option selected disabled value="">-- Select Peminjam --</option>
      	@foreach($peminjam as $peminjam)
      		<option value="{{$peminjam->id}}">{{$peminjam->nama}}</option>
      	@endforeach
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="mb-3">
      <label for="loc" class="form-label">Buku:</label>
      <select class="select2js form-control" name="id_buku" required>
      	<option selected disabled value="">-- Select Buku --</option>
      	@foreach($buku as $buku)
      		<option value="{{$buku->id}}">{{$buku->judul}}</option>
      	@endforeach
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
      <label class="form-check-label" for="myCheck">I agree on blabla.</label>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Check this checkbox to continue.</div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
<script>
	$(document).ready(function() {
		$('.select2js').select2();
	});
</script>
</html>
