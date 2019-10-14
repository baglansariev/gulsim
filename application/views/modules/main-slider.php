<?php if(isset($slider)): ?>
    <section id="main" class="main-slider">
        <div class="slides owl-carousel">
            <?php foreach ($slider as $slide): ?>
                <div class="slide-image" style="background-image: url('<?php echo $slide['img'] ?>')">
<!--                    <img src="--><?php //echo $slide['img'] ?><!--" alt="">-->
                    <div class="slide-content">
                        <div class="slide-text">
                            <h1 class="slide-title"><?php echo $slide['title'] ?></h1>
                            <p class="slide-subtitle"><?php echo $slide['subtitle'] ?></p>
                            <div class="slide-buttons">
                                <?php foreach ($slide['links'] as $link): ?>
                                    <a href="<?php echo $link['link'] ?>" class="<?php echo $link['class'] ?>"><?php echo $link['text'] ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
