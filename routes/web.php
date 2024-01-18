<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\magazine\CmsController;
use App\Http\Controllers\magazine\EbookController;
use App\Http\Controllers\magazine\MagazineController;
use App\Http\Controllers\advertise\AdvertiseController;
use App\Http\Controllers\industryupdates\NewsController;
use App\Http\Controllers\industryupdates\EventController;
use App\Http\Controllers\knowledgebank\ArticleController;
use App\Http\Controllers\knowledgebank\ProjectsController;
use App\Http\Controllers\knowledgebank\BookshelfController;
use App\Http\Controllers\knowledgebank\CasestudiesController;
use App\Http\Controllers\knowledgebank\TechnotrendsController;
use App\Http\Controllers\industryupdates\PressreleaseController;
use App\Http\Controllers\knowledgebank\IndustryreportsController;
use App\Http\Controllers\knowledgebank\ResearchinsightsController;





















/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[HomeController::class,'index'])->name('mainhome');

Route::get('audiencebg',[FormController::class,'audiencebg'])->name('audiencebg');
// sitemap
Route::get('sitemap.xml', [SitemapController::class,'index']);
//Route::get('/','HomeController@index')->name('mainhome');
// Knowledge bank Routes
Route::group(['namespace'=>'knowledgebank'], function () {

	//static routes
	Route::get('articles/zebra-hospital-vision-study-global',[ArticleController::class,'zebrahospital']);
	

	//Articles
	Route::get('articles',[ArticleController::class,'index'])->name('articles');
	Route::get('articles/{url}',[ArticleController::class,'show'])->name('articles.url');
	Route::get('articles/more/{offset}',[ArticleController::class,'more'])->name('articles.loadmore');



	//Interviews
	Route::get('interviews',[InterviewsController::class,'index'])->name('interviews');
	Route::get('interviews/{url}',[InterviewsController::class,'show'])->name('interviews.url');
	Route::get('interviews/more/{offset}',[InterviewsController::class,'more'])->name('articles.loadmore');

	//whitepapers
	Route::get('whitepapers',[WhitepapersController::class,'index'])->name('whitepapers');
	Route::get('whitepapers/{url}',[WhitepapersController::class,'show'])->name('whitepapers.url');
	Route::get('whitepapers/more/{offset}',[WhitepapersController::class,'more'])->name('whitepapers.loadmore');
	Route::get('whitepapersform/whitepapers/{url}',[WhitepapersController::class,'whitepapersDownload'])->name('whitepapersform.download');

	Route::post('whitepapersdownloadpage/{url}',[WhitepapersController::class,'whitepapersPost'])->name('whitepapersform.post');
	Route::get('whitepapersdwnlink/{id}',[WhitepapersController::class,'whitepapersdwnlink']);
	
	//TechnoTrend
	Route::get('technotrends',[TechnotrendsController::class,'index'])->name('technotrends');
	Route::get('technotrends/{url}',[TechnotrendsController::class,'show'])->name('technotrends.url');
	Route::get('technotrends/more/{offset}',[TechnotrendsController::class,'more'])->name('technotrends.loadmore');

	//researchinsights
	Route::get('researchinsights',[ResearchinsightsController::class,'index'])->name('researchinsights');
	Route::get('researchinsights/{url}',[ResearchinsightsController::class,'show'])->name('researchinsights.url');
	Route::get('researchinsights/more/{offset}',[ResearchinsightsController::class,'more'])->name('researchinsights.loadmore');

	//Case Studies
	Route::get('casestudies',[CasestudiesController::class,'index'])->name('casestudies');
	Route::get('casestudies/{url}',[CasestudiesController::class,'show'])->name('casestudies.url');
	Route::get('casestudies/more/{offset}',[CasestudiesController::class,'more'])->name('casestudies.loadmore');

	Route::get('casestudiesform/{url}',[CasestudiesController::class,'casestudiesDownload'])->name('casestudiesform.download');

	Route::post('casestudiedownloadpage/{url}',[CasestudiesController::class,'casestudiesPost'])->name('casestudiesform.post');
	Route::get('casestudiesdwnlink/{id}',[CasestudiesController::class,'casestudiesdwnlink']);	
	//Articles
	Route::get('bookshelf',[BookshelfController::class,'index'])->name('bookshelf');
	Route::get('bookshelf/{url}',[BookshelfController::class,'show'])->name('bookshelf.url');

	//Projects
	Route::get('projects',[ProjectsController::class,'index'])->name('projects');
	Route::get('projects/{url}',[ProjectsController::class,'show'])->name('projects.url');
	Route::get('projects/more/{offset}',[ProjectsController::class,'more'])->name('projects.loadmore');
	
	//Projects
	Route::get('pharma-reports',[IndustryreportsController::class,'index'])->name('pharma-reports');
	Route::get('pharma-reports/{url}',[IndustryreportsController::class,'show'])->name('pharma-reports.url');
	Route::get('pharma-reports/more/{offset}',[IndustryreportsController::class,'more'])->name('pharma-reports.loadmore');
});
// End Knowledge bank Routes
// Magazine Routes
Route::group(['namespace'=>'magazine'], function () {
	Route::get('magazine',[EbookController::class,'index'])->name('magazine.index');

	Route::get('welcome',[EbookController::class,'welcome'])->name('welcome');

	Route::post('welcome',[EbookController::class,'welcome'])->name('welcome.post');

	Route::get('archives',[EbookController::class,'archives'])->name('ebook.archives');

	Route::post('archives-magazine/{issue}',[EbookController::class,'ebookPost'])->name('ebook.post');
	
	Route::get('e-book',[EbookController::class,'ebook'])->name('ebook.ebook');

	Route::post('e-book',[EbookController::class,'ebook'])->name('ebook.post');

	Route::get('ebook-subscribe',[EbookController::class,'ebookSubscribe'])->name('ebook.subscribe');

	Route::post('ebook-subscribe',[EbookController::class,'ebookSubscribe'])->name('ebook.subscribe.post');

	Route::get('archives-magazine/{issue}',[EbookController::class,'archiveMagazine'])->name('ebook.archivesmagazine');

	Route::get('author-guidelines',[CmsController::class,'guidelines'])->name('guidelines');

	Route::get('authorguidelines-download',[CmsController::class,'guidelineDownload'])->name('guidelines.download');

	Route::post('authorguidelines-download',[MagazineController::class,'authorguidelinesPost'])->name('guidelines.post');

	Route::get('autherguidlinesdwnlink',[MagazineController::class,'autherguidlinesdwnlink']);	

	Route::get('advisory-board',[CmsController::class,'advisoryBoard'])->name('advisoryboard');

	Route::get('advisory-board/more/{offset}',[CmsController::class,'advisoryboardMore']);

	Route::get('testimonials',[CmsController::class,'testimonials'])->name('testimonials');

	Route::get('testimonials/more/{offset}',[CmsController::class,'testimonialsMore']);

	Route::get('forthcoming-issue',[CmsController::class,'forthcomingIssue'])->name('forthcoming');

	Route::get('terms-conditions',[CmsController::class,'termsConditions'])->name('termsconditions');

	Route::get('contactus',[CmsController::class,'contactUs'])->name('contactus');

	Route::get('aboutus',[CmsController::class,'aboutUs'])->name('aboutus');

	Route::get('print-ads', [CmsController::class,'printAds'])->name('printads');

	Route::post('print-ads-success', [CmsController::class,'printAds'])->name('printads.post');

	Route::get('print-ads-success', [CmsController::class,'printAds'])->name('printads.success');

	Route::get('advertise', [CmsController::class,'advertise'])->name('advertise');

	Route::post('advertise-success', [CmsController::class,'advertise'])->name('advertise.post');

	Route::get('magazinemediapack/success',[CmsController::class,'advertise'])->name('magazinemediapack');

	Route::get('advertise-success', [CmsController::class,'advertise'])->name('advertise.success');

	Route::get('register',[CmsController::class,'register'])->name('register');

	Route::get('latest-ebook',[EbookController::class,'latestIssue'])->name('latestebook');


	Route::get('banner-advertisements', [CmsController::class,'bannerAdvertisement'])->name('banner.advertisement');

	Route::post('banner-advertisements', [CmsController::class,'bannerAdvertisement'])->name('banner.advertisement.post');
	Route::get('bannerdwnlink',[CmsController::class,'banerdwnlinks']);	

	Route::get('e-mail-marketing', [CmsController::class,'emailMarketing'])->name('emailMarketing');

	Route::post('e-mail-marketing', [CmsController::class,'emailMarketing'])->name('emailMarketing.post');

	Route::get('e-newsletter-marketing', [CmsController::class,'newslettermarketing'])->name('newslettermarketing');

	Route::post('print-ads', [CmsController::class,'newslettermarketing'])->name('newslettermarketing.post');

	// Route::get('e-newsletter-marketing-download-form', [CmsController::class,'newslettermarketing');
	Route::get('e-newsletter-marketing-download-form', function(){
		return redirect('e-newsletter-marketing');
	});

	Route::post('print-ads-banner-success', [CmsController::class,'newslettermarketingDownloadForm'])->name('newslettermarketingDownloadForm.post');


	Route::get('magazine-subscription', [CmsController::class,'magazineSubscription'])->name('magazine.subscription');
	Route::get('magazine-subscription-success', [CmsController::class,'magazineSubscription'])->name('magazine.subscription.success');
	Route::post('magazine-subscription-success', [CmsController::class,'magazineSubscription'])->name('magazine.subscription.post');

	/*right side iframe banner*/

	Route::get('htmladv',[CmsController::class,'emirates'])->name('emiratesbanner');
});
// End Magazine Routes
//Forms
Route::post('googlecaptha',[FormController::class,'checkgooglecaptha'])->name("gogglecaptha");
	// Media Pack Routes
