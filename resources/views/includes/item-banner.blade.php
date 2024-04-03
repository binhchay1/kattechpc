@if(isset($layout->small_banner_thumbnail_left))
<div class="fixed-left">
    <a target="_blank" href="{{ isset($layout->permarklink_small_banner_thumbnail_left) ? $layout->permarklink_small_banner_thumbnail_left : '#' }}">
        <img class="" width="200" height="400" alt="banner-left" src="{{ asset($layout->small_banner_thumbnail_left) }}">
    </a>
</div>
@endif

@if(isset($layout->small_banner_thumbnail_right))
<div class="fixed-right">
    <a target="_blank" href="{{ isset($layout->permarklink_small_banner_thumbnail_right) ? $layout->permarklink_small_banner_thumbnail_right : '#' }}">
        <img class="" width="200" height="400" alt="banner-right" src="{{ asset($layout->small_banner_thumbnail_right) }}">
    </a>
</div>
@endif
