<?php

    include('simple_html_dom.php');

    $site = 'https://rux.muzmo.cc/search?q=';
    
    $searchs_url = file_get_html($site.$_GET['name']);

    $searchs1 = $searchs_url->find('div[class="mzmlght"]');
    $searchs2 = $searchs_url->find('div[class="mzmdrk"]');

    $obj_merged = (object) array_merge( (array) $searchs1, (array) $searchs2 );

    foreach($obj_merged as $search) {
        $track['title'] = mb_substr($search->find('.block', 0)->plaintext, 17, -47);
        $track['url'] = $search->find('.block', 0)->href;
        $track['time'] = mb_substr($search->find('.text', 0)->plaintext, 1, 5);
        if ('/artist_songs?' != mb_substr($search->find('.block', 0)->href, 0, 14)) {
            $tracks[] = $track;
        }
        
    }
    unset($tracks[0]);
    unset($tracks[9]);
    unset($tracks[17]);
    unset($tracks[18]);
    unset($tracks[19]);
    unset($tracks[20]);
    unset($tracks[21]);
    unset($tracks[22]);
    unset($tracks[23]);
    unset($tracks[24]);
    
    print_r(json_encode($tracks));