Route::get('mediapacks',[FormController::class,'mediapacks'])->name('mediapacks');
Route::post('mediapacks',[FormController::class,'mediapacks'])->name('mediapacks.post');
Route::get('mediapacks/success',[FormController::class,'mediapackDownload'])->name('mediapacks.success');
Route::get('mediapackdwnlink',[FormController::class,'mediapackdwnlink']);

//get published
Route::get('get-published',[FormController::class,'getPublished'])->name('getpublished');
Route::post('get-published',[FormController::class,'getPublished'])->name('getpublished.post');
Route::get('get-published-success',function(){
	return view('forms.get-published.success');
});

// End Media Pack Routes
Route::get('e-newsletter-subscribe',[FormController::class,'eNewsletter'])->name('enewsletter.subscribe');
Route::post('e-newsletter-subscribe',[FormController::class,'eNewsletter'])->name('enewsletter.post');
Route::get('e-newsletter-subscribe/success',[FormController::class,'eNewsletter'])->name('enewsletter.success');
Route::get('editorial-calendar',[FormController::class,'editorialCalendar'])->name('editorialcalendar');
Route::post('editorial-calendar',[FormController::class,'editorialCalendar'])->name('editorialcalendar.post');
Route::get('editorial-calendar/success',[FormController::class,'editorialCalendarSuccess'])->name('editorialcalendar.success');
Route::get('editorialcalendardwnlink',[FormController::class,'editorialCalendardwnlink']);
Route::get('registration',[FormController::class,'registration'])->name('registration');
Route::post('registration',[FormController::class,'registration'])->name('registration.post');
Route::get('registration/success',[FormController::class,'registration'])->name('registration.success');
Route::get('post-event',[FormController::class,'postEvent'])->name('postevent.subscribe');
Route::post('post-event',[FormController::class,'postEvent'])->name('postevent.post');
Route::get('post-event/success',[FormController::class,'postEvent'])->name('postevent.success');
// Advertise Routes
Route::group(['namespace'=>'advertise'], function () {
Route::get('print',[AdvertiseController::class,'print'])->name('advertise.print');
Route::get('online',[AdvertiseController::class,'online'])->name('advertise.online');
Route::get('target-market',[AdvertiseController::class,'targetMarket'])->name('advertise.targetmarket');
Route::get('target-audience',[AdvertiseController::class,'targetAudience'])->name('advertise.targetaudience');
Route::get('tech-specs',[AdvertiseController::class,'techSpecs'])->name('advertise.techspecs');
Route::get('terms',[AdvertiseController::class,'terms'])->name('advertise.terms');
Route::get('clients',[AdvertiseController::class,'clients'])->name('advertise.clients');
Route::get('e-newsletter',[AdvertiseController::class,'eNewsletter'])->name('enewsletter');
Route::get('enewsletter-archives',[AdvertiseController::class,'eNewsletterArchives'])->name('enewsletter.archives');
Route::get('emailblast',[AdvertiseController::class,'emailblast'])->name('emailblast');
Route::get('current-edm',[AdvertiseController::class,'currentEdm'])->name('currentedm');
Route::get('emailblast-archives',[AdvertiseController::class,'emailblastarchives'])->name('emailblastarchives');
});
// End Advertise Routes
//Industry Updates
Route::group(['namespace'=>'industryupdates'], function () {
	//pressreleases
	Route::get('pressreleases',[PressreleaseController::class,'index'])->name('pressreleases');
	Route::get('pressreleases/{url}',[PressreleaseController::class,'show'])->name('pressreleases.url');
	Route::get('pressreleases/more/{offset}',[PressreleaseController::class,'more'])->name('pressreleases.loadmore');
	Route::get('listpressreleases/month/{month}/year/{year}',[PressreleaseController::class,'filter'])->name('listpressreleases.filter');
	Route::get('listpressreleases/month/{month}/year/{year}/{offset}',[PressreleaseController::class,'listpressreleasesFilter'])->name('listpressreleases.more');
	//news
	Route::get('news',[NewsController::class,'index'])->name('news');
	Route::get('news/{url}',[NewsController::class,'show'])->name('news.url');
	Route::get('news/more/{offset}',[NewsController::class,'more'])->name('news.loadmore');
	Route::get('listnews/month/{month}/year/{year}',[NewsController::class,'filter'])->name('listnews.filter');
	Route::get('listnews/month/{month}/year/{year}/{offset}',[NewsController::class,'listnewsFilter'])->name('listnews.more');
	//Events
	Route::get('events',[EventController::class,'index'])->name('events');
	Route::get('events/{url}',[EventController::class,'show'])->name('events.url');
	Route::get('events/more/{offset}/{date}',[EventController::class,'more'])->name('events.loadmore');
	Route::get('events/month/{month}/year/{year}',[EventController::class,'filter'])->name('events.filter');
	Route::get('events/filtermore/{offset}/{month}/{year}/{date}',[EventController::class,'moreFilter'])->name('events.moreFilter');	
	Route::get('reports',[ReportsController::class,'index'])->name('reports');
	Route::get('reports/{url}',[ReportsController::class,'show'])->name('reports.url');
	Route::get('reports/more/{offset}',[ReportsController::class,'more'])->name('reports.loadmore');
});
//End industry Updates
//webinars
Route::get('webinars',[WebinarController::class,'index'])->name('webinars');

