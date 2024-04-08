<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Infographic;
use App\Models\MarketPriceWatch;
use App\Models\RequestStatisticsData;
use App\Models\InformationGallary;
use App\Models\KeyStaticsticsProjectedPopulation;
use App\Models\KeyStaticsticsHealth;
use App\Models\KeyStaticsticsEconomy;
use App\Models\KeyStaticsticsAgriculture;
use App\Models\KeyStaticsticsEducation;

use Carbon\Carbon;

class GeneralStaticPageController extends Controller
{

    private function keyStatictstics($model, $take){

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        return $model::whereYear('created_at', $currentYear)
        ->whereMonth('created_at', '<=', $currentMonth) // Fetch records from any month up to the current month
        ->orderBy('created_at', 'desc') // Order by created_at in descending order to get the most recent records first
        ->take($take) // Take only the first record, which will be the most recent
        ->get();
    }

    public function home()
    {

        $requestData = RequestStatisticsData::get();
        $informationGallary = InformationGallary::get();

        $populationStat = $this->keyStatictstics(KeyStaticsticsProjectedPopulation::class, 2);
        $healthStat = $this->keyStatictstics(KeyStaticsticsHealth::class, 2);
        $economyStat = $this->keyStatictstics(KeyStaticsticsEconomy::class, 3);
        $agricStat = $this->keyStatictstics(KeyStaticsticsAgriculture::class, 4);
        $educationStat = $this->keyStatictstics(KeyStaticsticsEducation::class, 6);

        // Separate tab labels and tab texts from the request data
        $tabLabels = $requestData->pluck('tab_label')->toArray();
        $tabTexts = $requestData->pluck('tab_text')->toArray();

        $data = [
            'page_title' => 'Home',
            'page_class' => 'home',
            'tabLabels' => $tabLabels,
            'tabTexts' => $tabTexts,
            'informationGallary' => $informationGallary,
            'populationStat' => $populationStat,
            'healthStat' => $healthStat,
            'economyStat' => $economyStat,
            'educationStat' => $educationStat,
            // 'agricStat' => $agricStat,
        ];
        return view('home', $data);
    }

    public function news()
    {
        $news = Publication::orderBy('id', 'desc')->paginate(10);
        $data = [
            'page_title' => 'News',
            'page_class' => 'blog',
            'paginatedNews' => $news
        ];
        return view("news", $data);
    }


    public function domains($domain = null) {

        $data = [
            'page_title' => 'Domains',
            'page_class' => 'domains',
            'domain' => $domain,
        ];

        return view("domains", $data);
    }


    public function demography(){
        $data = [
            'page_title' => 'Demography',
            'page_class' => 'demography',
        ];
        return view("demography", $data);
    }

    public function education(){
        $data = [
            'page_title' => 'Education',
            'page_class' => 'education',
        ];
        return view("education", $data);
    }

    public function infographics(){
        $infographics = Infographic::orderBy('id', 'desc')->paginate(10);
        $data = [
            'page_title' => 'Infographics',
            'page_class' => 'infographics',
            'infographics' => $infographics,
        ];
        return view("infographics", $data);
    }

    public function about(){
        $data = [
            'page_title' => 'About Us',
            'page_class' => 'about',
        ];
        return view("about", $data);
    }

    public function sgsMessage() {

        $data = [
            'page_title' => 'SGs Message',
            'page_class' => 'about',
            'domain' => 'SGs Message',
        ];

        return view("sgsMessage", $data);
    }

    public function organizationalChart() {

        $data = [
            'page_title' => 'Organizational Chart',
            'page_class' => 'about',
            'domain' => 'Organizational Chart',
        ];

        return view("organizationalChart", $data);
    }

    public function strategicPlan() {

        $data = [
            'page_title' => 'Organizational Chart',
            'page_class' => 'about',
            'domain' => 'Organizational Chart',
        ];

        return view("strategicplan", $data);
    }

    public function contact(){
        $data = [
            'page_title' => 'Contact Us',
            'page_class' => 'contact',
        ];
        return view("contact", $data);
    }

    public function dataLab(){
        $data = [
            'page_title' => 'Data Lab',
            'page_class' => 'dataLab',
        ];
        return view("dataLab", $data);
    }

    public function relatedLinks(){
        $data = [
            'page_title' => 'Related Links',
            'page_class' => 'relatedLinks',
        ];
        return view("related-links", $data);
    }

    public function careers(){
        $data = [
            'page_title' => 'Careers',
            'page_class' => 'careers',
        ];
        return view("careers", $data);
    }

    public function terms(){
        $data = [
            'page_title' => 'Terms & Condition',
            'page_class' => 'terms',
        ];
        return view("terms", $data);
    }

    public function siteMap(){
        $data = [
            'page_title' => 'Privacy Policy',
            'page_class' => 'site',
        ];
        return view("siteMap", $data);
    }

    public function privacyPolicy(){
        $data = [
            'page_title' => 'Privacy Policy',
            'page_class' => 'privacy',
        ];
        return view("privacyPolicy", $data);
    }

    public function faqs(){
        $data = [
            'page_title' => 'FAQs',
            'page_class' => 'faqs',
        ];
        return view("faqs", $data);
    }
}
