@extends('layouts.main')
@section('content')
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Ringkasan Pendapatan</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">May 2025</option>
                  <option value="2">June 2025</option>
                  <option value="3">Jully 2025</option>
                  <option value="4">August 2025</option>
                  <option value="5">September 2025</option>
                  <option value="6">October 2025</option>
                </select>
              </div>
            </div>
            <div id="chart"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row">
          <div class="col-lg-12">
            <!-- Yearly Breakup -->
            <div class="overflow-hidden card">
              <div class="p-4 card-body">
                <h5 class="card-title mb-9 fw-semibold">Total Dana Transaksi</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="mb-3 fw-semibold">Rp. 12.500.000</h4>
                    <div class="mb-3 d-flex align-items-center">
                      <span
                        class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-up-left text-success"></i>
                      </span>
                      <p class="mb-0 text-dark me-1 fs-3">+9%</p>
                      <p class="mb-0 fs-3">Bulan Lalu</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="me-4">
                        <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">May</span>
                      </div>
                      <div>
                        <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">June</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                      <div id="breakup"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <!-- Monthly Earnings -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Jumlah Pelanggan </h5>
                    <h4 class="mb-3 fw-semibold">120</h4>
                    <div class="pb-1 d-flex align-items-center">
                      <span
                        class="me-2 rounded-circle bg-light-primary round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-up text-primary"></i>
                      </span>
                      <p class="mb-0 text-dark me-1 fs-3">+5%</p>
                      <p class="mb-0 fs-3">Minggu Lalu</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="p-6 text-white bg-secondary rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ti ti-users fs-6"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="earning"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="p-4 card-body">
            <div class="mb-4">
              <h5 class="card-title fw-semibold">Orderan Terbaru</h5>
            </div>
            <ul class="mb-0 timeline-widget position-relative mb-n5">
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">09:30</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-primary"></span>
                  <span class="flex-shrink-0 timeline-badge-border d-block"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Pembayaran di terima dari Andrew Rp. 520.000</div>
              </li>
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">12:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-success"></span>
                  <span class="flex-shrink-0 timeline-badge-border d-block"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Orderan sedang diproses Rp. 320.000 kepada Khasanah</div>
              </li>
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">09:30 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-danger"></span>
                  <span class="flex-shrink-0 timeline-badge-border d-block"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Orderan sudah selesai dari Wangsa Rp. 150.000
                </div>
              </li>
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">12:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-success"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Transaksi selesai sebesar Rp. 400.000 oleh Susan</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="p-4 card-body">
            <h5 class="mb-4 card-title fw-semibold">Status Transaksi Terbaru</h5>
            <div class="table-responsive">
              <table class="table mb-0 align-middle text-nowrap">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Category</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Status</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Harga</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-bottom-0"><h6 class="mb-0 fw-semibold">1</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="mb-1 fw-semibold">Siti Julaiho</h6>
                        <span class="fw-normal">Kebaya Merah</span>                          
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Busana Kebaya</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="gap-2 d-flex align-items-center">
                        <span class="badge bg-warning rounded-3 fw-semibold">Process</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold fs-4">Rp. 300.000</h6>
                    </td>
                  </tr> 
                  <tr>
                    <td class="border-bottom-0"><h6 class="mb-0 fw-semibold">2</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="mb-1 fw-semibold">Andrew Sukmaja</h6>
                        <span class="fw-normal">Pakaian Adat Sunda</span>                          
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Busana Kostum</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="gap-2 d-flex align-items-center">
                        <span class="badge bg-success rounded-3 fw-semibold">Success</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold fs-4">Rp. 520.000</h6>
                    </td>
                  </tr> 
                  <tr>
                    <td class="border-bottom-0"><h6 class="mb-0 fw-semibold">3</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="mb-1 fw-semibold">Kheira Khusanah</h6>
                        <span class="fw-normal">Rias Adat Sunda</span>                          
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Make Up Artist</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="gap-2 d-flex align-items-center">
                        <span class="badge bg-danger rounded-3 fw-semibold">Pending</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold fs-4">Rp. 250.000</h6>
                    </td>
                  </tr>      
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection