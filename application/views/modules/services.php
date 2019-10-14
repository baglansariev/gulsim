<?php if(isset($services)): ?>
    <section id="services" class="services inner-section">
        <div class="container">
            <h3 class="row-title title-center">Услуги</h3>
            <div class="row">
                <?php foreach($services as $service): ?>
                    <div class="col-lg-6 col-sm-12">
                        <div class="block service">
                            <div class="block-image service-img" style="background-image: url('<?php echo $service['img']; ?>')"></div>
                            <div class="block-content service-content">
                                <h2 class="service-title"><?php echo $service['title']; ?></h2>
                                <div class="service-list">
                                    <?php foreach($service['list'] as $service_point): ?>
                                        <p class="service-point">
                                            <span class="service-name"><?php echo $service_point['name']; ?> <i>(<?php echo $service_point['duration']; ?> мин)</i></span>
                                            <span class="service-price"><?php echo number_format($service_point['price'], 0, '', ' '); ?> ₸</span>
                                        </p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
