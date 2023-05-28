<?php
namespace App\ViewModels\TagsView;
use App\Models\Tag;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class TagViewModel extends ViewModel
{
    public  $Tag;
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
    public function __construct($Tag = null)
    {
        // -------name country--------
        $this->nameView='Tag';
        $this->IndexView='Index Tag';
        $this->CreateView='Create Tag';
        $this->RouteIndex=route('admin.tags.index');
        $this->RouteCreate=route('admin.tags.create');
        $this->RouteEdit='admin.tags.edit';
        $this->RouteDestroy='admin.tags.destroy';
        // -------name country--------
        $this->Tag = is_null($Tag) ? new Tag(old()) : $Tag;
        $this->type = is_null($Tag)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
    }

    public function action(): string
    {
        return is_null($this->Tag->id)
            ? route('admin.tags.store')
            : route('admin.tags.update', $this->Tag->id);
    }

    public function method(): string
    {
        return is_null($this->Tag->id) ? 'POST' : 'PUT';
    }
}