Route::get('thermofisher-general-purpose-centrifuge',[WebinarController::class,'thermofisher']);
Route::post('thermofisher-general-purpose-centrifuge-success',[WebinarController::class,'thermofisher'])->name('ThermofisherGeneralPurposeCentrifuge.post');
Route::get('thermofisher-general-purpose-centrifuge-success',[WebinarController::class,'thermofisher'])->name('ThermofisherGeneralPurposeCentrifuge.success');

//End webinars

Route::get('editorialsection',[EditorialController::class,'editorialIndex']);
Route::get('knowledgebank',[EditorialController::class,'knowledgebankIndex']);
Route::get('industryupdates',[EditorialController::class,'industryupdatesIndex']);


Route::get('healthcare-management',[EditorialController::class,'healthcaremanagement']);
Route::get('healthcare-management/{slug}',[EditorialController::class,'healthcaremanagementview'])->name('healthcare-management.slug');

Route::get('editorialloadmore/{slug}/{offset}',[EditorialController::class,'more']);


Route::get('medical-sciences',[EditorialController::class,'medicalscience']);
Route::get('medical-sciences/{slug}',[EditorialController::class,'medicalsciencesview'])->name('medical-sciences.slug');

Route::get('surgical-speciality',[EditorialController::class,'surgical']);
Route::get('surgical-speciality/{slug}',[EditorialController::class,'surgicalview'])->name('surgical-speciality.slug');

