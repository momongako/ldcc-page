<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <span  class=current>
                            {{ __('HOME') }}
                        </span>
                        <span class=divider></span>
                        <span class=current>
                            {{ __('CAREER') }}
                        </span>
                        <span class=divider>

              </span>
                        <span class=current>
                            {{ __('OUR CULTURE') }}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white" style="background-color: white">

    <style>
        .wgl-tabs_header {
            min-height: 150px;
        }

        .groove-text-editor ul li {
            font-weight: 500;
        }
    </style>
    <div class=sticky-space style="background-color: #FFFFFF">
        <div class=sticky-container>
            <div class="header section-careers-sticky" style="display: flex;justify-content: center;margin-left: 0">
                <style>
                    .dropbtn_home {
                        padding: 10px;
                        position: relative;
                        display: inline-block;
                    }

                    .dropbtn {
                        /*background-color: #ffffff;*/
                        border-bottom: 1px solid #2b2b2b;
                        font-size: 16px;
                        padding: 10px;
                        margin: auto 0;
                        text-transform: unset;
                        cursor: pointer;
                    }

                    .dropdown {
                        padding: 10px;
                        position: relative;
                        display: inline-block;
                    }

                    .dropdown-content {
                        top: 43px;
                        left: -5px;
                        display: none;
                        position: absolute;
                        background-color: #ffffff !important;
                        min-width: 200px;
                        width: 250px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        z-index: 100;
                    }

                    .dropdown-content a {
                        color: #df0101;
                        padding: 16px;
                        text-decoration: none;
                        display: block;
                    }

                    .dropdown-content a:hover {
                        background-color: #f1f1f1
                    }

                    .dropdown:hover .dropdown-content {
                        display: block;
                    }

                    .dropdown:hover .dropbtn {
                        background-color: whitesmoke;
                        color: #2b2b2b;
                    }
                </style>
                <div class="dropbtn_home">
                    <a class="dropbtn" href="{{route('career.culture')}}">
                        {{ __('Career') }}
                    </a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">{{ __('OUR CULTURE') }} <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-content">
                        <a class=services href="{{route('career.culture')}}">{{ __('OUR CULTURE') }}</a>
                        <a class=cooperation href="{{route('career.opportunity')}}">
                            {{ __('Career opportunity') }}
                        </a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <!-- Section jobs list -->
    <section class="cp_container container">
        <div id="info" class="tab-pane fade active in " style="opacity: 1">

            <style>
                .cp_job_view_detail a.quick-apply:hover {
                    border-color: #999;
                    opacity: 1;
                    background-color: transparent;
                    color: #333;
                }

                .cp_job_view_detail a.quick-apply {
                    border-color: #e50000;
                    background-color: #e50000;
                    color: #fff;
                }

                .cp_job_view_detail a:hover {
                    border-color: #e50000;
                    background-color: #e50000;
                    color: #fff;
                }

                a.collapse-jobs-listing:hover span {
                    background-color: #e50000;
                }

                a.collapse-jobs-listing:hover span i {
                    color: #fff
                }

                .load_more a:hover {
                    border-color: #e50000;
                    background-color: #e50000;
                    color: #fff;
                }
            </style>
            <!--      value   -->
            <section class="section-our-culture frontpage-block-5 groove-section groove-section-boxed">
                <div class="groove-title-heading title-heading-center  wgl-double_heading">
                    <h2><span class="text-uppercase" style="font-size: 24px">
                            {{ __('Our Values') }}
                        </span> <br>
                        <span class="cp_under_line"
                              style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>

                    </h2>
                </div>
                <div class="groove-container groove-column-gap-default" style="max-width: 1250px;">
                    <div class=groove-row>
                        <div class="groove-title-heading title-heading-center  wgl-double_heading">
                            <p>
                                <img src="{{asset(
                                    App::getLocale() =='en' ? 'frontend/assets/image/Career/img.png' :
                                     'frontend/assets/image/Career/img2.jpg'
                                    )}}" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!--      Office  -->
            <div class="cp_tab_content cp_our_office_section" id="office">
                <div class="row">
                    <div class="col-sm-12 cp_header_section">
                        <h2>
                            {{ __('Our Office') }}
                            <span class="cp_under_line" style="background-color: #e50000"></span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 cp_container_section">
                        <div class="container">
                            <div class="row">
                                <ul class="cp_our_office">
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_img-container"
                                             style="background: url(https://images02.vietnamworks.com//companyprofile/LotteDataCommunication/en/Office_3_1_.jpg)">
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_img-container"
                                             style="background: url(https://images02.vietnamworks.com//companyprofile/LotteDataCommunication/en/OurOffice2.png)">
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_img-container"
                                             style="background: url(https://images02.vietnamworks.com//companyprofile/LotteDataCommunication/en/Office_1.jpg)">
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_img-container"
                                             style="background: url(https://images02.vietnamworks.com//companyprofile/LotteDataCommunication/en/OurOffice4.png)">
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_address-container" style="background-color: #e50000">
                                            <h3 style="color: #FFFFFF">
                                                {{ __('ADDRESS') }}
                                            </h3>

                                            <p>
                                                <b>
                                                    {{ __('Headquarter:') }}
                                                </b>
                                            </p>
                                            <p>
                                                {{ __('11F, Petroland Tower, 12 Tan Trao Street, Tan Phu Ward, District 7, HCM city, Vietnam.') }}
                                            </p>
                                            <p>
                                                <b>
                                                    {{ __('Northern office:') }}
                                                </b>
                                            </p>
                                            <p>
                                                {{ __('31F West Tower - Lotte Center Hanoi, 54 Lieu Giai, Cong Vi, Ba Dinh, Hanoi, Vietnam.') }}
                                            </p>

                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_img-container"
                                             style="background: url(https://images02.vietnamworks.com//companyprofile/LotteDataCommunication/en/Lotte_Data-Office5.png)">
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_img-container"
                                             style="background: url(https://images02.vietnamworks.com//companyprofile/LotteDataCommunication/en/Office.jpg)">
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_img-container"
                                             style="background: url(https://images02.vietnamworks.com//companyprofile/LotteDataCommunication/en/Office1.jpg)">
                                        </div>
                                    </li>
                                    <li class="col-xs-12 col-sm-4 cp_office_item">
                                        <div class="cp_our_office_img cp_img-container"
                                             style="background: url(https://images02.vietnamworks.com//companyprofile/LotteDataCommunication/en/Office2.jpg)">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cp_tab_content cp_our_people_section" id="people">
                <div class="row">
                    <div class="col-sm-12 cp_header_section">
                        <h2 class="text-uppercase">
                            {{ __('Our People') }}
                            <span class="cp_under_line" style="background-color: #e50000"></span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 cp_container_section">
                        <div class="container">
                            <div class="cp_our_people_container">
                                <div class="row">

                                    <div class="cp_our_people_option_0" data-people-amount="3">
                                        <div class="cp_our_people_item">
                                            <div class="col-xs-12 col-sm-4 cp_our_people_item_content 1">
                                                <h2>
                                                    {{ __('MOON GJ') }}
                                                </h2>
                                                <h3>Platform Director<br></h3>
                                                <div class="custom-people-item-content">

                                                    <div>“Xin chào các bạn! <br></div>
                                                    <div><br></div>
                                                    <div>
                                                        {{ __('Working with Smart Vietnamese Talents is the most precious gift in my life.') }}

                                                    </div>
                                                    <div><br></div>
                                                    <div>
                                                        {{ __('MOON They are young, Smart, Talented, and passionate about Career Development.') }}

                                                    </div>
                                                    <div><br></div>
                                                    <div>
                                                        {{ __('As LDCC, we open environment that allows individual to do what they are best at. People are given chances to develop their career in either technical or management path.') }}”

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 cp_our_people_item_media" data-modify-people-img="1">
                                                <img class="peopleImage1"
                                                     src="{{asset('frontend/assets/image/Career/Ourpeople1_1_.png')}}"
                                                     alt="MOON GJ" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cp_our_people_option_1" data-people-amount="3">
                                        <div class="cp_our_people_item">
                                            <div class="col-xs-12 col-sm-4 cp_our_people_item_content 2">
                                                <h2>THAI BAO NGOC</h2>
                                                <h3>
                                                    {{ __('Senior Product Manager') }}
                                                    <br>
                                                </h3>
                                                <div class="custom-people-item-content">

                                                        <div>
                                                            “
                                                            {{ __('I love the word “Empathy” as it not only shapes our core value propositions but also our working culture.') }}

                                                            <br> <br>
                                                            {{ __('Empathy is an action that we practice on a daily basis in order to build deeper understanding of our customer pain points and values. In fact, we cannot innovate customer experiences without a dedication and passion to do everything with the customer in mind.') }}
                                                             <br> <br>
                                                            {{ __('Empathy is also the key connection that engages our team members and ensure all of us are heard and seen as equals. This makes us feel comfortable and enjoy working every day.') }}”
                                                        </div>

                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 cp_our_people_item_media" data-modify-people-img="2">
                                                <img class="peopleImage2" src="{{asset('frontend/assets/image/Career/people11.jpg')}}" alt="THAI BAO NGOC" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cp_our_people_option_0" data-people-amount="3">
                                        <div class="cp_our_people_item">
                                            <div class="col-xs-12 col-sm-4 cp_our_people_item_content 3">
                                                <h2>NGUYEN QUOC THAI</h2>
                                                <h3>Senior IT manager<br></h3>
                                                <div class="custom-people-item-content">

                                                    <div>“{{ __('If you ever ask me about what I like most about LDCC, I’ll definitely say that it’s my second cozy home, where I feel really comfortable and joyful working with all friendly colleagues. My team and I have work closely in a remarkable project. We exceeded our client’s expectation though the project had had a very rocky start. As a team lead, I’m very proud of this accomplishment.') }}”</div>
                                                    <div><br></div>

                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-8 cp_our_people_item_media" data-modify-people-img="3">
                                                <img class="peopleImage3"
                                                     src="{{asset('frontend/assets/image/Career/Ourpeople3_1_1_1_.png')}}"
                                                     alt="NGUYEN QUOC THAI" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cp_tab_content cp_our_benefits_section" id="benefits">
                <div class="row">
                    <div class="col-sm-12 cp_header_section">
                        <h2>
                            {{ __('Our Benefits') }}
                            <span class="cp_under_line" style="background-color: #e50000"></span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 cp_container_section">
                        <div class="container">
                            <div class="row">
                                <div class="cp_our_benefits_container">
                                    <div class="col-xs-12 col-sm-4 cp_our_benefit_item ">
                                        <div class="cp_our_benefit_item_container">
                                            <div class="cp_benefit_icon">
                                                <span style="background-color: #e50000"><i class="fa fa-child"></i></span>
                                            </div>
                                            <div class="cp_benefit_name">
                                                <h3>
                                                    {{ __('Why you’ll love to work here') }}
                                                </h3>
                                                <span class="under-line" style="background-color: #e50000"></span>
                                            </div>
                                            <div class="cp_benefit_description">
                                                <p>
                                                    {{ __('Contributing your talent to develop top class,business-transformative software products.') }}
                                                </p>
                                                <p>
                                                    {{ __('Working with the latest technology stacks.') }}
                                                </p>
                                                <p>
                                                    {{ __('Friendly, young, dynamic and open working environments.') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 cp_our_benefit_item ">
                                        <div class="cp_our_benefit_item_container">
                                            <div class="cp_benefit_icon">
                                                <span style="background-color: #e50000"><i class="fa fa-trophy"></i></span>
                                            </div>
                                            <div class="cp_benefit_name">
                                                <h3>
                                                    {{ __('COMPENSATION') }}
                                                </h3>
                                                <span class="under-line" style="background-color: #e50000"></span>
                                            </div>
                                            <div class="cp_benefit_description">
                                                <p>
                                                    {{ __('13th months salary.') }}
                                                </p>
                                                <p>
                                                    {{ __('Flexible and rewarding review policy for outstanding contributions.') }}
                                                </p>
                                                <p>
                                                    {{ __('Dedicated budget for staff training: technical, soft skills,English, Korean classes.') }}
                                                </p>
                                                <p>
                                                    {{ __('Opportunity to attend training courses in Korea when enough seniority year.') }}
                                                </p>
                                                <p>
                                                    {{ __('Telephone allowance.') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 cp_our_benefit_item ">
                                        <div class="cp_our_benefit_item_container">
                                            <div class="cp_benefit_icon">
                                                <span style="background-color: #e50000"><i class="fa fa-gift"></i></span>
                                            </div>
                                            <div class="cp_benefit_name">
                                                <h3>
                                                    {{ __('WE CARE ALL YOUR EVENTS') }}
                                                </h3>
                                                <span class="under-line" style="background-color: #e50000"></span>
                                            </div>
                                            <div class="cp_benefit_description">
                                                <p>
                                                    {{ __('Birthday gift') }}
                                                </p>
                                                <p>
                                                    {{ __('Marriage Gift') }}
                                                </p>
                                                <p>
                                                    {{ __('Baby born Gift') }}
                                                </p>
                                                <p>
                                                    {{ __('Holiday and Tet Gift') }}
                                                </p>
                                                <p>
                                                    {{ __('Funeral support') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 cp_our_benefit_item ">
                                        <div class="cp_our_benefit_item_container">
                                            <div class="cp_benefit_icon">
                                                <span style="background-color: #e50000"><i class="fa fa-file-image-o"></i></span>
                                            </div>
                                            <div class="cp_benefit_name">
                                                <h3>
                                                    {{ __('LEAVE') }}
                                                </h3>
                                                <span class="under-line" style="background-color: #e50000"></span>
                                            </div>
                                            <div class="cp_benefit_description">
                                                <p>
                                                    {{ __('12 days of annual leave') }}
                                                </p>
                                                <p>
                                                    {{ __('+ 1 days of Establishment Ceremony Date.') }}
                                                </p>
                                                <p>
                                                    {{ __('Flexible policy for leave application.') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 cp_our_benefit_item ">
                                        <div class="cp_our_benefit_item_container">
                                            <div class="cp_benefit_icon">
                                                <span style="background-color: #e50000"><i class="fa fa-user-md"></i></span>
                                            </div>
                                            <div class="cp_benefit_name">
                                                <h3>
                                                    {{ __('HEALTHCARE') }}
                                                </h3>
                                                <span class="under-line" style="background-color: #e50000"></span>
                                            </div>
                                            <div class="cp_benefit_description">
                                                <p>
                                                    {{ __('Medical Check- Up: Regular check -ups for employees') }}
                                                </p>
                                                <p>
                                                    {{ __('Health Insurance for employees') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 cp_our_benefit_item ">
                                        <div class="cp_our_benefit_item_container">
                                            <div class="cp_benefit_icon">
                                                <span style="background-color: #e50000"><i class="fa fa-glass"></i></span>
                                            </div>
                                            <div class="cp_benefit_name">
                                                <h3>
                                                    {{ __('Team building activities') }}
                                                </h3>
                                                <span class="under-line" style="background-color: #e50000"></span>
                                            </div>
                                            <p>
                                                {{ __('Monthly Team Staff Meeting . ‘HOP’ Date in monthly. Annual outdoor Team building.') }}
                                            </p>
                                            <p>
                                                {{ __('Annual outdoor Team building.') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>