<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Location\District\StoreDistrictAction;
use App\Actions\Location\District\UpdateDistrictAction;
use App\Actions\PublicTransportation\StorePublicTransportationAction;
use App\Actions\PublicTransportation\UpdatePublicTransportationAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Location\District\StoreDistrictRequest;
use App\Http\Requests\Location\District\UpdateDistrictRequest;
use App\Http\Requests\PublicTransportation\StorePublicTransportationRequest;
use App\Http\Requests\PublicTransportation\UpdatePublicTransportationRequest;
use App\Models\District;
use App\Models\PublicTransportation;
use App\ViewModels\LocationView\DistrictView\DistrictViewModel;
use App\ViewModels\PublicTransportationView\PublicTransportationViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class PublicTransportationController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(PublicTransportation $PublicTransportation){
        $this->Model=$PublicTransportation;
        $this->messageStore='Success Add Public Transportation';
        $this->messageUpdate='Update Public Transportation';
        $this->messageDelete='Success  Delete Public Transportation';
        $this->route='admin.publictransportation.index';
        $this->nameViewCrud='admin.publictransportation';
        $this->StoreAction=StorePublicTransportationAction::class;
        $this->UpdateAction=UpdatePublicTransportationAction::class;
    }

    public function ViewModel($data=null): PublicTransportationViewModel
    {
       $ViewMode = new PublicTransportationViewModel($data);
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
    public function store(StorePublicTransportationRequest $request)
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($id):View
    {
        $data = $this->Model::where('id',$id)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdatePublicTransportationRequest $request, $id):RedirectResponse
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
