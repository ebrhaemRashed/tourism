@extends('admin.layouts.master')

@section('titleadmin')
{{ str_replace("-"," ",ucfirst($type.' '.$nameView)) }}
@endsection

@section('cssadmin')
@endsection

@section('contentadmin')

<div class="content-body">
    <x-admin.route :route="$RouteIndex" name="{{ TranslationHelper::translate($IndexView) }}"></x-admin.route>
    <!-- container starts -->
    <div class="container-fluid">
        <!-- row -->
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <x-admin.crud name="{{ $type??'' }} {{ TranslationHelper::translate('Form '.$nameView) }}"></x-admin.crud>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{$action}}">
                            @include('components.admin.csrf')
                            <div class="row">
                                @foreach ($translation as $item)
                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Name {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.input old="{{ 'name.'.$item->key }}"
                                        name="{{ 'name'.'['.$item->key.']' }}" type="text"
                                        placeholder="Name {{ ucfirst($item->name)  }}"
                                        :value="$HotelApartment->translate('name', $item->key)"></x-admin.form.input>
                                    <x-admin.form.label-end
                                        name="Please Enter {{ ucfirst($item->name) }} Admin Name">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Description {{ ucfirst(TranslationHelper::translate($item->name))  }}">
                                    </x-admin.form.label-first>
                                    <x-admin.form.text old="{{ 'description.'.$item->key }}"
                                        name="{{ 'description'.'['.$item->key.']' }}" type="text"
                                        placeholder="Description {{ ucfirst($item->name)  }}"
                                        :value="$HotelApartment->translate('description', $item->key)"></x-admin.form.text>
                                    <x-admin.form.label-end
                                        name="Please Enter {{ ucfirst($item->name) }} Description">
                                    </x-admin.form.label-end>
                                </div>

                                @endforeach

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Stars"></x-admin.form.label-first>
                                    <x-admin.form.input old="stars" :value="$HotelApartment->stars" name="stars" type="number"
                                        placeholder="Stars"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Stars">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Rooms"></x-admin.form.label-first>
                                    <x-admin.form.input old="rooms" :value="$HotelApartment->rooms" name="rooms" type="number"
                                        placeholder="Rooms"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Rooms">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Price"></x-admin.form.label-first>
                                    <x-admin.form.input old="price" :value="$HotelApartment->price" name="price" type="number"
                                        placeholder="Price"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Price">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="Sort"></x-admin.form.label-first>
                                    <x-admin.form.input old="sort" :value="$HotelApartment->sort" name="sort" type="number"
                                        placeholder="Sort"></x-admin.form.input>
                                    <x-admin.form.label-end name="Please Enter Sort">
                                    </x-admin.form.label-end>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('Typing Live') }}"></x-admin.form.label-first>
                                    <x-admin.form.state :foreach="App\Models\HotelApartment::TYPINGLIVE" :model="$HotelApartment" name="typing_live"></x-admin.form.state>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose Typing Live') }}"> </x-admin.form.label-end>
                                </div>

                                <input type="hidden" value="Hotel" name="type">

                                <div class="mb-3 col-md-6">
                                    <x-admin.form.label-first star="*" name="{{ TranslationHelper::translate('State') }}"></x-admin.form.label-first>
                                    <x-admin.form.state :foreach="App\Models\StaticConst::STATUS" :model="$HotelApartment" name="status"></x-admin.form.state>
                                    <x-admin.form.label-end name="{{ TranslationHelper::translate('Please Choose State') }}"> </x-admin.form.label-end>
                                </div>

                                @livewire('location',
                                ['CityId'=>$HotelApartment->City->id ?? '','CountryId'=>$HotelApartment->Country->id ?? '','DistrictId'=>$HotelApartment->District->id ?? '','DistrictShow'=>'show'])

                                </div>
                            </div>
                                <x-admin.form.submit :route="$RouteIndex"></x-admin.form.submit>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('jsadmin')
@endsection
