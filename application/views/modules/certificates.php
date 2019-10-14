<?php if(isset($certificates)): ?>
    <section id="certificates" class="inner-section">
        <div class="container">
            <h3 class="row-title title-center">Сертификаты</h3>
            <div class="row">
                <div class="certificates owl-carousel">
                    <?php foreach($certificates as $certificate): ?>
                        <div class="certificate" style="background-image: url('<?php echo $certificate['thumbnail']; ?>')" data-img="<?php echo $certificate['img']; ?>"></div>
                    <?php endforeach; ?>
                </div>
                <div class="certificate-cover">
                    <div class="certificate-zoom">
                        <span class="certificate-close">
                            <i class="fas fa-times"></i>
                        </span>
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>