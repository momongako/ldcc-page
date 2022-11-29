<link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{asset('https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css')}}" rel='stylesheet'>
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs><a href=index.html class=home>{{__('Home')}}</a> <span class=divider></span> <span
                                class=current id="contact">{{__('Contact Us')}}</span></div>
                </div>
                <h2 class="page-header_title" style="color: #000000; font-size: 36px; line-height: 36px;">{{__('Contact Us')}}</h2>
            </div>
        </div>
    </div>
</div>

<!--    -->
<main id=main class=site-main>
    <div class="wrapper">
        <div class="main">
            <div class="contactus-1 section-image" style="background-image: url('frontend/assets/image/bg37.jpg')">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <h2 class="title text-light">{{__('Get in Touch')}}</h2>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class='bx bxs-edit-location text-light'></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">{{__('Head office')}}</h4>
                                    <p class="description text-light"> {{__('Address')}}: 11th Floor, Petroland Building,
                                        <br> No.12 Tan Trao St, Tan Phu Ward, Dist 7, Ho Chi Minh City
                                        <br>{{__('Telephone')}}: (+84) 28 5413 6359
                                    </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class='bx bxs-edit-location text-light'></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Ha Noi Branch</h4>
                                    <p class="description text-light"> {{__('Address')}}: 31st Floor, West Floor, LOTTE Centre Hanoi,
                                        <br> Lieu Giai, Cong Vi Ward, Ba Dinh, Ha Noi
                                        <br> {{__('Telephone')}}: (+84) 24 3333 6605
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class=modal-body style="background-color: #FFFFFF;padding: 25px 50px;border-radius: 10px">
                                <div class=custom-contact-form>
                                    <div role=form class=wpcf7 id=wpcf7-f5724-o2 lang=en-US dir=ltr>
                                        <div class=screen-reader-response role=alert aria-live=polite></div>
                                        <form id="form_contact" action=# method=post class="wpcf7-form init"
                                              novalidate=novalidate>

                                            <div class=" alert alert-success" role="alert" id="successMsg" style=" color: #155724;color: #155724;display: none;
                                background-color: #d4edda;
                                border-color: #c3e6cb;position: relative;
                                padding: 0.75rem 1.25rem;
                                margin-bottom: 1rem;
                                border: 1px solid transparent;
                                border-radius: 0.25rem;" >
                                                Thank you for getting in touch!
                                            </div>

                                            <div class=g-infomation>
                                                <p><label> {{__('Your Name')}} <span
                                                                class=mandatory>* <span style="font-size: 11px">Required</span></span><br>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                            <input
                                                    id="your_name"
                                                    type=text name=name value size=40
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required=true aria-invalid=false>
                                            <span style="color: red" class="text-danger" id="yourNameErrorMsg"></span>
                                        </span> </label>
                                                </p>
                                                <p>
                                                    <label> {{__('Your Phone Number')}}
                                                        <span class=mandatory>*</span>
                                                        <br>
                                                        <span
                                                                class="wpcf7-form-control-wrap your-phone"><input
                                                                    id="your_phone"
                                                                    type=text name=phone value size=40
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required=true aria-invalid=false>
                                            <span style="color: red" class="text-danger" id="yourPhoneErrorMsg"></span>
                                        </span> </label>
                                                </p>
                                            </div>
                                            <div class=g-infomation>
                                                <p>
                                                    <label> {{__('Your Email')}}
                                                        <span class=mandatory>*</span>
                                                        <br>
                                                        <span
                                                                class="wpcf7-form-control-wrap your-email"><input
                                                                    id="your_email"
                                                                    type=email name=email value size=40
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                    aria-required=true aria-invalid=false>
                                            <span style="color: red" class="text-danger" id="yourEmailErrorMsg"></span>
                                        </span> </label>
                                                </p>
                                                <p>
                                                    <label> {{__('Your Company')}} <span
                                                                class=mandatory>*<span style="font-size: 11px; color: #5ff681!important;">Optional</span></span><br>
                                                        <span
                                                                class="wpcf7-form-control-wrap your-company"><input
                                                                    id="your_company"
                                                                    type=text name=company value size=40
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                    aria-required=true aria-invalid=false>
                                            <span style="color: red" class="text-danger" id="yourCompanyErrorMsg"></span>
                                        </span> </label>
                                                </p>
                                            </div>
                                            <p>

                                                <label> {{__('Overall inquiry')}} <span
                                                            class=mandatory>*</span><br>
                                                    <span class="wpcf7-form-control-wrap your-message">

                                        <textarea name=message
                                                  id="your_message"
                                                  style="height: 150px"
                                                  class="wpcf7-form-control wpcf7-textarea"
                                                  aria-invalid=false>
                                        </textarea>
                                        <span style="color: red" class="text-danger" id="yourMessageErrorMsg"></span>
                                    </span>
                                                </label>
                                                <button type="submit" class="btn btn-primary">Send Mesage</button>
                                            </p>
                                            <div class=wpcf7-response-output role=alert aria-hidden=true>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#your_message').val('');
  });
  $('#form_contact').on('submit',function(event){
    event.preventDefault();
    var errors = false ;

    if($('#your_name').val() === ''){
      $('#yourNameErrorMsg').text('The name field is required.');
      errors = true;
    }

    if($('#your_phone').val() === ''){
      $('#yourPhoneErrorMsg').text('The phone field is required.');
      errors = true;
    }

    if($('#your_email').val() === ''){
      $('#yourEmailErrorMsg').text('The email field is required.');
      errors = true;
    }

    if($('#your_company').val() === ''){
      $('#yourCompanyErrorMsg').text('The company field is required.');
      errors = true;
    }
    if($.trim($('#your_message').val()) === ''){
      $('#yourMessageErrorMsg').text('The message field is required.');
      errors = true;
    }

    if (errors === false ) {
      var data = new FormData();

      data.append('name',  $('#your_name').val());
      data.append('phone', $('#your_phone').val());
      data.append('email', $('#your_email').val());
      data.append('company', $('#your_company').val());
      data.append('message', $('#your_message').val());

      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        contentType: false,
        processData: false,
        type: 'post',
        url: "/create_contact",
        data: data,
        success: function(response)
        {
          if (response.success === true) {
            $('#your_name').val('');
            $('#your_phone').val('');
            $('#your_email').val('');
            $('#your_company').val('');
            $('#your_message').val('');

            $('#yourNameErrorMsg').text('');
            $('#yourPhoneErrorMsg').text('');
            $('#yourEmailErrorMsg').text('');
            $('#yourCompanyErrorMsg').text('');
            $('#yourMessageErrorMsg').text('');

            $('#successMsg').fadeIn('fast').delay(3000).fadeOut('fast');
            setTimeout(function() {
              $( ".close" ).trigger( "click" );
            }, 1000);

          }

        },
        error: function(response)
        {
          console.log(data);
        }
      });
    }
  });
    {{--$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });--}}
</script>
