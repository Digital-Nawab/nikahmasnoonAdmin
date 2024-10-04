@extends('welcome')
@section('content')
  
<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
<h6 class="fw-semibold mb-0">New User Registration</h6>
<ul class="d-flex align-items-center gap-2">
<li class="fw-medium">
  <a href="#" class="d-flex align-items-center gap-1 hover-text-primary">
    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
    Dashboard
  </a>
</li>
<li>-</li>
<li class="fw-medium">Registration</li>
</ul>
</div>

    <div class="row gy-4">
      
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-xl">Personal Information</h6>
                    <p class="text-neutral-500">Fill up your details and proceed next steps.</p>

                    <!-- Form Wizard Start -->
                    <div class="form-wizard">
                        <form action="{!! url('add-user') !!}" method="post">
                            @csrf
                            <div class="form-wizard-header overflow-x-auto scroll-sm pb-8 my-32">
                                <ul class="list-unstyled form-wizard-list style-two">
                                    <li class="form-wizard-list__item active">
                                        <div class="form-wizard-list__line">
                                            <span class="count">1</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Personal Details </span>
                                    </li>
                                    <li class="form-wizard-list__item">
                                        <div class="form-wizard-list__line">
                                            <span class="count">2</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Preferences Information</span>
                                    </li>
                                    <li class="form-wizard-list__item">
                                        <div class="form-wizard-list__line">
                                            <span class="count">3</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Professional Information</span>
                                    </li>
                                    <li class="form-wizard-list__item">
                                        <div class="form-wizard-list__line">
                                            <span class="count">4</span>
                                        </div>
                                        <span class="text text-xs fw-semibold">Completed</span>
                                    </li>
                                </ul>
                            </div>

                            <fieldset class="wizard-fieldset show">
                                {{-- <h6 class="text-md text-neutral-500">Personal Information</h6> --}}
                                <div class="row gy-3">
                                    <div class="col-sm-2">
                                        <label class="form-label">Matrimony Profile for*</label>
                                        <div class="position-relative">
                                            <select name="matrimony_for" class="form-select form-control wizard-required">
                                                <option>Friend</option>
                                                <option>Myself</option>
                                                <option>Son</option>
                                              </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Full Name*</label>
                                        <div class="position-relative">
                                            <input type="text" name="name" class="form-control wizard-required" placeholder="Enter Last Name" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Password*</label>
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control wizard-required" placeholder="Enter Password" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <label class="form-label">Email*</label>
                                        <div class="position-relative">
                                            <input type="email" name="email" class="form-control wizard-required" placeholder="Enter Email" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Mobile Number*</label>
                                        <div class="position-relative">
                                            <input type="tel" name="mobile" class="form-control wizard-required" placeholder="Mobile Number" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Whatsapp Numbe*</label>
                                        <div class="position-relative">
                                            <input type="tel"  name="whatsapp" class="form-control wizard-required" placeholder="Enter Whatsapp Number" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="form-label">Marital Status</label>
                                        <div class="position-relative">
                                            <select name="marital_status" class="form-select form-control wizard-required">
                                                <option>Friend</option>
                                                <option>Myself</option>
                                                <option>Son</option>
                                              </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="form-label">Caste*</label>
                                        <div class="position-relative">
                                            <select name="matrimony_for" class="form-select form-control wizard-required">
                                                <option>Friend</option>
                                                <option>Myself</option>
                                                <option>Son</option>
                                              </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="form-label">Caste*</label>
                                        <div class="position-relative">
                                            <select name="matrimony_for" class="form-select form-control wizard-required">
                                                <option>Friend</option>
                                                <option>Myself</option>
                                                <option>Son</option>
                                              </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <label class="form-label">Gender *</label>
                                        <div class="position-relative">
                                            <select name="gender" class="form-select form-control wizard-required">
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Son</option>
                                              </select>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Date Of Birth</label>
                                        <div class="position-relative">
                                            <input type="date"  name="date" class="form-control wizard-required" placeholder="Enter Date of Birth" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Height</label>
                                        <div class="position-relative">
                                            <input type="tel"  name="height" class="form-control wizard-required" placeholder="Enter Your  Height" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="form-label">Body Type</label>
                                        <div class="position-relative">
                                            <input type="text"  name="date" class="form-control wizard-required" placeholder="Enter Body Type" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group text-end">
                                        <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                                    </div>
                                </div>
                            </fieldset>	

                            <fieldset class="wizard-fieldset">
                                <h6 class="text-md text-neutral-500">Account Information</h6>
                                <div class="row gy-3">
                                    <div class="col-12">
                                        <label class="form-label">About Your Self *</label>
                                        <div class="position-relative">
                                            <input type="text" name="about" class="form-control wizard-required" placeholder="Enter User Name" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label">What Do You Look For In a Life Partner?</label>
                                        <div class="position-relative">
                                            <input type="text"  name="requirements" class="form-control wizard-required" placeholder=" Enter Requirements " required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label">Country*</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="Enter Country" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="form-label">State</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="State" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">City</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="City" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Native/Hometown</label>
                                        <div class="position-relative">
                                            <input type="password" name="preferred_cities" class="form-control wizard-required" placeholder="Enter Password" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Preferred Cities</label>
                                        <div class="position-relative">
                                            <input type="text" name="preferred_cities" class="form-control wizard-required" placeholder="Enter Password" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                        <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                        <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                                    </div>
                                </div>
                            </fieldset>	

                            <fieldset class="wizard-fieldset">
                                <h6 class="text-md text-neutral-500">Bank Information</h6>
                                <div class="row gy-3">
                                    <div class="col-sm-6">
                                        <label class="form-label">Language Spoken</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="Enter Bank Name" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-sm-6">
                                        <label class="form-label">Any Disability</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="Enter Account Name" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Highest Qualification*</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="Enter Highest Qualification" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Employed In*</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="Enter Employed" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Occupation*</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="Enter Occupation" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label">Annual Income*</label>
                                        <div class="position-relative">
                                            <input type="text" class="form-control wizard-required" placeholder="Enter Account Number" required>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                        <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                        <button type="button" class="form-wizard-next-btn btn btn-primary-600 px-32">Next</button>
                                    </div>
                                </div>
                            </fieldset>	

                            <fieldset class="wizard-fieldset">
                                <div class="text-center mb-40">
                                    <img src="assets/images/gif/success-img3.gif" alt="" class="gif-image mb-24">
                                    <h6 class="text-md text-neutral-600">Congratulations </h6>
                                    <p class="text-neutral-400 text-sm mb-0">Well done! You have successfully completed.</p>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-end gap-8">
                                    <button type="button" class="form-wizard-previous-btn btn btn-neutral-500 border-neutral-100 px-32">Back</button>
                                    <button type="button" class="form-wizard-submit btn btn-primary-600 px-32">Publish</button>
                                </div>
                            </fieldset>	
                        </form>
                    </div>
                    <!-- Form Wizard End -->
                </div>
            </div>
        </div>

       
    </div>
