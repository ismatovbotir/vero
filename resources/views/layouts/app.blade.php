<!DOCTYPE html>
<html lang="ru" class="js">

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
@section('links')    
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Page Title  -->
    <title>VeroCRM</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="assets/css/theme.css?ver=2.4.0">
@show
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            
            @section('sidemenu')
            @include('layouts.sidemenu')
            @show
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            @section('contentHead')
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">
                                    {{--<div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div>
                                       <div class="nk-news-text">
                                            <p>Do you know the latest update of 2019? <span> A overview of our is now available on YouTube</span></p>
                                            <em class="icon ni ni-external"></em>
                                        </div>--}}
                                    </a>
                                </div>
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status">Administrator</div>
                                                    <div class="user-name dropdown-indicator">Alisher A.</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Abdullaev Alisher</span>
                                                        <span class="sub-text">info@mirkans.uz</span>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--<div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>--}}
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown notification-dropdown mr-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                            <div class="nk-notification-time">2 hrs ago</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                            @show
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            @section('contentBody')
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Overview</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome to Crypto Buy/Sell Platform.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                        <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                                        <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em class="icon ni ni-user-add-fill"></em><span>Add User</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add Order</span></a></li>
                                                                        <li><a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add Page</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-lg-8">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-3">
                                                        <div class="card-title">
                                                            <h6 class="title">Orders Overview</h6>
                                                            <p>In last 15 days buy and sells overview. <a href="#" class="link link-sm">Detailed Stats</a></p>
                                                        </div>
                                                        <div class="card-tools mt-n1 mr-n1">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                                        <li><a href="#"><span>30 Days</span></a></li>
                                                                        <li><a href="#"><span>3 Months</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-title-group -->
                                                    <div class="nk-order-ovwg">
                                                        <div class="row g-4 align-end">
                                                            <div class="col-xxl-8">
                                                                <div class="nk-order-ovwg-ck">
                                                                    <canvas class="order-overview-chart" id="orderOverview"></canvas>
                                                                </div>
                                                            </div><!-- .col -->
                                                            <div class="col-xxl-4">
                                                                <div class="row g-4">
                                                                    <div class="col-sm-6 col-xxl-12">
                                                                        <div class="nk-order-ovwg-data buy">
                                                                            <div class="amount">12,954.63 <small class="currenct currency-usd">USD</small></div>
                                                                            <div class="info">Last month <strong>39,485 <span class="currenct currency-usd">USD</span></strong></div>
                                                                            <div class="title"><em class="icon ni ni-arrow-down-left"></em> Buy Orders</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6 col-xxl-12">
                                                                        <div class="nk-order-ovwg-data sell">
                                                                            <div class="amount">12,954.63 <small class="currenct currency-usd">USD</small></div>
                                                                            <div class="info">Last month <strong>39,485 <span class="currenct currency-usd">USD</span></strong></div>
                                                                            <div class="title"><em class="icon ni ni-arrow-up-left"></em> Sell Orders</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .col -->
                                                        </div>
                                                    </div><!-- .nk-order-ovwg -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-4">
                                            <div class="card card-bordered h-100">
                                                <div class="card-inner-group">
                                                    <div class="card-inner card-inner-md">
                                                        <div class="card-title-group">
                                                            <div class="card-title">
                                                                <h6 class="title">Action Center</h6>
                                                            </div>
                                                            <div class="card-tools mr-n1">
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em class="icon ni ni-setting"></em><span>Action Settings</span></a></li>
                                                                            <li><a href="#"><em class="icon ni ni-notify"></em><span>Push Notification</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="nk-wg-action">
                                                            <div class="nk-wg-action-content">
                                                                <em class="icon ni ni-cc-alt-fill"></em>
                                                                <div class="title">Pending Buy/Sell Orders</div>
                                                                <p>We have still <strong>40 buy orders</strong> and <strong>12 sell orders</strong>, thats need to review & take necessary action.</p>
                                                            </div>
                                                            <a href="#" class="btn btn-icon btn-trigger mr-n2"><em class="icon ni ni-forward-ios"></em></a>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="nk-wg-action">
                                                            <div class="nk-wg-action-content">
                                                                <em class="icon ni ni-help-fill"></em>
                                                                <div class="title">Support Messages</div>
                                                                <p>Here is <strong>18 new</strong> support message. </p>
                                                            </div>
                                                            <a href="#" class="btn btn-icon btn-trigger mr-n2"><em class="icon ni ni-forward-ios"></em></a>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="nk-wg-action">
                                                            <div class="nk-wg-action-content">
                                                                <em class="icon ni ni-wallet-fill"></em>
                                                                <div class="title">Upcoming Deposit</div>
                                                                <p>Here is <strong>7 upcoming</strong> deposit need to review.</p>
                                                            </div>
                                                            <a href="#" class="btn btn-icon btn-trigger mr-n2"><em class="icon ni ni-forward-ios"></em></a>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-8">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title"><span class="mr-2">Orders Activities</span> <a href="#" class="link d-none d-sm-inline">See History</a></h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <ul class="card-tools-nav">
                                                                <li><a href="#"><span>Buy</span></a></li>
                                                                <li><a href="#"><span>Sell</span></a></li>
                                                                <li class="active"><a href="#"><span>All</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-inner -->
                                                <div class="card-inner p-0 border-top">
                                                    <div class="nk-tb-list nk-tb-orders">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col nk-tb-orders-type"><span>Type</span></div>
                                                            <div class="nk-tb-col"><span>Desc</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span>Date</span></div>
                                                            <div class="nk-tb-col tb-col-xl"><span>Time</span></div>
                                                            <div class="nk-tb-col tb-col-xxl"><span>Ref</span></div>
                                                            <div class="nk-tb-col tb-col-sm text-right"><span>USD Amount</span></div>
                                                            <div class="nk-tb-col text-right"><span>Amount</span></div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-orders-type">
                                                                <ul class="icon-overlap">
                                                                    <li><em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em></li>
                                                                    <li><em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em></li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead">Buy Bitcoin</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">02/10/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xl">
                                                                <span class="tb-sub">11:37 PM</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span class="tb-sub text-primary">RE2309232</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm text-right">
                                                                <span class="tb-sub tb-amount">4,565.75 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col text-right">
                                                                <span class="tb-sub tb-amount ">+ 0.2040 <span>BTC</span></span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-orders-type">
                                                                <ul class="icon-overlap">
                                                                    <li><em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em></li>
                                                                    <li><em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em></li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead">Buy Ethereum</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">02/10/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xl">
                                                                <span class="tb-sub">10:37 PM</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span class="tb-sub text-primary">RE2309232</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm text-right">
                                                                <span class="tb-sub tb-amount">2,039.39 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col text-right">
                                                                <span class="tb-sub tb-amount ">+ 0.12600 <span>BTC</span></span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-orders-type">
                                                                <ul class="icon-overlap">
                                                                    <li><em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em></li>
                                                                    <li><em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em></li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead">Sell Bitcoin</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">02/10/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xl">
                                                                <span class="tb-sub">10:45 PM</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span class="tb-sub text-primary">RE2309232</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm text-right">
                                                                <span class="tb-sub tb-amount">9,285.71 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col text-right">
                                                                <span class="tb-sub tb-amount ">+ 0.94750 <span>BTC</span></span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-orders-type">
                                                                <ul class="icon-overlap">
                                                                    <li><em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em></li>
                                                                    <li><em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em></li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead">Sell Etherum</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">02/11/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xl">
                                                                <span class="tb-sub">10:25 PM</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span class="tb-sub text-primary">RE2309232</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm text-right">
                                                                <span class="tb-sub tb-amount">12,596.75 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col text-right">
                                                                <span class="tb-sub tb-amount ">+ 1.02050 <span>BTC</span></span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-orders-type">
                                                                <ul class="icon-overlap">
                                                                    <li><em class="bg-btc-dim icon-circle icon ni ni-sign-btc"></em></li>
                                                                    <li><em class="bg-success-dim icon-circle icon ni ni-arrow-down-left"></em></li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead">Buy Bitcoin</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">02/10/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xl">
                                                                <span class="tb-sub">10:12 PM</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span class="tb-sub text-primary">RE2309232</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm text-right">
                                                                <span class="tb-sub tb-amount">400.00 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col text-right">
                                                                <span class="tb-sub tb-amount ">+ 0.00056 <span>BTC</span></span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-orders-type">
                                                                <ul class="icon-overlap">
                                                                    <li><em class="bg-eth-dim icon-circle icon ni ni-sign-eth"></em></li>
                                                                    <li><em class="bg-purple-dim icon-circle icon ni ni-arrow-up-right"></em></li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead">Sell Etherum</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span class="tb-sub">02/09/2020</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xl">
                                                                <span class="tb-sub">05:15 PM</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span class="tb-sub text-primary">RE2309232</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm text-right">
                                                                <span class="tb-sub tb-amount">6,246.50 <span>USD</span></span>
                                                            </div>
                                                            <div class="nk-tb-col text-right">
                                                                <span class="tb-sub tb-amount ">+ 0.02575 <span>BTC</span></span>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->
                                                    </div>
                                                </div><!-- .card-inner -->
                                                <div class="card-inner-sm border-top text-center d-sm-none">
                                                    <a href="#" class="btn btn-link btn-block">See History</a>
                                                </div><!-- .card-inner -->
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-lg-4">
                                            <div class="row g-gs">
                                                <div class="col-md-6 col-lg-12">
                                                    <div class="card card-bordered card-full">
                                                        <div class="card-inner">
                                                            <div class="card-title-group align-start mb-2">
                                                                <div class="card-title">
                                                                    <h6 class="title">Top Coin in Orders</h6>
                                                                    <p>In last 15 days buy and sells overview.</p>
                                                                </div>
                                                                <div class="card-tools mt-n1 mr-n1">
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" class="active"><span>15 Days</span></a></li>
                                                                                <li><a href="#"><span>30 Days</span></a></li>
                                                                                <li><a href="#"><span>3 Months</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .card-title-group -->
                                                            <div class="nk-coin-ovwg">
                                                                <div class="nk-coin-ovwg-ck">
                                                                    <canvas class="coin-overview-chart" id="coinOverview"></canvas>
                                                                </div>
                                                                <ul class="nk-coin-ovwg-legends">
                                                                    <li><span class="dot dot-lg sq" data-bg="#f98c45"></span><span>Bitcoin</span></li>
                                                                    <li><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Ethereum</span></li>
                                                                    <li><span class="dot dot-lg sq" data-bg="#8feac5"></span><span>NioCoin</span></li>
                                                                    <li><span class="dot dot-lg sq" data-bg="#6b79c8"></span><span>Litecoin</span></li>
                                                                    <li><span class="dot dot-lg sq" data-bg="#79f1dc"></span><span>Bitcoin Cash</span></li>
                                                                </ul>
                                                            </div><!-- .nk-coin-ovwg -->
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                                <div class="col-md-6 col-lg-12">
                                                    <div class="card card-bordered card-full">
                                                        <div class="card-inner">
                                                            <div class="card-title-group align-start mb-3">
                                                                <div class="card-title">
                                                                    <h6 class="title">User Activities</h6>
                                                                    <p>In last 30 days <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></p>
                                                                </div>
                                                                <div class="card-tools mt-n1 mr-n1">
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><span>15 Days</span></a></li>
                                                                                <li><a href="#" class="active"><span>30 Days</span></a></li>
                                                                                <li><a href="#"><span>3 Months</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="user-activity-group g-4">
                                                                <div class="user-activity">
                                                                    <em class="icon ni ni-users"></em>
                                                                    <div class="info">
                                                                        <span class="amount">345</span>
                                                                        <span class="title">Direct Join</span>
                                                                    </div>
                                                                    <div class="gfx" data-color="#9cabff">
                                                                        <svg enable-background="new 0 0 48 17.5" version="1.1" viewBox="0 0 48 17.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill="currentColor" d="m1.2 17.4h-0.3c-0.5-0.1-0.8-0.7-0.7-1.2 2-7.2 5-12.2 8.8-14.7 1.5-1 3-1.5 4.5-1.4 4.9 0.3 7.2 4.9 9 8.5 0.3 0.4 0.5 0.8 0.7 1.2 1 1.8 2.7 3.9 4.5 4.3 0.9 0.2 1.7-0.1 2.6-0.8 1.8-1.4 3-3.7 4.1-5.9 0.5-1 1-1.9 1.5-2.9 1-1.5 2.8-3.5 4.9-3.8 1.1-0.1 2.2 0.3 3.1 1 1.3 1.1 1.9 2.6 2.4 4.1 0.4 1 0.7 1.9 1.2 2.6 0.3 0.4 0.2 1.1-0.2 1.4s-1.1 0.2-1.4-0.2c-0.7-0.9-1.1-2-1.5-3-0.5-1.3-1-2.5-1.9-3.3-0.5-0.4-1-0.6-1.5-0.5-1.3 0.2-2.7 1.6-3.5 2.8-0.5 0.8-1 1.8-1.4 2.7-1.2 2.4-2.4 4.9-4.6 6.5-1.3 1.1-2.8 1.5-4.2 1.2-3.1-0.6-5.1-3.9-5.9-5.3-0.2-0.4-0.4-0.8-0.6-1.3-1.7-3.4-3.5-7.2-7.3-7.4-1.1-0.1-2.1 0.3-3.3 1-3.5 2.4-6.2 7-8 13.7-0.2 0.4-0.6 0.7-1 0.7z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                                <div class="user-activity">
                                                                    <em class="icon ni ni-users"></em>
                                                                    <div class="info">
                                                                        <span class="amount">49</span>
                                                                        <span class="title">Referral Join</span>
                                                                    </div>
                                                                    <div class="gfx" data-color="#ccd4ff">
                                                                        <svg enable-background="new 0 0 48 17.5" version="1.1" viewBox="0 0 48 17.5" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill="currentColor" d="m1.2 17.4h-0.3c-0.5-0.1-0.8-0.7-0.7-1.2 2-7.2 5-12.2 8.8-14.7 1.5-1 3-1.5 4.5-1.4 4.9 0.3 7.2 4.9 9 8.5 0.3 0.4 0.5 0.8 0.7 1.2 1 1.8 2.7 3.9 4.5 4.3 0.9 0.2 1.7-0.1 2.6-0.8 1.8-1.4 3-3.7 4.1-5.9 0.5-1 1-1.9 1.5-2.9 1-1.5 2.8-3.5 4.9-3.8 1.1-0.1 2.2 0.3 3.1 1 1.3 1.1 1.9 2.6 2.4 4.1 0.4 1 0.7 1.9 1.2 2.6 0.3 0.4 0.2 1.1-0.2 1.4s-1.1 0.2-1.4-0.2c-0.7-0.9-1.1-2-1.5-3-0.5-1.3-1-2.5-1.9-3.3-0.5-0.4-1-0.6-1.5-0.5-1.3 0.2-2.7 1.6-3.5 2.8-0.5 0.8-1 1.8-1.4 2.7-1.2 2.4-2.4 4.9-4.6 6.5-1.3 1.1-2.8 1.5-4.2 1.2-3.1-0.6-5.1-3.9-5.9-5.3-0.2-0.4-0.4-0.8-0.6-1.3-1.7-3.4-3.5-7.2-7.3-7.4-1.1-0.1-2.1 0.3-3.3 1-3.5 2.4-6.2 7-8 13.7-0.2 0.4-0.6 0.7-1 0.7z" />
                                                                        </svg>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-activity-ck">
                                                            <canvas class="usera-activity-chart" id="userActivity"></canvas>
                                                        </div>
                                                    </div><!-- .card -->
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                            @show
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            @section('contentFoot')
                            <div class="nk-footer-copyright"> &copy; {{date('Y')}} DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                            @show
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    @section('scripts')
    
    <script src="assets/js/bundle.js?ver=2.4.0"></script>
    <script src="assets/js/scripts.js?ver=2.4.0"></script>
    <script src="assets/js/charts/gd-default.js?ver=2.4.0"></script>

    @show
</body>

</html>