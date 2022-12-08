@extends('layout')
@section('konten')
    <div class="alert alert-warning" role="alert">
       <h3> Pilihan Makanan</h3>
      </div>

      <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('nasgor.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">NASI GORENG</h5>
                  <p class="card-text">Nasi Goreng Dengan Bumbu Yang Lezat Menggunakan Topping Seafood Dan Telur.</p>
                  <a href="#" class="btn btn-primary">Pesan Disini</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('bakso.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">BAKSO</h5>
                  <p class="card-text">Bakso Daging Sapi Menggunakan Bumbu Rempah Yang Enak.</p>
                  <a href="#" class="btn btn-primary">Pesan Disini</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://selerasa.com/wp-content/uploads/2015/05/https__selerasa.com_images_mie_Mie_ayam_07-mie-ayam-spesial.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">MIE AYAM</h5>
                  <p class="card-text">Mie Ayam Menggunakan Ayam Dimasak Kecap.</p>
                  <a href="#" class="btn btn-primary">Pesan Disini</a>
                </div>
              </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Ayam_geprek.png/408px-Ayam_geprek.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">AYAM GEPREK</h5>
                  <p class="card-text">Ayam Geprek Dengan Tepung Yang Renyah.</p>
                  <a href="#" class="btn btn-primary">Pesan Disini</a>
                </div>
              </div>
        </div>
      </div>





@endsection
