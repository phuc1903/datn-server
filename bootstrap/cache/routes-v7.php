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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
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
      '/api/v1/get-location-in-vn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PEFCt40jRGIgB5Bp',
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
      '/api/v1/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qPFvniKTnLR3ocVq',
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
      '/api/v1/products/most-favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f8vxP0eu1W0Scd3r',
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
      '/api/v1/products/also-like' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0mbuc46qBWy4tCkY',
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
      '/api/v1/combos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VtAFkLODr8DELTtW',
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
      '/api/v1/combos/nearly-start' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::romcrkvtl98Bm0NM',
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
      '/api/v1/combos/nearly-end' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rMSzUWuPoV9QNmsY',
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
      '/api/v1/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::itj3QQ8VY8Tudqja',
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
      '/api/v1/sliders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OUpLQfBZuSHNLgdz',
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
      '/api/v1/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kSTzt7VgU2YcFx4W',
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
      '/api/v1/orders/payment/momo/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mSbKXw9Lt7IJDlHU',
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
      '/api/v1/product_feedbacks/getAllOrderItem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BrsWWE4NPiTtZZ8T',
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
      '/api/v1/product_feedbacks/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2VqBvJ4CaKVqbjvA',
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
      '/api/v1/product_comments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xc1FKpvoFDzvBS9T',
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
      '/api/v1/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DrIhgncAg5DaGSn6',
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
      '/api/v1/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mGsvr8y9NGYw4dVI',
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
      '/api/v1/auth/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RkuGViw9zmUCp7Kc',
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
      '/api/v1/auth/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::abcEfoZd9EllQ95Z',
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
      '/api/v1/auth/login/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rktQxW6zNUYQPdiI',
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
      '/api/v1/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1xc9D7rdNnEuje3B',
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
      '/api/v1/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::42GXwc6CH4mjmlI0',
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
      '/api/v1/auth/change-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tTGokZocgoA5HMoh',
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
      '/api/v1/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::88B6xuyyx2ddDm2O',
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
      '/api/v1/users/carts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T5P0fNwMuKNrQZvp',
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
      '/api/v1/users/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JAWsHrNfwdk8gdUH',
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
      '/api/v1/users/favorites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xwJUblqnAev6OGEI',
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
      '/api/v1/users/add-favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GfdTpEf4wfViCrsG',
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
      '/api/v1/users/remove-favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cCvZBP9S2S91B9kg',
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
      '/api/v1/users/vouchers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5ywsTEFV6NlAlskM',
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
      '/api/v1/users/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QY27cjzvAk8HL9W3',
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
      '/api/v1/users/add-addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g68gjpv58WHtCVvb',
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
      '/api/v1/users/update-addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QB7Kb1nsgIeWVcDF',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/users/delete-addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7E5IwnFFUImTYGTk',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/carts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CnVnOSQczV4vsR8S',
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
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sd1hfyIG62xhkV5e',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/v1/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1zZDQZjKpqnabOfX',
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
      '/api/v1/vouchers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sk8M8QqVlo0s7xKA',
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
      '/api/v1/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PicjIQj25UExRqPW',
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
            '_route' => 'login.store',
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
      '/2fa/setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '2fa.setup',
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
            '_route' => '2fa.enable',
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
      '/2fa/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '2fa.verify',
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
            '_route' => '2fa.verify.post',
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
            '_route' => 'admin.dashboard',
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
      '/admin/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.index',
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
            '_route' => 'admin.product.store',
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
      '/admin/product/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.create',
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
            '_route' => 'admin.category.index',
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
            '_route' => 'admin.category.store',
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
            '_route' => 'admin.category.create',
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
      '/admin/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.index',
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
      '/admin/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.index',
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
            '_route' => 'admin.admin.store',
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
      '/admin/admin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.create',
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
            '_route' => 'admin.order.index',
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
      '/admin/feedback-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feedback-product.index',
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
      '/admin/variant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.variant.index',
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
            '_route' => 'admin.variant.store',
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
      '/admin/variant/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.variant.create',
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
      '/admin/combo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.combo.index',
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
            '_route' => 'admin.combo.store',
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
      '/admin/combo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.combo.create',
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
      '/admin/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.index',
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
            '_route' => 'admin.blog.store',
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
      '/admin/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.create',
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
      '/admin/tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.index',
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
            '_route' => 'admin.tag.store',
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
      '/admin/tag/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.create',
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
      '/admin/voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.voucher.index',
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
            '_route' => 'admin.voucher.store',
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
      '/admin/voucher/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.voucher.create',
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
      '/admin/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.index',
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
            '_route' => 'admin.slider.store',
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
      '/admin/slider/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.create',
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
      '/admin/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.index',
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
            '_route' => 'admin.permission.store',
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
      '/admin/permission/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.create',
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
      '/admin/module' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.module.index',
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
            '_route' => 'admin.module.store',
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
      '/admin/module/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.module.create',
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
      '/admin/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.index',
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
            '_route' => 'admin.role.store',
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
      '/admin/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.create',
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
      '/admin/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.setting.index',
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
            '_route' => 'admin.setting.store',
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
      '/admin/provinces' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.provinces',
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
      '/admin/districts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.districts',
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
      '/admin/ward' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.wards',
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
      '/save-theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4XPvKoiPOIbCjLdy',
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
      0 => '{^(?|/a(?|pi/v1/(?|product(?|s/(?|detail/([^/]++)(*:51)|category/([^/]++)(*:75)|tag/([^/]++)(*:94)|feedback\\-product/([^/]++)(*:127)|product\\-related/([^/]++)(*:160)|skus/([^/]++)(*:181))|_(?|feedbacks/([^/]++)(?|/update(*:222)|(*:230))|comments/(?|([^/]++)(*:259)|getProductComment/([^/]++)(*:293))))|c(?|ombos/detail/([^/]++)(*:329)|arts/([^/]++)(?|(*:353)))|orders/([^/]++)(?|/cancel(*:388)|(*:396))|blogs/([^/]++)(*:419)|vouchers/([^/]++)(?|(*:447)|/claim(*:461)))|dmin/(?|p(?|roduct/([^/]++)(?|/edit(*:506)|(*:514))|ermission/([^/]++)(?|/edit(*:549)|(*:557)))|c(?|ategory/([^/]++)(?|/edit(*:595)|(*:603))|ombo/([^/]++)(?|/edit(*:633)|(*:641)))|user/([^/]++)(?|/edit(*:672)|(*:680))|admin/([^/]++)(?|/edit(*:711)|(*:719))|order/([^/]++)(?|/edit(*:750)|(*:758))|feedback\\-product/([^/]++)(?|/edit(*:801)|(*:809))|v(?|ariant/([^/]++)(?|/edit(*:845)|(*:853))|oucher/([^/]++)(?|/edit(*:885)|(*:893)))|blog/([^/]++)(?|/edit(*:924)|(*:932))|tag/([^/]++)(?|/edit(*:961)|(*:969))|slider/([^/]++)(?|/edit(*:1001)|(*:1010))|module/([^/]++)(?|/edit(*:1043)|(*:1052))|role/([^/]++)(?|/edit(*:1083)|(*:1092))))|/(.*)(*:1109))/?$}sDu',
    ),
    3 => 
    array (
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2F1G3zfNaIVXQkbM',
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
      75 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xHVhspR0sPVfbMPg',
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
      94 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mhuhXtL1ehEHwmT0',
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
      127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZsGnrI7iQrtnccGO',
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
      160 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lOtB2MfjphgPjIQT',
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
      181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.get.skus.product',
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
      222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ysp2D9FX7cc3LVZJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
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
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Uh2obW9rNg1JRT1',
          ),
          1 => 
          array (
            0 => 'id',
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
      259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DmL5WzV2cwKCYLxf',
          ),
          1 => 
          array (
            0 => 'id',
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
      293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::waoJteOaPiITxLhy',
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
      329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aYjO1RaFU4hceo9p',
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
      353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pwmq00VRHy6o4dgm',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'generated::Qhhy93OjwLx7gZpc',
          ),
          1 => 
          array (
            0 => 'product_id',
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
      388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MZGT1ymDRyYu74bq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
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
      396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zxdtd9gzf0e1w97s',
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
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IJf8a2KgzrDbZ1xo',
          ),
          1 => 
          array (
            0 => 'blog_id',
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
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9BFEU8Osq1m2HczY',
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
      461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KK2VxgowHdgwEoba',
          ),
          1 => 
          array (
            0 => 'id',
          ),
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
      506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.edit',
          ),
          1 => 
          array (
            0 => 'product',
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
      514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.product.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.product.destroy',
          ),
          1 => 
          array (
            0 => 'product',
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
      549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.edit',
          ),
          1 => 
          array (
            0 => 'permission',
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
      557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.permission.update',
          ),
          1 => 
          array (
            0 => 'permission',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.permission.destroy',
          ),
          1 => 
          array (
            0 => 'permission',
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
      595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.edit',
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
      603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.category.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.category.destroy',
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
      633 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.combo.edit',
          ),
          1 => 
          array (
            0 => 'combo',
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
      641 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.combo.update',
          ),
          1 => 
          array (
            0 => 'combo',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.combo.destroy',
          ),
          1 => 
          array (
            0 => 'combo',
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
      672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
          ),
          1 => 
          array (
            0 => 'user',
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
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.edit',
          ),
          1 => 
          array (
            0 => 'admin',
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
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.admin.update',
          ),
          1 => 
          array (
            0 => 'admin',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.admin.destroy',
          ),
          1 => 
          array (
            0 => 'admin',
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
      750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      758 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feedback-product.edit',
          ),
          1 => 
          array (
            0 => 'product_feedbacks',
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
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.feedback-product.update',
          ),
          1 => 
          array (
            0 => 'product_feedbacks',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.variant.edit',
          ),
          1 => 
          array (
            0 => 'variant',
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
      853 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.variant.update',
          ),
          1 => 
          array (
            0 => 'variant',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.variant.destroy',
          ),
          1 => 
          array (
            0 => 'variant',
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
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.variant.show',
          ),
          1 => 
          array (
            0 => 'variant',
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
      885 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.voucher.edit',
          ),
          1 => 
          array (
            0 => 'voucher',
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
      893 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.voucher.update',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.voucher.destroy',
          ),
          1 => 
          array (
            0 => 'voucher',
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
      924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
          ),
          1 => 
          array (
            0 => 'blog',
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
      932 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.blog.destroy',
          ),
          1 => 
          array (
            0 => 'blog',
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
      961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.edit',
          ),
          1 => 
          array (
            0 => 'tag',
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
      969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.tag.update',
          ),
          1 => 
          array (
            0 => 'tag',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.tag.destroy',
          ),
          1 => 
          array (
            0 => 'tag',
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
      1001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.edit',
          ),
          1 => 
          array (
            0 => 'slider',
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
      1010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.slider.update',
          ),
          1 => 
          array (
            0 => 'slider',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.slider.destroy',
          ),
          1 => 
          array (
            0 => 'slider',
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
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.module.edit',
          ),
          1 => 
          array (
            0 => 'module',
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
      1052 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.module.update',
          ),
          1 => 
          array (
            0 => 'module',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.module.destroy',
          ),
          1 => 
          array (
            0 => 'module',
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
      1083 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.edit',
          ),
          1 => 
          array (
            0 => 'role',
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
      1092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.role.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
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
            '_route' => 'admin.role.destroy',
          ),
          1 => 
          array (
            0 => 'role',
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
      1109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aNtJLB6pfdrh9n3L',
          ),
          1 => 
          array (
            0 => 'fallbackPlaceholder',
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
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
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
    'generated::PEFCt40jRGIgB5Bp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/get-location-in-vn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Address\\AddressController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Address\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1',
        'where' => 
        array (
        ),
        'as' => 'generated::PEFCt40jRGIgB5Bp',
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
    'generated::qPFvniKTnLR3ocVq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getAllProduct',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getAllProduct',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::qPFvniKTnLR3ocVq',
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
    'generated::2F1G3zfNaIVXQkbM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProduct',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProduct',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::2F1G3zfNaIVXQkbM',
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
    'generated::xHVhspR0sPVfbMPg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProductByCategory',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProductByCategory',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::xHVhspR0sPVfbMPg',
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
    'generated::mhuhXtL1ehEHwmT0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/tag/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProductByTag',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProductByTag',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::mhuhXtL1ehEHwmT0',
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
    'generated::f8vxP0eu1W0Scd3r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/most-favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getMostFavoritedProducts',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getMostFavoritedProducts',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::f8vxP0eu1W0Scd3r',
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
    'generated::ZsGnrI7iQrtnccGO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/feedback-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getFeedBackProduct',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getFeedBackProduct',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::ZsGnrI7iQrtnccGO',
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
    'generated::lOtB2MfjphgPjIQT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/product-related/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProductRelated',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProductRelated',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::lOtB2MfjphgPjIQT',
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
    'api.get.skus.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/skus/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getSkus',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getSkus',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'api.get.skus.product',
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
    'generated::0mbuc46qBWy4tCkY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/products/also-like',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProductAlsoLike',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Product\\ProductController@getProductAlsoLike',
        'namespace' => NULL,
        'prefix' => 'api/v1/products',
        'where' => 
        array (
        ),
        'as' => 'generated::0mbuc46qBWy4tCkY',
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
    'generated::VtAFkLODr8DELTtW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/combos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Combo\\ComboController@getAllCombo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Combo\\ComboController@getAllCombo',
        'namespace' => NULL,
        'prefix' => 'api/v1/combos',
        'where' => 
        array (
        ),
        'as' => 'generated::VtAFkLODr8DELTtW',
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
    'generated::aYjO1RaFU4hceo9p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/combos/detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Combo\\ComboController@getCombo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Combo\\ComboController@getCombo',
        'namespace' => NULL,
        'prefix' => 'api/v1/combos',
        'where' => 
        array (
        ),
        'as' => 'generated::aYjO1RaFU4hceo9p',
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
    'generated::romcrkvtl98Bm0NM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/combos/nearly-start',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Combo\\ComboController@nearlyStart',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Combo\\ComboController@nearlyStart',
        'namespace' => NULL,
        'prefix' => 'api/v1/combos',
        'where' => 
        array (
        ),
        'as' => 'generated::romcrkvtl98Bm0NM',
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
    'generated::rMSzUWuPoV9QNmsY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/combos/nearly-end',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Combo\\ComboController@nearlyEnd',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Combo\\ComboController@nearlyEnd',
        'namespace' => NULL,
        'prefix' => 'api/v1/combos',
        'where' => 
        array (
        ),
        'as' => 'generated::rMSzUWuPoV9QNmsY',
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
    'generated::itj3QQ8VY8Tudqja' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Category\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Category\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/categories',
        'where' => 
        array (
        ),
        'as' => 'generated::itj3QQ8VY8Tudqja',
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
    'generated::OUpLQfBZuSHNLgdz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/sliders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Slider\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Slider\\SliderController@index',
        'namespace' => NULL,
        'prefix' => 'api/v1/sliders',
        'where' => 
        array (
        ),
        'as' => 'generated::OUpLQfBZuSHNLgdz',
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
    'generated::kSTzt7VgU2YcFx4W' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Order\\OrderController@createOrder',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Order\\OrderController@createOrder',
        'namespace' => NULL,
        'prefix' => 'api/v1/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::kSTzt7VgU2YcFx4W',
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
    'generated::MZGT1ymDRyYu74bq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/orders/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Order\\OrderController@cancelOrder',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Order\\OrderController@cancelOrder',
        'namespace' => NULL,
        'prefix' => 'api/v1/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::MZGT1ymDRyYu74bq',
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
    'generated::Zxdtd9gzf0e1w97s' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/orders/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Order\\OrderController@orderUserDetail',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Order\\OrderController@orderUserDetail',
        'namespace' => NULL,
        'prefix' => 'api/v1/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::Zxdtd9gzf0e1w97s',
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
    'generated::mSbKXw9Lt7IJDlHU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/orders/payment/momo/ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Order\\OrderController@handleMomoIpn',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Order\\OrderController@handleMomoIpn',
        'namespace' => NULL,
        'prefix' => 'api/v1/orders',
        'where' => 
        array (
        ),
        'as' => 'generated::mSbKXw9Lt7IJDlHU',
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
    'generated::BrsWWE4NPiTtZZ8T' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/product_feedbacks/getAllOrderItem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductFeedbackController@getAllOrderItem',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductFeedbackController@getAllOrderItem',
        'namespace' => NULL,
        'prefix' => 'api/v1/product_feedbacks',
        'where' => 
        array (
        ),
        'as' => 'generated::BrsWWE4NPiTtZZ8T',
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
    'generated::2VqBvJ4CaKVqbjvA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/product_feedbacks/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductFeedbackController@create',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductFeedbackController@create',
        'namespace' => NULL,
        'prefix' => 'api/v1/product_feedbacks',
        'where' => 
        array (
        ),
        'as' => 'generated::2VqBvJ4CaKVqbjvA',
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
    'generated::Ysp2D9FX7cc3LVZJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/product_feedbacks/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductFeedbackController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductFeedbackController@update',
        'namespace' => NULL,
        'prefix' => 'api/v1/product_feedbacks',
        'where' => 
        array (
        ),
        'as' => 'generated::Ysp2D9FX7cc3LVZJ',
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
    'generated::1Uh2obW9rNg1JRT1' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/product_feedbacks/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductFeedbackController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductFeedbackController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/v1/product_feedbacks',
        'where' => 
        array (
        ),
        'as' => 'generated::1Uh2obW9rNg1JRT1',
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
    'generated::xc1FKpvoFDzvBS9T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/product_comments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductCommentController@create',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductCommentController@create',
        'namespace' => NULL,
        'prefix' => 'api/v1/product_comments',
        'where' => 
        array (
        ),
        'as' => 'generated::xc1FKpvoFDzvBS9T',
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
    'generated::DmL5WzV2cwKCYLxf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/product_comments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductCommentController@delete',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductCommentController@delete',
        'namespace' => NULL,
        'prefix' => 'api/v1/product_comments',
        'where' => 
        array (
        ),
        'as' => 'generated::DmL5WzV2cwKCYLxf',
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
    'generated::waoJteOaPiITxLhy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/product_comments/getProductComment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductCommentController@getProductComments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ProductFeedback\\ProductCommentController@getProductComments',
        'namespace' => NULL,
        'prefix' => 'api/v1/product_comments',
        'where' => 
        array (
        ),
        'as' => 'generated::waoJteOaPiITxLhy',
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
    'generated::DrIhgncAg5DaGSn6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@login',
        'namespace' => NULL,
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::DrIhgncAg5DaGSn6',
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
    'generated::mGsvr8y9NGYw4dVI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@register',
        'namespace' => NULL,
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::mGsvr8y9NGYw4dVI',
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
    'generated::RkuGViw9zmUCp7Kc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@forgotPassword',
        'namespace' => NULL,
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::RkuGViw9zmUCp7Kc',
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
    'generated::abcEfoZd9EllQ95Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@resetPassword',
        'namespace' => NULL,
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::abcEfoZd9EllQ95Z',
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
    'generated::rktQxW6zNUYQPdiI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/login/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@loginGoogle',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@loginGoogle',
        'namespace' => NULL,
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::rktQxW6zNUYQPdiI',
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
    'generated::1xc9D7rdNnEuje3B' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@handleGoogleCallback',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@handleGoogleCallback',
        'namespace' => NULL,
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::1xc9D7rdNnEuje3B',
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
    'generated::42GXwc6CH4mjmlI0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@logout',
        'namespace' => NULL,
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::42GXwc6CH4mjmlI0',
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
    'generated::tTGokZocgoA5HMoh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/auth/change-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@changePassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Auth\\AuthenticatorController@changePassword',
        'namespace' => NULL,
        'prefix' => 'api/v1/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::tTGokZocgoA5HMoh',
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
    'generated::88B6xuyyx2ddDm2O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@show',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::88B6xuyyx2ddDm2O',
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
    'generated::T5P0fNwMuKNrQZvp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/carts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@carts',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@carts',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::T5P0fNwMuKNrQZvp',
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
    'generated::JAWsHrNfwdk8gdUH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@orders',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@orders',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::JAWsHrNfwdk8gdUH',
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
    'generated::xwJUblqnAev6OGEI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/favorites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@favorites',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@favorites',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::xwJUblqnAev6OGEI',
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
    'generated::GfdTpEf4wfViCrsG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users/add-favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@addToFavorites',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@addToFavorites',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::GfdTpEf4wfViCrsG',
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
    'generated::cCvZBP9S2S91B9kg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users/remove-favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@removeFromFavorites',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@removeFromFavorites',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::cCvZBP9S2S91B9kg',
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
    'generated::5ywsTEFV6NlAlskM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@vouchers',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@vouchers',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::5ywsTEFV6NlAlskM',
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
    'generated::QY27cjzvAk8HL9W3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/users/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@getAddressUser',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@getAddressUser',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::QY27cjzvAk8HL9W3',
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
    'generated::g68gjpv58WHtCVvb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/users/add-addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@addAddressUser',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@addAddressUser',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::g68gjpv58WHtCVvb',
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
    'generated::QB7Kb1nsgIeWVcDF' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/users/update-addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@updateAddressUser',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@updateAddressUser',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::QB7Kb1nsgIeWVcDF',
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
    'generated::7E5IwnFFUImTYGTk' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/users/delete-addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@deleteAddressUser',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\User\\UserController@deleteAddressUser',
        'namespace' => NULL,
        'prefix' => 'api/v1/users',
        'where' => 
        array (
        ),
        'as' => 'generated::7E5IwnFFUImTYGTk',
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
    'generated::CnVnOSQczV4vsR8S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/carts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cart\\CartController@addCart',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cart\\CartController@addCart',
        'namespace' => NULL,
        'prefix' => 'api/v1/carts',
        'where' => 
        array (
        ),
        'as' => 'generated::CnVnOSQczV4vsR8S',
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
    'generated::Pwmq00VRHy6o4dgm' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/v1/carts/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cart\\CartController@updateCart',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cart\\CartController@updateCart',
        'namespace' => NULL,
        'prefix' => 'api/v1/carts',
        'where' => 
        array (
        ),
        'as' => 'generated::Pwmq00VRHy6o4dgm',
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
    'generated::Qhhy93OjwLx7gZpc' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/carts/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cart\\CartController@deleteCart',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cart\\CartController@deleteCart',
        'namespace' => NULL,
        'prefix' => 'api/v1/carts',
        'where' => 
        array (
        ),
        'as' => 'generated::Qhhy93OjwLx7gZpc',
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
    'generated::Sd1hfyIG62xhkV5e' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/v1/carts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Cart\\CartController@deleteAllCart',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Cart\\CartController@deleteAllCart',
        'namespace' => NULL,
        'prefix' => 'api/v1/carts',
        'where' => 
        array (
        ),
        'as' => 'generated::Sd1hfyIG62xhkV5e',
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
    'generated::1zZDQZjKpqnabOfX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Blog\\BlogController@getAllBlogs',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Blog\\BlogController@getAllBlogs',
        'namespace' => NULL,
        'prefix' => 'api/v1/blogs',
        'where' => 
        array (
        ),
        'as' => 'generated::1zZDQZjKpqnabOfX',
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
    'generated::IJf8a2KgzrDbZ1xo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/blogs/{blog_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Blog\\BlogController@getDetailBlog',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Blog\\BlogController@getDetailBlog',
        'namespace' => NULL,
        'prefix' => 'api/v1/blogs',
        'where' => 
        array (
        ),
        'as' => 'generated::IJf8a2KgzrDbZ1xo',
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
    'generated::sk8M8QqVlo0s7xKA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Voucher\\VoucherController@getAllVouchers',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Voucher\\VoucherController@getAllVouchers',
        'namespace' => NULL,
        'prefix' => 'api/v1/vouchers',
        'where' => 
        array (
        ),
        'as' => 'generated::sk8M8QqVlo0s7xKA',
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
    'generated::9BFEU8Osq1m2HczY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/vouchers/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Voucher\\VoucherController@getDetailVouchers',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Voucher\\VoucherController@getDetailVouchers',
        'namespace' => NULL,
        'prefix' => 'api/v1/vouchers',
        'where' => 
        array (
        ),
        'as' => 'generated::9BFEU8Osq1m2HczY',
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
    'generated::KK2VxgowHdgwEoba' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/v1/vouchers/{id}/claim',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'auth.active',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Voucher\\VoucherController@claimVouchers',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Voucher\\VoucherController@claimVouchers',
        'namespace' => NULL,
        'prefix' => 'api/v1/vouchers',
        'where' => 
        array (
        ),
        'as' => 'generated::KK2VxgowHdgwEoba',
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
    'generated::PicjIQj25UExRqPW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/v1/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Setting\\SettingController@getAllSettings',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Setting\\SettingController@getAllSettings',
        'namespace' => NULL,
        'prefix' => 'api/v1/settings',
        'where' => 
        array (
        ),
        'as' => 'generated::PicjIQj25UExRqPW',
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
          1 => 'guest:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\AuthController@login',
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
    'login.store' => 
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
          1 => 'guest:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\AuthController@loginStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\AuthController@loginStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.store',
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
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\AuthController@logout',
        'namespace' => NULL,
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
    '2fa.setup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '2fa/setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\TwoFactorController@showSetupForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\TwoFactorController@showSetupForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => '2fa.setup',
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
    '2fa.enable' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '2fa/setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\TwoFactorController@enable',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\TwoFactorController@enable',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => '2fa.enable',
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
    '2fa.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '2fa/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\TwoFactorController@showVerifyForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\TwoFactorController@showVerifyForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => '2fa.verify',
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
    '2fa.verify.post' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '2fa/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\TwoFactorController@verifyCode',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\TwoFactorController@verifyCode',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => '2fa.verify.post',
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
    'admin.dashboard' => 
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
          1 => 'auth:admin',
          2 => '2fa',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Dashboard\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Dashboard\\DashboardController@index',
        'as' => 'admin.dashboard',
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
    'admin.product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewProduct',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@index',
        'as' => 'admin.product.index',
        'namespace' => NULL,
        'prefix' => 'admin/product',
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
    'admin.product.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createProduct',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@create',
        'as' => 'admin.product.create',
        'namespace' => NULL,
        'prefix' => 'admin/product',
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
    'admin.product.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewProduct',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@store',
        'as' => 'admin.product.store',
        'namespace' => NULL,
        'prefix' => 'admin/product',
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
    'admin.product.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/product/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateProduct',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@edit',
        'as' => 'admin.product.edit',
        'namespace' => NULL,
        'prefix' => 'admin/product',
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
    'admin.product.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/product/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateProduct',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@update',
        'as' => 'admin.product.update',
        'namespace' => NULL,
        'prefix' => 'admin/product',
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
    'admin.product.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/product/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deleteProduct',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\ProductController@destroy',
        'as' => 'admin.product.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/product',
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
    'admin.category.index' => 
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
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewProductCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@index',
        'as' => 'admin.category.index',
        'namespace' => NULL,
        'prefix' => 'admin/category',
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
    'admin.category.create' => 
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
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createProductCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@create',
        'as' => 'admin.category.create',
        'namespace' => NULL,
        'prefix' => 'admin/category',
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
    'admin.category.store' => 
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
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createProductCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@store',
        'as' => 'admin.category.store',
        'namespace' => NULL,
        'prefix' => 'admin/category',
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
    'admin.category.edit' => 
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
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateProductCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@edit',
        'as' => 'admin.category.edit',
        'namespace' => NULL,
        'prefix' => 'admin/category',
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
    'admin.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateProductCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@update',
        'as' => 'admin.category.update',
        'namespace' => NULL,
        'prefix' => 'admin/category',
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
    'admin.category.destroy' => 
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
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deleteProductCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Category\\CategoryController@destroy',
        'as' => 'admin.category.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/category',
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
    'admin.user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@index',
        'as' => 'admin.user.index',
        'namespace' => NULL,
        'prefix' => 'admin/user',
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
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/user/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@edit',
        'as' => 'admin.user.edit',
        'namespace' => NULL,
        'prefix' => 'admin/user',
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
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateUser',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\User\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\User\\UserController@update',
        'as' => 'admin.user.update',
        'namespace' => NULL,
        'prefix' => 'admin/user',
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
    'admin.admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@index',
        'as' => 'admin.admin.index',
        'namespace' => NULL,
        'prefix' => 'admin/admin',
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
    'admin.admin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@create',
        'as' => 'admin.admin.create',
        'namespace' => NULL,
        'prefix' => 'admin/admin',
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
    'admin.admin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@store',
        'as' => 'admin.admin.store',
        'namespace' => NULL,
        'prefix' => 'admin/admin',
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
    'admin.admin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/admin/{admin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@edit',
        'as' => 'admin.admin.edit',
        'namespace' => NULL,
        'prefix' => 'admin/admin',
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
    'admin.admin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@update',
        'as' => 'admin.admin.update',
        'namespace' => NULL,
        'prefix' => 'admin/admin',
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
    'admin.admin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/admin/{admin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deleteAdmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Admin\\AdminController@destroy',
        'as' => 'admin.admin.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/admin',
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
    'admin.order.index' => 
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
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewOrder',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Order\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Order\\OrderController@index',
        'as' => 'admin.order.index',
        'namespace' => NULL,
        'prefix' => 'admin/order',
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
    'admin.order.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/order/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateOrder',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Order\\OrderController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Order\\OrderController@edit',
        'as' => 'admin.order.edit',
        'namespace' => NULL,
        'prefix' => 'admin/order',
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
    'admin.order.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/order/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateOrder',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Order\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Order\\OrderController@update',
        'as' => 'admin.order.update',
        'namespace' => NULL,
        'prefix' => 'admin/order',
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
    'admin.feedback-product.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewProductFeedback',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\FeedbackController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\FeedbackController@index',
        'as' => 'admin.feedback-product.index',
        'namespace' => NULL,
        'prefix' => 'admin/feedback-product',
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
    'admin.feedback-product.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/feedback-product/{product_feedbacks}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateProductFeedback',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\FeedbackController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\FeedbackController@edit',
        'as' => 'admin.feedback-product.edit',
        'namespace' => NULL,
        'prefix' => 'admin/feedback-product',
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
    'admin.feedback-product.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/feedback-product/{product_feedbacks}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateProductFeedback',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\FeedbackController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\FeedbackController@update',
        'as' => 'admin.feedback-product.update',
        'namespace' => NULL,
        'prefix' => 'admin/feedback-product',
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
    'admin.variant.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/variant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewProductAttribute',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@index',
        'as' => 'admin.variant.index',
        'namespace' => NULL,
        'prefix' => 'admin/variant',
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
    'admin.variant.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/variant/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createProductAttribute',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@create',
        'as' => 'admin.variant.create',
        'namespace' => NULL,
        'prefix' => 'admin/variant',
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
    'admin.variant.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/variant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createProductAttribute',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@store',
        'as' => 'admin.variant.store',
        'namespace' => NULL,
        'prefix' => 'admin/variant',
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
    'admin.variant.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/variant/{variant}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateProductAttribute',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@edit',
        'as' => 'admin.variant.edit',
        'namespace' => NULL,
        'prefix' => 'admin/variant',
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
    'admin.variant.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/variant/{variant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateProductAttribute',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@update',
        'as' => 'admin.variant.update',
        'namespace' => NULL,
        'prefix' => 'admin/variant',
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
    'admin.variant.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/variant/{variant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deleteProductAttribute',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@destroy',
        'as' => 'admin.variant.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/variant',
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
    'admin.variant.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/variant/{variant}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewProductAttribute',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\Product\\VariantController@show',
        'as' => 'admin.variant.show',
        'namespace' => NULL,
        'prefix' => 'admin/variant',
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
    'admin.combo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/combo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewCombo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@index',
        'as' => 'admin.combo.index',
        'namespace' => NULL,
        'prefix' => 'admin/combo',
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
    'admin.combo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/combo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createCombo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@create',
        'as' => 'admin.combo.create',
        'namespace' => NULL,
        'prefix' => 'admin/combo',
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
    'admin.combo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/combo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createCombo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@store',
        'as' => 'admin.combo.store',
        'namespace' => NULL,
        'prefix' => 'admin/combo',
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
    'admin.combo.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/combo/{combo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateCombo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@edit',
        'as' => 'admin.combo.edit',
        'namespace' => NULL,
        'prefix' => 'admin/combo',
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
    'admin.combo.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/combo/{combo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateCombo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@update',
        'as' => 'admin.combo.update',
        'namespace' => NULL,
        'prefix' => 'admin/combo',
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
    'admin.combo.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/combo/{combo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deleteCombo',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Combo\\ComboController@destroy',
        'as' => 'admin.combo.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/combo',
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
    'admin.blog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewPost',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@index',
        'as' => 'admin.blog.index',
        'namespace' => NULL,
        'prefix' => 'admin/blog',
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
    'admin.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createPost',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@create',
        'as' => 'admin.blog.create',
        'namespace' => NULL,
        'prefix' => 'admin/blog',
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
    'admin.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createPost',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@store',
        'as' => 'admin.blog.store',
        'namespace' => NULL,
        'prefix' => 'admin/blog',
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
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blog/{blog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updatePost',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@edit',
        'as' => 'admin.blog.edit',
        'namespace' => NULL,
        'prefix' => 'admin/blog',
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
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updatePost',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@update',
        'as' => 'admin.blog.update',
        'namespace' => NULL,
        'prefix' => 'admin/blog',
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
    'admin.blog.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blog/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deletePost',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Blog\\BlogController@destroy',
        'as' => 'admin.blog.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/blog',
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
    'admin.tag.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewPostCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@index',
        'as' => 'admin.tag.index',
        'namespace' => NULL,
        'prefix' => 'admin/tag',
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
    'admin.tag.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createPostCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@create',
        'as' => 'admin.tag.create',
        'namespace' => NULL,
        'prefix' => 'admin/tag',
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
    'admin.tag.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createPostCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@store',
        'as' => 'admin.tag.store',
        'namespace' => NULL,
        'prefix' => 'admin/tag',
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
    'admin.tag.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/tag/{tag}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updatePostCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@edit',
        'as' => 'admin.tag.edit',
        'namespace' => NULL,
        'prefix' => 'admin/tag',
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
    'admin.tag.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updatePostCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@update',
        'as' => 'admin.tag.update',
        'namespace' => NULL,
        'prefix' => 'admin/tag',
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
    'admin.tag.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/tag/{tag}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deletePostCategory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Tag\\TagController@destroy',
        'as' => 'admin.tag.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/tag',
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
    'admin.voucher.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewVoucher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@index',
        'as' => 'admin.voucher.index',
        'namespace' => NULL,
        'prefix' => 'admin/voucher',
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
    'admin.voucher.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/voucher/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createVoucher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@create',
        'as' => 'admin.voucher.create',
        'namespace' => NULL,
        'prefix' => 'admin/voucher',
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
    'admin.voucher.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createVoucher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@store',
        'as' => 'admin.voucher.store',
        'namespace' => NULL,
        'prefix' => 'admin/voucher',
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
    'admin.voucher.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/voucher/{voucher}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateVoucher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@edit',
        'as' => 'admin.voucher.edit',
        'namespace' => NULL,
        'prefix' => 'admin/voucher',
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
    'admin.voucher.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/voucher/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateVoucher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@update',
        'as' => 'admin.voucher.update',
        'namespace' => NULL,
        'prefix' => 'admin/voucher',
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
    'admin.voucher.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/voucher/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deleteVoucher',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Voucher\\VoucherController@destroy',
        'as' => 'admin.voucher.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/voucher',
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
    'admin.slider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewSlider',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@index',
        'as' => 'admin.slider.index',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
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
    'admin.slider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createSlider',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@create',
        'as' => 'admin.slider.create',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
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
    'admin.slider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createSlider',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@store',
        'as' => 'admin.slider.store',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
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
    'admin.slider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/slider/{slider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateSlider',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@edit',
        'as' => 'admin.slider.edit',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
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
    'admin.slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateSlider',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@update',
        'as' => 'admin.slider.update',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
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
    'admin.slider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/slider/{slider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deleteSlider',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Slider\\SliderController@destroy',
        'as' => 'admin.slider.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/slider',
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
    'admin.permission.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@index',
        'as' => 'admin.permission.index',
        'namespace' => NULL,
        'prefix' => 'admin/permission',
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
    'admin.permission.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@create',
        'as' => 'admin.permission.create',
        'namespace' => NULL,
        'prefix' => 'admin/permission',
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
    'admin.permission.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@store',
        'as' => 'admin.permission.store',
        'namespace' => NULL,
        'prefix' => 'admin/permission',
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
    'admin.permission.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/permission/{permission}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updatePermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@edit',
        'as' => 'admin.permission.edit',
        'namespace' => NULL,
        'prefix' => 'admin/permission',
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
    'admin.permission.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/permission/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updatePermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@update',
        'as' => 'admin.permission.update',
        'namespace' => NULL,
        'prefix' => 'admin/permission',
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
    'admin.permission.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/permission/{permission}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deletePermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Permission\\PermissionController@destroy',
        'as' => 'admin.permission.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/permission',
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
    'admin.module.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@index',
        'as' => 'admin.module.index',
        'namespace' => NULL,
        'prefix' => 'admin/module',
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
    'admin.module.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/module/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@create',
        'as' => 'admin.module.create',
        'namespace' => NULL,
        'prefix' => 'admin/module',
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
    'admin.module.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/module',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createPermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@store',
        'as' => 'admin.module.store',
        'namespace' => NULL,
        'prefix' => 'admin/module',
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
    'admin.module.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/module/{module}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updatePermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@edit',
        'as' => 'admin.module.edit',
        'namespace' => NULL,
        'prefix' => 'admin/module',
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
    'admin.module.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/module/{module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updatePermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@update',
        'as' => 'admin.module.update',
        'namespace' => NULL,
        'prefix' => 'admin/module',
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
    'admin.module.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/module/{module}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deletePermission',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Module\\ModuleController@destroy',
        'as' => 'admin.module.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/module',
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
    'admin.role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@index',
        'as' => 'admin.role.index',
        'namespace' => NULL,
        'prefix' => 'admin/role',
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
    'admin.role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@create',
        'as' => 'admin.role.create',
        'namespace' => NULL,
        'prefix' => 'admin/role',
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
    'admin.role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@store',
        'as' => 'admin.role.store',
        'namespace' => NULL,
        'prefix' => 'admin/role',
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
    'admin.role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/role/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@edit',
        'as' => 'admin.role.edit',
        'namespace' => NULL,
        'prefix' => 'admin/role',
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
    'admin.role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:updateRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@update',
        'as' => 'admin.role.update',
        'namespace' => NULL,
        'prefix' => 'admin/role',
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
    'admin.role.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:deleteRole',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Role\\RoleController@destroy',
        'as' => 'admin.role.destroy',
        'namespace' => NULL,
        'prefix' => 'admin/role',
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
    'admin.setting.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:viewSetting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@index',
        'as' => 'admin.setting.index',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
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
    'admin.setting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
          3 => 'permission:createSetting',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@store',
        'as' => 'admin.setting.store',
        'namespace' => NULL,
        'prefix' => 'admin/setting',
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
    'admin.provinces' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/provinces',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Address\\AddressController@getProvinces',
        'controller' => 'App\\Http\\Controllers\\Admin\\Address\\AddressController@getProvinces',
        'as' => 'admin.provinces',
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
    'admin.districts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/districts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Address\\AddressController@getDistrictsByProvince',
        'controller' => 'App\\Http\\Controllers\\Admin\\Address\\AddressController@getDistrictsByProvince',
        'as' => 'admin.districts',
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
    'admin.wards' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/ward',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
          2 => '2fa',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Address\\AddressController@getWardsByDistrict',
        'controller' => 'App\\Http\\Controllers\\Admin\\Address\\AddressController@getWardsByDistrict',
        'as' => 'admin.wards',
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
    'generated::4XPvKoiPOIbCjLdy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'save-theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:224:"function (\\Illuminate\\Http\\Request $request) {
    $theme = $request->input(\'theme\');
    \\Illuminate\\Support\\Facades\\Session::put(\'theme\', $theme);
    return \\response()->json([\'status\' => \'success\', \'theme\' => $theme]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004930000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4XPvKoiPOIbCjLdy',
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
    'generated::aNtJLB6pfdrh9n3L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{fallbackPlaceholder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:65:"function () {
    return \\redirect()->route(\'admin.dashboard\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000052c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aNtJLB6pfdrh9n3L',
      ),
      'fallback' => true,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'fallbackPlaceholder' => '.*',
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
