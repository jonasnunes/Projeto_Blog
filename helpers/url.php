<?php

    // informa onde é a base do sistema para linkar arquivos e estilos
    $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

    $LINKS_GOOGLE_FONTS = [
        "<link rel='preconnect' href='https://fonts.googleapis.com'>",
        "<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>",
        "<link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap' rel='stylesheet'>"
    ];