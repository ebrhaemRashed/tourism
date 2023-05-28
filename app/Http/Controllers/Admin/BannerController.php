<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Banner\StoreBannerAction;
use App\Actions\Banner\UpdateBannerAction;
use App\Actions\Cars\StoreCarAction;
use App\Actions\Cars\UpdateCarAction;
use App\Actions\Location\City\StoreCityAction;
use App\Actions\Location\City\UpdateCityAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\StoreBannerRequest;
use App\Http\Requests\Banner\UpdateBannerRequest;
use App\Http\Requests\Cars\StoreCarRequest;
use App\Http\Requests\Cars\UpdateCarRequest;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;
use App\Models\Banner;
use App\Models\Cars;
use App\Models\City;
use App\ViewModels\BannerView\BannerViewModel;
use App\ViewModels\CarsView\CarViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class BannerController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;


    public function __construct(Banner $Banner){
        $this->Model=$Banner;
        $this->messageStore='Success Add Banner';
        $this->messageUpdate='Update Banner';
        $this->messageDelete='Success  Delete Banner';
        $this->route='admin.banner.index';
        $this->nameViewCrud='admin.banner';
        $this->StoreAction=StoreBannerAction::class;
        $this->UpdateAction=UpdateBannerAction::class;
    }

    public function ViewModel($data=null): BannerViewModel
    {
       $ViewMode = new BannerViewModel($data);
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
    public function store(StoreBannerRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($slug):View
    {
        $data = $this->Model::where('slug',$slug)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateBannerRequest $request, $id):RedirectResponse
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
