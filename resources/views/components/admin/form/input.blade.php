<input type="{{ $type??'' }}" name="{{ ($name)??'' }}"  value="{{isset($value) ? $value : old($old??'')}}" class="form-control" placeholder="{{ $placeholder??'' }}"  {{ $required ?? ''}}/>
