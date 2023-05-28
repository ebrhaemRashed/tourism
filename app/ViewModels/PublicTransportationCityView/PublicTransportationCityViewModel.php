<?php
namespace App\ViewModels\PublicTransportationCityView;
use App\Models\PublicTransportationCity;
use Spatie\ViewModels\ViewModel;

class PublicTransportationCityViewModel extends ViewModel
{
    public  $PublicTransportationCity;
    public  $type;

// -------name country--------
    public $nameView;
    public $IndexView;
    public $CreateView;
    public $RouteIndex;
    public $RouteCreate;
    public $RouteEdit;
    public $RouteDestroy;
// -------name country--------
    public function __construct($PublicTransportationCity = null)
    {
        // -------name country--------
        $this->nameView='Public Transportation City';
        $this->IndexView='Index Public Transportation City';
        $this->CreateView='Create Public Transportation City';
        $this->RouteIndex=route('admin.publictransportationcity.index');
        $this->RouteCreate=route('admin.publictransportationcity.create');
        $this->RouteEdit='admin.publictransportationcity.edit';
        $this->RouteDestroy='admin.publictransportationcity.destroy';
        // -------name country--------
        $this->PublicTransportationCity = is_null($PublicTransportationCity) ? new PublicTransportationCity(old()) : $PublicTransportationCity;
        $this->type = is_null($PublicTransportationCity)?'Create':'Edit' ;
    }

    public function action(): string
    {
        return is_null($this->PublicTransportationCity->id)
            ? route('admin.publictransportationcity.store')
            : route('admin.publictransportationcity.update', $this->PublicTransportationCity->id);
    }

    public function method(): string
    {
        return is_null($this->PublicTransportationCity->id) ? 'POST' : 'PUT';
    }
}
