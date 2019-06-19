<?php

    return array(
        'product/([0-9]+)' => 'product/view/$1',

        'catalog/category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //actionCategory в CatalogController
        'catalog/category/([0-9]+)' => 'catalog/category/$1', //actionCategory в CatalogController

        'catalog' => 'catalog/index', //actionIndex в CatalogController

        'cart/checkout' => 'cart/checkout',
        'cart/delete/([0-9]+)' => 'cart/delete/$1',
        'cart/minusAjax/([0-9]+)' => 'cart/minusAjax/$1',
        'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
        'cart' => 'cart/index',

        'register' => 'user/register',
        'login' => 'user/login',
        'logout' => 'user/logout',

        'account/personaldata' => 'account/personaldata',
        'account/bankdetails' => 'account/bankdetails',
        'account' => 'account/index',

        'admin/product/create' => 'adminProduct/create',
        'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
        'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
        'admin/product' => 'adminProduct/index',

        'admin/category/create' => 'adminCategory/create',
        'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
        'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
        'admin/category' => 'adminCategory/index',

        'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
        'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
        'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
        'admin/order' => 'adminOrder/index',

        'admin' => 'admin/index',

        'contacts' => 'site/contact',
        '' => 'site/index', // actionIndex в SiteController
    );

?>