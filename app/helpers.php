<?php

if(!function_exists('page_Title')){
    function page_Title($title)
    {
    $Base_title = 'Laracarte - Liste des artisans';
    if($title === ''){
        return $Base_title;
    }
    else 
    return $title . ' | ' . $Base_title;
}

}
?>