Route::get('diagnostics',[EditorialController::class,'diagnostics']);
Route::get('diagnostics/{slug}',[EditorialController::class,'diagnosticsview'])->name('diagnostics.slug');


Route::get('technology-equipment',[EditorialController::class,'technology']);
Route::get('technology-equipment/{slug}',[EditorialController::class,'technologyview'])->name('technology-equipment.slug');

Route::get('facilities-operations',[EditorialController::class,'facilities']);
Route::get('facilities-operations/{slug}',[EditorialController::class,'facilitiesview'])->name('facilities-operations.slug');


Route::get('information-technology',[EditorialController::class,'information']);
Route::get('information-technology/{slug}',[EditorialController::class,'informationview'])->name('information-technology.slug');

Route::get('advertorials',[EditorialController::class,'advertorials']);
Route::get('advertorials/{slug}',[EditorialController::class,'advertorialsview'])->name('advertorials.slug');

Route::get('foreword',[EditorialController::class,'foreword']);
Route::get('foreword/{slug}',[EditorialController::class,'forewordview'])->name('foreword.slug');


Route::get('industryreports',[EditorialController::class,'industryreportsIndex']);	
Route::get('search',function(){
	return redirect('/');
});
// Route::get('/search', [SearchController::class,'index');
Route::post('/search', [SearchController::class,'search'])->name('search');
/* Xml Parsing */
Route::resource('newswires','NewswireController');
Route::get('newswires/{news_url}',[NewswireController::class,'show'])->name('newswires.url');
Route::get('viewnewswires/month/{month}/year/{year}',[NewswireController::class,'filter'])->name('viewnewswires.filter');
Route::get('viewnewswires/month/{month}/year/{year}/{offset}',[NewswireController::class,'vienewswiresFilter'])->name('viewnewswires.more');
Route::get('morenewswires/more/{offset}',[NewswireController::class,'more'])->name('newswires.loadmore');
/* End Xml Parsing */

