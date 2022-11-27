<?php

    include('simple_html_dom.php');

    $site = 'https://rux.muzmo.cc';

    $musics_url = file_get_html($site.$_GET['url']);
    $musics = $musics_url->find('div[class="site_wrap"]');

    foreach($musics as $music) {
        $itemd['url'] = $music->find('div[class="mzmdrk"]', 1)->find('.block', 0)->href;
        $itemds[] = $itemd;
    }

    print_r($site.$music->find('div[class="mzmdrk"]', 1)->find('.block', 0)->href);