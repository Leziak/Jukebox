<?php

//PROVIDE THE $_GET PART OF THE URL

namespace leziak\mvc\routing;

function getControllerFromUrl()
{
    if(isset($_GET['page']) && $_GET['page']!=='list') return $_GET['page'];
    return 'index';
}