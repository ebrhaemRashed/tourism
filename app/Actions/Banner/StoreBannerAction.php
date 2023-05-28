<?php
namespace App\Actions\Banner;

use App\Helper\ImageHelper;
use App\Models\Banner;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class StoreBannerAction
{
    use ImageHelper;
    public function handle(array $data): Banner
    {
        $Banner = Banner::create((Arr::except($data+['slug'=>Str::slug($data['name']['en'])], 'image')));
        $this->StoreImage($data,$Banner,'banner');
        return $Banner;
    }
}


