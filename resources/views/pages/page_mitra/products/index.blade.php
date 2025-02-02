@extends('layouts.main')

@section('content')
<div class="container-fluid">
  <div class="shadow card ">
    <div class="card-body">
      <h5 class="card-title fw-semibold">Halaman Product</h5>
    </div>
  </div>
  <div class="card w-100">
    <div class="p-4 card-body">
      <div class="mb-4 d-flex justify-content-between">
        <h5 class="card-title fw-semibold">Top Product</h5>
        <a href="" class="rounded-2 btn btn-primary"><i class="ti ti-pencil-plus"></i> Tambah Data</a>
      </div>
      <div class="table-responsive">
        <table class="table mb-0 align-middle text-nowrap">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="mb-0 fw-semibold">#</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="mb-0 fw-semibold">Nama</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="mb-0 fw-semibold">Catalog</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="mb-0 fw-semibold">Gambar</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="mb-0 fw-semibold">Harga</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="mb-0 fw-semibold">Stock</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="mb-0 fw-semibold">Action</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($products as $product)
              <tr>
                <td class="border-bottom-0"><h6 class="mb-0 fw-semibold">{{ $loop->iteration }}</h6></td>
                <td class="border-bottom-0">
                    <h6 class="mb-1 fw-semibold">{{ $product->name }}</h6>
                    {{-- <span class="fw-normal">Web Designer</span>                           --}}
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-bold fs-3">{{ $product->catalog->name }}</p>
                </td>
                <td class="border-bottom-0">
                  {{-- <div class="gap-2 d-flex align-items-center">
                    <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                  </div> --}}
                  <img src='{{ asset("storage/$product->gambar") }}'' alt="{{ $product->name }}" class="mb-0 img-thumb" width="100">
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-semibold fs-3">Rp. {{ number_format($product->harga, 0, ',', '.') }}</p>
                </td>
                <td class="border-bottom-0">
                  <p class="mb-0 fw-semibold fs-4">{{ $product->stock }}</p>
                </td>
                <td class="border-bottom-0">
                  <form action="" class="gap-3 form d-flex justify-content-start">
                    <a href="" class="btn btn-success"><i class="ti ti-eye"></i></a>
                    <a href="" class="btn btn-warning"><i class="ti ti-edit"></i></a>
                    <button type="submit" class="btn btn-danger"><i class="ti ti-trash"></i></button>
                  </form>
                </td>
              </tr> 
            @empty
              <tr>
                <td class="text-center border-bottom-0" colspan="7">
                  <h6 class="mb-0 fw-semibold">Data Belum Tersedia</h6>
                </td>
              </tr> 
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection