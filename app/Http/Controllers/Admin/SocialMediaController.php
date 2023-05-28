<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Cars\StoreCarAction;
use App\Actions\Cars\UpdateCarAction;
use App\Actions\Location\City\StoreCityAction;
use App\Actions\Location\City\UpdateCityAction;
use App\Actions\SocialMedia\SocialMediaAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cars\StoreCarRequest;
use App\Http\Requests\Cars\UpdateCarRequest;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;
use App\Http\Requests\socialMedia\UpdateSocialMediaRequest;
use App\Models\Cars;
use App\Models\City;
use App\Models\Setting;
use App\ViewModels\CarsView\CarViewModel;
use App\ViewModels\SettingView\SettingViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Request;


class SocialMediaController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(Setting $Setting){
        $this->Model=$Setting;
        $this->messageStore='Success Add Social Media';
        $this->messageUpdate='Update Social Media';
        $this->messageDelete='Success Delete Social Media';
        $this->route='admin.socialMedia.index';
        $this->nameViewCrud='admin.socialMedia';
        $this->UpdateAction=SocialMediaAction::class;
    }

    public function ViewModel($data=null): SettingViewModel
    {
       $ViewMode = new SettingViewModel($data);
       return $ViewMode;
    }

    public function index():View
    {
        return view($this->nameViewCrud.'.view',$this->ViewModel());
    }
    public function edit($id):View
    {
        $data = $this->Model::where('id',$id)->first();
        return view($this->nameViewCrud.'.view',$this->ViewModel($data));
    }
    public function update(UpdateSocialMediaRequest $request, $id):RedirectResponse
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
