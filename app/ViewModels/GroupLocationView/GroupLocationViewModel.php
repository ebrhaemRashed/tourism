<?php
namespace App\ViewModels\GroupLocationView;

use App\Models\Group;
use App\Models\GroupLocation;
use App\Models\Location;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class GroupLocationViewModel extends ViewModel
{
    public  $GroupLocation;
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
    public $location;
    public $group;
// -------name country--------
    public function __construct($GroupLocation = null)
    {
        // -------name country--------
        $this->nameView='Group Location';
        $this->IndexView='Index Group Location';
        $this->CreateView='Create Group Location';
        $this->RouteIndex=route('admin.grouplocation.index');
        $this->RouteCreate=route('admin.grouplocation.create');
        $this->RouteEdit='admin.grouplocation.edit';
        $this->RouteDestroy='admin.grouplocation.destroy';
        // -------name country--------
        $this->GroupLocation = is_null($GroupLocation) ? new GroupLocation(old()) : $GroupLocation;
        $this->type = is_null($GroupLocation)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
        $this->location = Location::get();
        $this->group = Group::get();
    }

    public function action(): string
    {
        return is_null($this->GroupLocation->id)
            ? route('admin.grouplocation.store')
            : route('admin.grouplocation.update', $this->GroupLocation->id);
    }

    public function method(): string
    {
        return is_null($this->GroupLocation->id) ? 'POST' : 'PUT';
    }
}
