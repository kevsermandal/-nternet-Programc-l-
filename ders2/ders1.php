<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
	<div class="col-md-4">
			<form class="row g-3 needs-validation" name="form" action="kutuphane.php" method="post">
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Cilt Nmarası</label>
    <input type="text" class="form-control" id="validationCustom01" value="cil numarası" required name="cilt_no">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom02" class="form-label">Yazar Adı</label>
    <input type="text" class="form-control" id="validationCustom02" value="yazar adı" required name="yazar_adi">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustomUsername" class="form-label">Yayın Evi</label>
    <div class="input-group has-validation">
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="yayın evi" name="yayin_evi">
    </div>
  </div>
  
  </div>
  <div class="col-md-12">
    <button class="btn btn-primary" type="submit" name="ekle">Ekle</button>
    <button class="btn btn-primary" type="submit" name="sil">Sil</button>
    <button class="btn btn-primary" type="submit" name="guncelle">Güncelle</button>
    <button class="btn btn-primary" type="submit" name="listele">Listele</button>
  </div>
</form>
		
		</div>
		<div class="col-md-4"></div>
	</div>
</div>



</body>
</html>