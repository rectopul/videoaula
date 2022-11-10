<section class="full-banner swiper-container">
    <div class="swiper-wrapper">
        <?php
            $stings = get_option('options_theme');
            //print_r($stings);
            foreach ($stings[slides] as $i => $v) {
                # code...
                printf('<div class="swiper-slide"><div class="content-slide"><article><header>%s</header>%s <a class="button-banner" href="%s">%s</a> </article><img src="%s" /></div></div>', 
                nl2br($v[2]),
                nl2br(str_replace('\\', '',$v[3])),
                nl2br(str_replace('\\', '',$v[5])),
                str_replace('\\', '',$v[4]),
                $v[0]);
            }
        ?>
    </div>
    <span class="clode-banners">
    </span>
</section>