<?php

function loadBanners($filePath) {
    if (file_exists($filePath)) {
        $jsonData = file_get_contents($filePath);
        return json_decode($jsonData, true);
    } else {
        return [];
    }
}

function displayCities($cities) {
    foreach ($cities["cities"] as $city) {
        ?>
        <div class="item">
            <div class="thumb">
                <img src="<?php echo htmlspecialchars($city['offer']); ?>" alt="">
            </div>
            <div class="text">
                <h4><?php echo htmlspecialchars($city['name']); ?><br><span><i class="fa fa-users"></i> <?php echo htmlspecialchars($city['check_ins']); ?> Check Ins</span></h4>
                <h6><?php echo htmlspecialchars($city['price_per_person']); ?><br><span>/person</span></h6>
                <div class="line-dec"></div>
                <ul>
                    <li>Deal Includes:</li>
                    <?php foreach ($city["deal_includes"] as $deal): ?>
                        <li><i class="fa fa-taxi"></i> <?php echo htmlspecialchars($deal); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="main-button">
                    <a href="reservation.php">Make a Reservation</a>
                </div>
            </div>
        </div>
        <?php
    }
}

function displayCityImages($cities) {
    foreach ($cities["cities"] as $city) {
        ?>
        <div class="item">
            <div class="thumb">
                <img src="<?php echo htmlspecialchars($city['image']); ?>" alt="<?php echo htmlspecialchars($city['name']); ?>">
                <h4><?php echo htmlspecialchars($city['name']); ?></h4>
            </div>
        </div>
        <?php
    }
}

function displayCountries($countries) {
    foreach ($countries as $country) {
        ?>
        <div class="col-lg-12">
            <div class="item">
                <div class="row">
                    <div class="col-lg-4 col-sm-5">
                        <div class="image">
                            <img src="<?php echo strtolower($country['image']); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-7">
                        <div class="right-content">
                            <h4><?php echo strtoupper($country['name']); ?></h4>
                            <span><?php echo $country['region']; ?></span>
                            <div class="main-button">
                                <a href="about.php">Explore More</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            <ul class="info">
                                <li><i class="fa fa-user"></i> <?php echo $country['population']; ?> People</li>
                                <li><i class="fa fa-globe"></i> <?php echo $country['territory']; ?></li>
                                <li><i class="fa fa-home"></i> <?php echo $country['avg_price']; ?></li>
                            </ul>
                            <div class="text-button">
                                <a href="about.php">Need Directions ? <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

?>