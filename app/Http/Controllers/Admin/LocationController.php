<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Cars\StoreCarAction;
use App\Actions\Cars\UpdateCarAction;
use App\Actions\location\StoreLocationAction;
use App\Actions\location\UpdateLocationAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cars\StoreCarRequest;
use App\Http\Requests\Cars\UpdateCarRequest;
use App\Http\Requests\location\StoreLocationRequest;
use App\Http\Requests\location\UpdateLocationRequest;
use App\Models\Cars;
use App\Models\Location;
use App\ViewModels\locationView\LocationViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class LocationController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(Location $Location){
        $this->Model=$Location;
        $this->messageStore='Success Add Location';
        $this->messageUpdate='Update Location';
        $this->messageDelete='Success  Delete Location';
        $this->route='admin.location.index';
        $this->nameViewCrud='admin.location';
        $this->StoreAction=StoreLocationAction::class;
        $this->UpdateAction=UpdateLocationAction::class;
    }

    public function ViewModel($data=null): LocationViewModel
    {
       $ViewMode = new LocationViewModel($data);
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
    public function store(StoreLocationRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($slug):View
    {
        $data = $this->Model::where('slug',$slug)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateLocationRequest $request, $id):RedirectResponse
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
