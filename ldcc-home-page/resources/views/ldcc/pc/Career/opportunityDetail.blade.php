<div class="page-header page-header_align_left"
     style=" margin-bottom: 0px; margin-top: 75px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs><a href=index.html class=home>{{ __('Home') }}</a> <span class=divider></span> <a
                                href=career_ldcc_page.html>{{ __('CAREER') }} </a>
                        <span class=divider></span>
                        <span class=current>{{ __('Career opportunity') }}</span>
                        <span class=divider></span>
                        <span class=current>{{ __('OverView') }}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class=site-main>
    <section class="search-result-list-detail template-2">
        <div class="container">
            <div class=" alert alert-success" role="alert" id="successMsg" style=" color: #155724;color: #155724;display: none;
                    background-color: #d4edda;
                    border-color: #c3e6cb;position: relative;
                    padding: 0.75rem 1.25rem;
                    margin-bottom: 1rem;
                    border: 1px solid transparent;
                    border-radius: 0.25rem;" >
                Thank you for getting in touch!
            </div>
            <div class="row no-gutters">
                <div class="col-12 mb-15">
                    <section class="apply-now-banner  ">
                        <div class="image"><img src="{{asset('frontend/assets/image/Career/1.jpg')}}" alt="">
                        </div>
                        <div class="apply-now-content">
                            <div class="job-desc">
                                <h1 class="title">{{$post->position}}</h1>
                                <a class="employer job-company-name">
                                    <?php
                                        echo $post->recruitment_office_name == "HN" ?
                                            "Floor 31, LOTTE Center, 54 Lieu Giai, Ba Dinh District, Hanoi" :
                                            "Floor 11, Petroland Building, 12 Tan Trao Street, Tan Phu Ward, District 7, Ho Chi Minh City";
                                    ?>
                                </a>
                            </div>

                            <div class="apply-now-btn " data-toggle=modal data-target=#myModal1>
                                <a class="btn-gradient btnApplyClick">
                                    Apply Now
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-7 col-custom-xxl-9">
                    <div class="tabs">
                        <nav class="job-result-nav">
                            <ul class="tabs-toggle">
                                <li id="tabs-job-detail"><a data-href="#tab-1">JOB INFO</a></li>
                            </ul>
                        </nav>
                        <div class="tab-content" id="tab-1">
                            <section class="job-detail-content">
                                <div class="bg-blue">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box">
                                                <div class="map">
                                                    <strong><em class="mdi mdi-map-marker"></em>Address</strong>
                                                    <p><a>{{$post->recruitment_office_name}}</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box has-background">
                                                <ul>
                                                    <li> <strong><em class="mdi mdi-update"> </em>Posted
                                                            date</strong>
                                                        <p>{{substr($post->created_at,0,10)}}</p>
                                                    </li>
                                                    <li> <strong> <em class="mdi mdi-briefcase"></em>Job
                                                            level</strong>
                                                        <p> <a>
                                                                {{$post->levers_name}}
                                                            </a>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-sm-6 item-blue">
                                            <div class="detail-box has-background">
                                                <ul>
                                                    <li>
                                                        <strong><i class="fa fa-briefcase"></i>Experienced</strong>
                                                        <p>
                                                            1 - 3
                                                            Year
                                                        </p>
                                                    </li>

                                                    <li><strong><i class="mdi mdi-calendar-check"></i>End
                                                            Date</strong>
                                                        <p>{{$post->end_date}}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-row reset-bullet">
                                    <h2 class="detail-title" style="font-size: 24px">WHAT WE CAN OFFER</h2>

                                    <li><i class='bx bx-money-withdraw'></i> 13th month salary</li>
                                    <li><i class='bx bx-donate-heart'></i> Health care 24h</li>
                                    <li><i class='bx bxs-plane-alt'></i> Yearly Company trip</li>

                                </div>
                                <div class="detail-row reset-bullet">
                                    {!!$post->job_description!!}

                                </div>
                                <div class="detail-row">
                                    <h3 class="detail-title">JOB LOCATIONS</h3>
                                    <div class="content_fck ">
                                            <span><i class='bx bxs-map'></i>
                                                <?php
                                                    echo $post->recruitment_office_name == "HN" ?
                                                        "Floor 31, LOTTE Center, 54 Lieu Giai, Ba Dinh District, Hanoi" :
                                                        "Floor 11, Petroland Building, 12 Tan Trao Street, Tan Phu Ward, District 7, Ho Chi Minh City";
                                                ?>
                                            </span>
                                    </div>
                                </div>

                                <br>
                                <div class="apply-now-right" data-toggle=modal data-target=#myModal1>
                                    <div class="apply-now-btn  ">
                                        <a class="btn-gradient "> APPLY NOW
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-custom-xxl-3">
                    <div class="side-wrapper">
                        <div class="banner-ad">
                            {{--<script type='text/javascript'>OA_show(854);</script>--}}
                        </div>


                        <div class="similar-jobs">
                            <p>JOBS YOU WILL LOVE</p>
                        </div>
                        <section class="jobs-side-list">
                            <div class="jobs-list">
                                @foreach ($listCareerOpportunity as $careerOpportunity)
                                    <div class="job-item">
                                        <div class="figure">
                                            <div class="image"> <a target="_blank" title="Mobile Developer (Flutter)">
                                                    <img class="lazy-bg"
                                                         data-src="https://images.careerbuilder.vn/employer_folders/lot5/128905/67x67/184852newimage1.png"
                                                         src=" {{asset('frontend/assets/image/Career/10941000.png')}}"
                                                         alt="Mobile Developer (Flutter)"> </a> </div>
                                            <div class="figcaption">
                                                <div class="timeago"></div>
                                                <div class="caption">
                                                    <a class="company-name" href="/opportunity-detail/{{$careerOpportunity->slug}}"
                                                       title="{{$careerOpportunity->position}}">{{$careerOpportunity->position}}</a>
                                                    <p class="salary">{{$careerOpportunity->levers_name}}
                                                    </p>
                                                    <div class="location">
                                                        <em class="mdi mdi-map-marker"></em>
                                                        <ul>
                                                            <li>{{$careerOpportunity->recruitment_office_name}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="top-icon"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="load-more"><a href="{{route('career.opportunity')}}"
                                                      title="jobs recommend">View All</a></div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<div id=myModal class="modal fade" role=dialog style="opacity: 1;">
    <div class=modal-dialog>
        <div class=modal-content>
            <div class=modal-header>
                <div class=form-title>
                    <button
                            type=button class=close data-dismiss=modal>&times;
                    </button>
                    <div class=modal-title>CONTACT US
                    </div>
                    <p class=groove-align-center>If you have any questions, our team is happy to support!</p>
                </div>
            </div>
            <div class=modal-body>
                <div class=custom-contact-form>
                    <div role=form class=wpcf7 id=wpcf7-f5724-o2 lang=en-US dir=ltr>
                        <div class=screen-reader-response role=alert aria-live=polite></div>
                        <form action=# method=post class="wpcf7-form init"
                              novalidate=novalidate>
                            <div style="display: none;">
                                <input type=hidden name=_wpcf7 value=5724>
                                <input type=hidden name=_wpcf7_version value=5.2>
                                <input type=hidden name=_wpcf7_locale value=en_US>
                                <input type=hidden name=_wpcf7_unit_tag value=wpcf7-f5724-o2>
                                <input type=hidden name=_wpcf7_container_post value=0>
                                <input type=hidden name=_wpcf7_posted_data_hash value>
                                <input type=hidden name=_wpcf7_recaptcha_response value>
                            </div>
                            <div class=g-infomation>
                                <p><label> Your Name <span
                                                class=mandatory>* <span style="font-size: 11px">Imperative</span></span><br>
                                        <span class="wpcf7-form-control-wrap your-name"><input
                                                    type=text name=your-name value size=40
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required=true aria-invalid=false></span> </label>
                                </p>
                                <p>
                                    <label> Your Phone Number
                                        <span class=mandatory>*</span>
                                        <br>
                                        <span
                                                class="wpcf7-form-control-wrap your-position"><input
                                                    type=text name=your-position value size=40
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required=true aria-invalid=false></span> </label>
                                </p>
                            </div>
                            <div class=g-infomation>
                                <p>
                                    <label> Your Email
                                        <span class=mandatory>*</span>
                                        <br>
                                        <span
                                                class="wpcf7-form-control-wrap your-email"><input
                                                    type=email name=your-email value size=40
                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                    aria-required=true aria-invalid=false></span> </label>
                                </p>
                                <p>
                                    <label> Your Company <span
                                                class=mandatory>*<span style="font-size: 11px">Optional</span></span><br>
                                        <span
                                                class="wpcf7-form-control-wrap your-companywebsite"><input
                                                    type=text name=your-companywebsite value size=40
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                    aria-required=true aria-invalid=false></span> </label>
                                </p>
                            </div>
                            <p>

                                <label> Overall inquiry <span
                                            class=mandatory>*</span><br>
                                    <span class="wpcf7-form-control-wrap your-message">

                                        <textarea name=your-message
                                                  style="height: 150px"
                                                  class="wpcf7-form-control wpcf7-textarea"
                                                  aria-invalid=false>
                                        </textarea>
                                    </span>
                                </label>
                                <input type=submit value="Send Message" class="wpcf7-form-control wpcf7-submit">
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

<div id=myModal1 class="modal fade" role=dialog>
    <div class=modal-dialog>
        <div class=modal-content>
            <div class=modal-header>
                <div class=form-title>
                    <button type=button class=close data-dismiss=modal>&times;
                    </button>
                    <div class=modal-title>START YOUR NEW <br> CAREER AT LOTTE DATA COMMUNICATION
                    </div>
                    <p class=groove-align-center>If you have any questions, our team is happy to support!</p></div>
            </div>
            <div class=modal-body>
                <div class=custom-contact-form>
                    <div role=form class=wpcf7 id=wpcf7-f641-o3 lang=en-US dir=ltr>
                        <div class=screen-reader-response role=alert aria-live=polite></div>
                        <form   id="form"
                                method="post" class="wpcf7-form init"
                                enctype=multipart/form-data novalidate=novalidate>

                            <p>
                                <label>
                                    Your Name
                                    <span class=mandatory>*</span>
                                    <br>
                                    <span class="wpcf7-form-control-wrap your-name">
                                        <input
                                                type=text name="name" value size=40 id="inp_name"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid=false>
                                        <span style="color: red" class="text-danger" id="nameErrorMsg"></span>
                                    </span>
                                </label>
                            </p>

                            <p>
                                <label> Your Email
                                    <span class=mandatory>*</span>
                                    <br>
                                    <span class="wpcf7-form-control-wrap email-111">
                                        <input type=email name="email" value size=40 id="inp_email"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                aria-required=true aria-invalid=false>
                                        <span style="color: red" class="text-danger" id="emailErrorMsg"></span>
                                    </span>
                                </label>
                            </p>

                            <p class=job_name>
                                <label> Phone Number
                                    <span class=mandatory>*</span>
                                    <br>
                                    <span
                                            class="wpcf7-form-control-wrap your-job">
                                        <input type=number name="phone" value size=40 id="inp_number"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required=true aria-invalid=false>
                                        <span style="color: red" class="text-danger" id="numberErrorMsg"></span>
                                    </span>
                                </label>
                            </p>

                            <p class=job_name>
                                <label> Name of position
                                    <span class=mandatory>*</span>
                                    <br>
                                    <span class="wpcf7-form-control-wrap your-job">
                                        <select id="sel_position" name="position">
                                             <option value="1">Ha Noi</option>
                                             <option value="2">Ho Chi Minh</option>
                                        </select>
                                    </span>
                                </label>
                            </p>

                            <p>
                                <span>Your Resume
                                    <span style="color: red">*
                                         <span style="font-size: 11px">Imperative</span>
                                    </span>
                                </span>
                                <br>
                                <label>
                                    {{--<i></i>Drag file here or *--}}
                                    {{--<span class=txt1>browser</span>*--}}
                                    {{--<span class=txt-2>Support: .jpf, .jpg, .jpeg, .png, .pdf, .docx</span>--}}
                                    {{--<span class="wpcf7-form-control-wrap cv-file">--}}
                                        <input id="upload-file" type=file name=path>
                                    {{--</span>--}}
                                    <span style="color: red" class="text-danger" id="fileErrorMsg"></span>
                                </label>
                            </p>

                            <p>
                                <label> Message
                                    {{--<span class=mandatory>*--}}
                                        {{--<span style="font-size: 11px">Optional</span>--}}
                                    {{--</span>--}}
                                    <br>
                                    <span class="wpcf7-form-control-wrap your-message">
                                        <textarea name="message" cols=40 id="inp_message"
                                           rows=10
                                           class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                           aria-required=true
                                           aria-invalid=false>

                                        </textarea>
                                    </span>
                                </label>
                            </p>
                            <p>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </p>
                            <div class=wpcf7-response-output role=alert aria-hidden=true></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $('#form').on('submit',function(event){
    event.preventDefault();
    var errors = false ;

    if($('#inp_name').val() === ''){
      $('#nameErrorMsg').text('The name field is required.');
      errors = true;
    }

    if($('#inp_email').val() === ''){
      $('#emailErrorMsg').text('The email field is required.');
      errors = true;
    }

    if($('#inp_number').val() === ''){
      $('#numberErrorMsg').text('The number field is required.');
      errors = true;
    }

    if($('#upload-file').val() === ''){
      $('#fileErrorMsg').text('The file field is required.');
      errors = true;
    }

    if (errors === false ) {
      var data = new FormData();
      jQuery.each(jQuery('#upload-file')[0].files, function(i, file) {
        data.append('file-'+i, file);
      });
      data.append('name',  $('#inp_name').val());
      data.append('email', $('#inp_email').val());
      data.append('phone', $('#inp_number').val());
      data.append('position', $('#sel_position').val());
      data.append('message', $('#inp_message').val());

      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        contentType: false,
        processData: false,
        type: 'post',
        url: "/create_career_opportunity",
        data: data,
        success: function(response)
        {
          if (response.success === true) {
            $('#inp_name').val('');
            $('#inp_email').val('');
            $('#inp_number').val('');
            $('#inp_message').val('');
            $('#upload-file').val('');

            $('#nameErrorMsg').text('');
            $('#emailErrorMsg').text('');
            $('#numberErrorMsg').text('');
            $('#fileErrorMsg').text('');

            $( ".close" ).trigger( "click" );

            $('#successMsg').fadeIn('fast').delay(3000).fadeOut('fast');
          }else{
              $('#fileErrorMsg').text('Please enter the correct format png,jpg,doc,docx,xls,xlsx.');
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
