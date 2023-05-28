<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Cars\StoreCarAction;
use App\Actions\Cars\UpdateCarAction;
use App\Actions\GroupLocation\StoreGroupLocationAction;
use App\Actions\GroupLocation\UpdateGroupLocationAction;
use App\Actions\Location\City\StoreCityAction;
use App\Actions\Location\City\UpdateCityAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cars\StoreCarRequest;
use App\Http\Requests\Cars\UpdateCarRequest;
use App\Http\Requests\GroupLocation\StoreGroupLocationRequest;
use App\Http\Requests\GroupLocation\UpdateGroupLocationRequest;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;
use App\Models\Cars;
use App\Models\City;
use App\Models\GroupLocation;
use App\ViewModels\CarsView\CarViewModel;
use App\ViewModels\GroupLocationView\GroupLocationViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class GroupLocationController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(GroupLocation $GroupLocation){
        $this->Model=$GroupLocation;
        $this->messageStore='Success Add Group Location';
        $this->messageUpdate='Update Group Location';
        $this->messageDelete='Success Delete Group Location';
        $this->route='admin.grouplocation.index';
        $this->nameViewCrud='admin.grouplocation';
        $this->StoreAction=StoreGroupLocationAction::class;
        $this->UpdateAction=UpdateGroupLocationAction::class;
    }

    public function ViewModel($data=null): GroupLocationViewModel
    {
       $ViewMode = new GroupLocationViewModel($data);
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
    public function store(StoreGroupLocationRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($id):View
    {
        $data = $this->Model::where('id',$id)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateGroupLocationRequest $request, $id):RedirectResponse
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
