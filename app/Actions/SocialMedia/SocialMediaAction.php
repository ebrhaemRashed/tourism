<?php
namespace App\Actions\SocialMedia;
use App\Models\Setting;
class SocialMediaAction
{
    public function handle(Setting $setting,array $data):Setting
    {
        $setting->update($data);
        return $setting;
    }
}
