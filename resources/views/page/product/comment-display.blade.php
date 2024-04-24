@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <?php $date = date_format($comment->created_at,"Y/m/d"  ) ?>
        <strong>{{ $comment->user->name  }}  &nbsp; {{$date}} </strong>
        <p class="comment-content">{{ $comment->content }}</p>
        <a href="" id="reply"></a>
        <section class="rep-comment">
            <form action="{{route('storeComment')}}" method="post"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="gift-product1">
                    <div class="gift-promotion">
                        <div class="">
                            <textarea id="comment" name="content" placeholder="{{ __('Trả lời...') }}" onfocus="$('.js-actions-comment-2020').show();" name="user_post[content]"></textarea>
                            <input type="hidden" value="{{$dataProduct->id}}" name="product_id">
                            <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
                            <div class="actions-comment-2020 js-actions-comment-2020 ">
                                <div class="actions-comment-wrap">
                                    <div class="cmt_right float-right">
                                        <button type="submit" class="btn btn-primary btn-reply">{{ __('Trả lời') }}</button>
                                    </div>
                                    <div class="js-preview-upload" id="js-preview-file-upload-comment"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
            </form>
        </section>
        @include('page.product.comment-display', ['comments' => $comment->replies])
    </div>
@endforeach
