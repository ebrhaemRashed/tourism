<?php
namespace App\ViewModels\GroupView;
use App\Models\Country;
use App\Models\Group;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class GroupViewModel extends ViewModel
{
    public  $Group;
    public  $type;
    public  $translation;

// -------name country--------
    public $nameView;
    public $IndexView;
    public $CreateView;
    public $RouteIndex;
    public $RouteCreate;
    public $RouteEdit;
    public $RouteDestroy;
// -------name country--------
    public function __construct($Group = null)
    {
        // -------name country--------
        $this->nameView='Group';
        $this->IndexView='Index Group';
        $this->CreateView='Create Group';
        $this->RouteIndex=route('admin.group.index');
        $this->RouteCreate=route('admin.group.create');
        $this->RouteEdit='admin.group.edit';
        $this->RouteDestroy='admin.group.destroy';
        // -------name country--------
        $this->Group = is_null($Group) ? new Group(old()) : $Group;
        $this->type = is_null($Group)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
        $this->Country = Country::get(); 
    }

    public function action(): string
    {
        return is_null($this->Group->id)
            ? route('admin.group.store')
            : route('admin.group.update', $this->Group->id);
    }

    public function method(): string
    {
        return is_null($this->Group->id) ? 'POST' : 'PUT';
    }
}
