@extends('welcome')
@section('content')

<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
<h6 class="fw-semibold mb-0">User Complaint</h6>
<ul class="d-flex align-items-center gap-2">
<li class="fw-medium">
  <a href="index.html" class="d-flex align-items-center gap-1 hover-text-primary">
    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
    Dashboard
  </a>
</li>
<li>-</li>
<li class="fw-medium">User Complaint</li>
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
            <a href="add-user.html" class="btn btn-primary text-sm btn-sm px-12 py-12 radius-8 d-flex align-items-center gap-2"> 
                <iconify-icon icon="ic:baseline-plus" class="icon text-xl line-height-1"></iconify-icon>
                Add New User
            </a>
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
                            <span class="text-md mb-0 fw-normal text-secondary-light">Kathryn Murphy</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">osgoodwy@gmail.com</span></td>
                
                      <td>{!! $row->description !!}</td>
                      <td class="text-center">
                        @switch($row->is_active)
                        @case('0')
                          @php $status = "new"; $color = "primary"; @endphp
                        @case('1')
                          @php $status = "Process"; $color = "secondary"; @endphp
                            @break
                        @case('2')
                            @php $status = "Complete"; $color = "success"; @endphp
                            @break
                        @case('3')
                          @php $status = "Cancel"; $color = "danger"; @endphp
                            @break
                        @default
                        @php $status = "Unknown"; $color = "muted"; @endphp
                    @endswitch
                    <span class="bg-{{ $color }}-focus  text-{{ $color }}-600 border border-{{ $color }}-main px-24 py-4 radius-4 fw-medium text-sm">
                        {!! $status !!}
                    </span>
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