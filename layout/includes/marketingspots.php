
<div class="marketing">
    <div class="row-fluid" id="middle-blocks">
        <div class="span3">
            <!-- Advert #1 -->
            <div class="service">
                <!-- Icon & title. Font Awesome icon used. -->
            <h5><span><i class="fa fa-<?php echo $PAGE->theme->settings->marketing1icon ?>"></i> <?php echo $PAGE->theme->settings->marketing1 ?></span></h5>
            <?php if ($hasmarketing1image) { ?>
            	<div class="marketing-image1"></div>
            <?php } ?>
            
            <?php echo $PAGE->theme->settings->marketing1content ?>
            <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing1buttonurl ?>" id="button"><?php echo $PAGE->theme->settings->marketing1buttontext ?></a></p>
        </div>
        </div>
        
        <div class="span3">
            <!-- Advert #2 -->
            <div class="service">
                <!-- Icon & title. Font Awesome icon used. -->
                <h5><span><i class="fa fa-<?php echo $PAGE->theme->settings->marketing2icon ?>"></i> <?php echo $PAGE->theme->settings->marketing2 ?></span></h5>
                <?php if ($hasmarketing2image) { ?>
                	<div class="marketing-image2"></div>
                <?php } ?>
                
                <?php echo $PAGE->theme->settings->marketing2content ?>
                <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing2buttonurl ?>" id="button"><?php echo $PAGE->theme->settings->marketing2buttontext ?></a></p>
            </div>
        </div>
        
        <div class="span3">
            <!-- Advert #3 -->
            <div class="service">
                <!-- Icon & title. Font Awesome icon used. -->
                <h5><span><i class="fa fa-<?php echo $PAGE->theme->settings->marketing3icon ?>"></i> <?php echo $PAGE->theme->settings->marketing3 ?></span></h5>
                <?php if ($hasmarketing3image) { ?>
                	<div class="marketing-image3"></div>
                <?php } ?>
                
                <?php echo $PAGE->theme->settings->marketing3content ?>
                <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing3buttonurl ?>" id="button"><?php echo $PAGE->theme->settings->marketing3buttontext ?></a></p>
            </div>
        </div>
        
        <div class="span3">
            <!-- Advert #4 -->
            <div class="service">
                <!-- Icon & title. Font Awesome icon used. -->
                <h5><span><i class="fa fa-<?php echo $PAGE->theme->settings->marketing3icon ?>"></i> <?php echo $PAGE->theme->settings->marketing4 ?></span></h5>
                <?php if ($hasmarketing4image) { ?>
                	<div class="marketing-image4"></div>
                <?php } ?>
                
                <?php echo $PAGE->theme->settings->marketing4content ?>
                <p align="right"><a href="<?php echo $PAGE->theme->settings->marketing3buttonurl ?>" id="button"><?php echo $PAGE->theme->settings->marketing4buttontext ?></a></p>
            </div>
        </div>
    </div>
</div>