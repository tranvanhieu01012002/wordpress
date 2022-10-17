<?php
function display_api($arr){
    foreach ($arr as $key) {
       echo test_show_api($key);
    }
}
function show_film_object($object)
{
    return 
        '<div>
            <ul>
                <li>
                    name: '.$object->name??''.'
                </li>
                <li>
                    time: '.$object->time??''.'
                </li>
                <li>
                    note: '.$object->note??''.'
                </li>
                <li>
                    director: '.$object->director??''.'
                </li>
                <li>
                    <img src=" '.$object->name??''.'"/>
                </li>
            </ul>
        </div>';
}
function test_show_api($object){
    $img = $object->img??'';
    return ' <img src='.$img.'>';
}

?>


