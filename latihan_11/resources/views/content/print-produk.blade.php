<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
    <title>Print Produk</title> 
</head> 
<body> 
    <div class="container"> 
 
       <center> <h3>DAFTAR PRODUK TERSEDIA</h3></center> 
       <table class="table table-bordered"> 
            <thead> 
                <tr> 
                    <th scope="col">Kode Produk</th> 
                    <th scope="col">Nama Produk</th> 
                    <th scope="col">Kategori Produk</th> 
                    <th scope="col">Deskripsi</th> 
                </tr> 
            </thead> 
            <tbody> 
                @foreach ($produk as $pro) 
                <tr> 
                    <td>{{$pro->id_produk}}</td> 
                    <td>{{$pro->nama}}</td> 
                    <td>{{$pro->id_kategori}}</td> 
                    <td>{{$pro->deskripsi}}</td> 
                </tr> 
                @endforeach 
            </tbody> 
        </table> 
    <div>    
</body> 
</html>