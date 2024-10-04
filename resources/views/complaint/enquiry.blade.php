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
        <div class="card-header">
            <h6 class="card-title mb-0">All Enquiry </h6>
          </div>
        <div class="card-body p-24">
            <div class="table-responsive scroll-sm">
                <table class="table bordered-table sm-table mb-0">
                  <thead>
                    <tr>
                      <th scope="col">
                        <div class="d-flex align-items-center gap-10">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input radius-4 border input-form-dark" type="checkbox" name="checkbox" id="selectAll">
                            </div>
                            S.L
                        </div>
                      </th>
                      <th scope="col">Join Date</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Department</th>
                      <th scope="col">Designation</th>
                      <th scope="col" class="text-center">Status</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                01
                            </div>
                        </td>
                        <td>25 Jan 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Kathryn Murphy</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">osgoodwy@gmail.com</span></td>
                      <td>HR</td>
                      <td>Manager</td>
                      <td class="text-center">
                        <span class="bg-success-focus text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span> 
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
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                02
                            </div>
                        </td>
                        <td>25 Jan 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list2.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Annette Black</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">redaniel@gmail.com</span></td>
                      <td>Design</td>
                      <td>UI UX Designer</td>
                      <td class="text-center">
                        <span class="bg-neutral-200 text-neutral-600 border border-neutral-400 px-24 py-4 radius-4 fw-medium text-sm">Inactive</span> 
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
                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                03
                            </div>
                        </td>
                        <td>10 Feb 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list3.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Ronald Richards</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">seannand@mail.ru</span></td>
                      <td>Design</td>
                      <td>UI UX Designer</td>
                      <td class="text-center">
                        <span class="bg-success-focus text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span>
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

                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                04
                            </div>
                        </td>
                        <td>10 Feb 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list4.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Eleanor Pena</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">miyokoto@mail.ru</span></td>
                      <td>Design</td>
                      <td>UI UX Designer</td>
                      <td class="text-center">
                        <span class="bg-success-focus text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span>
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

                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                05
                            </div>
                        </td>
                        <td>15 March 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list5.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Leslie Alexander</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">icadahli@gmail.com</span></td>
                      <td>Design</td>
                      <td>UI UX Designer</td>
                      <td class="text-center">
                        <span class="bg-neutral-200 text-neutral-600 border border-neutral-400 px-24 py-4 radius-4 fw-medium text-sm">Inactive</span> 
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

                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                06
                            </div>
                        </td>
                        <td>15 March 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list6.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Albert Flores</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">warn@mail.ru</span></td>
                      <td>Design</td>
                      <td>UI UX Designer</td>
                      <td class="text-center">
                        <span class="bg-success-focus text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span>
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

                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                07
                            </div>
                        </td>
                        <td>27 April 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list7.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Jacob Jones</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">zitka@mail.ru</span></td>
                      <td>Development</td>
                      <td>Frontend developer</td>
                      <td class="text-center">
                        <span class="bg-success-focus text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span>
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

                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                08
                            </div>
                        </td>
                        <td>25 Jan 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list8.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Jerome Bell</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">igerrin@gmail.com</span></td>
                      <td>Development</td>
                      <td>Frontend developer</td>
                      <td class="text-center">
                        <span class="bg-neutral-200 text-neutral-600 border border-neutral-400 px-24 py-4 radius-4 fw-medium text-sm">Inactive</span> 
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

                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                09
                            </div>
                        </td>
                        <td>30 April 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list2.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Marvin McKinney</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">maka@yandex.ru</span></td>
                      <td>Development</td>
                      <td>Frontend developer</td>
                      <td class="text-center">
                        <span class="bg-success-focus text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span>
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

                    <tr>
                        <td>
                            <div class="d-flex align-items-center gap-10">
                                <div class="form-check style-check d-flex align-items-center">
                                    <input class="form-check-input radius-4 border border-neutral-400" type="checkbox" name="checkbox">
                                </div>
                                10
                            </div>
                        </td>
                        <td>30 April 2024</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <img src="assets/images/user-list/user-list10.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                          <div class="flex-grow-1">
                            <span class="text-md mb-0 fw-normal text-secondary-light">Cameron Williamson</span>
                          </div>
                        </div>
                      </td>
                      <td><span class="text-md mb-0 fw-normal text-secondary-light">danten@mail.ru</span></td>
                      <td>Development</td>
                      <td>Frontend developer</td>
                      <td class="text-center">
                        <span class="bg-success-focus text-success-600 border border-success-main px-24 py-4 radius-4 fw-medium text-sm">Active</span>
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
                  </tbody>
                </table>
            </div>

            
        </div>
    </div>
</div>
@endsection