Route::get('magazine-subscribe',[FormController::class,'magazineSubscribe']);

Route::get('subscribe',[FormController::class,'magazineSubscribe'])->name('subscribe');

Route::post('magazine-subscribe-post',[FormController::class,'magazineSubscribepost']); 

Route::get('subscribe/success',[FormController::class,'magazineSubscribe'])->name('magazinesubscribe.success');

/*cmp mediapack*/
Route::get('cmp-mediapack',[FormController::class,'cmpmediapacks'])->name('cmpmediapacks');

Route::post('cmpmediapacks',[FormController::class,'cmpmediapacks'])->name('cmpmediapacks.post');

Route::get('cmp-mediapack-success',[FormController::class,'cmpmediapacks'])->name('cmpmediapacks.success');
/* Webinars */ 
Route::get('webinar',[WebinarController::class,'webinar']);
Route::post('webinar-success',[WebinarController::class,'webinar'])->name('webinar.post');
Route::get('webinar-success',[WebinarController::class,'webinar'])->name('webinar.success');


Route::get('zebra-healthcare-webinar',[WebinarController::class,'zebraHealthcareWebinar']);
Route::post('zebra-healthcare-webinar-success',[WebinarController::class,'zebraHealthcareWebinar'])->name('zebraHealthcareWebinar.post');
Route::get('zebra-healthcare-webinar-success',[WebinarController::class,'zebraHealthcareWebinar'])->name('zebraHealthcareWebinar.success');
Route::get('zebra-healthcare-webinar/zebra',[WebinarController::class,'zebraHealthcareWebinar']);


// Route::get('qualtrics-healthcare-webinar',[WebinarController::class,'qualtricsHealthcare');
// Route::post('qualtrics-healthcare-webinar-success',[WebinarController::class,'qualtricsHealthcare')->name('qualtricshealthcare.post');
// Route::get('qualtrics-healthcare-webinar-success',[WebinarController::class,'qualtricsHealthcare')->name('qualtricshealthcare.success');

// Route::get('integrated-digital-healthcare-webinar',[WebinarController::class,'integratedDigital');
// Route::post('integrated-digital-healthcare-webinar-success',[WebinarController::class,'integratedDigital')->name('integrateddigital.post');
// Route::get('integrated-digital-healthcare-webinar-success',[WebinarController::class,'integratedDigital')->name('integrateddigital.success');

// Route::get('hyland-medical-imaging-webinar',[WebinarController::class,'hylandMedical');
// Route::post('hyland-medical-imaging-webinar-success',[WebinarController::class,'hylandMedical')->name('hylandmedical.post');
// Route::get('hyland-medical-imaging-webinar-success',[WebinarController::class,'hylandMedical')->name('hylandmedical.success');

// Route::get('hyland-medical-imaging-webinar-hyland',[WebinarController::class,'hylandMedical');
// Route::get('hyland-medical-imaging-webinar-hyland-success',[WebinarController::class,'hylandMedical')->name('hylandmedicaltag.success');

// Route::get('resmed-webinar-series',[WebinarController::class,'resmedWebinar');
// Route::post('resmed-webinar-series-success',[WebinarController::class,'resmedWebinar')->name('resmedwebinar.post');
// Route::get('resmed-webinar-series-success',[WebinarController::class,'resmedWebinar')->name('resmedwebinar.success');

