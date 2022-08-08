<?php

header('Content-type:application/json');
header('Access-Control-Allow-Origin: *');


$form_query = $_GET['q'];
if (empty($form_query) == false) {
    $query = urldecode($form_query);
    call_if_get_query($query);
}


function api_request($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $o = curl_exec($ch);
    curl_close($ch);

    $o_array = json_decode($o, true);
    return $o_array;
}


function call_if_get_query(string $form_query)
{
    // Google
    $o_google = (api_request("https://suggestqueries.google.com/complete/search?client=chrome&q=$form_query&hl=en"));


    // Bing
    $o_bing = (api_request("https://api.bing.com/osjson.aspx?JsonType=callback&JsonCallback?client=chrome&Query=$form_query&Market=en-us"));


    // Youtube
    $o_youtube = (api_request("https://suggestqueries.google.com/complete/search?client=chrome&q=$form_query&hl=en"));


    // Yahoo
    $o_yahoo = (api_request("https://search.yahoo.com/sugg/gossip/gossip-us-ura/?command=$form_query&nresults=20&output=json"));
    $o_yahoo_pure = [];
    foreach ($o_yahoo['gossip']['results'] as $value) {
        array_push($o_yahoo_pure, $value['key']);
    }


    // Ebay
    $o_ebay = (api_request("https://autosug.ebay.com/autosug?kwd=$form_query&v=json&_dg=1&sId=0"));


    // Amazon
    $o_amazon = (api_request("https://completion.amazon.com/search/complete?q=$form_query&method=completion&search-alias=aps&mkt=1"));


    $keyword_array_pure = [
        ['Google', $o_google[1], 'https://www.google.com/search?q='],
        ['YouTube', $o_youtube[1], "https://www.youtube.com/results?search_query="],
        ['Bing', $o_bing[1], 'https://www.bing.com/search?q='],
        ['Yahoo', $o_yahoo_pure, 'https://search.yahoo.com/search?p='],
        ['Amazon', $o_amazon[1], 'https://www.amazon.com/s?k='],
    ];


    // echo json_encode($keyword_array_pure);
    foreach ($keyword_array_pure as $arr) {
        echo "<div class='grid grid-cols-2 hidden'>";
        echo    "<div class='py-4 px-2'>";
        echo        "<div class='bg-white rounded-xl py-4 px-6'>";
        echo            "<div class='text-xl font-medium mb-2'>$arr[0]</div>";
        echo            "<hr />";
        echo            "<div class='py-4'>";

        foreach ($arr[1] as $key) {
            echo            "<div class='py-2'>";
            echo                "<a href='$arr[2].$key' target='_blank'><i class='fas fa-angle-right'></i> $key</a>";
            echo            "</div>";
        }

        echo            "</div>";
        echo        "</div>";
        echo    "</div>";
        echo "</div>";
    }
}