<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\RiderController;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Front\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Seller\MainController as SellerMainController;
use App\Http\Controllers\Seller\MarketController as SellerMarketController;
use App\Http\Controllers\Seller\ServiceController as SellerServiceController;
use App\Http\Controllers\Seller\ListingController as SellerListingController;


use App\Http\Controllers\Customer\MainController as BuyerMainController;
use App\Http\Controllers\Customer\MassageController;
use App\Http\Controllers\Customer\MarketController as BuyerMarketController;
use App\Http\Controllers\Customer\ListingController as BuyerListingController;
use App\Http\Controllers\Customer\ServiceController as BuyerServiceController;

use App\Http\Controllers\Seller\MsgController as SellerMsgController;
use App\Http\Controllers\Seller\ServiceController;

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MainController as RootMainController;


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


Auth::routes();

Route::get('login', function(){
    return redirect('/');
})->name('login');


Route::get('/zoom-call-user', function(){
	return view('app');
})->name('zoom.callJoin');
Route::get('zoom-call-user/{any}', function () {
    return view('app');
})->where('any','.*');

Route::get('/', [MainController::class, 'index'])->name('main');

Route::get('/service-show/{slug}', [MainController::class, 'serviceShow']);
Route::get('/service-details/{slug}', [MainController::class, 'serviceDetails']);
Route::post('/user-register', [RegisterController::class, 'storeData'])->name('user.register');

Route::get('/payment-page', [PaymentController::class, 'paymnetIndex']);
Route::get('/payment-conform', [PaymentController::class, 'paymentConform'])->name('payment.conform');
Route::get('/payment-invoice', [PaymentController::class, 'paymentInvoice']);

Route::post('/search-store', [MainController::class, 'searchStore'])->name('search.store');

Route::get('/contact-us', [MainController::class, 'contactUs'])->name('contact.us');
Route::post('/saveSchedule', [MainController::class, 'saveSchedule'])->name('saveSchedule');
Route::get('/term-and-condition', [MainController::class, 'termCondition'])->name('termCondition');


Route::get('/download/{id}', [MainController::class, 'downloadFile'])->name('download.file');



Route::get('/stripe-payment/{order}', [StripeController::class, 'handleGet'])->name('payment.index.stripe');
Route::post('/stripe-payment/{order}', [StripeController::class, 'handlePost'])->name('stripe.payment');








///only for seller this

Route::get('/buyer-job-post', [SellerMainController::class, 'buyerJobPost']);
Route::post('/bid-request', [SellerMainController::class, 'bidRequest'])->name('bid.request');


	Route::get('/user/{userName}', [MainController::class, 'userInfo'])->name('user.info')
			->middleware('auth:seller,customer');

	Route::post('/sendMsg', [MainController::class, 'sendMsg']);


// Route::get('/user', [MainController::class, 'userInfo'])->name('user.info');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/// admin

