@extends('navbar')
@section('navbar')
    
      <section class="py-3">
        <div class="container px-4 px-lg-5 my-3 pt-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img src="/storage/{{ $produk->foto }}" class="card-img-top mb-5 mb-md-0" alt="">
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-002</div>
                    <h3 class="display-5 fw-bolder">{{ $produk->nama_produk }}</h3>
                    <div class="fs-5 mb-5">
                        {{-- <span class="text-decoration-line-through">Rp.146.000</span> --}}
                        <span>Rp.{{ number_format($produk->harga) }}</span>
                    </div>
                    <p class="lead">{{ $produk->deskripsi }}</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number"
                        value="1" style="max-width: 3rem;">
                        <button class="btn btn-outline-primary flex-shrink-0" type="button">
                        <a href="https://api.whatsapp.com/send?phone=6281809534791&text=%22halloo%22">Beli sekarang</a>
                        </button>
                    </div>
                </div>
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