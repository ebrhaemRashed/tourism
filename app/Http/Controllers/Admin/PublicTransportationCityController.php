<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Location\District\StoreDistrictAction;
use App\Actions\Location\District\UpdateDistrictAction;
use App\Actions\PublicTransportation\StorePublicTransportationAction;
use App\Actions\PublicTransportation\UpdatePublicTransportationAction;
use App\Actions\PublicTransportationCity\StorePublicTransportationCityAction;
use App\Actions\PublicTransportationCity\UpdatePublicTransportationCityAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Location\District\StoreDistrictRequest;
use App\Http\Requests\Location\District\UpdateDistrictRequest;
use App\Http\Requests\PublicTransportation\StorePublicTransportationRequest;
use App\Http\Requests\PublicTransportation\UpdatePublicTransportationRequest;
use App\Http\Requests\PublicTransportationCity\StorePublicTransportationCityRequest;
use App\Http\Requests\PublicTransportationCity\UpdatePublicTransportationCityRequest;
use App\Models\District;
use App\Models\PublicTransportation;
use App\Models\PublicTransportationCity;
use App\ViewModels\LocationView\DistrictView\DistrictViewModel;
use App\ViewModels\PublicTransportationCityView\PublicTransportationCityViewModel;
use App\ViewModels\PublicTransportationView\PublicTransportationViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class PublicTransportationCityController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(PublicTransportationCity $PublicTransportationCity){
        $this->Model=$PublicTransportationCity;
        $this->messageStore='Success Add Public Transportation City';
        $this->messageUpdate='Update Public Transportation City';
        $this->messageDelete='Success  Delete Public Transportation City';
        $this->route='admin.publictransportationcity.index';
        $this->nameViewCrud='admin.publictransportationcity';
        $this->StoreAction=StorePublicTransportationCityAction::class;
        $this->UpdateAction=UpdatePublicTransportationCityAction::class;
    }

    public function ViewModel($data=null): PublicTransportationCityViewModel
    {
       $ViewMode = new PublicTransportationCityViewModel($data);
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
    public function store(StorePublicTransportationCityRequest $request)
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($id):View
    {
        $data = $this->Model::where('id',$id)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdatePublicTransportationCityRequest $request, $id):RedirectResponse
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
