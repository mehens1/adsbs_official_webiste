<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Infographic;
use App\Models\MarketPriceWatch;

class GeneralStaticPageController extends Controller
{

    //
    public function home(){

        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();
        $prices = MarketPriceWatch::all();

        $data = [
            'page_title' => 'Home',
            'page_class' => 'home',
            'publications' => $publications,
            'prices' => $prices,
        ];
        return view('home', $data);
    }

    public function news(){
        $news = Publication::orderBy('id', 'desc')->paginate(10);
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'News',
            'page_class' => 'blog',
            'publications' => $publications,
            'paginatedNews' => $news
        ];
        return view("news", $data);
    }


    public function domains($domain = null) {

        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Domains',
            'page_class' => 'domains',
            'domain' => $domain,
            'publications' => $publications
        ];

        return view("domains", $data);
    }


    public function demography(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Demography',
            'page_class' => 'demography',
            'publications' => $publications
        ];
        return view("demography", $data);
    }

    public function education(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Education',
            'page_class' => 'education',
            'publications' => $publications
        ];
        return view("education", $data);
    }

    public function infographics(){
        $infographics = Infographic::orderBy('id', 'desc')->paginate(10);
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Infographics',
            'page_class' => 'infographics',
            'infographics' => $infographics,
            'publications' => $publications
        ];
        return view("infographics", $data);
    }

    public function about(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'About Us',
            'page_class' => 'about',
            'publications' => $publications
        ];
        return view("about", $data);
    }

    public function sgsMessage() {

        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'SGs Message',
            'page_class' => 'about',
            'domain' => 'SGs Message',
            'publications' => $publications
        ];

        return view("sgsMessage", $data);
    }

    public function organizationalChart() {

        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Organizational Chart',
            'page_class' => 'about',
            'domain' => 'Organizational Chart',
            'publications' => $publications
        ];

        return view("organizationalChart", $data);
    }

    public function strategicPlan() {

        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Organizational Chart',
            'page_class' => 'about',
            'domain' => 'Organizational Chart',
            'publications' => $publications
        ];

        return view("strategicplan", $data);
    }

    public function contact(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Contact Us',
            'page_class' => 'contact',
            'publications' => $publications
        ];
        return view("contact", $data);
    }

    public function dataLab(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Data Lab',
            'page_class' => 'dataLab',
            'publications' => $publications
        ];
        return view("dataLab", $data);
    }

    public function relatedLinks(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Related Links',
            'page_class' => 'relatedLinks',
            'publications' => $publications
        ];
        return view("related-links", $data);
    }

    public function careers(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Careers',
            'page_class' => 'careers',
            'publications' => $publications
        ];
        return view("careers", $data);
    }

    public function terms(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Terms & Condition',
            'page_class' => 'terms',
            'publications' => $publications
        ];
        return view("terms", $data);
    }

    public function siteMap(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Privacy Policy',
            'page_class' => 'site',
            'publications' => $publications
        ];
        return view("siteMap", $data);
    }

    public function privacyPolicy(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'Privacy Policy',
            'page_class' => 'privacy',
            'publications' => $publications
        ];
        return view("privacyPolicy", $data);
    }

    public function faqs(){
        $publications = Publication::orderBy('id', 'desc')->limit(10)->get();

        $data = [
            'page_title' => 'FAQs',
            'page_class' => 'faqs',
            'publications' => $publications
        ];
        return view("faqs", $data);
    }
}
