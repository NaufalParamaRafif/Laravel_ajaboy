<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mamang Jualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="card-group">
        <div class="card">
          <img src="assets/MarmutMerahJambu.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$judul[0]}}</h5>
            <p class="card-text">Author: {{$penulis[0]}}</p>
            <p class="card-text">Genre: {{$genre[0]}}</p>
          </div>
        </div>
        <div class="card">
         <img src="assets/AiSatuMenit.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$judul[1]}}</h5>
            <p class="card-text">Author: {{$penulis[1]}}</p>
            <p class="card-text">Genre: {{$genre[1]}}</p>
          </div>
        </div>
        <div class="card">
            <img src="assets/bakso.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">{{$judul[2]}}</h5>
                <p class="card-text">Author: {{$penulis[2]}}</p>
                <p class="card-text">Genre: {{$genre[2]}}</p>
            </div>
        </div>
      </div>
</body>
</html>
