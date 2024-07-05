@foreach($comments as $comment)
<div id="comment-list" class="comment-list" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <div class="item-comment" id="comment_473">
        <div class="form-reply-comment">
            <div class="comment-name d-flex align-items-center justify-content-between">
                <div class="comment-form-left d-flex align-items-center gap-6">

                    <b class="user-name d-flex align-items-center gap-6">
                        {{ $comment->user->name  }}
                    </b>
                </div>
                <div class="comment-form-right d-flex align-items-center gap-4">
                    <i class="fa fa-clock-o" style="font-size:15px; margin-right: 5px"></i>
                    <?php $date = date_format($comment->created_at, "d/m/Y") ?>
                    <span style="color:#787878;font-size: 12px;margin-right: 4px;font-weight: 700">{{$date}}</span>
                </div>
            </div>

            <div class="comment-content1 boder-radius-10 mt-12 position-relative">
                <div class="d-flex align-items-center" style="float: left; width: 90%">
                    <div class="d-flex jd-img-review flex-column gap-8">
                        <p style="font-size: 15px">{{ $comment->content }}</p>
                    </div>
                </div>
                @if($comment->parent_id == null)
                <div class="info_feeback  align-items-center gap-6" id="rep-comment" style="text-align: right; width: 20%">
                    <i class="far fa-comments" style="font-size:20px; margin-right: 5px; font-weight: 550"></i>
                    <a href="javascript:" style="font-weight: 550" class="write_reply font-weight-500">{{ __('Trả lời') }}</a>
                </div>
                    @endif
            </div>
            <div class="reply-list-container js-replyList-item" id="reply_list_473" data-item-id="473"></div>
        </div>
    </div>
    <div class="box-comment1">
        <form action="{{ route('storeComment') }}" method="post" enctype="multipart/form-data" style="display: none" class="menu1">
            {{ csrf_field() }}
            <div class="comment-detail">
                <div class="form-comment gap-10 d-flex justify-content-between">
                    <div style="width: 75%; margin-left: 40px">
                        <textarea class="reply_content-data boder-radius-10" id="content0" name="content" placeholder="Xin mời để lại câu trả lời"></textarea>
                        <input type="hidden" value="{{ $dataProduct->id }}" name="product_id">
                        <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                    </div>
                    <div style="width: 20%;">
                        <button type="submit" style="border: 0" id="submit-send">
                            <a class="btn-send-form-comment d-flex align-items-center justify-content-center gap-6 send-comment-pc"> <i class="fa fa-send-o" style="font-size:24px"></i>{{ __('Gửi') }}</a>
                        </button>
                    </div>
                </div>

                <p id="js-content-note0" style="color: red;max-width: 100%;display: flex;font-weight:700;margin-bottom:10px;"></p>
            </div>
        </form>
        @include('page.product.comment-display', ['comments' => $comment->replies])
    </div>
</div>
@endforeach
