<?php
namespace App\ViewModels\BannerView;
use App\Models\Banner;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class BannerViewModel extends ViewModel
{
    public  $Banner;
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
    public function __construct($Banner = null)
    {
        // -------name country--------
        $this->nameView='Banner';
        $this->IndexView='Index Banner';
        $this->CreateView='Create Banner';
        $this->RouteIndex=route('admin.banner.index');
        $this->RouteCreate=route('admin.banner.create');
        $this->RouteEdit='admin.banner.edit';
        $this->RouteDestroy='admin.banner.destroy';
        // -------name country--------
        $this->Banner = is_null($Banner) ? new Banner(old()) : $Banner;
        $this->type = is_null($Banner)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
    }

    public function action(): string
    {
        return is_null($this->Banner->id)
            ? route('admin.banner.store')
            : route('admin.banner.update', $this->Banner->id);
    }

    public function method(): string
    {
        return is_null($this->Banner->id) ? 'POST' : 'PUT';
    }
}
