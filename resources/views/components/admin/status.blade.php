    @if ($status=='Active')
    <span class="badge badge-success light border-0">{{ App\Models\StaticConst::STATUS[0] }}</span>
    @else
    <span class="badge badge-danger light border-0">{{ App\Models\StaticConst::STATUS[1] }}</span>
    @endif
{{-- <div class="form-check form-switch">
    <input class="form-check-input flexSwitchCheckDefault" data="{{ $item->id }}" type="checkbox" role="switch" id="flexSwitchCheckDefault" {{ $item->status=='Active'?'checked':'' }} >
</div> --}}