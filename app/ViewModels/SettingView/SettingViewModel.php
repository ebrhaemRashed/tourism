<?php
namespace App\ViewModels\SettingView;
use App\Models\Setting;
use Spatie\ViewModels\ViewModel;

class SettingViewModel extends ViewModel
{
    // Setting
    public  $Setting;
    public  $type;

// -------name country--------
    public $nameView;
    public $IndexView;
    public $CreateView;
    public $RouteIndex;
    public $RouteCreate;
    public $RouteEdit;
    public $RouteDestroy;
    public $data;
    public $RouteEditSocialMedia;
// -------name country--------
    public function __construct($Setting = null)
    {
        // -------name country--------
        $this->data = Setting::Search();
        $this->nameView='Social Media';
        $this->IndexView='Index Social Media';
        $this->CreateView='Create Social Media';
        $this->RouteEditSocialMedia='Edit Social Media';
        $this->RouteIndex=route('admin.socialMedia.index');
        $this->RouteCreate=route('admin.socialMedia.create');
        $this->RouteEdit='admin.socialMedia.edit';
        $this->RouteDestroy='admin.socialMedia.destroy';
        // -------name country--------
        $this->Setting = is_null($Setting) ? new Setting(old()) : $Setting;
        $this->type = is_null($Setting)?'Create':'Edit' ;
    }

    public function action(): string
    {
        return is_null($this->Setting->id)
            ? route('admin.socialMedia.store')
            : route('admin.socialMedia.update', $this->Setting->id);
    }

    public function method(): string
    {
        return is_null($this->Setting->id) ? 'POST' : 'PUT';
    }
}
