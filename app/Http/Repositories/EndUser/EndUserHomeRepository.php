<?php
namespace App\Http\Repositories\EndUser;

use App\Http\Interfaces\EndUser\EndUserHomeInterface;

use App\Http\Traits\PartnerTrait;
use App\Http\Traits\TestimonialsTrait;
use App\Models\DeliveryType;
use App\Models\Partner;
use App\Models\SWelcomeTitle;
use App\Models\employe;
use App\Http\Traits\InfoSiteTrait;
use App\Models\InfoSite;

use App\Models\latest_news;
use App\models\convention;

use App\Models\Testimonial;


class EndUserHomeRepository implements EndUserHomeInterface
{
    use InfoSiteTrait;
    use TestimonialsTrait;
    use PartnerTrait;

    private $infoSiteModel;
    private $dileveryModel;
    private $employeModel;
    private $sectionModel;
    private $latest_newsModel;
    private $convention;
    private $testimonialModel;
    private $partnerModel;

    public function __construct(InfoSite $infoSite, DeliveryType $delivery , SWelcomeTitle $section ,

            employe $employe ,latest_news $latest_news ,convention $convention , Testimonial $testimonial, Partner $partner )





    {
        $this->infoSiteModel = $infoSite;
        $this->dileveryModel  =  $delivery ;
        $this->sectionModel  =  $section ;
        $this->employeModel  =  $employe ;


        $this->latest_newsModel = $latest_news;
        $this->convention = $convention;

        $this->testimonialModel = $testimonial;
        $this->partnerModel = $partner;

    }

    public function homePage()
    {
        $infos = $this->show_all_info();
        $logistics =  $this->dileveryModel::where('is_active_limit' , 1)->get();
        $Welcome =  $this->dileveryModel::where('is_active_section' , 1)->get();
        $sectionTitle =   $this->sectionModel::where('is_active' , 1)->first();
        $employe =   $this->employeModel::where('is_active' , 1)->first();
        $news = $this->latest_newsModel::Where('is_active' , 1)->latest()->first();
        $convention =$this->convention::Where('is_active' , 1)->latest()->first();
        $testimonials = $this->show_all_testimonials()->where('status', 1);
        $partners = $this->show_all_partners();
        $All_delivery=$this->dileveryModel::get();




        return view('endUser.index', compact('infos','logistics','sectionTitle','Welcome' ,'employe' ,'news' ,'convention','testimonials', 'partners','All_delivery'));




    }


    public function priceOrder()
    {
        return view('endUser.price-order');
    }

    public function testimonial()
    {
        return view('endUser.testimonial');
    }
}

