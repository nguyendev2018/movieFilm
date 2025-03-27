<?php

/**
 * Array key => url
 * Array value => folder/controller-class/method (index method if none specified)
 */

return [
    // "/home" => "film/film/index",
    "/film" => "film/film/index",
<<<<<<< HEAD
    "/banner" => "banner/banner/index",
    "/bannerCreateOrUpdate" => "banner/banner/createOrUpdateBanner",
=======
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
    "/createOrUpdateFilm" => "film/film/createOrUpdateFilm",
    "/category" =>"category/category/index",
    "/createOrUpdateCategory" =>"category/category/createOrUpdateCategory",
    "/country" =>"country/country/index",
    "/createOrUpdateCountry" =>"country/country/createOrUpdateCountry",
    "/genres" =>"genres/genres/index",
    "/createOrUpdateGenres" =>"genres/genres/createOrUpdateGenres",
    "/episode" => "episode/episode/index",
    "/createOrUpdateEpisode" => "episode/episode/createOrUpdateEpisode",
    "/filmDetail" => "film/film/detail",
    "/filmGenres" => "film/film/filmGenres",
    "/filmCountry" => "film/film/filmCountry",
<<<<<<< HEAD
    "/account" => "account/account/index",
    "/createOrUpdateAccount" => "account/account/createOrUpdateAccount",
    "/login" => "user/user/login",
    "/logout" => "user/user/logout",
    "/filmChart" => "film/film/chartPage",
=======

    "/login" => "user/user/login",
    "/logout" => "user/user/logout",
    "/film/chart" => "film/film/chartPage",
>>>>>>> 5789be564b16441a3c1ddba2bd92f78fcc90867a
    "/" => "film/film/home",
];
