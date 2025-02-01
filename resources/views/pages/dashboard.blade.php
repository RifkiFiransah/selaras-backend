@extends('layouts.main')
@section('content')
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
              <div class="mb-3 mb-sm-0">
                <h5 class="card-title fw-semibold">Sales Overview</h5>
              </div>
              <div>
                <select class="form-select">
                  <option value="1">March 2023</option>
                  <option value="2">April 2023</option>
                  <option value="3">May 2023</option>
                  <option value="4">June 2023</option>
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
                <h5 class="card-title mb-9 fw-semibold">Yearly Breakup</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="mb-3 fw-semibold">$36,358</h4>
                    <div class="mb-3 d-flex align-items-center">
                      <span
                        class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-up-left text-success"></i>
                      </span>
                      <p class="mb-0 text-dark me-1 fs-3">+9%</p>
                      <p class="mb-0 fs-3">last year</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="me-4">
                        <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">2023</span>
                      </div>
                      <div>
                        <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                        <span class="fs-2">2023</span>
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
                <div class="row alig n-items-start">
                  <div class="col-8">
                    <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                    <h4 class="mb-3 fw-semibold">$6,820</h4>
                    <div class="pb-1 d-flex align-items-center">
                      <span
                        class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                        <i class="ti ti-arrow-down-right text-danger"></i>
                      </span>
                      <p class="mb-0 text-dark me-1 fs-3">+9%</p>
                      <p class="mb-0 fs-3">last year</p>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-end">
                      <div
                        class="p-6 text-white bg-secondary rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ti ti-currency-dollar fs-6"></i>
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
              <h5 class="card-title fw-semibold">Recent Transactions</h5>
            </div>
            <ul class="mb-0 timeline-widget position-relative mb-n5">
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">09:30</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-primary"></span>
                  <span class="flex-shrink-0 timeline-badge-border d-block"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Payment received from John Doe of $385.90</div>
              </li>
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">10:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-info"></span>
                  <span class="flex-shrink-0 timeline-badge-border d-block"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                    href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                </div>
              </li>
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">12:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-success"></span>
                  <span class="flex-shrink-0 timeline-badge-border d-block"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Payment was made of $64.95 to Michael</div>
              </li>
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">09:30 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-warning"></span>
                  <span class="flex-shrink-0 timeline-badge-border d-block"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New sale recorded <a
                    href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                </div>
              </li>
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">09:30 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-danger"></span>
                  <span class="flex-shrink-0 timeline-badge-border d-block"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">New arrival recorded 
                </div>
              </li>
              <li class="overflow-hidden timeline-item d-flex position-relative">
                <div class="flex-shrink-0 timeline-time text-dark text-end">12:00 am</div>
                <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                  <span class="flex-shrink-0 my-8 border border-2 timeline-badge border-success"></span>
                </div>
                <div class="timeline-desc fs-3 text-dark mt-n1">Payment Done</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="p-4 card-body">
            <h5 class="mb-4 card-title fw-semibold">Recent Transactions</h5>
            <div class="table-responsive">
              <table class="table mb-0 align-middle text-nowrap">
                <thead class="text-dark fs-4">
                  <tr>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Id</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Assigned</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Name</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Priority</h6>
                    </th>
                    <th class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold">Budget</h6>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-bottom-0"><h6 class="mb-0 fw-semibold">1</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="mb-1 fw-semibold">Sunil Joshi</h6>
                        <span class="fw-normal">Web Designer</span>                          
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Elite Admin</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="gap-2 d-flex align-items-center">
                        <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold fs-4">$3.9</h6>
                    </td>
                  </tr> 
                  <tr>
                    <td class="border-bottom-0"><h6 class="mb-0 fw-semibold">2</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="mb-1 fw-semibold">Andrew McDownland</h6>
                        <span class="fw-normal">Project Manager</span>                          
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="gap-2 d-flex align-items-center">
                        <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold fs-4">$24.5k</h6>
                    </td>
                  </tr> 
                  <tr>
                    <td class="border-bottom-0"><h6 class="mb-0 fw-semibold">3</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="mb-1 fw-semibold">Christopher Jamil</h6>
                        <span class="fw-normal">Project Manager</span>                          
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="gap-2 d-flex align-items-center">
                        <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold fs-4">$12.8k</h6>
                    </td>
                  </tr>      
                  <tr>
                    <td class="border-bottom-0"><h6 class="mb-0 fw-semibold">4</h6></td>
                    <td class="border-bottom-0">
                        <h6 class="mb-1 fw-semibold">Nirav Joshi</h6>
                        <span class="fw-normal">Frontend Engineer</span>                          
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">Hosting Press HTML</p>
                    </td>
                    <td class="border-bottom-0">
                      <div class="gap-2 d-flex align-items-center">
                        <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                      </div>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="mb-0 fw-semibold fs-4">$2.4k</h6>
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