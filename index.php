<?php

get_header();

$apartment_args = array(
    'post_type' => 'apartment',
    'posts_per_page' => 8,
);
$apartment_query = new WP_Query($apartment_args);

$provincia_list = [];
if ($apartment_query->have_posts()) {
    while ($apartment_query->have_posts()) {
        $apartment_query->the_post();
        $provincia_list[]  = get_field('comune');
    }
    wp_reset_query();
}
$unq_province_list = array_unique($provincia_list);

?>
<style>
    .elementor-element.elementor-element-34c58d2a.e-flex.e-con-boxed.e-con.e-parent {
        display: none;
    }

    .swiper-slide {
        width: 100% !important;
        height: 170px;
    }

    .swiper-slide img {
        height: 100% !important;
        width: 100% !important;
        object-fit: cover !important;
    }

    .apartment_inner {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 5;
    }

    .aratment-popup-modal .modal-body-grid .apartment-shord-desc {
        padding-bottom: 20px;
    }
    
    .gm-style-iw-chr {
        height: 10px;
    }


</style>

<main>
    <section class="trova-search-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="search-flex">
                            <div class="search-box flex-grow-1">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Cerca..">
                                    <div class="icon"><i class="fa-light fa-magnifying-glass"></i></div>
                                </div>
                            </div>
                            <div class="city-box fields-width d-none">
                                <select class="custom-selecttwo">
                                    <option value="tutte">tutte le citta</option>
                                    <option value="Misano">Misano adriatico</option>
                                    <option value="Pesaro">Pesaro</option>
                                    <option value="riccione">riccione</option>
                                    <option value="rimini">rimini</option>
                                </select>
                            </div>
                            <div class="zone-box fields-width d-none">
                                <select class="custom-selecttwo">
                                    <option value="tutte">tutte le citta</option>
                                    <option value="Misano">Misano adriatico</option>
                                    <option value="Pesaro">Pesaro</option>
                                    <option value="riccione">riccione</option>
                                    <option value="rimini">rimini</option>
                                </select>
                            </div>
                            <div class="avanzata-box d-none">
                                <div class="avanzata-btn"><i class="fa-light fa-gear"></i> avanzata</div>
                            </div>
                            <div class="buttonbox">
                                <button type="submit" class="btn btn-primary">val</button>
                            </div>
                        </div>
                        <div class="toggle-searchbox" style="display: none;">
                            <div class="toggle-search-grid">
                                <div class="single-box">
                                    <select class="custom-select-three wide">
                                        <option value="tutte">tutte le citta</option>
                                        <option value="Misano">Misano adriatico</option>
                                        <option value="Pesaro">Pesaro</option>
                                        <option value="riccione">riccione</option>
                                        <option value="rimini">rimini</option>
                                    </select>
                                </div>
                                <div class="single-box">
                                    <select class="custom-select-three wide">
                                        <option value="tutte">tutte le citta</option>
                                        <option value="Misano">Misano adriatico</option>
                                        <option value="Pesaro">Pesaro</option>
                                        <option value="riccione">riccione</option>
                                        <option value="rimini">rimini</option>
                                    </select>
                                </div>
                                <div class="single-box">
                                    <select class="custom-select-three wide">
                                        <option value="tutte">tutte le citta</option>
                                        <option value="Misano">Misano adriatico</option>
                                        <option value="Pesaro">Pesaro</option>
                                        <option value="riccione">riccione</option>
                                        <option value="rimini">rimini</option>
                                    </select>
                                </div>
                                <div class="single-box">
                                    <input type="text" class="form-control" placeholder="Min. Area">
                                </div>
                                <div class="single-box">
                                    <input type="text" class="form-control" placeholder="Max. Area">
                                </div>
                                <div class="single-box">
                                    <select class="custom-select-three wide">
                                        <option value="tutte">tutte le citta</option>
                                        <option value="Misano">Misano adriatico</option>
                                        <option value="Pesaro">Pesaro</option>
                                        <option value="riccione">riccione</option>
                                        <option value="rimini">rimini</option>
                                    </select>
                                </div>
                                <div class="single-box">
                                    <select class="custom-select-three wide">
                                        <option value="tutte">tutte le citta</option>
                                        <option value="Misano">Misano adriatico</option>
                                        <option value="Pesaro">Pesaro</option>
                                        <option value="riccione">riccione</option>
                                        <option value="rimini">rimini</option>
                                    </select>
                                </div>
                                <div class="single-box">
                                    <input type="text" class="form-control" placeholder="ID Immobile">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <section class="trova-cards-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="showcard-flex-parent">
                        <div class="left-box">
                            <div class="shorting-header">
                                <label for="">Ordina per :</label>
                                <select class="wide on_change_select_val">
                                    <option value="tutte">tutti i paesi</option>
                                    <?php
                                    foreach ($unq_province_list as $single_province) {
                                    ?>
                                        <option value="<?php echo $single_province; ?>">
                                            <?php echo $single_province; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <div class="list-view-btn active"><i class="fa-sharp fa-solid fa-list"></i></div>
                                <div class="grid-view-btn "><i class="fa-sharp fa-light fa-grid-2"></i></div>
                            </div>
                            <div class="single-card-wrapper">
                                <div class="list-view-card">


                                    <?php
                                    $lat_long_values = [];
                                    $lat_inc = 0;
                                    if ($apartment_query->have_posts()) {


                                        while ($apartment_query->have_posts()) {
                                            $apartment_query->the_post();
                                            $post_id        = get_the_ID();
                                            $prezzo         = get_field('prezzo');
$formatted_prezzo = number_format($prezzo, 0, '', '\'');

// echo $formatted_prezzo;

                                            $indirizzo      = get_field('indirizzo');
                                            $camere         = get_field('camere');
                                            $bagni          = get_field('bagni');
                                            $totalmq        = get_field('totalmq');
                                            $latitudine     = get_field('latitudine');
                                            $longitudine    = get_field('longitudine');
                                            $propertyImages = get_field('gallery');
                                            $comune         = get_field('comune');
                                            // $provincia      = get_field('provincia');

                                            $final_lat_int = $lat_inc++;

                                            $img_url = [];
                                            foreach ($propertyImages as $item) {
                                                $img_details     = $item;
                                                if ($img_details['url']) {
                                                    $img_url[] = $img_details['url'];
                                                } else {
                                                    $img_url[] = wp_get_attachment_image_url($item, 'full');
                                                }
                                            }


                                            $lat_long_values[$final_lat_int]['lat'] = $latitudine;
                                            $lat_long_values[$final_lat_int]['lng'] = $longitudine;
                                            $lat_long_values[$final_lat_int]['title'] = get_the_title();
                                            $lat_long_values[$final_lat_int]['price'] = $prezzo;
                                            $lat_long_values[$final_lat_int]['image'] = $img_url[0];
                                            $lat_long_values[$final_lat_int]['link'] = get_the_permalink();
                                    ?>
                                            <div meta_value="<?php echo $comune;?>" class="single-card get_lat_long_val" lat_val="<?php echo $latitudine; ?>" long_val="<?php echo $longitudine; ?>">
                                                <div class="card">
                                                    <div class="row g-0">
                                                        <div class="col-md-4">
                                                            <div class="spot-image">
                                                                <div class="tag  d-none">in evidenza</div>
                                                                <div class="expand-popup" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $post_id; ?>">
                                                                    <i class="fa-light fa-arrow-up-right-and-arrow-down-left-from-center"></i>
                                                                </div>
                                                                <div class="swiper trova-card-slider">
                                                                    <div class="swiper-wrapper">
                                                                        <?php
                                                                        foreach ($img_url as $single_url) {
                                                                        ?>
                                                                            <div class="swiper-slide">
                                                                                <a href="<?php the_permalink(); ?>"> </a>
                                                                                <img src="<?php echo $single_url;
                                                                                            ?>">
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </div>
                                                                    <div class="swiper-button-next"></div>
                                                                    <div class="swiper-button-prev"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card-body">
                                                                <div class="apartment-price">€<?php echo $formatted_prezzo; ?>
                                                                </div>
                                                                <h3>
                                                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                                                </h3>
                                                                <address><?php echo $indirizzo; ?></address>
                                                                <ul>
                                                                    <li><i class="fa-light fa-bed-front"></i> <?php echo $camere; ?></li>
                                                                    <li><i class="fa-light fa-shower"></i> <?php echo $bagni; ?></li>
                                                                    <li><i class="fa-light fa-ruler-triangle"></i> <?php echo $totalmq; ?>
                                                                        m<sup>2</sup>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }

                                    $all_locations = json_encode($lat_long_values);

                                    ?>
                                </div>


                                <div class="grid-view-card d-none">
                                    <div class="card-grid-parent">
                                        <?php

                                        if ($apartment_query->have_posts()) {
                                            while ($apartment_query->have_posts()) {
                                                $apartment_query->the_post();
                                                $post_id        = get_the_ID();
                                                $prezzo         = get_field('prezzo');
                                                $formatted_prezzo = number_format($prezzo, 0, '', '\'');

echo $formatted_prezzo;
                                                $indirizzo      = get_field('indirizzo');
                                                $camere         = get_field('camere');
                                                $bagni          = get_field('bagni');
                                                $totalmq        = get_field('totalmq');
                                                $latitudine     = get_field('latitudine');
                                                $longitudine    = get_field('longitudine');
                                                $propertyImages = get_field('gallery');
                                                $provincia      = get_field('provincia');
                                                $comune         = get_field('comune');

                                                $img_url = [];
                                                foreach ($propertyImages as $item) {
                                                    $img_details     = $item;
                                                    if ($img_details['url']) {
                                                        $img_url[] = $img_details['url'];
                                                    } else {
                                                        $img_url[] = wp_get_attachment_image_url($item, 'full');
                                                    }
                                                }
                                        ?>
                                                <div meta_value="<?php echo $comune;?>" class="single-card get_lat_long_val" lat_val="<?php echo $latitudine; ?>" long_val="<?php echo $longitudine; ?>">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="spot-image">
                                                                <div class="tag d-none">in evidenza</div>
                                                                <div class="expand-popup" data-bs-toggle="modal" data-bs-target="#exampleModal_<?php echo $post_id; ?>">
                                                                    <i class="fa-light fa-arrow-up-right-and-arrow-down-left-from-center"></i>
                                                                </div>
                                                                <div class="apartment-price">€<?php echo $formatted_prezzo; ?></div>
                                                                <div class="swiper trova-card-slider">
                                                                    <div class="swiper-wrapper">
                                                                        <?php
                                                                        foreach ($img_url as $single_url) {
                                                                        ?>
                                                                            <div class="swiper-slide">
                                                                                <a href="<?php the_permalink(); ?>"> </a>
                                                                                <img src="<?php echo $single_url;
                                                                                            ?>">
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>

                                                                    </div>
                                                                    <div class="swiper-button-next"></div>
                                                                    <div class="swiper-button-prev"></div>
                                                                </div>
                                                            </div>
                                                            <div class="card-contents">
                                                                <h3>
                                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                                </h3>
                                                                <address><?php echo $indirizzo; ?></address>
                                                                <ul>
                                                                    <li><i class="fa-light fa-bed-front"></i> <?php echo $camere; ?></li>
                                                                    <li><i class="fa-light fa-shower"></i> <?php echo $bagni; ?></li>
                                                                    <li><i class="fa-light fa-ruler-triangle"></i> <?php echo $totalmq; ?>
                                                                        m<sup>2</sup>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                            wp_reset_query();
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="right-box">
                            <div class="map-box set_api_map">


                                <style>
                                    #map {
                                        height: 950px;
                                        width: 100%;
                                    }

                                    .info-window-content a {
                                        display: flex;
                                        width: 100%;
                                        color: #000;
                                    }

                                    .info-window-content img {
                                        width: 200px;
                                        height: 150px;
                                        object-fit: cover;
                                    }

                                    .info-window-text {
                                        min-width: 210px;
                                        padding-left: 10px;
                                    }
                                </style>
                                <div id="map"></div>

                                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDoxGNvV5unInhQjt0viYOfnCtqI7DTExc&libraries=places&callback=initMap" async defer></script>


                                <script>
                                
                                let markers = [];
                                            let infoWindows = [];
                                            let currentInfoWindow = null;

                                            function initMap() {
                                                const center = {
                                                    lat: 43.82953149999999,
                                                    lng: 11.4969184
                                                };
                                                const map = new google.maps.Map(document.getElementById('map'), {
                                                    center: center,
                                                    zoom: 12
                                                });

                                                const locations = <?php echo $all_locations; ?>;

                                                locations.forEach(function(location) {
                                                    const marker = new google.maps.Marker({
                                                        position: {
                                                            lat: parseFloat(location.lat),
                                                            lng: parseFloat(location.lng)
                                                        },
                                                        map: map
                                                    });

                                                    const contentString = `
                                            <div class="info-window-content">
                                                <a href="${location.link}" target="_blank">
                                                    <img src="${location.image}" alt="${location.title}">
                                                    <div class="info-window-text">
                                                        <h3>${location.title}</h3>
                                                        <p>Price: €${location.price}</p>
                                                    </div>
                                                </a>
                                            </div>
                                            `;

                                                    const infoWindow = new google.maps.InfoWindow({
                                                        content: contentString
                                                    });

                                                    marker.addListener('click', function() {
                                                        if (currentInfoWindow) {
                                                            currentInfoWindow.close();
                                                        }
                                                        infoWindow.open(map, marker);
                                                        currentInfoWindow = infoWindow;
                                                    });

                                                    markers.push(marker);
                                                    infoWindows.push(infoWindow);
                                                });
                                            }



                                            document.addEventListener('DOMContentLoaded', function() {
                                                const buttons = document.querySelectorAll('.get_lat_long_val');

                                                buttons.forEach(button => {
                                                    button.addEventListener('mouseover', function() {
                                                        const lat = parseFloat(this.getAttribute('lat_val'));
                                                        const lng = parseFloat(this.getAttribute('long_val'));

                                                        markers.forEach((marker, index) => {
                                                            if (marker.getPosition().lat() === lat && marker.getPosition().lng() === lng) {
                                                                if (currentInfoWindow) {
                                                                    currentInfoWindow.close();
                                                                }
                                                                infoWindows[index].open(marker.getMap(), marker);
                                                                currentInfoWindow = infoWindows[index];
                                                            }
                                                        });
                                                    });

                                                    button.addEventListener('mouseout', function() {
                                                        if (currentInfoWindow) {
                                                            currentInfoWindow.close();
                                                            currentInfoWindow = null;
                                                        }
                                                    });
                                                });
                                            });
                                            
                                            
                                            
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    if ($apartment_query->have_posts()) {
        while ($apartment_query->have_posts()) {
            $apartment_query->the_post();
            $post_id        = get_the_ID();
            $prezzo         = get_field('prezzo');
            $indirizzo      = get_field('indirizzo');
            $camere         = get_field('camere');
            $bagni          = get_field('bagni');
            $totalmq        = get_field('totalmq');
            $latitudine     = get_field('latitudine');
            $longitudine    = get_field('longitudine');
            $propertyImages = get_field('gallery');

            $img_url = [];
            foreach ($propertyImages as $item) {
                $img_details     = $item;
                if ($img_details['url']) {
                    $img_url[] = $img_details['url'];
                } else {
                    $img_url[] = wp_get_attachment_image_url($item, 'full');
                }
            }
    ?>
            <!-- Modal -->
            <div class="modal fade aratment-popup-modal" id="exampleModal_<?php echo $post_id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-body-grid">
                                <div class="single-box">
                                    <div class="swiper trova-card-slider">
                                        <div class="swiper-wrapper">
                                            <?php
                                            foreach ($img_url as $single_url) {
                                            ?>
                                                <div class="swiper-slide" style="height: 500px;">
                                                    <a target="_blank" href="<?php the_permalink(); ?>"> </a>
                                                    <img style="height: 100%;" src="<?php echo $single_url; ?>">
                                                </div>
                                            <?php
                                            }
                                            ?>

                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                <div class="single-box">
                                    <div class="tags d-none">
                                        <span class="venditta">vendita</span>
                                        <span class="invenditta">in vendita</span>
                                    </div>
                                    <h3>
                                        <a href="#"><?php the_title() ?></a>
                                    </h3>
                                    <address><?php echo $indirizzo; ?></address>
                                    <div class="price-box">
                                        €<?php echo $prezzo; ?>
                                    </div>
                                    <div class="apartment-shord-desc">
                                        <div class="apartment_inner">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>

                                    <div class="facility-box">
                                        <ul>
                                            <li><i class="fa-light fa-bed-front"></i> <?php echo $camere; ?> Camere da letto</li>
                                            <li><i class="fa-light fa-shower"></i> <?php echo $bagni; ?> Bagni</li>
                                            <li><i class="fa-light fa-ruler-triangle"></i> <?php echo $totalmq; ?>
                                                m<sup>2</sup>
                                            </li>
                                        </ul>
                                    </div>
                                    <a target="_blank" href="<?php the_permalink(); ?>" class="dettagli">dettagli</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- modal end  -->
    <?php
        }
        wp_reset_query();
    }
    ?>



</main>

<?php
get_footer();
?>
