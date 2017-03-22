<?php

namespace frontend\component;

use yii\helpers\Url;

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
        <!--<link href="/js/swiper/css/swiper.min.css" rel="stylesheet">!-->
        <!--<script src="/js/swiper/js/swiper.min.js"></script>!-->
        <section class="slider">
            <div id="slider" class="swiper-container swiper-container-horizontal swiper-container-fade">
                <div class="swiper-wrapper">

            <?php
            foreach (self::$params as $param) {?>
                    <div class="swiper-slide" style="background: url(<?= $param['img'] ?>) <?= $param['options']['image']['left'] ?> <?= $param['options']['image']['top'] ?>;">
                        <div class="slider-info">
                            <div class="slider-title"><?= $param['title'] ?></div>
                            <div class="slider-price"><big><span style="font-size: 28pt;"><?=$param['price']?></span></big> <?=$param['valute']?></div>
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
    
}
?>
<?php /*
<section class="slider">
    <div id="slider" class="swiper-container swiper-container-horizontal swiper-container-fade">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background: url(http://gabetti.pro/upload/iblock/fd9/fd9480eebea65764c0888a9291b6060b.jpg) 0 -180px;">
                <div class="slider-info">
                    <div class="slider-title">Квартиры и комнаты в Крыму</div>
                    <div class="slider-price"><!--<big><span style="font-size: 28pt;">3000000</span></big> руб.!--></div>
                    <a class="slider-button button" href="http://gabetti.pro/flats/">Подобрать</a>
                </div>
            </div>
            <div class="swiper-slide" style="background: url(http://gabetti.pro/upload/iblock/2eb/2ebfe10b559c935d7e0e65f0a88ea7e6.jpg) 0 -180px;">
                <div class="slider-info">
                    <div class="slider-title">Новостройки в Крыму</div>
                    <div class="slider-price"><!--<big><span style="font-size: 28pt;">3000000</span></big> руб.!--></div>
                    <a class="slider-button button" href="http://gabetti.pro/flats/">Подобрать</a>
                </div>
            </div>
            <div class="swiper-slide" style="background: url(http://gabetti.pro/upload/iblock/d46/d4636f73e20d8de8e7bd9357f3deb1c2.jpg) 0 -180px;">
                <div class="slider-info">
                    <div class="slider-title">Загородная недвижимость в Крыму</div>
                    <div class="slider-price"><!--<big><span style="font-size: 28pt;">3000000</span></big> руб.!--></div>
                    <a class="slider-button button" href="http://gabetti.pro/flats/">Подобрать</a>
                </div>
            </div>
            <!--<div class="swiper-slide">Slide 4</div>!-->
        </div>
    <!-- Add Pagination -->
    <div id="slider-pagination" class="swiper-pagination swiper-pagination-clickable"></div>
    </div>
</section>
<script>
	var header_main_slide = new Swiper('#slider', {
	  pagination: '#slider-pagination',
	  paginationClickable: true,
	  effect: 'fade',
	  //autoplay: 5000,
	  simulateTouch: false
	});
</script>*/

?>