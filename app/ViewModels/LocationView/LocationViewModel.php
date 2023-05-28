<?php
namespace App\ViewModels\locationView;
use App\Models\Location;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class LocationViewModel extends ViewModel
{
    public  $Location;
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
    public function __construct($Location = null)
    {
        // -------name country--------
        $this->nameView='Location';
        $this->IndexView='Index Location';
        $this->CreateView='Create Location';
        $this->RouteIndex=route('admin.location.index');
        $this->RouteCreate=route('admin.location.create');
        $this->RouteEdit='admin.location.edit';
        $this->RouteDestroy='admin.location.destroy';
        // -------name country--------
        $this->Location = is_null($Location) ? new Location(old()) : $Location;
        $this->type = is_null($Location)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
    }

    public function action(): string
    {
        return is_null($this->Location->id)
            ? route('admin.location.store')
            : route('admin.location.update', $this->Location->id);
    }

    public function method(): string
    {
        return is_null($this->Location->id) ? 'POST' : 'PUT';
    }
}
