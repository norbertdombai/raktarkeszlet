<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <title>Edit</title>
</head>
<body>
  <div style="width: 80%; margin: auto;">
    <form action="/api/raktar/{{ $raktar->id }}" method="POST">
      @csrf
      @method('put')
      <div class="form-group row">
        <label for="id" class="col-sm-2 col-form-label">id</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="id" name="id" placeholder="id" value="{{ $raktar->id }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="cikkszam" class="col-sm-2 col-form-label">Cikkszám</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="cikkszam" name="cikkszam" placeholder="Cikkszám" value="{{ $raktar->cikkszam }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="megnevezes" class="col-sm-2 col-form-label">Megnevezés</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="megnevezes" name="megnevezes" placeholder="Megnevezés" value="{{ $raktar->megnevezes }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="ar" class="col-sm-2 col-form-label">Ár</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="ar" name="ar" placeholder="Ár" value="{{ $raktar->ar }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="raktaron" class="col-sm-2 col-form-label">Raktáron</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="raktaron" name="raktaron" placeholder="Raktáron" value="{{ $raktar->raktaron }}">
        </div>
      </div>
      <button type="submit" class="btn btn-success" style="width: 100%;">Mentés</button>
    </form>
  </div>
</body>
</html>
