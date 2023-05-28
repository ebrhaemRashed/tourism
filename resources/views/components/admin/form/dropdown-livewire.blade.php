    <div class="form-group">
        <select wire:model={{ $namewire }} class="form-control select2-no-search" id={{isset($id)?$id:''}} value=""  name="{{$name}}">
            <option selected="" value="" >Select {{isset($nameselect)?$nameselect:''}}</option>
            @foreach ($foreach as $item)

            @if (isset($model->id))
            {{--  edit  --}}
            <option value="{{$item->id}}" {{ $item->id == $model->$name ?'selected':''}}>{{$item->name}}</option>
            @else
            {{--  create  --}}
            <option value="{{$item->id}}" @if (old($name)==$item->id) {{ 'selected' }} @endif >{{$item->name}}</option>
            @endif
            @endforeach
        </select>
    </div>

