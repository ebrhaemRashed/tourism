<?php
namespace App\Helper;

trait ImageHelper
{

	public function StoreImage($data,$model,$nameImage){
        if (!empty($data['image'])) {
            $model->addMediaFromRequest('image')->toMediaCollection($nameImage);
        }
	}

	public function UpdateImage($data,$model,$nameImage){
        if (!empty($data['image'])) {
            $model->clearMediaCollection($nameImage);
            $model->addMediaFromRequest('image')->toMediaCollection($nameImage);
        }
	}


}