// Route::get('advantech',[WebinarController::class,'advanTech');
// Route::post('advantech-success',[WebinarController::class,'advanTech')->name('advantech.post');
// Route::get('advantech-success',[WebinarController::class,'advanTech')->name('advantech.success');

// Route::get('resmed-webinar-series-home-sleep-testing',[WebinarController::class,'resmedhomeSleep');
// Route::post('resmed-webinar-series-home-sleep-testing-success',[WebinarController::class,'resmedhomeSleep')->name('resmedhomesleep.post');
// Route::get('resmed-webinar-series-home-sleep-testing-success',[WebinarController::class,'resmedhomeSleep')->name('resmedhomesleep.success');

// Route::get('equinix-webinar-2020',[WebinarController::class,'equinixWebinar');
// Route::post('equinix-webinar-2020-success',[WebinarController::class,'equinixWebinar')->name('equinixWebinar.post');
// Route::get('equinix-webinar-2020-success',[WebinarController::class,'equinixWebinar')->name('equinixWebinar.success');

// Route::get('advantech-healthcare-on-demand-telehealth-today',[WebinarController::class,'advanTechHealthCareOnDemand');
// Route::post('advantech-healthcare-on-demand-telehealth-today-success',[WebinarController::class,'advanTechHealthCareOnDemand')->name('advantech-healthcare-on-demand-telehealth-today.post');
// Route::get('advantech-healthcare-on-demand-telehealth-today-success',[WebinarController::class,'advanTechHealthCareOnDemand')->name('advantech-healthcare-on-demand-telehealth-today.success');

// Route::get('advantech-healthcare-on-demand-telehealth-today-video-success',[WebinarController::class,'advanTechHealthCareOnDemandVideoSuccess')->name('advantech-healthcare-on-demand-telehealth-today.video-success');

// Route::get('resmed-webinar-series3-telemonitoring-home-niv-patients',[WebinarController::class,'resmedWebinarSeries3');

// Route::post('resmed-webinar-series3-telemonitoring-home-niv-patients-success',[WebinarController::class,'resmedWebinarSeries3')->name('resmed-webinar-series3-telemonitoring-home-niv-patients.post');

// Route::get('resmed-webinar-series3-telemonitoring-home-niv-patients-success',[WebinarController::class,'resmedWebinarSeries3')->name('resmed-webinar-series3-telemonitoring-home-niv-patients.success');

// Route::get('it-predictions-2021-anz-edition',[WebinarController::class,'modernHealthcareOrganisations');
// Route::post('itsm-for-modern-healthcare-organisations-success',[WebinarController::class,'modernHealthcareOrganisations')->name('modernHealthcareOorganisations.post');
// Route::get('it-predictions-2021-anz-edition-success',[WebinarController::class,'modernHealthcareOrganisations')->name('modernHealthcareOorganisations.success');


// Route::get('itsm-for-modern-healthcare-organisations-freshworks',[WebinarController::class,'modernHealthcareOrganisations');

// Route::post('itsm-for-modern-healthcare-organisations-success',[WebinarController::class,'modernHealthcareOrganisations')->name('modernHealthcareOorganisations.post');

// Route::get('itsm-for-modern-healthcare-organisations-success-freshworks',[WebinarController::class,'modernHealthcareOrganisations')->name('modernHealthcareOorganisationsfreshworks.success');


// Route::get('resmed-4th-webinar-series',[WebinarController::class,'resmed4thwebinarseries');
// Route::post('resmed-4th-webinar-series-success',[WebinarController::class,'resmed4thwebinarseries')->name('resmed4thwebinarseries.post');
// Route::get('resmed-4th-webinar-series-success',[WebinarController::class,'resmed4thwebinarseries')->name('resmed4thwebinarseries.success');




// Route::get('barco-nio-fusion-12mp',[WebinarController::class,'barcoNioFusion');

// Route::post('barco-nio-fusion-12mp-success',[WebinarController::class,'barcoNioFusion')->name('barcoNioFusion.post');

// Route::get('barco-nio-fusion-12mp-success',[WebinarController::class,'barcoNioFusion')->name('barcoNioFusion.success');

// Route::get('barco-nio-fusion-12mp-video-success',[WebinarController::class,'barcoNioFusionVideoSuccess')->name('barco-nio-fusion-12mp.video-success');



