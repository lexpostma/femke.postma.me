<?php
    define( 'FEMKEWIT_HOST', getenv('FEMKEWIT_HOST') );
    define( 'FEMKEWIT_USER', getenv('FEMKEWIT_USER') );
    define( 'FEMKEWIT_PASS', getenv('FEMKEWIT_PASS') );
    define( 'FEMKEWIT_DB',   getenv('FEMKEWIT_DB') );
    
    $con = mysqli_connect(FEMKEWIT_HOST,FEMKEWIT_USER,FEMKEWIT_PASS,FEMKEWIT_DB);
?>
