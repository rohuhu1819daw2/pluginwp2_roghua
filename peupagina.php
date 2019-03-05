<?php
/*
Plugin Name: Peu de pàgina per defecte per a noves entrades
Plugin URI: https://github.com/rohuhu1819daw2/pluginwp2_roghua.git
Description: Crea peus de pàgina per defecte per a noves entrades
Version: 0.1
Author: Roger Huanuco
Author URI: https://github.com/rohuhu1819daw2
License: GNU GPLv3
*/

function admin_menu_peu_pagina(){
        $titolPagina="Peu de pagina per defecte";
        $titolEntrada="Peu de pagina per defecte";
        $role="administrator";
        $id="peu_pagina_per_defecte";
    add_menu_page($titolPagina,$titolEntrada,$role,$id);
}
add_action('admin_menu','admin_menu_peu_pagina');

?>
