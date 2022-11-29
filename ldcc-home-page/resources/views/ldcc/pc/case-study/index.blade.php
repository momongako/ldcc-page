<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <a href="index.html" class=home>{{__('Home')}}</a>
                        <span class=divider></span>
                        <span class=current>{{__('Case Studies')}}</span>
                    </div>
                </div>
                <h2 class="page-header_title" style="color: #000000; font-size: 36px; line-height: 36px;">{{__('Case Studies')}}</h2>
            </div>
        </div>
    </div>
</div>
<main id=main class="site-main">
    <style>
        @media only screen and (max-width: 600px) {
            select#exampleFormControlSelect1 {
                width: 200px;
            }
            select#exampleFormControlSelect1\ select2 {
                width: 200px;
            }
            .container.row.p-5 {
                display: block;
            }
        }
    </style>
    <script>

        // filter category case study

        $(document).ready(function (event) {
            $('.boxselect').change(function () {
                $this = $(this);
                $result = $this.val();
            });

            $('.filter_box2').change(function () {
                $thi = $(this);
                $result2 = $thi.val();
            });

            $('.filter_box3').click(function () {
                $sum = $result + $result2;
                $('.components').hide();
                $('.' + $sum).show();

            });


        });
        // clear
        $(document).ready(function (e) {
            $('.filter_box4').click(function () {
                $this = $(this);
                $('.components').hide();
                $('.' + $this.val()).show();
            });
        });
        // remove option
        $('#select1').on('change', function() {
            var value = $(this).val();
            $('#select1, #select2').find('option[value!=""]').removeAttr('disabled').removeAttr('hidden');
            $(this).find('option[value="' + value + '"]').attr('disabled', 'disabled');
            $('#select2').find('option[value="' + value + '"]').attr('hidden', 'hidden');
        })

    </script>
    <script>
        $(document).ready(function (event)
        {
            $('.boxselect').change(function ()
            {
                $this = $(this);
                $('.components').hide();
                $('.' + $this.val()).show();
            });
        });


        $(document).ready(function (event) {
            $('.filter_box2').change(function () {
                $this = $(this);
                $('.components').hide();
                $('.' + $this.val()).show();
            });
        });
    </script>
    <section class="porfolio-block groove-section groove-section-boxed">
        <div class="groove-container groove-column-gap-default">
            <div class="groove-row blog-grid-custom">
                <div class="container row  p-5">
                    <div>
                        <h3> Filter ...</h3>
                    </div>
                    <div class="col-md-3">

                        <select name="boxes_one" class="boxselect form-control form-control-lg" id="exampleFormControlSelect1"
                                style="border-radius: 5px !important;">
                            <option value="all" selected disabled hidden>Industry</option>
                            <option value="Tourism">Tourism</option>
                            <option value="Financial">Financial service</option>
                            <option value="Media">Media</option>
                            <option value="IT">IT</option>
                            <option value="Ecommerce">Ecommerce</option>
                            <option value="FB">F&B</option>
                            <option value="Construction">Construction</option>
                            <option value="Logistics">Logistics</option>
                            <option value="FoodBeverage">Food & Beverage</option>
                            <option value="Retail">Retail</option>
                            <option value="Property">Property management</option>
                            <option value="Real">Real estate</option>
                            <option value="Hospitality">Hospitality</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="boxes_two" required class="filter_box2 form-control form-control-lg" id="exampleFormControlSelect1 select2" style="border-radius: 5px !important;">
                            <option value="all" selected disabled hidden>Service</option>
                            <option value="App">App development</option>
                            <option value="Web">Web development</option>
                            <option value="Data">Data Processing</option>
                            <option value="System">System Management</option>
                            <option value="Offshore">Offshore</option>
                            <option value="Data-center">Data center</option>
                            <option value="IT-consulting">IT consulting</option>
                            <option value="IBS">IBS</option>
                            <option value="Retails">Retail</option>
                            <option value="System-Integration">System Integration</option>
                            <option value="API-Gateway">API Gateway</option>
                            <option value="NAPAS">NAPAS</option>
                            <option value="Core-banking">Core banking</option>
                            <option value="Cloud-Transformation">Cloud Transformation</option>
                            <option value="Ecommerce-Development">Ecommerce Development</option>
                            <option value="Application-Development">Application Development</option>
                            <option value="ERP-Implementation">ERP Implementation</option>
                            <option value="Data-warehouse">Data warehouse</option>
                            <option value="Microsoft">Microsoft Office 365</option>
                            <option value="System-development">System development</option>
                        </select>
                    </div>
                    <div class="d-flex">
                        <div>
                            <button style="margin:unset; padding: unset; width: 100px;height: 36px;background-color: #1e7e34"
                                    class="filter_box3 btn btn-outline-primary"
                                    name="box_3"
                                    value="all"
                            >
                                Refresh
                            </button>
                        </div>

                        <div class="pl-2">
                            <button style="margin:unset; padding: unset; width: 50px;height: 36px"
                                    class="filter_box4 btn btn-primary"
                                    name="box_4"
                                    value="all"
                            >
                                <i class='bx bx-reply-all'></i>
                            </button>
                        </div>
                    </div>
                </div>
{{--card--}}

                @include('ldcc.pc.case-study.studyCard')
{{--end card--}}
            </div>
        </div>
    </section>
</main>