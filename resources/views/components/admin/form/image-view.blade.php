<div class="d-flex align-items-center">
    @if (!empty($model->getFirstMediaUrl($name)))
    <img src="{{ asset($model->getFirstMediaUrl($name) )}}" class="rounded-lg me-2" width="{{$style??'50'}}" alt="">
    @else
    <img src="{{ asset('admin/images/noimage.jpg') }}" class="rounded-lg me-2" width="{{$style??'50'}}" alt="">
    @endif

</div>