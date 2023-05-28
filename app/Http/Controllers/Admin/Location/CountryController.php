<?php
namespace App\Http\Controllers\Admin\Location;

use App\Actions\Location\Country\StoreCountryAction;
use App\Actions\Location\Country\UpdateCountryAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;
use App\Http\Requests\Location\Country\StoreCountryRequest;
use App\Http\Requests\Location\Country\UpdateCountryRequest;
use App\Models\Country;
use App\ViewModels\LocationView\CountryView\CountryViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class CountryController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(Country $country){
        $this->Model=$country;
        $this->messageStore='Success Add Country';
        $this->messageUpdate='Update Country';
        $this->messageDelete='Success  Delete Country';
        $this->route='admin.country.index';
        $this->nameViewCrud='admin.Location.country';
        $this->StoreAction=StoreCountryAction::class;
        $this->UpdateAction=UpdateCountryAction::class;
    }

    public function ViewModel($data=null): CountryViewModel
    {
       $ViewMode = new CountryViewModel($data);
       return $ViewMode;
    }

    public function index():View
    {
        $data = $this->Model::Search();
        return view($this->nameViewCrud.'.view',$this->ViewModel(),compact('data'));
    }
    public function create():View
    {
        return view($this->nameViewCrud.'.crud',$this->ViewModel());
    }
    public function store(StoreCountryRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($slug):View
    {
        $data = $this->Model::where('slug',$slug)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateCountryRequest $request, $id):RedirectResponse
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
