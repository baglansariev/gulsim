<?php if(isset($programs)): ?>
    <section id="programms" class="programms">
        <div class="container">
            <h3 class="row-title title-center">SPA - Программы</h3>
            <div class="row">
                <?php foreach ($programs as $program): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="block programm">
                            <div class="block-image" style="background-image: url('<?php echo $program['img']; ?>')">
                                <span class="programm-duration"><?php echo $program['duration']; ?> мин</span>
                            </div>
                            <div class="block-content programm-content">
                                <h2 class="programm-title"><?php echo $program['title']; ?></h2>
                                <p class="programm-subtitle"><?php echo $program['subtitle']; ?></p>
                                <div class="programm-prices">
                                    <?php if($program['price_m']): ?>
                                        <p class="mens-price">
                                            <span>муж.</span>
                                            <span><?php echo $program['price_m']; ?> ₸</span>
                                        </p>
                                        <p class="womens-price">
                                            <span>жен.</span>
                                            <span><?php echo $program['price_w']; ?> ₸</span>
                                        </p>
                                    <?php else: ?>
                                        <p class="mens-price">
                                            <span></span>
                                            <span><?php echo $program['price_w']; ?> ₸</span>
                                        </p>
                                    <?php endif; ?>
                                </div>
                                <ul class="programm-services">
                                    <?php foreach($program['services'] as $service): ?>
                                        <li><?php echo $service['text']; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <a href="https://wa.me/77786696628" class="programm-button main-btn gen-btn">Записаться</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
