<?php include("header.php") ?>

<!-------------- POPULAR DISCOVER ------------->
<section class="pb-5 mt-5">
    <span class="display-6 d-block mb-4">Popular Movies</span>
    <div id="tampil" class="row justify-content-start">
        <style>
            .kartu-film {
                box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
            }

            .kartu-film img.poster {
                position: relative;
                -webkit-transition: all .4s linear;
                transition: all .4s linear;
            }

            .kartu-film:hover img.poster {
                -ms-transform: scale(1.2);
                -webkit-transform: scale(1.2);
                transform: scale(1.2);
            }

            .tanggal-film {
                font-size: 14px;
            }
        </style>

        <!----------- MOVIE PAGE 1 ------------->
        <?php foreach ($movie1['results'] as $row) {
        ?>
            <div class="col-lg-3 col-sm-6 mb-5">
                <div class="card h-100 kartu-film p-2 rounded-3 border-0">
                    <div class="overflow-hidden rounded-top">
                        <img src="https://image.tmdb.org/t/p/w500<?php echo $row['poster_path'] ?>" class="card-img-top poster" alt="blog">
                    </div>
                    <div class="card-body p-0 pt-3">
                        <span class="text-secondary tanggal-film">
                            <i class="fa-regular fa-calendar-days"></i>
                            <?php echo $row['release_date'] ?>
                            <i class="fa-solid fa-star text-warning ms-2"></i>
                            <?php echo $row['popularity'] ?>
                        </span>
                        <span class="card-title judul-film mt-2 mb-2 fs-6 fw-bold"><?php echo $row['title'] ?></span>
                    </div>

                    <!---------- MODAL BUTTON --------->
                    <div class="">
                        <a href="" class="btn btn-md text-light d-block" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id'] ?>" style="background:var(--dark);">Overview</a>
                    </div>
                    <!---------- MODAL BUTTON END --------->

                    <!----------- MODAL ---------->
                    <div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content border-0">
                                <div class="modal-header text-light border-0" style="background:var(--dark);">
                                    <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-bookmark me-2"></i>Overview<span></span></h5>
                                </div>
                                <div class="modal-body d-grid">
                                    <img src="https://image.tmdb.org/t/p/w500<?php echo $row['backdrop_path'] ?>" class="img-fluid rounded mb-3" alt="blog">
                                    <span class="fs-5 fw-bold"><?php echo $row['title'] ?><span class="vr mx-2"></span><small class="fs-6 fw-normal text-secondary">Vote <?php echo $row['vote_count'] ?> (<?php echo $row['vote_average'] ?>) <?php echo $row['original_language'] ?></small></span>
                                    <hr class="p-0 text-secondary">
                                    <span class="mb-2"><?php echo $row['overview'] ?></span>

                                </div>

                                <div class="modal-footer border-top border-light pt-2 pb-2">
                                    <button type="button" class="btn btn-link pt-0 pb-0 text-secondary text-decoration-none shadow-none" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--------- END --------->
                </div>
            </div>
        <?php } ?>

        <style>
            .more-movie.active {
                display: contents;
            }

            .more-movie {
                display: none;
            }

            .btn-more {
                background: var(--dark);
                color: #fff;
            }

            .btn-more.no-active {
                display: none;
            }
        </style>

        <div id="load" class="row justify-content-start more-movie">
            <!-------------- MOVIE PAGE 2 ----------------->
            <?php foreach ($movie2['results'] as $row) {
            ?>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div class="card h-100 kartu-film p-2 rounded-3 border-0">
                        <div class="overflow-hidden rounded-top">
                            <img src="https://image.tmdb.org/t/p/w500<?php echo $row['poster_path'] ?>" class="card-img-top poster" alt="blog">
                        </div>
                        <div class="card-body p-0 pt-3">
                            <span class="text-secondary tanggal-film">
                                <i class="fa-regular fa-calendar-days"></i>
                                <?php echo $row['release_date'] ?>
                                <i class="fa-solid fa-star text-warning ms-2"></i>
                                <?php echo $row['popularity'] ?>
                            </span>
                            <span class="card-title judul-film mt-2 mb-2 fs-6 fw-bold"><?php echo $row['title'] ?></span>
                        </div>

                        <!---------- MODAL BUTTON --------->
                        <div class="">
                            <a href="" class="btn btn-md text-light d-block" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id'] ?>" style="background:var(--dark);">Overview</a>
                        </div>
                        <!---------- MODAL BUTTON END --------->

                        <!----------- MODAL ---------->
                        <div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <div class="modal-header border-0 text-light" style="background:var(--dark);">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-bookmark me-2"></i>Overview<span></span></h5>
                                    </div>
                                    <div class="modal-body d-grid">
                                        <img src="https://image.tmdb.org/t/p/w500<?php echo $row['backdrop_path'] ?>" class="img-fluid rounded mb-3" alt="blog">
                                        <span class="fs-5 fw-bold"><?php echo $row['title'] ?><span class="vr mx-2"></span><small class="fs-6 fw-normal text-secondary">Vote <?php echo $row['vote_count'] ?> (<?php echo $row['vote_average'] ?>) <?php echo $row['original_language'] ?></small></span>
                                        <hr class="p-0 text-secondary">
                                        <span class="mb-2"><?php echo $row['overview'] ?></span>

                                    </div>

                                    <div class="modal-footer border-top border-light pt-2 pb-2">
                                        <button type="button" class="btn btn-link pt-0 pb-0 text-secondary text-decoration-none shadow-none" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------- END --------->
                    </div>
                </div>
            <?php } ?>

            <!-------------- MOVIE PAGE 3 ----------------->
            <?php foreach ($movie3['results'] as $row) {
            ?>
                <div class="col-lg-3 col-sm-6 mb-5">
                    <div class="card h-100 kartu-film p-2 rounded-3 border-0">
                        <div class="overflow-hidden rounded-top">
                            <img src="https://image.tmdb.org/t/p/w500<?php echo $row['poster_path'] ?>" class="card-img-top poster" alt="blog">
                        </div>
                        <div class="card-body p-0 pt-3">
                            <span class="text-secondary tanggal-film">
                                <i class="fa-regular fa-calendar-days"></i>
                                <?php echo $row['release_date'] ?>
                                <i class="fa-solid fa-star text-warning ms-2"></i>
                                <?php echo $row['popularity'] ?>
                            </span>
                            <span class="card-title judul-film mt-2 mb-2 fs-6 fw-bold"><?php echo $row['title'] ?></span>
                        </div>

                        <!---------- MODAL BUTTON --------->
                        <div class="">
                            <a href="" class="btn btn-md text-light d-block" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['id'] ?>" style="background:var(--dark);">Overview</a>
                        </div>
                        <!---------- MODAL BUTTON END --------->

                        <!----------- MODAL ---------->
                        <div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content border-0">
                                    <div class="modal-header border-0 text-light" style="background:var(--dark);">
                                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-bookmark me-2"></i>Overview<span></span></h5>
                                    </div>
                                    <div class="modal-body d-grid">
                                        <img src="https://image.tmdb.org/t/p/w500<?php echo $row['backdrop_path'] ?>" class="img-fluid rounded mb-3" alt="blog">
                                        <span class="fs-5 fw-bold"><?php echo $row['title'] ?><span class="vr mx-2"></span><small class="fs-6 fw-normal text-secondary">Vote <?php echo $row['vote_count'] ?> (<?php echo $row['vote_average'] ?>) <?php echo $row['original_language'] ?></small></span>
                                        <hr class="p-0 text-secondary">
                                        <span class="mb-2"><?php echo $row['overview'] ?></span>

                                    </div>

                                    <div class="modal-footer border-top border-light pt-2 pb-2">
                                        <button type="button" class="btn btn-link pt-0 pb-0 text-secondary text-decoration-none shadow-none" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--------- END --------->
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="d-flex justify-content-center mx-auto w-100">
            <button id="btn_more" onclick='func()' class="btn-more btn btn-md p-2 px-5">Load more</button>
        </div>
    </div>
</section>
<!-------------- POPULAR DISCOVER END ------------->

<?php include("footer.php") ?>