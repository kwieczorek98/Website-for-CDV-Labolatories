<?php 

function getPageName(){

    $pagePath = $_SERVER['PHP_SELF'];

    $pageName = explode('/', $pagePath);
    
    switch (basename($pageName[1], '.php')) {
        case 'index':
            $pageName[1] = "Strona Główna";
            break;

        case 'offer':
            $pageName[1] = "Oferta";
            break;

        case 'about':
            $pageName[1] = "O nas";
            break;

        case 'gallery':
            $pageName[1] = "Galeria";
            break;
    
        case 'contact':
            $pageName[1] = "Kontakt";
            break;
    }

    print_r(ucfirst(basename($pageName[1], '.php'))); 
}
