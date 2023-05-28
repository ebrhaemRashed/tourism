<?php
namespace App\Http\Controllers\Admin\Location;

use App\Actions\Location\District\StoreDistrictAction;
use App\Actions\Location\District\UpdateDistrictAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Location\District\StoreDistrictRequest;
use App\Http\Requests\Location\District\UpdateDistrictRequest;
use App\Models\District;
use App\ViewModels\LocationView\DistrictView\DistrictViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class DistrictController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(District $district){
        $this->Model=$district;
        $this->messageStore='Success Add District';
        $this->messageUpdate='Update District';
        $this->messageDelete='Success  Delete District';
        $this->route='admin.district.index';
        $this->nameViewCrud='admin.Location.district';
        $this->StoreAction=StoreDistrictAction::class;
        $this->UpdateAction=UpdateDistrictAction::class;
    }

    public function ViewModel($data=null): DistrictViewModel
    {
       $ViewMode = new DistrictViewModel($data);
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
    public function store(StoreDistrictRequest $request)
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($slug):View
    {
        $data = $this->Model::where('slug',$slug)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateDistrictRequest $request, $id):RedirectResponse
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
