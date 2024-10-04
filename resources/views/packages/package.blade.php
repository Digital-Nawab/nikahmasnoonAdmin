@extends('welcome')
@section('content')
  
<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">New Packages</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="#" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Packages</li>
        </ul>
    </div>
</div>

<div class="row p-4 mt-4">
      
    <div class="col-md-10 offset-md-1">
        <div class="card mb-4" >
            <div class="card-header">
              <h6 class="card-title mb-0">Create Packages</h6>
            </div>

            @if ($errors->any())
                <div class="container">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert"">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                </div>
            @endif
            @if(session()->has('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert"">
                  {{ session('success') }}
              </div>
            @endif

            <div class="card-body" bis_skin_checked="1">
              <form action="{!! url('add-package') !!}" method="POST">
                @csrf
                <div class="row gy-3" bis_skin_checked="1">
                    <div class="col-6 col-md-4" bis_skin_checked="1">
                        <label class="form-label">Package Name <span class="text-danger">*</span></label>
                        <input type="text" name="package_title" class="form-control" required>
                    </div>
                    <div class="col-6 col-md-3" bis_skin_checked="1">
                        <label class="form-label">Package Amount <span class="text-danger">*</span></label>
                        <input type="tel" name="package_price" class="form-control" placeholder="Input Only Number 500" required>
                    </div>
                    <div class="col-6 col-md-3" bis_skin_checked="1">
                        <label class="form-label">Limit Candidate Views <span class="text-danger">*</span></label>
                        <input type="tel"  name="limit_condidate" class="form-control flex-grow-1" placeholder="Input Only Number 1000" required>
                    </div>
                    <div class="col-6 col-md-2" bis_skin_checked="1">
                        <label class="form-label">Package Validity Days <span class="text-danger">*</span></label>
                        <input type="tel" name="validity_days" class="form-control"  placeholder="Input Only Number  100" required>
                    </div>
                    <div class="col-12" bis_skin_checked="1">
                        <label class="form-label">Package Description <span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control" cols="10" rows="3" required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-success" type="submit"> Submit Package</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
    </div>
</div>





    <div class="row gy-4 m-4">
        <div class="card h-100 p-0 radius-12">
            <div class="card-header" bis_skin_checked="1">
                <h6 class="card-title mb-0">All Listed  Packages</h6>
              </div>
            <div class="card-body p-24">
                <div class="table-responsive scroll-sm">
                    <table class="table bordered-table align-middle sm-table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Package Name</th>
                          <th scope="col">Candidate Views</th>
                          <th scope="col">Package Validity</th>
                          <th scope="col" class="text-wrap">Designation</th>
                          <th scope="col" class="text-center">Status</th>
                          <th scope="col" class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach($package as $key=>$row)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-10">
                                  {!! $key+1 !!}
                                </div>
                            </td>
                            <td class="text-primary">
                              {!! ucfirst($row->package_title) !!}
                              <div class="d-flex align-items-center  text-success">
                                <iconify-icon icon="mingcute:currency-rupee-fill"></iconify-icon>
                                <div class="flex-grow-1">
                                  <span class="text-md mb-0 fw-normal text-success"> &nbsp;{!! number_format($row->package_price, 2) !!}</span>
                                </div>
                            </div></td>
                          
                          <td>
                            <div class="d-flex align-items-center">
                                <iconify-icon icon="streamline:straight-face"></iconify-icon>
                                <div class="flex-grow-1">
                                  <span class="text-md mb-0 fw-normal text-secondary-light"> &nbsp;{!! $row->limit_condidate !!}/User</span>
                                </div>
                            </div>
                          </td>

                          <td>
                            <div class="d-flex align-items-center">
                                <iconify-icon icon="solar:calendar-outline"></iconify-icon>
                                <div class="flex-grow-1">
                                  <span class="text-md mb-0 fw-normal text-secondary-light"> &nbsp; {!! $row->validity_days !!}/Days</span>
                                </div>
                            </div>
                          </td>

                          <td class="text-wrap">{!! $row->description !!}</td>
                          <td class="text-center">
                            @if($row->is_active == 1)
                              <span class="bg-success-focus text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span> 
                            @else
                              <span class="bg-neutral-200 text-neutral-600 border border-neutral-400 px-24 py-4 radius-4 fw-medium text-sm">Inactive</span>
                            @endif
                          </td>
                          <td class="text-center"> 
                            <div class="d-flex align-items-center gap-10 justify-content-center">
                               {{--  <button type="button" class="bg-info-focus bg-hover-info-200 text-info-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"> 
                                    <iconify-icon icon="majesticons:eye-line" class="icon text-xl"></iconify-icon>
                                </button> --}}
                                <button type="button" class="bg-success-focus text-success-600 bg-hover-success-200 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"> 
                                    <iconify-icon icon="lucide:edit" class="menu-icon"></iconify-icon>
                                </button>
                                <button type="button" class="remove-item-btn bg-danger-focus bg-hover-danger-200 text-danger-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"> 
                                    <iconify-icon icon="fluent:delete-24-regular" class="menu-icon"></iconify-icon>
                                </button>
                            </div>
                          </td>
                        </tr>
                       @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    @endsection