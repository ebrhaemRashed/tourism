<?php
namespace App\Actions\Banner;

use App\Helper\ImageHelper;
use App\Models\Banner;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class UpdateBannerAction
{
    use ImageHelper;
    public function handle(Banner $Banner,array $data): Banner
    {
        $Banner->update(Arr::except($data+['slug'=>Str::slug($data['name']['en'])],'image'));
        $this->UpdateImage($data,$Banner,'banner');
        return $Banner;
    }
}