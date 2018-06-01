<?php

//PROVIDE THE $_GET PART OF THE URL

namespace leziak\mvc\routing;

function getControllerFromUrl()
{
    if(isset($_GET['page'])) return $_GET['page'];
    return 'index';
}