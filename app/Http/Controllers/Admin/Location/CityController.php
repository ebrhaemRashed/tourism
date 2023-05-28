<?php
namespace App\Http\Controllers\Admin\Location;

use App\Actions\Location\City\StoreCityAction;
use App\Actions\Location\City\UpdateCityAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;
use App\Models\City;
use App\ViewModels\LocationView\CityView\CityViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class CityController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(City $city){
        $this->Model=$city;
        $this->messageStore='Success Add City';
        $this->messageUpdate='Update City';
        $this->messageDelete='Success  Delete City';
        $this->route='admin.city.index';
        $this->nameViewCrud='admin.Location.city';
        $this->StoreAction=StoreCityAction::class;
        $this->UpdateAction=UpdateCityAction::class;
    }

    public function ViewModel($data=null): CityViewModel
    {
       $ViewMode = new CityViewModel($data);
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
    public function store(StoreCityRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($slug):View
    {
        $data = $this->Model::where('slug',$slug)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateCityRequest $request, $id):RedirectResponse
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
