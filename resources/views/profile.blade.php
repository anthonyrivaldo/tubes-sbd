{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Profile</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="image">
        <img src="bg.png" alt="Background">
    </div>
    <section id="box-profile">
        <div class="img-profile">
            <div class="photo" style="background-image:url(contoh.jpg)"></div>
        </div>
        <div class="description">
            <h2>User</h2>
            <p class="text-gray">@username&nbsp; • 0 Pengikut</p>     
        </div>
        </div>
     <nav class="menu">
         <ul>
             <li> <a href="#">Beranda&nbsp;&nbsp;&nbsp;</a></li>
             <li> <a href="#">Vidio&nbsp;&nbsp;&nbsp;</a></li>
             <li> <a href="#">Koleksi&nbsp;&nbsp;&nbsp;</a></li>
             <li> <a href="#">Pengikut&nbsp;&nbsp;&nbsp;</a></li>
             <li> <a href="#">Diikuti&nbsp;&nbsp;&nbsp;</a></li>
             <li> <a href="#">Tentang&nbsp;&nbsp;&nbsp;</a></li>
         </ul>
     </nav>
     <div class="setting">
        <button type="button" class="btn btn-outline-secondary">Ubah Profile</button> <br> <br>
        <button type="button" class="btn btn-outline-secondary">Kelola Video</button>
     </div>
    </section>
</body>
</html>
{{-- @endsection --}}
