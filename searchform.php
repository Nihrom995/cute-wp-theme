<?php
/**
 * Created by PhpStorm.
 * User: Nihrom
 * Date: 26.07.2017
 * Time: 9:59
 */
?>
<form action="/" method="get" class="search-form">
    <div class="input-group">
        <input class="search-input form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Поиск..." />
        <span class="input-group-btn">
            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
        </span>
    </div>
</form>
