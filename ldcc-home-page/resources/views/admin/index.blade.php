<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="96x96" href="img/LDCC_LOGO.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>LDCC Management</title>
    <!-- Bootstrap core CSS     -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--  Fonts and icons     -->
    <!--
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet">
    <link type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    -->
    <link href="/css/themify-icons.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        input[type="password"]::placeholder {
            color: #66615b;
        }
        /* IE */
        input[type="password"]:-ms-input-placeholder {
            color: #66615b;
        }
        /* Edge */
        input[type="password"]::-ms-input-placeholder {
            color: #66615b;
        }
    </style>
    <?php
        //dd($userInfo);
    ?>
    <script type="text/javascript">
        var user_curent_info = {
            'id': <?php echo $userInfo->id; ?>,
            'name': "<?php echo $userInfo->name; ?>",
            'email': "<?php echo $userInfo->email; ?>",
            'status': <?php echo $userInfo->status; ?>,
            'type': <?php echo $userInfo->type; ?>,
            'thumbnail': "<?php echo $userInfo->thumbnail; ?>"
        };
        // console.log(user_curent_info);
    </script>
    <script src="/ckeditor/ckeditor.js"></script>
</head>
<body>
<form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<div class="wrapper" id="app">

</div>
<script src="{{ mix('/js/app.js') }}"></script>
<!--  Google Maps Plugin    -->


{{--<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAamVCoyQ4AuvBpxVRMs9P-HFkfPVQj0Kw" type="text/javascript"></script>--}}

</body>
</html>
