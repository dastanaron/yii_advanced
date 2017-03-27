<?php

namespace frontend\component;


use yii;
use yii\helpers\Url;
use common\models\Slids;

class Slider {
    
    public static $params;
    public static $showpage;
    
    private static function SetParams($params) {
        
        if (!empty($params)) {
            
            self::$params = $params;
            
        }
        
    }
    
    private static function SetShowPage($page) {
        
        if (!empty($page)) {
            self::$showpage = $page;
        }
        else {
            self::$showpage = Url::home();
        }
        
    }
    
    public static function RegisterFiles($asset, $page = '') {
        
        self::SetShowPage($page);
        
        if ($asset instanceof \frontend\assets\AppAsset && self::$showpage == Url::to()) {
            
            array_unshift($asset->css, 'js/swiper/css/swiper.min.css');
           $asset->js[] = 'js/swiper/js/swiper.min.js';
           $asset->js[] = 'js/swiper/js/clientSwiper.js';
           
       }
       
       return $asset;
    }
    
    public static function AutodetectSlider($params = array(), $page = '') {
        
        self::SetShowPage($page);
        
        self::SetParams($params);
        
        if(self::$showpage == Url::to()) {
            
            self::getSlider();
            
        }
        
        
    }
    
    
    public static function getSlider($params = array()) {
        
            self::SetParams($params);
        
        ?>
        <section class="slider">
            <div id="slider" class="swiper-container swiper-container-horizontal swiper-container-fade">
                <div class="swiper-wrapper">

            <?php
            foreach (self::$params as $param) {?>
                    <div class="swiper-slide" style="background: url(<?= $param['img'] ?>) <?= $param['options']['image']['left'] ?> <?= $param['options']['image']['top'] ?>;">
                        <div class="slider-info">
                            <div class="slider-title"><?= $param['title'] ?></div>
                            <div class="slider-price"><big><span style="font-size: 28pt;"><?=$param['price']? number_format($param['price'], 0, ',', ' '): ''?></span></big> <?=$param['valute']?></div>
                            <a class="slider-button button" href="<?=$param['link']?>"><?=$param['button']?></a>
                        </div>
                    </div>
            <?php
            }
            ?>

                </div>
                <!-- Add Pagination -->
                <div id="slider-pagination" class="swiper-pagination swiper-pagination-clickable"></div>
            </div>
        </section> 
    <?php
        
    }
    
    public static function buildParams() {
        
        $objects = Slids::find()
            ->indexBy('id')
            ->all();
        
        $param_array = array();
        
        foreach ($objects as $object) {
            $param_array[] = array(
            
            'img' => $object->img_src,
            'title' => $object->title,
            'link' => $object->link,
            'price' => $object->price,
            'valute' => $object->valute,
            'button' => $object->text_on_button,
            'options' => [
                'image' => [
                    'left' => $object->img_left,
                    'top' => $object->img_top,
                ]
            ]);
        }
        
        self::$params = $param_array;
        
        return $param_array;
        
    }
    
}