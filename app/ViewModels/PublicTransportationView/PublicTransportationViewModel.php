<?php
namespace App\ViewModels\PublicTransportationView;

use App\Models\City;
use App\Models\Country;
use App\Models\District;
use App\Models\PublicTransportation;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class PublicTransportationViewModel extends ViewModel
{
    public  $PublicTransportation;
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
    public function __construct($PublicTransportation = null)
    {
        // -------name country--------
        $this->nameView='Public Transportation';
        $this->IndexView='Index Public Transportation';
        $this->CreateView='Create Public Transportation';
        $this->RouteIndex=route('admin.publictransportation.index');
        $this->RouteCreate=route('admin.publictransportation.create');
        $this->RouteEdit='admin.publictransportation.edit';
        $this->RouteDestroy='admin.publictransportation.destroy';
        // -------name country--------
        $this->PublicTransportation = is_null($PublicTransportation) ? new PublicTransportation(old()) : $PublicTransportation;
        $this->type = is_null($PublicTransportation)?'Create':'Edit' ;
    }

    public function action(): string
    {
        return is_null($this->PublicTransportation->id)
            ? route('admin.publictransportation.store')
            : route('admin.publictransportation.update', $this->PublicTransportation->id);
    }

    public function method(): string
    {
        return is_null($this->PublicTransportation->id) ? 'POST' : 'PUT';
    }
}
