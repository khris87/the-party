<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-info mb-5">
    <a class="navbar-brand" href="http://localhost/theParty/"><div id="brand"></div></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php $menu = wp_get_nav_menu_items('navParty');
                foreach($menu as $key => $value){ ?>
                    <li class="nav-item ml-4">
                        <a class="nav-link" href="<?php echo $value->url ?>"><?php echo $value->title ?></a>
                    </li>
            <?php } ?>
        </ul>

        <!--<form class="form-inline my-2 my-lg-0 float-right">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>-->
    </div>

</nav>