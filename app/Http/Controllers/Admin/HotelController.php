<?php
namespace App\Http\Controllers\Admin;

use App\Actions\HotelApartment\StoreHotelApartmentAction;
use App\Actions\HotelApartment\UpdateHotelApartmentAction;
use App\Actions\Location\City\StoreCityAction;
use App\Actions\Location\City\UpdateCityAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Hotel\StoreHotelRequest;
use App\Http\Requests\Hotel\UpdateHotelRequest;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;
use App\Models\City;
use App\Models\HotelApartment;
use App\ViewModels\HotelView\HotelViewModel;
use App\ViewModels\LocationView\CityView\CityViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class HotelController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(HotelApartment $HotelApartment){
        $this->Model=$HotelApartment;
        $this->messageStore='Success Add Hotel';
        $this->messageUpdate='Update Hotel';
        $this->messageDelete='Success  Delete Hotel';
        $this->route='admin.hotel.index';
        $this->nameViewCrud='admin.hotel';
        $this->StoreAction=StoreHotelApartmentAction::class;
        $this->UpdateAction=UpdateHotelApartmentAction::class;
    }

    public function ViewModel($data=null): HotelViewModel
    {
       $ViewMode = new HotelViewModel($data);
       return $ViewMode;
    }

    public function index():View
    {
        $data = $this->Model::SearchHotel();
        return view($this->nameViewCrud.'.view',$this->ViewModel(),compact('data'));
    }
    public function create():View
    {
        return view($this->nameViewCrud.'.crud',$this->ViewModel());
    }
    public function store(StoreHotelRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($slug):View
    {
        $data = $this->Model::where('slug',$slug)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateHotelRequest $request, $id):RedirectResponse
    {
        $data = $this->Model::find($id);
        app($this->UpdateAction)->handle($data,$request->validated());
        return redirect()->route($this->route)->with('edit',$this->messageUpdate);
    }
    public function destroy($id):RedirectResponse
    {
        $data = $this->Model::find($id);
        $data->delete();
        return redirect()->route($this->route)->with('delete',$this->messageDelete);
    }
}
