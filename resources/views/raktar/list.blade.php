<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <title>Lista nézet</title>
</head>
<body>
  <div style="width: 90%; margin: auto;">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Cikkszám</th>
        <th scope="col">Megnevezés</th>
        <th scope="col">Ár</th>
        <th scope="col">Raktáron</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($raktarkeszlet as $raktar)
        <tr>
          <th scope="row">{{ $raktar->id}}</th>
          <td>{{ $raktar->cikkszam }}</td>
          <td>{{ $raktar->megnevezes }}</td>
          <td>{{ $raktar->ar }}</td>
          <td>{{ $raktar->raktaron }}</td>
          <td style="display: flex;">
            <a href="/raktarkeszlet/edit/{{ $raktar->id }}"><button class="btn btn-sm btn-info">Szerkesztés</button></a>
            <a><form action="/api/raktar/{{ $raktar->id }}" method="POST">@csrf @method('delete')<button type="submit" class="btn btn-sm btn-danger">Törlés</button></form></a>
          </td>
        </tr>
      @endforeach
    </tbody>
    <div><a href="/raktarkeszlet/new"><button class="btn btn-sm btn-success">Új cikk hozzá adása</button></a></div>
  </table>
</div>
</body>
</html>
