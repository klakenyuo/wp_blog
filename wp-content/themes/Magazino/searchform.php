<form action="<?php esc_url(home_url('/'))?>">
    <div class="form-group">
        <input type="search" name="s" id="search" value="<?= get_search_query( );?>" placeholder="What are you looking for?">
        <button type="submit" class="submit"><i class="icon-search-1"></i></button>
    </div>
</form>