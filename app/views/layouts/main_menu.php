<?php
$menu = Router::getMenu('menu_acl');
$currentPage =H::currentPage();
?>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Brand LOG.o</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">


                <ul class="navbar-nav mr-auto">
                    <?php foreach ($menu as $key => $val):?>
                        <?php if (is_array($val)): $active = '';?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?=$key;?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <?php foreach ($val as $k => $v) : $active = ($v == $currentPage )? 'active' : ''; ?>
                                        <?php if ($k == 'seperator'):  ?>
                                                <div class="dropdown-divider"></div>
                                        <?php else:?>
                                            <a href="<?=$v;?>" class="dropdown-item <?=$active?>"><?=$k;?></a>
                                        <?php endif ?>
                                    <?php endforeach; ?>
                                </div>
                            </li>
                        <?php else:  $active = ($val == $currentPage) ? 'active' : '';?>
                            <li class="nav-item"><a href="<?=$val;?>" class="<?=$active?> nav-link"><?=$key;?></a></li>
                        <?php endif; ?>

<!--                        <li class="nav-item active">-->
<!--                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
<!--                        </li>-->


                    <?php endforeach; ?>
                </ul>
                <?php if(Users::currentUser()):?>
                        <span class="navbar-text">Hello <?= Users::currentUser()->fname;?></span>
                <?php endif;?>


            </div>
        </nav>