<div class="fancy-box-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content">
                    <h3><?php echo isset($tro_thanh_co_van['0'])?$tro_thanh_co_van['0']['title']:''; ?></h3>
                    <?php echo isset($tro_thanh_co_van['0'])?$tro_thanh_co_van['0']['sub_title']:''; ?>
                    <a href="#" class="btn-hot">Đăng ký <i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 content-image">
                <?php $imgThumb = isset($tro_thanh_co_van['0'])?($tro_thanh_co_van['0']['thumbnail']?$tro_thanh_co_van['0']['thumbnail']:'/frontend/assets/images/person.png'):''; ?>
                <img src="{{$imgThumb}}" alt="">
            </div>
        </div>
    </div>
</div>
