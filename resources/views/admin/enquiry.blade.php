@extends('welcome')
@section('content')

<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
<h6 class="fw-semibold mb-0">Enquiry</h6>
<ul class="d-flex align-items-center gap-2">
<li class="fw-medium">
  <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
    Dashboard
  </a>
</li>
<li>-</li>
<li class="fw-medium">Enquiry</li>
</ul>
</div>

    <div class="card h-100 p-0 radius-12">
        <div class="card-header border-bottom bg-base py-16 px-24 d-flex align-items-center flex-wrap gap-3 justify-content-between">
            <div class="d-flex align-items-center flex-wrap gap-3">
                
                <form class="navbar-search">
                    <input type="text" class="bg-base h-40-px w-auto" name="search" placeholder="Search">
                    <iconify-icon icon="ion:search-outline" class="icon"></iconify-icon>
                </form>
                <select class="form-select form-select-sm w-auto ps-12 py-6 radius-12 h-40-px">
                    <option>Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
           
        </div>
        <div class="card-body p-24">
            <div class="table-responsive scroll-sm">
                <table class="table bordered-table sm-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col">
                        <div class="d-flex align-items-center gap-10">
                            S.L
                        </div>
                      </th>
                      <th scope="col">Complaint Date</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      
                      <th scope="col">Designation</th>
                      <th scope="col" class="text-center">Status</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach( $data as $key=>$row) 
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">{!! $key+1 !!}</div>
                        </td>
                        <td>{{ $row->created_at->format('d M Y') }}</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">{{ $row->name }}</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">{{ $row->email }}</span></td>
                
                      <td>{!! $row->message !!}</td>
                      <td class="text-center">
                        @if ($row->is_active == 1)
                          <span class="bg-success-focus  text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span>
                        @endif
                      </td>
                      <td class="text-center"> 
                        <div class="d-flex align-items-center gap-10 justify-content-center">
                            <button type="button" class="bg-info-focus bg-hover-info-200 text-info-600 fw-medium w-40-px h-40-px d-flex justify-content-center align-items-center rounded-circle"> 
                                <iconify-icon icon="majesticons:eye-line" class="icon text-xl"></iconify-icon>
                            </button>
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