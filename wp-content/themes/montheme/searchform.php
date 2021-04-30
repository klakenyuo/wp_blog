<form class="form-inline my-2 my-lg-0" action="<?php esc_url(home_url('/'))?>" >
    <input class="form-control mr-sm-2" type="search" placeholder="Recherche" name="s" id="search" aria-label="Search" value="<?= get_search_query( );?>">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
</form>