<div class="col-xs-6">
    <a href="javascript:void (0)" data-toggle="collapse" data-target="#comment-content"><i class="icon-comment-white-oval-bubble"></i> {{$countComment}} Comments <i class="fa fa-angle-up"></i></a>
</div>
<div class="col-md-12">
    <?php if(session()->has('advisor') || session()->has('customer')):?>
        <div id="comment-content1">
            <input type="hidden" id="post-id" value="{{$post->id}}">
            <div class="comment-group">
                <div class="form-group">
                    <textarea class="form-control comment-content"></textarea>
                </div>
                <div class="alert alert-danger"></div>
                <div class="form-group text-right">
                    <button class="comment-btn btn-linear">Bình luận</button>
                </div>
            </div>
        </div>
        

        <script>
            jQuery(function($) {
                $('.show_comment_child').on('click', function(e) {
                    e.preventDefault();
                    $classShow = $(this).data('classchild');
                    $('.'+$classShow).slideToggle('slow');
                });
                $(document).on('click','.comment-btn',function () {
                    var currentBtn = $(this);
                    var contentComment = currentBtn.closest('.comment-group').find('.comment-content').val();
                    var parentId = 0;
                    if (currentBtn.closest('.comment-group').find('.parent-comment-content').length > 0) {
                        parentId = currentBtn.closest('.comment-group').find('.parent-comment-content').val();
                    }
                    if (contentComment.length) {
                        $.post('/ad/binh-luan',
                            {
                                content_comment:contentComment,
                                post_id: $('#post-id').val(),
                                parent_id: parentId,
                                _token:$('#_token').val()
                            },
                            function (response) {
                                if (response.success) {
                                    currentBtn.closest('.comment-group').find('.alert').text(response.message);
                                    currentBtn.closest('.comment-group').find('.comment-content').val('');
                                }
                            });
                    }
                });
            });
        </script>
    <?php else:?>
        <div id="comment-content1">
            <?php if($countComment == 0):?>
                <div id="comment-content-count0 text-center" style="text-align: center;">
                    <p>Hãy là người đầu tiên bình luận trong bài</p>
                </div>
            <?php endif; ?>
            <input type="hidden" id="post-id" value="{{$post->id}}">
            <div class="comment-group">
                <div class="form-group">
                    <textarea class="form-control comment-content"></textarea>
                </div>
                <div class="alert alert-danger"></div>
                <div class="form-group text-right">
                    <button class="comment-btn-login btn-linear" >Bình luận</button>
                </div>
            </div>
        </div>

        <script>
            jQuery(function($) {
                $('.show_comment_child').on('click', function(e) {
                    e.preventDefault();
                    $classShow = $(this).data('classchild');
                    $('.'+$classShow).slideToggle('slow');
                });

                $(document).on('click','.comment-btn-login',function () {
                    $( "<div class='modal-body show_comment_login'>Vui lòng đăng nhập để tham gia bình luận</div>" ).insertBefore( "#login-form .modal-body" );
                    $('#login_form').modal('show');
                });

                $('#login_form').on('hidden.bs.modal', function (e) {
                    $('.show_comment_login').remove();
                });
            });
        </script>
    <?php endif?>

    <div id="comment-content" class="panel-collapse collapse in" >
            
        <div class="list-comment">
            <?php //print_r($listComment);die; ?>
            <?php foreach ($listComment as $k => $comment) :?>
                <?php if($k <= 5): ?>
                    <div class="detail-comment commentdetail">
                        <div class="row">
                            <div class="col-md-12">
                                <?php $imgThumb = $comment['user']['thumbnail']?$comment['user']['thumbnail']:'/frontend/assets/images/hex-image.jpg'; ?>
                                <div class="img" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
                                <div class="comment-info">
                                    <p>{{$comment['user']['name']}}</p>
                                    {{-- {{date('h:i d-m-Y',strtotime($commentChild->created_at))}} --}}
                                    <span>{{$comment['content']}}</span>
                                </div>
                                <a href="#" class="show_comment_child" data-classchild="form_comment_child_{{$comment['id']}}">Trả lời</a>
                            </div>
                        </div>

                        <div class="col-md-offset-1 re-comment comment-group">
                            <?php foreach ($comment['children_comments'] as $commentChild ):?>
                                <div class="row comment">
                                    <div class="col-md-12">
                                        <?php $imgThumb1 = $commentChild['user']['thumbnail']?$commentChild['user']['thumbnail']:'/frontend/assets/images/hex-image.jpg'; ?>
                                        <div class="img" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb1)?>');"></div>
                                        <div class="comment-info">
                                            <p>{{$commentChild['user']['name']}}</p>
                                            {{-- {{date('h:i d-m-Y',strtotime($commentChild->created_at))}} --}}
                                            <span>{{$commentChild['content']}}</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                            <div class="form_comment_child_{{$comment['id']}}" style="display: none;">
                                <div class="form-group">
                                    <textarea class="form-control comment-content"></textarea>
                                </div>
                                <input type="hidden" class="parent-comment-content" value="{{$comment['id']}}">
                                <div class="alert alert-danger"></div>
                                <div class="form-group text-right">
                                    <button class="comment-btn btn-linear">Phản hồi</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach;?>
        </div>
        {{-- <div class="view_more_coment width_common mb10">
            <a href="javascript:;" class="txt_666">Xem thêm</a>
        </div> --}}
    </div>
</div>

<script>
    jQuery(function($) {
        $('.view_more_coment a').on('click', function(e) {
            e.preventDefault();
            $.get('/api/comment?post_id=<?php echo $post->id; ?>', function(response) {
                console.log(response);
            });
        });

    });
</script>