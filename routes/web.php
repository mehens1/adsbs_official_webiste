<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralStaticPageController;
use App\Http\Controllers\PublicationsController;

Route::get("/", [GeneralStaticPageController::class, 'home'])->name("home");
Route::get("news", [GeneralStaticPageController::class, 'news'])->name("news");
Route::get('/domains/{domain}', [GeneralStaticPageController::class, 'domains'])->where('domain', 'education|agriculture|health|economy|foreign-trade|tourism|transport')->name('domainSubpages');

Route::get("domains", [GeneralStaticPageController::class, 'domains'])->name("domains");
Route::get("domains/demography", [GeneralStaticPageController::class, 'demography'])->name("demography");
Route::get("domains/education", [GeneralStaticPageController::class, 'education'])->name("education");

Route::get("infographics", [GeneralStaticPageController::class, 'infographics'])->name("infographics");


Route::get("about-us", [GeneralStaticPageController::class, 'about'])->name("about");
Route::get("about-us/sgs-message", [GeneralStaticPageController::class, 'sgsMessage'])->name("sgsMessage");
Route::get("about-us/organizational-chart", [GeneralStaticPageController::class, 'organizationalChart'])->name("organizationalChart");

Route::get("contact-us", [GeneralStaticPageController::class, 'contact'])->name("contact");

Route::get("related-links", [GeneralStaticPageController::class, 'relatedLinks'])->name("relatedLinks");
Route::get("careers", [GeneralStaticPageController::class, 'careers'])->name("careers");
Route::get("faqs", [GeneralStaticPageController::class, 'faqs'])->name("faqs");

Route::get("terms-and-conditions", [GeneralStaticPageController::class, 'terms'])->name("terms");
Route::get("privacy-policy", [GeneralStaticPageController::class, 'privacyPolicy'])->name("privacyPolicy");
Route::get("site-map", [GeneralStaticPageController::class, 'siteMap'])->name("siteMap");


Route::get("publications", [PublicationsController::class, 'index'])->name("publications");
Route::get("publications/{page}", [PublicationsController::class, 'subpage'])->name("publicationSubpage");


Route::get("data-lab", [GeneralStaticPageController::class, 'dataLab'])->name("dataLab");



