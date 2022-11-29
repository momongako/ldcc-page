<?php
    //if(\App\Lib\BHelp::getConfigSetting('MENU')){
    //    echo \App\Lib\BHelp::getConfigSetting('MENU');
    //}
?>
<header class=wgl-theme-header id="header" style="display: block!important;">
    <!--    Start Navbar    -->
    <div class="wgl-site-header" >
        <div class="container-wrapper menu-container-wrapper">
            <div class="groove-row row-menu">
                <div class="groove-element groove-column groove-col-menu-1">
                    <div class=groove-image>
                        <div class=wgl-logotype-container>
                            <a id="logo_changle" href={{route('home')}}>
                                <img width=150 heigth=53 alt
                                     data-src=https://www.ldcc.co.kr/img/common/pc/logo.png
                                     class="default_logo lazyload"
                                     srcset="{{ asset('frontend/assets/image/logo_eng_w.png')}}"
                                     src="{{ asset('frontend/assets/image/logo_eng_w.png')}}">
                                <noscript>
                                    <img
                                            class="default_logo lazy" width=150 heigth=53
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E"
                                            data-src=https://www.ldcc.co.kr/img/common/pc/logo.png
                                            alt>
                                </noscript>
                            </a>
                            <a id="logo_fix" style="display: none" href=#>
                                <img width=150 heigth=53 alt
                                     data-src=https://www.ldcc.co.kr/img/common/pc/logo.png
                                     class="default_logo lazyload"
                                     srcset="{{asset('frontend/assets/image/logo2_eng.png')}}"
                                     src="{{asset('frontend/assets/image/logo2_eng.png')}}">
                                <noscript>
                                    <img
                                            class="default_logo lazy" width=150 heigth=53
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20150%20150'%3E%3C/svg%3E"
                                            data-src={{ asset('frontend/assets/image/logo2_eng.png')}}
                                            alt>
                                </noscript>
                            </a>
                            <script >
                              window.onscroll = function () {
                                scrollFunction()
                              }
                              function  scrollFunction() {
                                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                                  document.getElementById("logo_changle").style.display='none';
                                  document.getElementById("logo_fix").style.display = "block";

                                } else  {
                                  document.getElementById("logo_changle").style.display = "block";
                                  document.getElementById("logo_fix").style.display='none';
                                }

                              }
                              jQuery(window).scroll(function () {
                                  var scroll = jQuery(window).scrollTop();
                                  if (scroll >= 50) {
                                  jQuery(".wgl-site-header").addClass("sticky_active");
                              } else {
                                  jQuery(".wgl-site-header").removeClass("sticky_active");
                              }
                              });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="groove-element groove-column groove-col-menu-2 hiden-tablet">
                    <div id=mega-menu-wrap-main_menu class=mega-menu-wrap>
                        <div class=mega-menu-toggle>
                            <div class=mega-toggle-blocks-left>

                            </div>

                            <div class=mega-toggle-blocks-center>

                            </div>
                            <div class=mega-toggle-blocks-right>
                                <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0'
                                     id=mega-toggle-block-0>
                                    <button
                                            aria-label="Toggle Menu"
                                            class="mega-toggle-animated mega-toggle-animated-slider" type=button
                                            aria-expanded=false>
                                      <span class=mega-toggle-animated-box>
                                         <span class=mega-toggle-animated-inner></span>
                                      </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul id=mega-menu-main_menu class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js"
                            data-event=hover data-effect=fade_up data-effect-speed=200 data-effect-mobile=disabled
                            data-effect-speed-mobile=0 data-panel-width=body data-panel-inner-width=1140px
                            data-mobile-force-width=false data-second-click=go data-document-click=collapse
                            data-vertical-behaviour=standard data-breakpoint=768 data-unbind=true
                            data-mobile-state=collapse_all data-hover-intent-timeout=300
                            data-hover-intent-interval=100>
                            <li class='mega-menu-process mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-megamenu mega-menu-item-has-children mega-align-bottom-left mega-menu-megamenu mega-hide-arrow mega-has-icon mega-icon-right mega-hide-sub-menu-on-mobile mega-menu-item-4576 menu-process' id=mega-menu>
                                <a class=mega-menu-link href={{route('home')}} tabindex=0>
                                    {{ __('Home') }}
                                </a>
                            </li>
                            <!--                            About    -->
                            <li class='mega-menu-process mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-megamenu mega-menu-item-has-children mega-align-bottom-left mega-menu-megamenu mega-hide-arrow mega-has-icon mega-icon-right mega-hide-sub-menu-on-mobile mega-menu-item-4576 menu-process' id=mega-menu>
                                <a class="dashicons-arrow-down mega-menu-link"
                                   href="{{ route('about.overview') }}" aria-haspopup=true
                                   aria-expanded=false tabindex=0>
                                    {{ __('About us') }}
                                    <span class=mega-indicator></span>
                                </a>
                                <ul
                                        class=mega-sub-menu>
                                    <li
                                            class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-10'
                                            id=mega-menu-item-text-10>
                                    </li>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-11'>
                                        <div class=textwidget>
                                            <div class=mega-menu-block-2>
                                                <div
                                                        class="custom-mega-menu mega-border"><p
                                                            style="margin-bottom: 15px;">
                                                        <a href="{{ route('about.overview') }}" #overview
                                                           rel=noopener>
                                                            {{__('Overview')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <div
                                                        class="custom-mega-menu mega-border"><p
                                                            class=proces-anchor style="margin-bottom: 15px;"><a
                                                                href={{route('about.vision')}}>
                                                    {{__('Vision')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class=custom-mega-menu>
                                                    <p class=proces-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('about.ceo')}}>
                                                            {{__('CEO message')}}
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-12' id=mega-menu-item-text-12>
                                        <div class=textwidget>
                                            <div class=mega-menu-block-3>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=proces-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('about.history')}}>
                                                            {{__('Our history')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=proces-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('about.partnership')}}>{{__('Partnership')}}</a>
                                                    </p>
                                                </div>
                                                <div class=custom-mega-menu>
                                                    <p class=proces-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('about.new_event')}}>{{__('News & Events')}}</a>
                                                    </p></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--                            Services       -->
                            <li class='mega-menu-services mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-megamenu mega-menu-item-has-children mega-align-bottom-left mega-menu-megamenu mega-hide-arrow mega-has-icon mega-icon-right mega-hide-sub-menu-on-mobile mega-menu-item-4360 menu-services'
                                id=mega-menu-item-4360>
                                <a class="dashicons-arrow-down mega-menu-link"
                                   href={{route('services.application')}} aria-haspopup=true aria-expanded=false
                                   tabindex=0>
                                    {{__('Services')}}
                                    <span class=mega-indicator></span>
                                </a>
                                <ul class=mega-sub-menu>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-7' id=mega-menu-item-text-7>

                                    </li>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-8'
                                        id=mega-menu-item-text-8>
                                        <div class=textwidget>
                                            <div class=mega-menu-block-2>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=services-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('services.application')}}
                                                            rel=noopener>
                                                            {{__('Application development')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="custom-mega-menu mega-border">
                                                    <p style="margin-bottom: 15px;" >
                                                        <a href={{route('services.system')}}  rel=noopener>
                                                            {{__('System management')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="custom-mega-menu mega-border">
                                                    <p style="margin-bottom: 15px;">
                                                        <a href={{route('services.offshore')}} rel=noopener>
                                                            {{__('IT offshore')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <p>
                                                    <a href={{route('services.erp')}}  rel=noopener>
                                                        {{__('ERP implementation')}}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-9'
                                        id=mega-menu-item-text-9>
                                        <div class=textwidget>
                                            <div class=mega-menu-block-3>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=services-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('services.cloud')}} rel=noopener>
                                                            {{__('Cloud transformation')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="custom-mega-menu mega-border">
                                                    <p>
                                                        <a href={{route('services.data')}}  rel=noopener>
                                                            {{__('Data Center')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <p><a href={{route('services.security')}}
                                                            rel=noopener>
                                                    {{__('Security')}}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--                            Services   End    -->
                            <!--                            Products       -->
                            <li
                                    class='mega-menu-process mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-megamenu mega-menu-item-has-children mega-align-bottom-left mega-menu-megamenu mega-hide-arrow mega-has-icon mega-icon-right mega-hide-sub-menu-on-mobile mega-menu-item-4576 menu-process'
                                    id=mega-menu-item-4576><a
                                        class="dashicons-arrow-down mega-menu-link"
                                        href={{route('products.api_gateway')}} aria-haspopup=true
                                        aria-expanded=false tabindex=0>{{__('Products')}}<span
                                            class=mega-indicator></span></a>
                                <ul
                                        class=mega-sub-menu>
                                    <li
                                            class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-10'
                                            id=mega-menu-item-text-10>
                                    </li>
                                    <li
                                            class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-11'
                                            id=mega-menu-item-text-11>
                                        <div class=textwidget>
                                            <div class=mega-menu-block-2>
                                                <div class="custom-mega-menu mega-border">
                                                    <p style="margin-bottom: 15px;">
                                                        <a href={{route('products.api_gateway')}}
                                                           rel=noopener>
                                                            {{__('API Gateway')}}
                                                        </a>
                                                    </p>
                                                </div>

                                                <div
                                                        class="custom-mega-menu mega-border"><p
                                                            style="margin-bottom: 15px;">
                                                        <a href={{route('products.saas')}}>
                                                            {{__('SaaS')}}
                                                        </a>
                                                    </p>
                                                </div>


                                            </div>
                                        </div>
                                    </li>
                                    <li
                                            class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-12'
                                            id=mega-menu-item-text-12>
                                        <div
                                                class=textwidget>
                                            <div
                                                    class=mega-menu-block-3>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=proces-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('products.building')}}>
                                                            {{__('Smart building management')}}
                                                        </a>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                    <li
                                            class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-12'
                                            id=mega-menu-item-text-12>
                                        <div
                                                class=textwidget>
                                            <div
                                                    class=mega-menu-block-3>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=proces-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('products.parking')}}>
                                                            {{__('Smart Parking')}}
                                                        </a>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <!--                               Case study     -->
                            <li
                                    class='mega-menu-about-us mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-megamenu mega-menu-item-has-children mega-align-bottom-left mega-menu-megamenu mega-hide-arrow mega-has-icon mega-icon-right mega-hide-sub-menu-on-mobile mega-menu-item-5584 menu-about-us'
                                    id=mega-menu-item-5584><a
                                        class="dashicons-arrow-down mega-menu-link"
                                        href={{route('case-study')}}
                                        aria-haspopup=true aria-expanded=false tabindex=0>{{__('Case study')}}<span
                                            class=mega-indicator></span></a>
                                <ul class="mega-sub-menu d-flex justify-content-end">
                                    <li
                                            class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-14'
                                            id=mega-menu-item-text-14>
                                    </li>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-15'
                                        id=mega-menu-item-text-15>
                                        <div class="textwidget p-3">
                                            <div class=mega-menu-block-2>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=proces-anchor style="margin-bottom: 15px;">

                                                        <a href={{ route('case-study')}}
                                                           rel=noopener> {{__('Overview of our case studies')}}
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </li>
                            <!--                            Carerr  -->
                            <li class='mega-menu-process mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-megamenu mega-menu-item-has-children mega-align-bottom-left mega-menu-megamenu mega-hide-arrow mega-has-icon mega-icon-right mega-hide-sub-menu-on-mobile mega-menu-item-4576 menu-process'
                                id=mega-menu-item-4576>
                                <a class="dashicons-arrow-down mega-menu-link"
                                   href={{route('career.opportunity')}} aria-haspopup=true
                                   aria-expanded=false tabindex=0>
                                    {{__('Career')}}
                                    <span class=mega-indicator></span>
                                </a>
                                <ul
                                        class=mega-sub-menu>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-10'
                                        id=mega-menu-item-text-10>
                                    </li>
                                    <li
                                            class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-11'
                                            id=mega-menu-item-text-11>
                                        <div class=textwidget>
                                            <div class=mega-menu-block-2>
                                                <!-- todo code-->
                                            </div>
                                        </div>
                                    </li>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-12' id=mega-menu-item-text-12>
                                        <div class="textwidget p-3">
                                            <div class=mega-menu-block-3>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=proces-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('career.culture')}}>
                                                            {{__('Our culture')}}
                                                        </a>
                                                    </p>
                                                </div>
                                                <div class="custom-mega-menu mega-border">
                                                    <p class=proces-anchor style="margin-bottom: 15px;">
                                                        <a href={{route('career.opportunity')}}>
                                                            {{__('Career opportunity')}}
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>






                            <li class='mega-menu-process
                                      mega-menu-item
                                      mega-menu-item-type-post_type
                                      mega-menu-item-object-page
                                      mega-menu-megamenu
                                      mega-menu-item-has-children
                                      mega-align-bottom-left
                                      mega-menu-megamenu
                                      mega-hide-arrow
                                      mega-has-icon
                                      mega-icon-right
                                      mega-hide-sub-menu-on-mobile
                                      mega-menu-item-4576
                                      menu-process'
                                id=mega-menu-item-4576>
                                <a class="dashicons-arrow-down mega-menu-link"
                                   {{--href= aria-haspopup=true--}}
                                   aria-expanded=false tabindex=0>
                                    <?php
                                        $lang = "EN";
                                        if (App::getLocale() == "ko"){
                                            $lang = "KR";
                                        }
                                        echo $lang;
                                    ?>
                                    <span class=mega-indicator></span>
                                </a>
                                <ul
                                        class=mega-sub-menu>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-10'
                                            id=mega-menu-item-text-10>

                                    </li>
                                    <li
                                            class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-11'
                                            id=mega-menu-item-text-11>
                                        <div class=textwidget>
                                            <div class=mega-menu-block-2>
                                                <!-- todo code-->
                                            </div>
                                        </div>
                                    </li>
                                    <li class='mega-menu-item mega-menu-item-type-widget widget_text mega-menu-columns-1-of-3 mega-menu-item-text-12' id=mega-menu-item-text-12>
                                        <div class=textwidget>
                                            <div class=mega-menu-block-3>
                                                <div class="custom-mega-menu mega-border changeLangKo">
                                                    <p class=proces-anchor">
                                                        <a style="display: flex; align-items: center; gap: 30px;justify-content: center;margin-left: 5px"
                                                           href="#">
                                                            <img src="{{ asset('frontend/assets/image/Flag_of_South_Korea.svg.png')}}"
                                                                 alt=""
                                                                 width="40"
                                                                 height="40"
                                                            >
                                                            Korea
                                                        </a>
                                                    </p>
                                                </div>
                                                {{--<div class="custom-mega-menu mega-border">--}}
                                                    {{--<p class=proces-anchor">--}}
                                                        {{--<a style="display: flex; align-items: center; gap: 30px;justify-content: center"--}}
                                                           {{--href="#">--}}
                                                            {{--<img src="https://cf.shopee.vn/file/8b814fa66a3676d9f1090a4e8df515ba"--}}
                                                                 {{--alt=""--}}
                                                                 {{--width="35"--}}
                                                                 {{--height="35"--}}
                                                                 {{--style="margin-left: 30px"--}}
                                                            {{-->--}}
                                                            {{--Việt Nam--}}
                                                        {{--</a>--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                                <div class="custom-mega-menu mega-border changeLangEn">
                                                    <p class=proces-anchor">
                                                        <a style="display: flex; align-items: center; gap: 30px;justify-content: center"
                                                           href="#">
                                                            <img src="{{ asset('frontend/assets/image/Flag_EN.jpg')}}"
                                                                 alt=""
                                                                 width="40"
                                                                 height="40"
                                                                 style="margin-left: 15px"
                                                            >
                                                            English
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>


                                {{--<select class="form-control changeLang">--}}
                                    {{--<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>--}}
                                    {{--<option value="ko" {{ session()->get('locale') == 'ko' ? 'selected' : '' }}>Korea</option>--}}
                                {{--</select>--}}

                            </li>






                            <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-align-bottom-left mega-menu-flyout mega-hide-arrow mega-hide-text mega-menu-item-6669'
                                id=mega-menu-item-6669>
                                <a class=mega-menu-link
                                   href=https://www.linkedin.com/company/lotte-data-communication-vietnam/mycompany/  tabindex=0
                                   aria-label=Linkedin>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="groove-element groove-column groove-col-menu-2 only-mobile-tablet">
                    <a class=btn-contactus href={{route('contact')}}>{{__('Contact Us')}}</a></div>
            </div>
        </div>
        <div class="container-wrapper menu-fixed-mobile menu-container-wrapper only-mobile-tablet">
            <div class=menu-bottom>

                <!--                Mobile          -->
                <ul style="height: 60px">
                    <li class=menu-homepage style="display: flex; justify-content: center; align-items: center;">
                        <a href={{route('home')}}>
                            <img src="{{ asset('frontend/assets/image/Mobile/icons8-home-50.png')}}" width="30" height="30" alt="">
                        </a>
                    </li>

                    <li class="menu-process" style="display: flex; justify-content: center; align-items: center;">
                        <a href=#>
                            <img src="{{ asset('frontend/assets/image/Mobile/icons8-about-48.png')}}" alt="" width="30"height="30">
                        </a>
                        <div class=more-show>
                            <h3>Our About</h3>
                            <ul>
                                <li class=menu-process-tab1>
                                    <a href="{{ route('about.overview')}}">
                                        <span class=menu-icon><i class='bx bxl-stack-overflow'></i></span>
                                        <span>{{__('Overview')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab2>
                                    <a href={{route('about.vision')}}>
                                        <span class=menu-icon><i class='bx bx-trending-up'></i></span><span>{{__('Vision')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab3>
                                    <a href={{route('about.ceo')}}>
                                        <span class=menu-icon><i class='bx bx-group'></i></span>
                                        <span>{{__('CEO message')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab4>
                                    <a href={{route('about.history')}}>
                                        <span class=menu-icon><i class='bx bx-history'></i></span>
                                        <span>{{__('Our history')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab5>
                                    <a href={{route('about.partnership')}}>
                                        <span class=menu-icon><i class='bx bxs-group'></i></span>
                                        <span>{{__('Partnership')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab5>
                                    <a href={{route('about.new_event')}}>
                                        <span class=menu-icon><i class='bx bx-calendar-event'></i></span>
                                        <span>{{__('News & Events')}}</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="menu-process" style="display: flex; justify-content: center; align-items: center;">
                        <a href=#>
                            <img src="{{ asset('frontend/assets/image/Service/icons8-service-6.png')}}" alt="" width="30"height="30">
                        </a>
                        <div class=more-show>
                            <h3>Our Services</h3>
                            <ul>
                                <li class=menu-process-tab1>
                                    <a href={{route('services.application')}}>
                                        <span class=menu-icon>
                                            <i class='bx bx-code-alt'></i>
                                        </span>
                                        <span>{{__('Application development')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab2>
                                    <a href={{route('services.system')}}>
                                        <span class=menu-icon>
                                            <i class='bx bx-cog'></i>
                                        </span>
                                        <span>{{__('System management')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab3>
                                    <a href={{route('services.offshore')}}>
                                        <span class=menu-icon style="color: #888787"><i class='bx bx-buildings'></i></span>
                                        <span>{{__('IT offshore')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab4>
                                    <a href={{route('services.erp')}}>
                                        <span class=menu-icon>
                                            <img src="{{ asset('frontend/assets/image/Service/service_02.png')}}" width="20" height="20" alt="">
                                        </span>
                                        <span>{{__('ERP implementation')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab5>
                                    <a href={{route('services.cloud')}}>
                                        <span class=menu-icon><i class='bx bx-cloud'></i></span>
                                        <span>{{__('Cloud transformation')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab5>
                                    <a href={{route('services.data')}}>
                                        <span class=menu-icon style="color: #888787"><i class='bx bxs-data' ></i></span>
                                        <span>{{__('Data Center')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab5>
                                    <a href={{route('services.security')}}>
                                        <span class=menu-icon>
                                            <img src="{{ asset('frontend/assets/image/Service/service_03.png')}}" width="20" height="20" alt="">
                                        </span>
                                        <span>{{__('Security')}}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!--Blog -->

                    <li class="menu-process" style="display: flex; justify-content: center; align-items: center;">
                        <a href=#>
                            <img src="{{ asset('frontend/assets/image/Product/icons8-product-64.png')}}" alt="" width="30" height="30">
                        </a>
                        <div class=more-show>
                            <h3>Our Products</h3>
                            <ul>
                                <li class=menu-process-tab1>
                                    <a href={{route('products.api_gateway')}}>
                                        <span class=menu-icon>
                                            <img src="{{ asset('frontend/assets/image/Product/product_03.png')}}" width="20" height="20" alt="">
                                        </span>
                                        <span>{{__('API Gateway')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab2>
                                    <a href={{route('products.building')}}>
                                        <span class=menu-icon>
                                            <img src="{{ asset('frontend/assets/image/Product/product_02.png')}}" width="20" height="20" alt="">
                                        </span>
                                        <span>{{__('Smart building management')}}</span>
                                    </a>
                                </li>
                                <li class=menu-process-tab3>
                                    <a href={{route('products.saas')}}>
                                        <span class=menu-icon>
                                            <img src="{{ asset('frontend/assets/image/Product/product_01.png')}}" width="20" height="20" alt="">
                                        </span>
                                        <span>{{__('SaaS')}}</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class=menu-services  style="display: flex; justify-content: center; align-items: center;">
                        <a href="#">
                            <img src="{{ asset('frontend/assets/image/Mobile/icons8-case-study-64.png')}}" alt="" width="30"height="30">
                        </a>
                        <div class=more-show>
                            <h3>{{__('Case Study')}}</h3>
                            <ul>
                                <div class="wgl-accordion icon-custom" data-type=toggle>
                                    <div class=wgl-accordion_panel>
                                        <div class="wgl-accordion_header groove-accordion_header">
                                            <li class="childmenu menu-services-tab2">
                                                <a href={{route('home')}}>
                                                    <span class=menu-icon></span><span>{{__('Products')}}</span>
                                                </a>
                                            </li>
                                            <i class="wgl-accordion_icon flaticon flaticon-next contact-flaticon-next"></i>
                                        </div>
                                        <div class=wgl-accordion_content style=display:none;>
                                            <div class data-element_type=widget data-widget_type=image-box.default>
                                                <a class="menu-child overview"
                                                   href={{route('products.api_gateway')}}>
                                                    {{__('API Gateway')}}
                                                </a>
                                                <a class="menu-child software-consultancy"
                                                   href={{route('products.building')}}>{{__('Smart building management')}}</a>
                                                <a class="menu-child team-augmentation-full-team-outsourcing"
                                                   href={{route('products.saas')}}>{{__('SaaS')}}</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=wgl-accordion_panel>
                                        <div class="wgl-accordion_header groove-accordion_header">
                                            <li class="childmenu menu-services-tab1">
                                                <a href={{route('home')}}>
                                                    <span class=menu-icon>
                                                        <i class='bx bx-server'></i>
                                                    </span>
                                                    <span>{{__('Services')}}</span>
                                                </a>
                                            </li>
                                            <i class="wgl-accordion_icon flaticon flaticon-next contact-flaticon-next"></i>
                                        </div>
                                        <div class=wgl-accordion_content style=display:none;>
                                            <div class data-element_type=widget data-widget_type=image-box.default>
                                                <a class="menu-child overview"
                                                   href={{route('services.application')}}>
                                                    {{__('Application development')}}</a>
                                                <a class="menu-child build-ios-android"
                                                   href={{route('services.erp')}}>{{__('ERP implementation')}}
                                                </a>
                                                <a
                                                        class="menu-child react-native"
                                                        href={{route('services.security')}}>{{__('Security')}}</a>
                                                <a
                                                        class="menu-child custom-app"
                                                        href={{route('services.system')}}>
                                                    {{__('System management')}}</a>
                                                <a class="menu-child web-app"
                                                        href={{route('services.cloud')}}>
                                                    {{__('Cloud transformation')}}
                                                </a>
                                                <a class="menu-child product-dev"
                                                        href={{route('services.offshore')}}>{{__('IT offshore')}}</a>
                                                <a class="menu-child iot-page"
                                                        href={{route('services.data')}}>
                                                    {{__('Data Center')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </li>

                    <!--                    Mobile   -->
                    <li class="menu-process" style="display: flex; justify-content: center; align-items: center;">
                        <a href=#>
                            <img src="{{ asset('frontend/assets/image/Mobile/icons8-view-more-64.png')}}" height="30" width="30" alt="">
                        </a>
                        <div class=more-show>
                            <h3>More</h3>
                            <ul>
                                <li class=menu-about-us>
                                    <a href="{{ route('about') }}">
                                        <span class=menu-icon></span>
                                        <span>About Us</span>
                                    </a>
                                </li>
                                <!-- <li class=menu-wmud>
                                     <a href=what-makes-us-different/index.html>
                                         <span class=menu-icon></span><span>What Makes Us Different?</span>
                                     </a>
                                 </li>-->
                                <li class=menu-contact-us>
                                    <a href=contact_us_ldcc_page.html>
                                        <span class=menu-icon></span>
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                                <li class=menu-casestudies>
                                    <a href={{route('case-study')}}>
                                        <span class=menu-icon></span>
                                        <span>Case Studies</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!--                Mobile      -->
            </div>
        </div>
    </div>

    <!--    End NavBar    -->
</header>
<script type="text/javascript">

  var url = "{{ route('changeLang') }}";

  $(".changeLangEn").click(function(){
    window.location.href = url + "?lang="+ 'en';
  });

  $(".changeLangKo").click(function(){
    window.location.href = url + "?lang="+ 'ko';
  });

</script>
