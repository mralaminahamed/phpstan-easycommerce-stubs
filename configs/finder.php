<?php
/**
 * Which EasyCommerce files to read.
 *
 * EasyCommerce keeps its PHP surface under `app/`; `vendor/` is deliberately left out, since those packages ship their own stubs and this file should not become the authority on classes it does not own.
 */

use StubsGenerator\Finder;

return Finder::create()
    ->in( array(
        'source/easycommerce/app',
    ) )
    ->append(
        Finder::create()
            ->in( array( 'source/easycommerce' ) )
            ->files()
            ->depth( '< 1' )
            ->path( 'easycommerce.php' )
    )
    ->sortByName( true )
;
