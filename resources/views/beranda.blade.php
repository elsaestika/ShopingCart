@extends('navbar')
@section('navbar')
      <!--Home-->
      <section id="home" class="py-3 mt-5">
        <div class="container-fluid px-4 px-lg-5">
            <img src="img/Spring.png" alt="Elsa estika" class="img-fluid" >
        </div>
      </section>
      <!--Akhir Home-->

      <section id="shop" class="page-section shop  ">
        <div class="container fluid text-center">
            <div class="row justify-content-center">
              @foreach ($produk as $item)
              <div class="col col-md-4 mb-5 text-center">
                      <div class="card mt-5 ms-4" style=" width: 16rem;">
                        <img src="/storage/{{ $item->foto}}" class="card-img-top" alt="" width="200" height="350">
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $item->nama_produk }}</h5>
                            <p class="card-text">Rp.{{ number_format($item->harga) }}</p>
                            <a href="produk/detail/{{ $item->id_produk }}" class="btn btn-outline-primary">Views Options</a>
                        </div>
                      </div>
                    </div>
                      @endforeach
            </div>
        </div>
      </section>
      <div class="container-fluid">
        <footer class="py-3 my-3 border-top">
          <p class="text-center">&copy;2023 <a href="" target="_blank" class="fw-bold text-decoration-none">Elsa Estika</a></p>

        </footer>
      </div>
</body>
</html>
@endsection
