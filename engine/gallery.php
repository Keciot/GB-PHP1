<?php

function getGallery($arr) {
    $result = '';
    foreach ($arr as $value) {
        $result .= '<a href="/img/big/' . $value . '"><img src="/img/big/' . $value . '" alt="picture" width="300px"></a>';       
    }
    return $result;
}  