Route::get('/admin', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('login.admin');

Route::post('/admin', [App\Http\Controllers\Admin\LoginController::class, 'login']);

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\MainController::class, 'index']);
Route::resource('/admin/category', App\Http\Controllers\Admin\CategoryController::class);
Route::post('/admin/categorySave', [App\Http\Controllers\Admin\CategoryController::class, 'categorySave']);
Route::get('/admin/statusChage/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'statusChage'])->name('category.statusChage');


Route::get('/admin/manage-seller', [App\Http\Controllers\Admin\MainController::class, 'manageSeller']);

Route::get('/admin/manage-seller-details/{id}', [App\Http\Controllers\Admin\MainController::class, 'manageDetails'])->name('seller.view');

Route::get('/admin/manage-buyer', [App\Http\Controllers\Admin\MainController::class, 'manageBuyer']);

Route::get('/admin/manage-buyer-details', [App\Http\Controllers\Admin\MainController::class, 'manageBuyer'])->name('customer.view');

Route::get('admin/order', [App\Http\Controllers\Admin\MainController::class, 'adminOrder']);

Route::get('admin/msg-list', [App\Http\Controllers\Admin\MainController::class, 'msgList']);
Route::get('admin/msg-details/{id}', [App\Http\Controllers\Admin\MainController::class, 'msgDetails']);
Route::get('admin/terms', [App\Http\Controllers\Admin\MainController::class, 'termsConstion']);
Route::post('admin/termsSave', [App\Http\Controllers\Admin\MainController::class, 'termsSave'])->name('terms.save');

//payment
Route::get('admin/payment-buyer', [AdminPaymentController::class, 'paymentBuyer'])->name('payment.buyer');
Route::get('admin/payment-seller', [AdminPaymentController::class, 'paymentSeller'])->name('payment.seller');
Route::get('admin/payment-seller-paid/{id}', [AdminPaymentController::class, 'SellerpaymentGive'])->name('seller.paymentGive');



Route::get('/rider', [App\Http\Controllers\Rider\LoginController::class, 'showLoginForm'])->name('login.rider');

Route::post('/rider', [App\Http\Controllers\Rider\LoginController::class, 'login']);

Route::get('/rider/dashboard', [App\Http\Controllers\Rider\MainController::class, 'index']);



/// buyer

Route::get('/buyer', [App\Http\Controllers\Customer\LoginController::class, 'showLoginFormCustomer'])->name('login.customer');

Route::post('/buyer', [App\Http\Controllers\Customer\LoginController::class, 'login']);

Route::get('/customer/dashboard', [App\Http\Controllers\Customer\MainController::class, 'BuyerIndex']);

///seller

Route::get('/seller', [App\Http\Controllers\Seller\LoginController::class, 'showLoginFormSeller'])->name('login.seller');

Route::post('/seller', [App\Http\Controllers\Seller\LoginController::class, 'login']);

Route::get('/seller/dashboard', [SellerMainController::class, 'sellerIndex'])->name('seller.dashboard');
Route::get('/freelancer/dashboard', [FreelancerMainController::class, 'freelancerIndex'])->name('seller.freelancer');

Route::get('/seller/fileShare', [SellerMsgController::class, 'fileShare']);

Route::get('/seller/fileShareUser/{id}', [SellerMsgController::class, 'fileShareUser'])->name('file.shareUserSeller');
Route::post('/seller/fileShareStore', [SellerMsgController::class, 'fileShareStore'])->name('file.shareStoreSeller');

Route::get('/seller/zoom-call', [SellerMsgController::class, 'zoomCall'])->name('seller.dashboard')->name('zoom.seller');



Route::get('/seller/order', [SellerMainController::class, 'sellerOrder']);

Route::get('/seller/custom-offer', [SellerMainController::class, 'sellerCustomOffer'])->name('custom.offer');
Route::post('/seller/storeCustomOffer', [SellerMainController::class, 'storeCustomOffer'])->name('storeCustom.offer');

Route::get('/seller/reviews', [SellerMainController::class, 'sellerReviews']);


Route::get('/seller/messages', [SellerMsgController::class, 'index']);
Route::get('/seller/messages-details/{id}', [SellerMsgController::class, 'msgDetails']);
Route::resource('/seller/services', ServiceController::class);
Route::get('/seller/services-status/{id}', [ServiceController::class, 'servicesStatus'])->name('services.status');
//SellerMainController
Route::get('/seller/SellerPayment', [SellerMainController::class, 'SellerPayment'])->name('seller.payment');

Route::get('/seller/incoming-requests', [SellerMainController::class, 'incomingRequests'])->name('seller.incomingRequests');




Route::get('/seller/setting', [SellerMainController::class, 'sellerSetting']);
Route::post('/seller/setting-save', [SellerMainController::class, 'sellerSettingSave'])->name('sellerSetting.save');
Route::post('/seller/change-password', [SellerMainController::class, 'sellerSettingSavepass']);

Route::match(['get', 'post'], '/seller/market/search', [SellerMarketController::class, 'searchProduct'])->name('seller.market.search');
Route::get('/seller/market', [SellerMarketController::class, 'index'])->name('seller.market');
Route::get('/seller/create-schedule/{id}', [SellerMainController::class, 'createSchedule'])->name('seller.createSchedule');
Route::get('/seller/market/{slug}', [SellerMarketController::class, 'viewDetail'])->name('seller.market.detail');



Route::get('/seller/inventory', [SellerMarketController::class, 'inventory'])->name('seller.inventory');
Route::get('/seller/create-inventory', [SellerMarketController::class, 'createInventory'])->name('seller.createInventory');
Route::post('/seller/post-inventory', [SellerMarketController::class, 'postInventory'])->name('seller.postInventory');

Route::get('/seller/listing/search', [SellerListingController::class, 'searchListing'])->name('seller.listing.search');
Route::get('/seller/listing', [SellerListingController::class, 'index'])->name('seller.listing');

Route::get('/seller/service', [SellerServiceController::class, 'index'])->name('seller.service');
Route::get('/seller/create-service', [SellerServiceController::class, 'createService'])->name('seller.createService');
Route::get('/seller/services', [SellerServiceController::class, 'viewServices'])->name('seller.viewServices');
Route::post('/seller/post-service', [SellerServiceController::class, 'postService'])->name('seller.postService');

Route::get('/seller/view-schedule', [SellerMainController::class, 'viewSchedule'])->name('seller.viewSchedule');
Route::post('/getSchedules', [RootMainController::class, 'getSchedules'])->name('getSchedules');

// Start Message Routes
Route::get('/chat/{id}', [ChatController::class, 'index'])->middleware('auth:seller')->name('sellerChat');
Route::post('/fetchSellerMessage', [ChatController::class, 'fetchMessage'])->middleware( 'auth:seller')->name('fetchSellerMessage');
Route::post('/sendSellerMessage', [ChatController::class, 'sendMessage'])->middleware( 'auth:seller')->name('sendSellerMessage');

Route::get('/customerChat/{id}', [ChatController::class, 'index'])->middleware('auth:customer')->name('customerChat');
Route::post('/fetchCustomerMessage', [ChatController::class, 'fetchMessage'])->middleware( 'auth:customer')->name('fetchCustomerMessage');
Route::post('/sendCustomerMessage', [ChatController::class, 'sendMessage'])->middleware( 'auth:customer')->name('sendCustomerMessage');
// End Message Routes


/// buyer

Route::get('/buyer/dashboard', [BuyerMainController::class, 'BuyerIndex'])->name('buyer.dashboard');
Route::get('/buyer/incoming-requests', [BuyerMainController::class, 'incomingRequests'])->name('buyer.incomingRequests');

Route::get('/buyer/job-post', [BuyerMainController::class, 'jobPost']);
Route::post('/buyer/job-post-save', [BuyerMainController::class, 'jobPostSave'])->name('job.postSave');
Route::get('/buyer/jobPostDelete/{id}', [BuyerMainController::class, 'jobPostDelete'])->name('job.jobPostDelete');

Route::get('/buyer/inventory', [BuyerMarketController::class, 'inventory'])->name('buyer.inventory');
Route::get('/buyer/create-inventory', [BuyerMarketController::class, 'createInventory'])->name('buyer.createInventory');
Route::post('/buyer/post-inventory', [BuyerMarketController::class, 'postInventory'])->name('buyer.postInventory');

Route::get('/buyer/listings/search', [BuyerListingController::class, 'searchListing'])->name('buyer.listings.search');
Route::get('/buyer/listings', [BuyerListingController::class, 'viewListing'])->name('buyer.listings');
Route::get('/buyer/listing', [BuyerListingController::class, 'index'])->name('buyer.listing');
Route::get('/buyer/create-listing', [BuyerListingController::class, 'createListing'])->name('buyer.createListing');
Route::post('/buyer/post-listing', [BuyerListingController::class, 'postListing'])->name('buyer.postListing');
Route::get('/buyer/service/search', [BuyerServiceController::class, 'searchService'])->name('buyer.service.search');
Route::get('/buyer/service', [BuyerServiceController::class, 'index'])->name('buyer.service');

Route::get('/buyer/market/search', [BuyerMarketController::class, 'searchProduct'])->name('buyer.market.search');
Route::get('/buyer/market', [BuyerMarketController::class, 'index'])->name('buyer.market');
Route::get('/buyer/create-schedule/{id}', [BuyerMainController::class, 'createSchedule'])->name('buyer.createSchedule');
Route::get('/buyer/market/{slug}', [BuyerMarketController::class, 'viewDetail'])->name('buyer.market.detail');

Route::get('/buyer/view-schedule', [BuyerMainController::class, 'viewSchedule'])->name('buyer.viewSchedule');

Route::get('/buyer/messages', [MassageController::class, 'index']);
Route::get('/buyer/file-share', [MassageController::class, 'fileShare'])->name('file.share');
Route::get('/buyer/file-share-user/{id}', [MassageController::class, 'fileShareUser'])->name('file.shareUser');
Route::post('/buyer/file-share-store', [MassageController::class, 'fileShareStore'])->name('file.shareStore');
Route::get('/buyer/messages-details/{id}', [MassageController::class, 'msgDetails']);




Route::get('/buyer/manage-bidder/{id}', [BuyerMainController::class, 'manageBidder']);
Route::post('/buyer/store-order-bidder', [BuyerMainController::class, 'bidOrderAccept'])->name('order.acceptBider');
Route::post('/buyer/bidderSendMsg', [BuyerMainController::class, 'bidderSendMsg'])->name('bidderSendMsg');


Route::get('/buyer/reviews', [BuyerMainController::class, 'buyerReviews']);
Route::post('/buyer/reviewsStore', [BuyerMainController::class, 'buyerReviewStore'])->name('buyer.review');


Route::get('/buyer/order', [BuyerMainController::class, 'buyerOrder']);

Route::post('/buyer/order', [BuyerMainController::class, 'buyerOrderAccept'])->name('order.acceptBuyer');
Route::post('/buyer/custom-offer-store', [BuyerMainController::class, 'buyerOrderCustomStore'])->name('customOrder.store');


Route::get('/buyer/custom-offer', [BuyerMainController::class, 'BuyerCustomOffer'])->name('buyer.customOffer');

Route::get('/buyer/payment', [BuyerMainController::class, 'BuyerPayment'])->name('buyer.payment');

Route::get('/buyer/recent-orders', [BuyerMainController::class, 'recentOrder'])->name('buyer.recentOrder');
Route::post('/buyer/getOrder', [BuyerMainController::class, 'getOrder'])->name('buyer.getOrder');
Route::post('/buyer/updateOrder', [BuyerMainController::class, 'updateOrder'])->name('buyer.updateOrder');

Route::get('/buyer/manage', [BuyerMainController::class, 'manageItems'])->name('buyer.manageItems');
Route::post('/buyer/manageItemData', [BuyerMainController::class, 'manageItemData'])->name('buyer.manageItemData');
Route::post('/buyer/updateInventory', [BuyerMainController::class, 'updateInventory'])->name('buyer.updateInventory');



///setting
Route::get('/buyer/setting', [BuyerMainController::class, 'buyersetting']);

Route::post('/buyer/setting-save', [BuyerMainController::class, 'buyerSettingSave'])->name('setting.save');
Route::post('/buyer/change-password', [BuyerMainController::class, 'buyerSettingSavepass']);







// Route::resource('/category', [App\Http\Controllers\Admin\::class]);
Route::resource('/admin/category', CategoryController::class);




/// Profile create
Route::get('/admin/profile', [App\Http\Controllers\Admin\MainController::class, 'profileIndex']);
Route::post('/admin/change-password',[App\Http\Controllers\Admin\MainController::class, 'changePassword']);
Route::post('/admin/change-info',[App\Http\Controllers\Admin\MainController::class, 'changeInfo']);

//general control
Route::get('/admin/general', [App\Http\Controllers\Admin\GeneralController::class, 'index']);


Route::post('/admin/generalSave', [App\Http\Controllers\Admin\GeneralController::class, 'genaralSave'])->name('general.save');
