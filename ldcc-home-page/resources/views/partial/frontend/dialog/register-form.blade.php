<div id="register_form" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Đăng ký</h4>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <a target="_blank" href="<?php echo \App\Lib\BHelp::getConfigSetting('API_REGISTER_CUSTOMER_LINK')?>" class="btn-hot" >Đăng ký khách hàng</a>
                    <a target="_blank" href="<?php echo \App\Lib\BHelp::getConfigSetting('API_REGISTER_ADVISOR_LINK')?>" class="btn-hot" >Đăng ký làm cố vấn</a>
                </div>
                {{-- <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs"> 
                    <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#register_customer" id="register_customer-tab" role="tab" data-toggle="tab" aria-controls="register_customer" aria-expanded="true"> 
                                <span class="text">Đăng ký tài khoản</span>
                            </a> 
                        </li> 
                        <li role="presentation" class="next">
                            <a href="#register_advisor" role="tab" id="register_advisor-tab" data-toggle="tab" aria-controls="register_advisor">
                                <span class="text">Đăng ký làm cố vấn</span>
                            </a> 
                        </li> 
                    </ul> 
                    <div id="myTabContent" class="tab-content"> 
                        <div role="tabpanel" class="tab-pane fade in active" id="register_customer" aria-labelledby="register_customer-tab"> 
                            <iframe src="http://pronexus-register.chuyendoisodn.com.s3-website-ap-southeast-1.amazonaws.com/#/user-signup" frameborder="0"></iframe>
                        </div> 
                        <div role="tabpanel" class="tab-pane fade" id="register_advisor" aria-labelledby="register_advisor-tab"> 
                            <iframe src="http://pronexus-register.chuyendoisodn.com.s3-website-ap-southeast-1.amazonaws.com/#/advisor-signup" frameborder="0"></iframe>
                        </div>
                    </div> 
                </div> --}}
            </div>
            {{-- @csrf --}}
            {{-- <div class="modal-footer">
                <button type="button" class="btn-linear" data-dismiss="modal">Cancel</button>
                <button type="button" id="submit-login" class="btn-hot" >Đăng nhập</button>
            </div> --}}
            
        </div>
    </div>
</div>
