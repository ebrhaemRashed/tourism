<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Cars\StoreCarAction;
use App\Actions\Cars\UpdateCarAction;
use App\Actions\GroupLocation\StoreGroupLocationAction;
use App\Actions\GroupLocation\UpdateGroupLocationAction;
use App\Actions\Location\City\StoreCityAction;
use App\Actions\Location\City\UpdateCityAction;
use App\Actions\TagGroup\StoreTagGroupAction;
use App\Actions\TagGroup\UpdateTagGroupAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cars\StoreCarRequest;
use App\Http\Requests\Cars\UpdateCarRequest;
use App\Http\Requests\GroupLocation\StoreGroupLocationRequest;
use App\Http\Requests\GroupLocation\UpdateGroupLocationRequest;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;
use App\Http\Requests\TagGroup\StoreTagGroupRequest;
use App\Http\Requests\TagGroup\UpdateTagGroupRequest;
use App\Models\Cars;
use App\Models\City;
use App\Models\GroupLocation;
use App\Models\TagGroup;
use App\ViewModels\CarsView\CarViewModel;
use App\ViewModels\GroupLocationView\GroupLocationViewModel;
use App\ViewModels\TagGroupView\TagGroupViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class TagGroupController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(TagGroup $TagGroup){
        $this->Model=$TagGroup;
        $this->messageStore='Success Add Group Tag Group';
        $this->messageUpdate='Update Group Tag Group';
        $this->messageDelete='Success Delete Group Tag Group';
        $this->route='admin.taggroup.index';
        $this->nameViewCrud='admin.taggroup';
        $this->StoreAction=StoreTagGroupAction::class;
        $this->UpdateAction=UpdateTagGroupAction::class;
    }

    public function ViewModel($data=null): TagGroupViewModel
    {
       $ViewMode = new TagGroupViewModel($data);
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
    public function store(StoreTagGroupRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($id):View
    {
        $data = $this->Model::where('id',$id)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateTagGroupRequest $request, $id):RedirectResponse
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
