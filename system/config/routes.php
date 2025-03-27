<?php

/**
 * Array key => url
 * Array value => folder/controller-class/method (index method if none specified)
 */

return [
    // "/home" => "film/film/index",
    "/film" => "film/film/index",
    "/banner" => "banner/banner/index",
    "/bannerCreateOrUpdate" => "banner/banner/createOrUpdateBanner",
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
    "/account" => "account/account/index",
    "/createOrUpdateAccount" => "account/account/createOrUpdateAccount",
    "/login" => "user/user/login",
    "/logout" => "user/user/logout",
    "/filmChart" => "film/film/chartPage",
    "/" => "film/film/home",
];
