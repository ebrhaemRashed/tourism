<?php
namespace App\ViewModels\TagGroupView;

use App\Models\Group;
use App\Models\Tag;
use App\Models\TagGroup;
use App\Models\TranslationKey;
use Spatie\ViewModels\ViewModel;

class TagGroupViewModel extends ViewModel
{
    public  $TagGroup;
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
    public $tag;
    public $group;
// -------name country--------
    public function __construct($TagGroup = null)
    {
        // -------name country--------
        $this->nameView='Tag Group';
        $this->IndexView='Index Tag Group';
        $this->CreateView='Create Tag Group';
        $this->RouteIndex=route('admin.taggroup.index');
        $this->RouteCreate=route('admin.taggroup.create');
        $this->RouteEdit='admin.taggroup.edit';
        $this->RouteDestroy='admin.taggroup.destroy';
        // -------name country--------
        $this->TagGroup = is_null($TagGroup) ? new TagGroup(old()) : $TagGroup;
        $this->type = is_null($TagGroup)?'Create':'Edit' ;
        $this->translation = TranslationKey::get();
        $this->tag = Tag::get();
        $this->group = Group::get();
    }

    public function action(): string
    {
        return is_null($this->TagGroup->id)
            ? route('admin.taggroup.store')
            : route('admin.taggroup.update', $this->TagGroup->id);
    }

    public function method(): string
    {
        return is_null($this->TagGroup->id) ? 'POST' : 'PUT';
    }
}
