<?php if (!defined('FW')) die('Forbidden'); ?>

<?php if (isset($data['slides'])): ?>
    <section id="<?=$data['settings']['post_id']?>" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach ($data['slides'] as $id => $slide): ?>
                <li data-target="#<?=$data['settings']['post_id']?>" data-slide-to="<?=$id?>" class="<?=(!$id) ? 'active ': ''?>"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php foreach ($data['slides'] as $id => $slide): ?>
                <div class="carousel-item <?=(!$id) ? 'active ': ''?>">
                    <img class="d-block" data-src="<?=$slide['src'];?>"
                         src="<?=$slide['src'];?>" data-holder-rendered="true" width="100%">

                    <?php if (!empty($slide['desc']) && !empty($slide['desc'])): ?>

                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="title"><?php echo $slide['title'] ?></h3>
                        <p class="text"><?php echo $slide['desc'] ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <a class="carousel-control-prev" href="#<?=$data['settings']['post_id']?>" role="button" data-slide="prev" data-target="#<?=$data['settings']['post_id']?>">
            <i class="fa fa-angle-left fa-3x" aria-hidden="true" title="Пердыдущий слайд"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#<?=$data['settings']['post_id']?>" role="button" data-slide="next" data-target="#<?=$data['settings']['post_id']?>">
            <i class="fa fa-angle-right fa-3x" aria-hidden="true" title="Следующий слайд"></i>
            <span class="sr-only">Next</span>
        </a>
    </section>
<?php endif; ?>
