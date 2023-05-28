<?php
namespace App\Http\Controllers\Admin;

use App\Actions\Cars\StoreCarAction;
use App\Actions\Cars\UpdateCarAction;
use App\Actions\Group\StoreGroupAction;
use App\Actions\Group\UpdateGroupAction;
use App\Actions\Location\City\StoreCityAction;
use App\Actions\Location\City\UpdateCityAction;
use App\Actions\Tag\StoreTagAction;
use App\Actions\Tag\UpdateTagAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Cars\StoreCarRequest;
use App\Http\Requests\Cars\UpdateCarRequest;
use App\Http\Requests\Group\StoreGroupRequest;
use App\Http\Requests\Group\UpdateGroupRequest;
use App\Http\Requests\Location\City\StoreCityRequest;
use App\Http\Requests\Location\City\UpdateCityRequest;
use App\Http\Requests\Tags\StoreTagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;
use App\Models\Cars;
use App\Models\City;
use App\Models\Group;
use App\Models\Tag;
use App\ViewModels\CarsView\CarViewModel;
use App\ViewModels\GroupView\GroupViewModel;
use App\ViewModels\TagsView\TagViewModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class TagsController extends Controller
{
    protected $nameViewCrud;
    protected $messageStore;
    protected $messageUpdate;
    protected $messageDelete;
    protected $route;
    protected $Model;
    protected $StoreAction;
    protected $UpdateAction;

    public function __construct(Tag $Tag){
        $this->Model=$Tag;
        $this->messageStore='Success Add Tag';
        $this->messageUpdate='Update Tag';
        $this->messageDelete='Success  Delete Tag';
        $this->route='admin.tags.index';
        $this->nameViewCrud='admin.tags';
        $this->StoreAction=StoreTagAction::class;
        $this->UpdateAction=UpdateTagAction::class;
    }

    public function ViewModel($data=null): TagViewModel
    {
       $ViewMode = new TagViewModel($data);
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
    public function store(StoreTagRequest $request):RedirectResponse
    {
        app($this->StoreAction)->handle($request->validated());
        return redirect()->route($this->route)->with('add',$this->messageStore);
    }
    public function edit($slug):View
    {
        $data = $this->Model::where('slug',$slug)->first();
        return view($this->nameViewCrud.'.crud',$this->ViewModel($data));
    }
    public function update(UpdateTagRequest $request, $id):RedirectResponse
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
