<?php //echo \App\Lib\BHelp::getConfigSetting('MAIN_MENU')?>
<div class="main-menu">
    <div class="logo">
        <a href="{{url('/')}}"><img src="<?php echo \App\Lib\BHelp::getConfigSetting('WEB_LOGO')?>" alt=""></a>
    </div>
    <div class="menu">
        <ul>
            <li>
            <a href="{{url('/')}}" class="{{ (Request::is('/') ? 'active' : '') }} home"> <i class="fa fa-home"></i> </a>
            </li>
            <?php //print_r(\Request);die; ?>
            <?php $menu =  \App\Lib\BHelp::getMenu();?>
            <?php foreach ($menu as $key => $value) : ?>
                <?php if(empty($value['sub'])): ?>
                    <li><a href="{{$value['link']}}" class="{{ (Request::is($value['url']) ? 'active' : '') }} {{$value['url']}}">{{$value['name']}}</a></li>
                <?php else: ?>
                    <li class="has-submenu">
                        <a href="{{$value['link']}}" class="{{ (Request::is($value['url']) ? 'active' : '') }} {{$value['url']}}">{{$value['name']}}</a>
                        <i class="fa fa-angle-down"></i>
                        <ul class="sub-menu" >
                            <?php foreach ($value['sub'] as $key1 => $value1) : ?>
                            <li><a href="{{$value1['link']}}" class="{{ (Request::is($value1['url']) ? 'active' : '') }} {{$value1['url']}}">{{$value1['name']}}</a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php endif; ?>
                
            <?php endforeach; ?>

            
            <?php if(session()->has('advisor') || session()->has('customer')):?>
                <?php if(session()->has('advisor')):?>
                    <li><a href="/mypage" class="{{ (Request::is('mypage') ? 'active' : '') }} mypage">Trang cá nhân</a></li>
                <?php endif;?>
                <li><a href="/logout">Đăng xuất</a></li>
            <?php else:?>
                <li class="mobile"><a href="#" data-toggle="modal" data-target="#login_form">Đăng nhập</a></li>
                {{-- <li class="mobile"><a href="#" data-toggle="modal" data-target="#register_form">Tạo tài khoản</a></li> --}}
                <li class="mobile">
                    <a href="#"  data-toggle="modal" data-target="#register_form"><?php echo \App\Lib\BHelp::getConfigSetting('MENU_HEDER_REGISTER_TITLE')?></a>
                </li>
                <li class="desktop">
                    <a href="#" data-toggle="modal" data-target="#login_form" class="login btn-border">Đăng nhập
                        <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-bottom: -2px;">
                            <path d="M11.9992 5.71501H11.4267V5.1425C11.4233 2.30341 9.12325 0.00334798 6.28416 0C3.44507 0.00334798 1.14501 2.30341 1.14166 5.1425V5.71501H0.572505C0.257795 5.71501 0 5.96946 0 6.28752V15.4309C0 15.7456 0.254447 16.0034 0.572505 16.0034H11.9992C12.3139 16.0034 12.5717 15.7489 12.5717 15.4309V6.28417C12.5717 5.96946 12.3139 5.71501 11.9992 5.71501ZM2.28667 5.1425C2.28667 2.93283 4.07784 1.14166 6.28751 1.14166C8.49718 1.14166 10.2883 2.93283 10.2883 5.1425V5.71501H2.28667V5.1425ZM11.4267 14.855H1.14166V6.85667H11.4267V14.855Z" fill="#1F3FCC"/>
                            <path d="M7.90106 9.71248C7.66 9.02614 7.01049 8.56747 6.28399 8.57082C5.33986 8.56747 4.57317 9.33416 4.56982 10.2783C4.56982 11.0048 5.02515 11.6543 5.71148 11.8954V13.1442C5.71148 13.4589 5.96593 13.7167 6.28399 13.7167C6.60204 13.7167 6.85649 13.4622 6.85649 13.1442V11.8954C7.74705 11.5806 8.21576 10.603 7.90106 9.71248ZM6.28399 10.8575C5.96928 10.8575 5.71148 10.603 5.71148 10.285C5.71148 9.96692 5.96593 9.71248 6.28399 9.71248C6.60204 9.71248 6.85649 9.96692 6.85649 10.285C6.85649 10.603 6.60204 10.8575 6.28399 10.8575Z" fill="#1F3FCC"/>
                        </svg>
                    </a>
                </li>
                <li class="desktop register ">
                    <a href="#"  data-toggle="modal" data-target="#register_form" class="btn-linear"><?php echo \App\Lib\BHelp::getConfigSetting('MENU_HEDER_REGISTER_TITLE')?></a>
                </li>
                
            <?php endif;?>
        </ul>
    </div>
    <div class="mobile toggle-menu">
        <ul>
            <li><a href="#" data-toggle="modal" data-target="#search_form"><i class="fa fa-search"></i></a></li>
            <li><a href="#" class="open-menu"><i class="fa fa-bars"></i></a></li>
        </ul>
    </div>
</div>
<?php if(session()->has('advisor') || session()->has('customer')):?>
    
<?php else:?>
    @include('partial.frontend.dialog.login-form')
    @include('partial.frontend.dialog.register-form')
    @include('partial.frontend.dialog.search-from')
<?php endif;?>