// Route::get('avalue-healthcare-manufacturing-embedded-solutions',[WebinarController::class,'avaluehealthcare');

// Route::post('avalue-healthcare-manufacturing-embedded-solutions-success',[WebinarController::class,'avaluehealthcare')->name('avaluehealthcare.post');

// Route::get('avalue-healthcare-manufacturing-embedded-solutions-success',[WebinarController::class,'avaluehealthcare')->name('avaluehealthcare.success');


// Route::get('remote-it-enabled-tools',[WebinarController::class,'remoteItEnabledTools');

// Route::post('remote-it-enabled-tools-success',[WebinarController::class,'remoteItEnabledTools')->name('remoteItEnabledTools.post');

// Route::get('remote-it-enabled-tools-success',[WebinarController::class,'remoteItEnabledTools')->name('remoteItEnabledTools.success');


// Route::get('ensuring-uninterrupted-service-delivery-with-remote-it-enabled-tools',[WebinarController::class,'ensuringUninterruptedServiceDelivery');
// Route::post('ensuring-uninterrupted-service-delivery-with-remote-it-enabled-tools-success',[WebinarController::class,'ensuringUninterruptedServiceDelivery')->name('ensuringUninterruptedServiceDelivery.post');
// Route::get('ensuring-uninterrupted-service-delivery-with-remote-it-enabled-tools-success',[WebinarController::class,'ensuringUninterruptedServiceDelivery')->name('ensuringUninterruptedServiceDelivery.success');

// Route::get('new-care-models-and-the-future-of-healthcare',[WebinarController::class,'newCareModelsAndTheFutureofHealthcare');
// Route::post('new-care-models-and-the-future-of-healthcare-success',[WebinarController::class,'newCareModelsAndTheFutureofHealthcare')->name('newCareModelsAndTheFutureofHealthcare.post');
// Route::get('new-care-models-and-the-future-of-healthcare-success',[WebinarController::class,'newCareModelsAndTheFutureofHealthcare')->name('newCareModelsAndTheFutureofHealthcare.success');

// Route::get('digital-health-using-technology-to-engage-with-patients',[WebinarController::class,'digitalHealthUsingTechnology');
// Route::post('digital-health-using-technology-to-engage-with-patients-success',[WebinarController::class,'digitalHealthUsingTechnology')->name('digitalHealthUsingTechnology.post');
// Route::get('digital-health-using-technology-to-engage-with-patients-success',[WebinarController::class,'digitalHealthUsingTechnology')->name('digitalHealthUsingTechnology.success');


// Route::get('data-driven-healthcare-the-right-way-in-the-right-place-at-the-right-time',[WebinarController::class,'dataDrivenHealthcare');
// Route::post('data-driven-healthcare-the-right-way-in-the-right-place-at-the-right-time-success',[WebinarController::class,'dataDrivenHealthcare')->name('dataDrivenHealthcare.post');
// Route::get('data-driven-healthcare-the-right-way-in-the-right-place-at-the-right-time-success',[WebinarController::class,'dataDrivenHealthcare')->name('dataDrivenHealthcare.success');

// Route::get('medavis-edm-webinar',[WebinarController::class,'medavisedmwebinar');
// Route::post('medavis-edm-webinar-success',[WebinarController::class,'medavisedmwebinar')->name('medavisedmwebinar.post');
// Route::get('medavis-edm-webinar-success',[WebinarController::class,'medavisedmwebinar')->name('medavisedmwebinar.success');

// Route::get('2022-smart-healthcare-webinar',[WebinarController::class,'smartHealthcareWebinar');
// Route::post('2022-smart-healthcare-webinar-success',[WebinarController::class,'smartHealthcareWebinar')->name('smartHealthcareWebinar.post');
// Route::get('2022-smart-healthcare-webinar-success',[WebinarController::class,'smartHealthcareWebinar')->name('smartHealthcareWebinar.success');

// Route::get('promotion/uniphore-rcm-webinar',[WebinarController::class,'uniphoreRcmWebinar');
// Route::post('promotion/uniphore-rcm-webinar-success',[WebinarController::class,'uniphoreRcmWebinar')->name('uniphoreRcmWebinar.post');
// Route::get('promotion/uniphore-rcm-webinar-success',[WebinarController::class,'uniphoreRcmWebinar')->name('uniphoreRcmWebinar.success');

// Promotions Routes

Route::prefix('promotion')->group(function () {
    

});