</div>
@endsection

@section('script')

<script>
    // =============================== Wizard Step Js Start ================================
    $(document).ready(function() {
        // click on next button
        $('.form-wizard-next-btn').on("click", function() {
            var parentFieldset = $(this).parents('.wizard-fieldset');
            var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
            var next = $(this);
            var nextWizardStep = true;
            parentFieldset.find('.wizard-required').each(function(){
                var thisValue = $(this).val();

                if( thisValue == "") {
                    $(this).siblings(".wizard-form-error").show();
                    nextWizardStep = false;
                }
                else {
                    $(this).siblings(".wizard-form-error").hide();
                }
            });
            if( nextWizardStep) {
                next.parents('.wizard-fieldset').removeClass("show","400");
                currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
                next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
                $(document).find('.wizard-fieldset').each(function(){
                    if($(this).hasClass('show')){
                        var formAtrr = $(this).attr('data-tab-content');
                        $(document).find('.form-wizard-list .form-wizard-step-item').each(function(){
                            if($(this).attr('data-attr') == formAtrr){
                                $(this).addClass('active');
                                var innerWidth = $(this).innerWidth();
                                var position = $(this).position();
                                $(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                            }else{
                                $(this).removeClass('active');
                            }
                        });
                    }
                });
            }
        });
        //click on previous button
        $('.form-wizard-previous-btn').on("click",function() {
            var counter = parseInt($(".wizard-counter").text());;
            var prev =$(this);
            var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
            prev.parents('.wizard-fieldset').removeClass("show","400");
            prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
            currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
            $(document).find('.wizard-fieldset').each(function(){
                if($(this).hasClass('show')){
                    var formAtrr = $(this).attr('data-tab-content');
                    $(document).find('.form-wizard-list .form-wizard-step-item').each(function(){
                        if($(this).attr('data-attr') == formAtrr){
                            $(this).addClass('active');
                            var innerWidth = $(this).innerWidth();
                            var position = $(this).position();
                            $(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
                        }else{
                            $(this).removeClass('active');
                        }
                    });
                }
            });
        });
        //click on form submit button
        $(document).on("click",".form-wizard .form-wizard-submit" , function(){
            var parentFieldset = $(this).parents('.wizard-fieldset');
            var currentActiveStep = $(this).parents('.form-wizard').find('.form-wizard-list .active');
            parentFieldset.find('.wizard-required').each(function() {
                var thisValue = $(this).val();
                if( thisValue == "" ) {
                    $(this).siblings(".wizard-form-error").show();
                }
                else {
                    $(this).siblings(".wizard-form-error").hide();
                }
            });
        });
        // focus on input field check empty or not
        $(".form-control").on('focus', function(){
            var tmpThis = $(this).val();
            if(tmpThis == '' ) {
                $(this).parent().addClass("focus-input");
            }
            else if(tmpThis !='' ){
                $(this).parent().addClass("focus-input");
            }
        }).on('blur', function(){
            var tmpThis = $(this).val();
            if(tmpThis == '' ) {
                $(this).parent().removeClass("focus-input");
                $(this).siblings(".wizard-form-error").show();
            }
            else if(tmpThis !='' ){
                $(this).parent().addClass("focus-input");
                $(this).siblings(".wizard-form-error").hide();
            }
        });
    });
    // =============================== Wizard Step Js End ================================
</script>
@endsection