@extends('layout')
@section('konten')
    <div class="alert alert-primary" role="alert">
       <h3> Pilihan Minuman </h3>
      </div>

      <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('teh es.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">ES TEH</h5>
                  <p class="card-text">Minuman Teh Dingin Menggunakan Teh Pilihan Yang Berkualitas.</p>
                  <a href="#" class="btn btn-primary">Pesan Disini</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('es jeruk.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">ES JERUK</h5>
                  <p class="card-text">Minuman Dingin Menggunakan Perasan Jeruk Yang Segar Dan Manis.</p>
                  <a href="#" class="btn btn-primary">Pesan Disini</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://img.inews.co.id/media/822/files/inews_new/2022/05/18/Resep_Es_Buah_untuk_Jualan.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">ES BUAH</h5>
                  <p class="card-text">Es Buah Menggunakan Buah Segar Dan Pilihan.</p>
                  <a href="#" class="btn btn-primary">Pesan Disini</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('minuman jahe.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">MINUMAN JAHE</h5>
                  <p class="card-text">Minuman Hangat Menggunakan Jahe.</p>
                  <a href="#" class="btn btn-primary">Pesan Disini</a>
                </div>
              </div>
        </div>
      </div>





@endsection
