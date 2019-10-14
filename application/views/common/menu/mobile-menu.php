<div class="mobile-menu">
    <nav class="nav-mobile-menu">
        <span class="mobile-menu-close">
            <i class="fas fa-times"></i>
        </span>
        <ul>
            <?php if(isset($menu_list)): ?>
                <?php foreach($menu_list as $menu): ?>
                    <li <?php echo $menu['class'] ?> >
                        <a href="<?php echo $menu['url'] ?>"><?php echo $menu['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>
</div>