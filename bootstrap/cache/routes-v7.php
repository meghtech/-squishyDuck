<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/


app('router')->setCompiledRoutes(
    array (
  'compiled' =>
  array (
    0 => false,
    1 =>
    array (
      '/laravel-websockets' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::xynJaFHA3F01ZDxr',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/auth' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::OIovBoy74jMoP4IS',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/event' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Tr9Liu1NwXE4FqKi',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/laravel-websockets/statistics' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::NhHsz4v8jewBf3F2',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::FCxEFxFho8gaB4O4',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::4RcHR9qN5sE8uk6V',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Nq0BGULeKJ3hRBnm',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::YIOAmfMP417cK8yN',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Vfk5z4ozOGT1wdVv',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::veM35yHvWDeXogRp',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/zoom-call-user' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'zoom.callJoin',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'main',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-register' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'user.register',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-page' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::scwp6287wLqlRy0N',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-conform' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'payment.conform',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment-invoice' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::VsvWTrv8evmOLBGG',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search-store' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'search.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'contact.us',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contactSave' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'contactSave',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/term-and-condition' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'termCondition',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer-job-post' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::WIx7JoC4LqD8KqLs',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bid-request' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'bid.request',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sendMsg' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Y5XgLGPtMARNb3uy',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'login.admin',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::B3fY2nxS4yjtx6Iq',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::omhkKZ87qH6pHn5O',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'category.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'category.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/category/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'category.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categorySave' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::k16mwyp5NGFgkYZi',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-seller' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::9wKkFH2kCGzmcrzY',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-buyer' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::pb7c0OI8fLGIXc5X',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/manage-buyer-details' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'customer.view',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/order' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::SOjNauDQXXZf3s8c',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/msg-list' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::lhPJZzzAsLMJp90M',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/terms' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::JF9JhtHUyyASlz5a',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/termsSave' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'terms.save',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-buyer' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'payment.buyer',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/payment-seller' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'payment.seller',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rider' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'login.rider',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Rx9oXTEVrEJyyQ55',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/rider/dashboard' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::pEL1gkqjshcfSKYm',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'login.customer',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::rA4W3zQlNtZMjM6V',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/dashboard' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::gt1BtEjvUu4TvyAo',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'login.seller',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'generated::eF6TD9JmJYchy5af',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/dashboard' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.dashboard',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/fileShare' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::qN5kIVTdQTaIdzxO',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/fileShareStore' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'file.shareStoreSeller',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/zoom-call' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.dashboardzoom.seller',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/order' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::zeWl1dXws7TgWQtZ',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/custom-offer' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'custom.offer',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/storeCustomOffer' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'storeCustom.offer',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/reviews' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::mhXA6dJ3XnBFpnIH',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/messages' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::he4YboHZeaX7W7S0',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/services' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'services.index',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'services.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/services/create' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'services.create',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/SellerPayment' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.payment',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/setting' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::l3zK4R555xNX8MxC',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/setting-save' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::6qcDY68uQFyXyB9a',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/change-password' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::PuWsfFQd4aiUrYVk',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/market' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
<<<<<<< Updated upstream
            '_route' => 'generated::49uO2sl4M5vJ1mE8',
=======
            '_route' => 'generated::6qcDY68uQFyXyB9a',
>>>>>>> Stashed changes
=======
            '_route' => 'generated::49uO2sl4M5vJ1mE8',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/create-schedule' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.createSchedule',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< Updated upstream
      '/seller/create-schedule' =>
=======
      '/seller/create-schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.createSchedule',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/create-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.createService',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chat' => 
>>>>>>> Stashed changes
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::49uO2sl4M5vJ1mE8',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/service' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.service',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/create-service' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'seller.createService',
=======
            '_route' => 'generated::8Ey7CDlhblm4ImC4',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/create-schedule' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.createSchedule',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/service' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'seller.service',
=======
            '_route' => 'generated::BdLfzbITmC50flBy',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/create-service' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.createService',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/create-schedule' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.createSchedule',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/service' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.service',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
<<<<<<< Updated upstream
      '/seller/create-service' =>
=======
      '/seller/create-schedule' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.createSchedule',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
<<<<<<< Updated upstream
            '_route' => 'seller.service',
=======
            '_route' => 'generated::sntIt0gtfAHOih1J',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/seller/create-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'seller.createService',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chat' => 
>>>>>>> Stashed changes
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'seller.createService',
=======
            '_route' => 'generated::kHiC7AJLZd718QUb',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chat' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'chat',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/dashboard' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'buyer.dashboard',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/job-post' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::8Ey7CDlhblm4ImC4',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/job-post-save' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'job.postSave',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/messages' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::BdLfzbITmC50flBy',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/file-share' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'file.share',
=======
            '_route' => 'generated::etPZtfyS4uVR6DPl',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/file-share-store' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'file.shareStore',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/store-order-bidder' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'order.acceptBider',
=======
            '_route' => 'generated::Q7HBphL87YDiVIUX',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/bidderSendMsg' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'bidderSendMsg',
=======
            '_route' => 'generated::4z9WfoK1FiBCX1fv',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/reviews' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'generated::sntIt0gtfAHOih1J',
=======
            '_route' => 'generated::pyg8S4HaxQrCqkS4',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/reviewsStore' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'buyer.review',
=======
            '_route' => 'generated::x6fPuaWyxtMvhz9m',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/order' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'generated::kHiC7AJLZd718QUb',
=======
            '_route' => 'generated::QicH66xtL6IOsRfy',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'order.acceptBuyer',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/custom-offer-store' =>
      array (
        0 =>
        array (
<<<<<<< Updated upstream
          0 =>
=======
          0 => 
          array (
            '_route' => 'generated::dnkOYySO5Dg1TKzb',
          ),
          1 => 
>>>>>>> Stashed changes
          array (
            '_route' => 'customOrder.store',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/custom-offer' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'buyer.customOffer',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/payment' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'buyer.payment',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/setting' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::etPZtfyS4uVR6DPl',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/setting-save' =>
      array (
        0 =>
        array (
          0 =>
          array (
<<<<<<< Updated upstream
            '_route' => 'setting.save',
=======
            '_route' => 'generated::Vo4Wmi7FC4E2EFAG',
          ),
          1 => 
          array (
            0 => 'any',
>>>>>>> Stashed changes
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/buyer/change-password' =>
      array (
        0 =>
        array (
<<<<<<< Updated upstream
          0 =>
=======
          0 => 
          array (
            '_route' => 'generated::kWMNmsOxyfFGddH5',
          ),
          1 => 
>>>>>>> Stashed changes
          array (
            '_route' => 'generated::Q7HBphL87YDiVIUX',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' =>
      array (
        0 =>
        array (
<<<<<<< Updated upstream
          0 =>
=======
          0 => 
          array (
            '_route' => 'generated::6e5Cum2BprLNLVg8',
          ),
          1 => 
>>>>>>> Stashed changes
          array (
            '_route' => 'generated::4z9WfoK1FiBCX1fv',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change-password' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::pyg8S4HaxQrCqkS4',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/change-info' =>
      array (
        0 =>
        array (
<<<<<<< Updated upstream
          0 =>
=======
          0 => 
          array (
            '_route' => 'generated::buzWKkXflqrRYRGT',
          ),
          1 => 
>>>>>>> Stashed changes
          array (
            '_route' => 'generated::x6fPuaWyxtMvhz9m',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/general' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::QicH66xtL6IOsRfy',
          ),
          1 => NULL,
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/generalSave' =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'general.save',
          ),
          1 => NULL,
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 =>
    array (
      0 => '{^(?|/l(?|aravel\\-websockets/api/([^/]++)/statistics(*:54)|ivewire/(?|message/([^/]++)(*:88)|preview\\-file/([^/]++)(*:117)))|/password/reset/([^/]++)(*:151)|/zoom\\-call\\-user/(.*)(*:181)|/s(?|e(?|rvice\\-(?|show/([^/]++)(*:221)|details/([^/]++)(*:245))|ller/(?|fileShareUser/([^/]++)(*:284)|m(?|essages\\-details/([^/]++)(*:321)|arket/([^/]++)(*:343))|services(?|/([^/]++)(?|(*:375)|/edit(*:388)|(*:396))|\\-status/([^/]++)(*:422))))|tripe\\-payment/([^/]++)(?|(*:459)))|/download/([^/]++)(*:487)|/user/([^/]++)(*:509)|/admin/(?|category/([^/]++)(?|(*:547)|/edit(*:560)|(*:568))|statusChage/([^/]++)(*:597)|m(?|anage\\-seller\\-details/([^/]++)(*:640)|sg\\-details/([^/]++)(*:668))|payment\\-seller\\-paid/([^/]++)(*:707))|/buyer/(?|jobPostDelete/([^/]++)(*:748)|file\\-share\\-user/([^/]++)(*:782)|m(?|essages\\-details/([^/]++)(*:819)|anage\\-bidder/([^/]++)(*:849))))/?$}sDu',
    ),
    3 =>
    array (
      54 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::dnkOYySO5Dg1TKzb',
          ),
          1 =>
          array (
            0 => 'appId',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      88 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'livewire.message',
          ),
          1 =>
          array (
            0 => 'name',
          ),
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      117 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 =>
          array (
            0 => 'filename',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      151 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'password.reset',
          ),
          1 =>
          array (
            0 => 'token',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      181 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Vo4Wmi7FC4E2EFAG',
          ),
          1 =>
          array (
            0 => 'any',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      221 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::kWMNmsOxyfFGddH5',
          ),
          1 =>
          array (
            0 => 'slug',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      245 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::6e5Cum2BprLNLVg8',
          ),
          1 =>
          array (
            0 => 'slug',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      284 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'file.shareUserSeller',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      321 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::buzWKkXflqrRYRGT',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      343 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.market.detail',
          ),
          1 =>
          array (
            0 => 'slug',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      375 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'services.show',
          ),
          1 =>
          array (
            0 => 'service',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      388 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'services.edit',
          ),
          1 =>
          array (
            0 => 'service',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      396 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'services.update',
          ),
          1 =>
          array (
            0 => 'service',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'services.destroy',
          ),
          1 =>
          array (
            0 => 'service',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      422 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'services.status',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      459 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'payment.index.stripe',
          ),
          1 =>
          array (
            0 => 'order',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'stripe.payment',
          ),
          1 =>
          array (
            0 => 'order',
          ),
          2 =>
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      487 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'download.file',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      509 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'user.info',
          ),
          1 =>
          array (
            0 => 'userName',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      547 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'category.show',
          ),
          1 =>
          array (
            0 => 'category',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      560 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'category.edit',
          ),
          1 =>
          array (
            0 => 'category',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      568 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'category.update',
          ),
          1 =>
          array (
            0 => 'category',
          ),
          2 =>
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 =>
          array (
            '_route' => 'category.destroy',
          ),
          1 =>
          array (
            0 => 'category',
          ),
          2 =>
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      597 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'category.statusChage',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      640 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.view',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      668 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::z1jX6VsDEuERxsPD',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      707 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'seller.paymentGive',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      748 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'job.jobPostDelete',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      782 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'file.shareUser',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      819 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::Mjhl0xDCemT5SfCV',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      849 =>
      array (
        0 =>
        array (
          0 =>
          array (
            '_route' => 'generated::vJtbHJELefGnTAHo',
          ),
          1 =>
          array (
            0 => 'id',
          ),
          2 =>
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 =>
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' =>
  array (
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::xynJaFHA3F01ZDxr' =>
=======
    'generated::xynJaFHA3F01ZDxr' => 
>>>>>>> Stashed changes
=======
    'generated::xynJaFHA3F01ZDxr' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-websockets',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\ShowDashboard@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\ShowDashboard',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' =>
        array (
        ),
        'as' => 'generated::xynJaFHA3F01ZDxr',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::dnkOYySO5Dg1TKzb' =>
=======
    'generated::dnkOYySO5Dg1TKzb' => 
>>>>>>> Stashed changes
=======
    'generated::dnkOYySO5Dg1TKzb' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'laravel-websockets/api/{appId}/statistics',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\DashboardApiController@getStatistics',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\DashboardApiController@getStatistics',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' =>
        array (
        ),
        'as' => 'generated::dnkOYySO5Dg1TKzb',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::OIovBoy74jMoP4IS' =>
=======
    'generated::OIovBoy74jMoP4IS' => 
>>>>>>> Stashed changes
=======
    'generated::OIovBoy74jMoP4IS' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/auth',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\AuthenticateDashboard@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\AuthenticateDashboard',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' =>
        array (
        ),
        'as' => 'generated::OIovBoy74jMoP4IS',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::Tr9Liu1NwXE4FqKi' =>
=======
    'generated::Tr9Liu1NwXE4FqKi' => 
>>>>>>> Stashed changes
=======
    'generated::Tr9Liu1NwXE4FqKi' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/event',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\SendMessage@__invoke',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Controllers\\SendMessage',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' =>
        array (
        ),
        'as' => 'generated::Tr9Liu1NwXE4FqKi',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::NhHsz4v8jewBf3F2' =>
=======
    'generated::NhHsz4v8jewBf3F2' => 
>>>>>>> Stashed changes
=======
    'generated::NhHsz4v8jewBf3F2' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'laravel-websockets/statistics',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Controllers\\WebSocketStatisticsEntriesController@store',
        'controller' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Http\\Controllers\\WebSocketStatisticsEntriesController@store',
        'namespace' => NULL,
        'prefix' => 'laravel-websockets',
        'where' =>
        array (
        ),
        'as' => 'generated::NhHsz4v8jewBf3F2',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' =>
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' =>
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' =>
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' =>
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' =>
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' =>
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::FCxEFxFho8gaB4O4' =>
=======
    'generated::FCxEFxFho8gaB4O4' => 
>>>>>>> Stashed changes
=======
    'generated::FCxEFxFho8gaB4O4' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' =>
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::FCxEFxFho8gaB4O4',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::4RcHR9qN5sE8uk6V' =>
=======
    'generated::4RcHR9qN5sE8uk6V' => 
>>>>>>> Stashed changes
=======
    'generated::4RcHR9qN5sE8uk6V' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' =>
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::4RcHR9qN5sE8uk6V',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::Nq0BGULeKJ3hRBnm' =>
=======
    'generated::Nq0BGULeKJ3hRBnm' => 
>>>>>>> Stashed changes
=======
    'generated::Nq0BGULeKJ3hRBnm' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":291:{@3ZMhKsClX9iaNR+Bgtp7cGARLf5I1caF2wUzGjYM41A=.a:5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000248e1f3b0000000071bf6e66";}";s:4:"hash";s:44:"U28FTYjtzz9INJKs78umbLm/P9IMpjDuBTuCDtYgkVQ=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' =>
        array (
        ),
        'as' => 'generated::Nq0BGULeKJ3hRBnm',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":252:{@ZYrutYpj+87oWYbzJj3mTr/+pJa1qwVHuQk9JxB1k5o=.a:5:{s:3:"use";a:0:{}s:8:"function";s:40:"function(){
    return \\redirect(\'/\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000248e1f390000000071bf6e66";}";s:4:"hash";s:44:"LEi6ltKBhH+93B7SA8Fua7wb4068rkFV/U5My2BkRXA=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::YIOAmfMP417cK8yN' =>
=======
    'generated::YIOAmfMP417cK8yN' => 
>>>>>>> Stashed changes
=======
    'generated::YIOAmfMP417cK8yN' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::YIOAmfMP417cK8yN',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::Vfk5z4ozOGT1wdVv' =>
=======
    'generated::Vfk5z4ozOGT1wdVv' => 
>>>>>>> Stashed changes
=======
    'generated::Vfk5z4ozOGT1wdVv' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::Vfk5z4ozOGT1wdVv',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::veM35yHvWDeXogRp' =>
=======
    'generated::veM35yHvWDeXogRp' => 
>>>>>>> Stashed changes
=======
    'generated::veM35yHvWDeXogRp' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::veM35yHvWDeXogRp',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'zoom.callJoin' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'zoom-call-user',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":247:{@Bce+6l5nRfrPed5Pug8i00PdTJa+HgnmGU/QUI7Z+3M=.a:5:{s:3:"use";a:0:{}s:8:"function";s:35:"function(){
	return \\view(\'app\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000248e1f200000000071bf6e66";}";s:4:"hash";s:44:"cWbhknB/TF6+b4HhNxa8Y0x1w93mOX0YfPMpx3XIdhU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'zoom.callJoin',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::Vo4Wmi7FC4E2EFAG' =>
=======
    'generated::Vo4Wmi7FC4E2EFAG' => 
>>>>>>> Stashed changes
=======
    'generated::Vo4Wmi7FC4E2EFAG' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'zoom-call-user/{any}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":252:{@G6FvF5ccESXB1C05QsDyZkRrw8h77kE+uyWATrIjKN8=.a:5:{s:3:"use";a:0:{}s:8:"function";s:40:"function () {
    return \\view(\'app\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000248e1f280000000071bf6e66";}";s:4:"hash";s:44:"s0VTM4pXzz/gUtZF/d/SpTbYMjfqMcgti4rNqghVF78=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::Vo4Wmi7FC4E2EFAG',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
        'any' => '.*',
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'main' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'main',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::kWMNmsOxyfFGddH5' =>
=======
    'generated::kWMNmsOxyfFGddH5' => 
>>>>>>> Stashed changes
=======
    'generated::kWMNmsOxyfFGddH5' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service-show/{slug}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@serviceShow',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@serviceShow',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::kWMNmsOxyfFGddH5',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::6e5Cum2BprLNLVg8' =>
=======
    'generated::6e5Cum2BprLNLVg8' => 
>>>>>>> Stashed changes
=======
    'generated::6e5Cum2BprLNLVg8' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service-details/{slug}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@serviceDetails',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@serviceDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::6e5Cum2BprLNLVg8',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.register' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'user-register',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\RegisterController@storeData',
        'controller' => 'App\\Http\\Controllers\\RegisterController@storeData',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'user.register',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::scwp6287wLqlRy0N' =>
=======
    'generated::scwp6287wLqlRy0N' => 
>>>>>>> Stashed changes
=======
    'generated::scwp6287wLqlRy0N' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-page',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\PaymentController@paymnetIndex',
        'controller' => 'App\\Http\\Controllers\\Front\\PaymentController@paymnetIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::scwp6287wLqlRy0N',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.conform' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-conform',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\PaymentController@paymentConform',
        'controller' => 'App\\Http\\Controllers\\Front\\PaymentController@paymentConform',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'payment.conform',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::VsvWTrv8evmOLBGG' =>
=======
    'generated::VsvWTrv8evmOLBGG' => 
>>>>>>> Stashed changes
=======
    'generated::VsvWTrv8evmOLBGG' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment-invoice',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\PaymentController@paymentInvoice',
        'controller' => 'App\\Http\\Controllers\\Front\\PaymentController@paymentInvoice',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::VsvWTrv8evmOLBGG',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'search-store',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@searchStore',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@searchStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'search.store',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.us' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@contactUs',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@contactUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'contact.us',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contactSave' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'contactSave',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@contactSave',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@contactSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'contactSave',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'termCondition' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'term-and-condition',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@termCondition',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@termCondition',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'termCondition',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'download.file' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@downloadFile',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@downloadFile',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'download.file',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.index.stripe' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stripe-payment/{order}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@handleGet',
        'controller' => 'App\\Http\\Controllers\\StripeController@handleGet',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'payment.index.stripe',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe.payment' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'stripe-payment/{order}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StripeController@handlePost',
        'controller' => 'App\\Http\\Controllers\\StripeController@handlePost',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'stripe.payment',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::WIx7JoC4LqD8KqLs' =>
=======
    'generated::WIx7JoC4LqD8KqLs' => 
>>>>>>> Stashed changes
=======
    'generated::WIx7JoC4LqD8KqLs' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer-job-post',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@buyerJobPost',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@buyerJobPost',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::WIx7JoC4LqD8KqLs',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bid.request' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'bid-request',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@bidRequest',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@bidRequest',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'bid.request',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.info' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/{userName}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
          1 => 'auth:seller,customer',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@userInfo',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@userInfo',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'user.info',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::Y5XgLGPtMARNb3uy' =>
=======
    'generated::Y5XgLGPtMARNb3uy' => 
>>>>>>> Stashed changes
=======
    'generated::Y5XgLGPtMARNb3uy' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'sendMsg',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Front\\MainController@sendMsg',
        'controller' => 'App\\Http\\Controllers\\Front\\MainController@sendMsg',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::Y5XgLGPtMARNb3uy',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.admin' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'login.admin',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::B3fY2nxS4yjtx6Iq' =>
=======
    'generated::B3fY2nxS4yjtx6Iq' => 
>>>>>>> Stashed changes
=======
    'generated::B3fY2nxS4yjtx6Iq' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::B3fY2nxS4yjtx6Iq',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::omhkKZ87qH6pHn5O' =>
=======
    'generated::omhkKZ87qH6pHn5O' => 
>>>>>>> Stashed changes
=======
    'generated::omhkKZ87qH6pHn5O' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::omhkKZ87qH6pHn5O',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'category.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'category.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/category',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'category.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{category}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'category.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/category/{category}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'category.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/category/{category}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'category.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.destroy' =>
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/category/{category}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'category.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::k16mwyp5NGFgkYZi' =>
=======
    'generated::k16mwyp5NGFgkYZi' => 
>>>>>>> Stashed changes
=======
    'generated::k16mwyp5NGFgkYZi' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categorySave',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@categorySave',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@categorySave',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::k16mwyp5NGFgkYZi',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.statusChage' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/statusChage/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@statusChage',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@statusChage',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'category.statusChage',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::9wKkFH2kCGzmcrzY' =>
=======
    'generated::9wKkFH2kCGzmcrzY' => 
>>>>>>> Stashed changes
=======
    'generated::9wKkFH2kCGzmcrzY' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-seller',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@manageSeller',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@manageSeller',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::9wKkFH2kCGzmcrzY',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.view' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-seller-details/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@manageDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@manageDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'seller.view',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::pb7c0OI8fLGIXc5X' =>
=======
    'generated::pb7c0OI8fLGIXc5X' => 
>>>>>>> Stashed changes
=======
    'generated::pb7c0OI8fLGIXc5X' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-buyer',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@manageBuyer',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@manageBuyer',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::pb7c0OI8fLGIXc5X',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.view' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/manage-buyer-details',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@manageBuyer',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@manageBuyer',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'customer.view',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::SOjNauDQXXZf3s8c' =>
=======
    'generated::SOjNauDQXXZf3s8c' => 
>>>>>>> Stashed changes
=======
    'generated::SOjNauDQXXZf3s8c' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@adminOrder',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@adminOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::SOjNauDQXXZf3s8c',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::lhPJZzzAsLMJp90M' =>
=======
    'generated::lhPJZzzAsLMJp90M' => 
>>>>>>> Stashed changes
=======
    'generated::lhPJZzzAsLMJp90M' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/msg-list',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@msgList',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@msgList',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::lhPJZzzAsLMJp90M',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::z1jX6VsDEuERxsPD' =>
=======
    'generated::z1jX6VsDEuERxsPD' => 
>>>>>>> Stashed changes
=======
    'generated::z1jX6VsDEuERxsPD' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/msg-details/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@msgDetails',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@msgDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::z1jX6VsDEuERxsPD',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::JF9JhtHUyyASlz5a' =>
=======
    'generated::JF9JhtHUyyASlz5a' => 
>>>>>>> Stashed changes
=======
    'generated::JF9JhtHUyyASlz5a' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/terms',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@termsConstion',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@termsConstion',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::JF9JhtHUyyASlz5a',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms.save' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/termsSave',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@termsSave',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@termsSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'terms.save',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.buyer' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-buyer',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@paymentBuyer',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@paymentBuyer',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'payment.buyer',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.seller' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-seller',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@paymentSeller',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@paymentSeller',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'payment.seller',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.paymentGive' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/payment-seller-paid/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@SellerpaymentGive',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@SellerpaymentGive',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'seller.paymentGive',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.rider' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rider',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Rider\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Rider\\LoginController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'login.rider',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::Rx9oXTEVrEJyyQ55' =>
=======
    'generated::Rx9oXTEVrEJyyQ55' => 
>>>>>>> Stashed changes
=======
    'generated::Rx9oXTEVrEJyyQ55' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'rider',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Rider\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Rider\\LoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::Rx9oXTEVrEJyyQ55',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::pEL1gkqjshcfSKYm' =>
=======
    'generated::pEL1gkqjshcfSKYm' => 
>>>>>>> Stashed changes
=======
    'generated::pEL1gkqjshcfSKYm' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'rider/dashboard',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Rider\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Rider\\MainController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::pEL1gkqjshcfSKYm',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.customer' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\LoginController@showLoginFormCustomer',
        'controller' => 'App\\Http\\Controllers\\Customer\\LoginController@showLoginFormCustomer',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'login.customer',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::rA4W3zQlNtZMjM6V' =>
=======
    'generated::rA4W3zQlNtZMjM6V' => 
>>>>>>> Stashed changes
=======
    'generated::rA4W3zQlNtZMjM6V' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Customer\\LoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::rA4W3zQlNtZMjM6V',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::gt1BtEjvUu4TvyAo' =>
=======
    'generated::gt1BtEjvUu4TvyAo' => 
>>>>>>> Stashed changes
=======
    'generated::gt1BtEjvUu4TvyAo' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/dashboard',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@BuyerIndex',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@BuyerIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::gt1BtEjvUu4TvyAo',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.seller' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\LoginController@showLoginFormSeller',
        'controller' => 'App\\Http\\Controllers\\Seller\\LoginController@showLoginFormSeller',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'login.seller',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::eF6TD9JmJYchy5af' =>
=======
    'generated::eF6TD9JmJYchy5af' => 
>>>>>>> Stashed changes
=======
    'generated::eF6TD9JmJYchy5af' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'seller',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Seller\\LoginController@login',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::eF6TD9JmJYchy5af',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.dashboard' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/dashboard',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@sellerIndex',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@sellerIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'seller.dashboard',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::qN5kIVTdQTaIdzxO' =>
=======
    'generated::qN5kIVTdQTaIdzxO' => 
>>>>>>> Stashed changes
=======
    'generated::qN5kIVTdQTaIdzxO' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/fileShare',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MsgController@fileShare',
        'controller' => 'App\\Http\\Controllers\\Seller\\MsgController@fileShare',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::qN5kIVTdQTaIdzxO',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.shareUserSeller' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/fileShareUser/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MsgController@fileShareUser',
        'controller' => 'App\\Http\\Controllers\\Seller\\MsgController@fileShareUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'file.shareUserSeller',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.shareStoreSeller' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/fileShareStore',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MsgController@fileShareStore',
        'controller' => 'App\\Http\\Controllers\\Seller\\MsgController@fileShareStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'file.shareStoreSeller',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.dashboardzoom.seller' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/zoom-call',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MsgController@zoomCall',
        'controller' => 'App\\Http\\Controllers\\Seller\\MsgController@zoomCall',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'seller.dashboardzoom.seller',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'generated::zeWl1dXws7TgWQtZ' =>
=======
    'generated::zeWl1dXws7TgWQtZ' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/order',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@sellerOrder',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@sellerOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::zeWl1dXws7TgWQtZ',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom.offer' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/custom-offer',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@sellerCustomOffer',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@sellerCustomOffer',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'custom.offer',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'storeCustom.offer' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/storeCustomOffer',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@storeCustomOffer',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@storeCustomOffer',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'storeCustom.offer',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'generated::mhXA6dJ3XnBFpnIH' =>
=======
    'generated::mhXA6dJ3XnBFpnIH' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/reviews',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@sellerReviews',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@sellerReviews',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::mhXA6dJ3XnBFpnIH',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'generated::he4YboHZeaX7W7S0' =>
=======
    'generated::he4YboHZeaX7W7S0' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/messages',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MsgController@index',
        'controller' => 'App\\Http\\Controllers\\Seller\\MsgController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::he4YboHZeaX7W7S0',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'generated::buzWKkXflqrRYRGT' =>
=======
    'generated::buzWKkXflqrRYRGT' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/messages-details/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MsgController@msgDetails',
        'controller' => 'App\\Http\\Controllers\\Seller\\MsgController@msgDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::buzWKkXflqrRYRGT',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.index' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/services',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'services.index',
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.create' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/services/create',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'services.create',
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@create',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@create',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/services',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'services.store',
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@store',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@store',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.show' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/services/{service}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'services.show',
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@show',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@show',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.edit' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/services/{service}/edit',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'services.edit',
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@edit',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.update' =>
    array (
      'methods' =>
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'seller/services/{service}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'services.update',
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@update',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@update',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' =>
        array (
        ),
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'services.destroy' =>
=======
    'generated::zeWl1dXws7TgWQtZ' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'DELETE',
      ),
      'uri' => 'seller/services/{service}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'as' => 'services.destroy',
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@destroy',
        'namespace' => NULL,
        'prefix' => '/seller',
        'where' =>
        array (
        ),
<<<<<<< Updated upstream
=======
        'as' => 'generated::zeWl1dXws7TgWQtZ',
>>>>>>> Stashed changes
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.status' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/services-status/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@servicesStatus',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@servicesStatus',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'services.status',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.payment' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/SellerPayment',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@SellerPayment',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@SellerPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'seller.payment',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'generated::l3zK4R555xNX8MxC' =>
=======
    'generated::mhXA6dJ3XnBFpnIH' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/setting',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@sellerSetting',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@sellerSetting',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
<<<<<<< Updated upstream
        'as' => 'generated::l3zK4R555xNX8MxC',
=======
        'as' => 'generated::mhXA6dJ3XnBFpnIH',
>>>>>>> Stashed changes
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'generated::6qcDY68uQFyXyB9a' =>
=======
    'generated::he4YboHZeaX7W7S0' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/setting-save',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@sellerSettingSave',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@sellerSettingSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
<<<<<<< Updated upstream
        'as' => 'generated::6qcDY68uQFyXyB9a',
=======
        'as' => 'generated::he4YboHZeaX7W7S0',
>>>>>>> Stashed changes
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::6qcDY68uQFyXyB9a' =>
=======
    'generated::6qcDY68uQFyXyB9a' => 
>>>>>>> Stashed changes
=======
    'generated::buzWKkXflqrRYRGT' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'seller/change-password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MainController@sellerSettingSavepass',
        'controller' => 'App\\Http\\Controllers\\Seller\\MainController@sellerSettingSavepass',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
<<<<<<< Updated upstream
        'as' => 'generated::PuWsfFQd4aiUrYVk',
=======
        'as' => 'generated::buzWKkXflqrRYRGT',
>>>>>>> Stashed changes
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::49uO2sl4M5vJ1mE8' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/market',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MarketController@index',
        'controller' => 'App\\Http\\Controllers\\Seller\\MarketController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::6qcDY68uQFyXyB9a',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.createSchedule' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-schedule',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'controller' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'seller.createSchedule',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::49uO2sl4M5vJ1mE8' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-schedule',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'controller' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
        'as' => 'generated::49uO2sl4M5vJ1mE8',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'seller.createSchedule' =>
=======
    'generated::49uO2sl4M5vJ1mE8' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-schedule',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'controller' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
<<<<<<< Updated upstream
        'as' => 'seller.createSchedule',
=======
        'as' => 'generated::49uO2sl4M5vJ1mE8',
>>>>>>> Stashed changes
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.createSchedule' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-schedule',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'controller' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
        'as' => 'seller.createSchedule',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'seller.market.detail' =>
=======
    'seller.createSchedule' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'controller' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seller.createSchedule',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.market.detail' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/market/{slug}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MarketController@viewDetail',
        'controller' => 'App\\Http\\Controllers\\Seller\\MarketController@viewDetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'seller.market.detail',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.service' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/service',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
        'as' => 'seller.service',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.createService' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-service',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
        'as' => 'seller.createService',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chat' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/service',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
        'as' => 'seller.service',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'seller.createService' =>
=======
    'generated::6qcDY68uQFyXyB9a' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-service',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
<<<<<<< Updated upstream
        'as' => 'seller.createService',
=======
        'as' => 'generated::6qcDY68uQFyXyB9a',
>>>>>>> Stashed changes
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.service' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/service',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
        'as' => 'seller.service',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'seller.createService' =>
=======
    'generated::49uO2sl4M5vJ1mE8' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-service',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' =>
        array (
        ),
<<<<<<< Updated upstream
        'as' => 'seller.createService',
=======
        'as' => 'generated::49uO2sl4M5vJ1mE8',
>>>>>>> Stashed changes
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'chat' =>
=======
    'seller.service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seller.service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
    'seller.createService' => 
=======
    'seller.createSchedule' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-schedule',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'controller' => 'App\\Http\\Controllers\\Seller\\MarketController@createSchedule',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seller.createSchedule',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.market.detail' => 
>>>>>>> Stashed changes
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seller.createService',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seller.service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'seller.createService' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'seller/create-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'controller' => 'App\\Http\\Controllers\\Seller\\ServiceController@createService',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'seller.createService',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chat' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chat',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ChatController@index',
        'controller' => 'App\\Http\\Controllers\\ChatController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'chat',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyer.dashboard' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/dashboard',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@BuyerIndex',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@BuyerIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'buyer.dashboard',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::8Ey7CDlhblm4ImC4' =>
=======
    'generated::8Ey7CDlhblm4ImC4' => 
>>>>>>> Stashed changes
=======
    'generated::8Ey7CDlhblm4ImC4' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/job-post',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@jobPost',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@jobPost',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::8Ey7CDlhblm4ImC4',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'job.postSave' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/job-post-save',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@jobPostSave',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@jobPostSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'job.postSave',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'job.jobPostDelete' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/jobPostDelete/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@jobPostDelete',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@jobPostDelete',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'job.jobPostDelete',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::BdLfzbITmC50flBy' =>
=======
    'generated::BdLfzbITmC50flBy' => 
>>>>>>> Stashed changes
=======
    'generated::BdLfzbITmC50flBy' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/messages',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MassageController@index',
        'controller' => 'App\\Http\\Controllers\\Customer\\MassageController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::BdLfzbITmC50flBy',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.share' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/file-share',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MassageController@fileShare',
        'controller' => 'App\\Http\\Controllers\\Customer\\MassageController@fileShare',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'file.share',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.shareUser' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/file-share-user/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MassageController@fileShareUser',
        'controller' => 'App\\Http\\Controllers\\Customer\\MassageController@fileShareUser',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'file.shareUser',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'file.shareStore' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/file-share-store',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MassageController@fileShareStore',
        'controller' => 'App\\Http\\Controllers\\Customer\\MassageController@fileShareStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'file.shareStore',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::Mjhl0xDCemT5SfCV' =>
=======
    'generated::Mjhl0xDCemT5SfCV' => 
>>>>>>> Stashed changes
=======
    'generated::Mjhl0xDCemT5SfCV' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/messages-details/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MassageController@msgDetails',
        'controller' => 'App\\Http\\Controllers\\Customer\\MassageController@msgDetails',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::Mjhl0xDCemT5SfCV',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::vJtbHJELefGnTAHo' =>
=======
    'generated::vJtbHJELefGnTAHo' => 
>>>>>>> Stashed changes
=======
    'generated::vJtbHJELefGnTAHo' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/manage-bidder/{id}',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@manageBidder',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@manageBidder',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::vJtbHJELefGnTAHo',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'order.acceptBider' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/store-order-bidder',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@bidOrderAccept',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@bidOrderAccept',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'order.acceptBider',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bidderSendMsg' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/bidderSendMsg',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@bidderSendMsg',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@bidderSendMsg',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'bidderSendMsg',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::sntIt0gtfAHOih1J' =>
=======
    'generated::sntIt0gtfAHOih1J' => 
>>>>>>> Stashed changes
=======
    'generated::sntIt0gtfAHOih1J' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/reviews',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@buyerReviews',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@buyerReviews',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::sntIt0gtfAHOih1J',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyer.review' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/reviewsStore',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@buyerReviewStore',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@buyerReviewStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'buyer.review',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::kHiC7AJLZd718QUb' =>
=======
    'generated::kHiC7AJLZd718QUb' => 
>>>>>>> Stashed changes
=======
    'generated::kHiC7AJLZd718QUb' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/order',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@buyerOrder',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@buyerOrder',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::kHiC7AJLZd718QUb',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'order.acceptBuyer' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/order',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@buyerOrderAccept',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@buyerOrderAccept',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'order.acceptBuyer',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customOrder.store' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/custom-offer-store',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@buyerOrderCustomStore',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@buyerOrderCustomStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'customOrder.store',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyer.customOffer' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/custom-offer',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@BuyerCustomOffer',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@BuyerCustomOffer',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'buyer.customOffer',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'buyer.payment' =>
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/payment',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@BuyerPayment',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@BuyerPayment',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'buyer.payment',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::etPZtfyS4uVR6DPl' =>
=======
    'generated::etPZtfyS4uVR6DPl' => 
>>>>>>> Stashed changes
=======
    'generated::etPZtfyS4uVR6DPl' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'buyer/setting',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@buyersetting',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@buyersetting',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::etPZtfyS4uVR6DPl',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.save' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/setting-save',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@buyerSettingSave',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@buyerSettingSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'setting.save',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::Q7HBphL87YDiVIUX' =>
=======
    'generated::Q7HBphL87YDiVIUX' => 
>>>>>>> Stashed changes
=======
    'generated::Q7HBphL87YDiVIUX' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'buyer/change-password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Customer\\MainController@buyerSettingSavepass',
        'controller' => 'App\\Http\\Controllers\\Customer\\MainController@buyerSettingSavepass',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::Q7HBphL87YDiVIUX',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::4z9WfoK1FiBCX1fv' =>
=======
    'generated::4z9WfoK1FiBCX1fv' => 
>>>>>>> Stashed changes
=======
    'generated::4z9WfoK1FiBCX1fv' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@profileIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@profileIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::4z9WfoK1FiBCX1fv',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::pyg8S4HaxQrCqkS4' =>
=======
    'generated::pyg8S4HaxQrCqkS4' => 
>>>>>>> Stashed changes
=======
    'generated::pyg8S4HaxQrCqkS4' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-password',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@changePassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::pyg8S4HaxQrCqkS4',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::x6fPuaWyxtMvhz9m' =>
=======
    'generated::x6fPuaWyxtMvhz9m' => 
>>>>>>> Stashed changes
=======
    'generated::x6fPuaWyxtMvhz9m' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/change-info',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\MainController@changeInfo',
        'controller' => 'App\\Http\\Controllers\\Admin\\MainController@changeInfo',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::x6fPuaWyxtMvhz9m',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    'generated::QicH66xtL6IOsRfy' =>
=======
    'generated::QicH66xtL6IOsRfy' => 
>>>>>>> Stashed changes
=======
    'generated::QicH66xtL6IOsRfy' => 
>>>>>>> Stashed changes
    array (
      'methods' =>
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/general',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'generated::QicH66xtL6IOsRfy',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.save' =>
    array (
      'methods' =>
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/generalSave',
      'action' =>
      array (
        'middleware' =>
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralController@genaralSave',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralController@genaralSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' =>
        array (
        ),
        'as' => 'general.save',
      ),
      'fallback' => false,
      'defaults' =>
      array (
      ),
      'wheres' =>
      array (
      ),
      'bindingFields' =>
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
