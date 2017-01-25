<?php
    define( 'FEMKEWIT_HOST', getenv('FEMKEWIT_HOST') );
    define( 'FEMKEWIT_ADMIN_USER', getenv('FEMKEWIT_USER') );
    define( 'FEMKEWIT_ADMIN_PASS', getenv('FEMKEWIT_PASS') );
    define( 'FEMKEWIT_DB',   getenv('FEMKEWIT_DB') );
    
    $con = mysqli_connect(FEMKEWIT_HOST,FEMKEWIT_ADMIN_USER,FEMKEWIT_ADMIN_PASS,FEMKEWIT_DB);
?>