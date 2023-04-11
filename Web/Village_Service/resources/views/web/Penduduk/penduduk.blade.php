<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/datum/laravel/public/customer by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 03:09:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="5byoTtf2zpefU31rDuoemt3VnackypMvlNHwduMg">

    <title>Datum</title>

    <link rel="shortcut icon" href="{{asset('assets/auth/images/favicon.ico')}}" />
    <link rel='stylesheet' href="{{asset('assets/auth/vendor/fullcalendar/core/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/auth/vendor/fullcalendar/daygrid/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/auth/vendor/fullcalendar/timegrid/main.css')}}" />
    <link rel='stylesheet' href="{{asset('assets/auth/vendor/fullcalendar/list/main.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/auth/css/backend-plugin.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/css/backende209.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/css/backende209.css?v=1.0.0')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/vanillajs-datepicker/dist/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/remixicon/fonts/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/Leaflet/leaflet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/auth/css/custom.css')}}">
</head>
<body class="" id="app">
<div id="loading">
    <div id="loading-center">
</div>
</div>
<div class="iq-top-navbar">
    <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <div class="side-menu-bt-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </div>
            <div class="d-flex align-items-center">
                <div class="change-mode">
                    <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                        <div class="custom-switch-inner">
                            <p class="mb-0"> </p>
                            <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                            <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                <span class="switch-icon-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                    </svg>
                                </span>
                                <span class="switch-icon-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20"  class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-list align-items-center">
                        <li class="nav-item nav-icon dropdown"> 
                            <a href="#" class="search-toggle dropdown-toggle" id="notification-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="h-6 w-6 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                </svg>
                                <span class="bg-primary"></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown">
                                <div class="card shadow-none m-0 border-0">
                                    <div class="p-3 card-header-border">
                                        <h6 class="text-center">
                                            Notifications
                                        </h6>
                                    </div>
                                    <div class="card-body overflow-auto card-header-border p-0 card-body-list" style="max-height: 500px;">                                        
                                        <ul class="dropdown-menu-1 overflow-auto list-style-1 mb-0">
                                            <li class="dropdown-item-1 float-none p-3">
                                                <div class="list-item d-flex justify-content-start align-items-start">
                                                    <div class="avatar">
                                                        <div class="avatar-img avatar-danger avatar-20">
                                                            <span>
                                                                <svg class="icon line" width="30" height="30" id="cart-alt1" stroke="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3,3H5.32a1,1,0,0,1,.93.63L10,13,8.72,15.55A1,1,0,0,0,9.62,17H19" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><polyline points="10 13 18.2 13 21 6" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline><line x1="20.8" y1="6" x2="7.2" y2="6" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line><circle cx="10.5" cy="20.5" r="0.5" style="fill: none;stroke-miterlimit: 10; stroke-width: 2;"></circle><circle cx="16.5" cy="20.5" r="0.5" style="fill: none;stroke-miterlimit: 10; stroke-width: 2;"></circle></svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="list-style-detail ml-2 mr-2">
                                                        <h6 class="font-weight-bold">Your order is placed</h6>
                                                        <p class="m-0">
                                                            <small class="text-secondary">If several languages coalesce</small>
                                                        </p>
                                                        <p class="m-0">
                                                            <small class="text-secondary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>
                                                            3 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>                                                
                                            </li>
                                             <li class="dropdown-item-1 float-none p-3">
                                                 <div class="list-item d-flex justify-content-start align-items-start">
                                                     <div class="avatar">
                                                        <div class="avatar-img avatar-success avatar-20">
                                                            <span><img class="avatar is-squared rounded-circle" src="{{asset('assets/auth/images/user/2.jpg')}}" alt="2.jpg"></span>
                                                        </div>
                                                    </div>
                                                    <div class="list-style-detail ml-2 mr-2">
                                                        <h6 class="font-weight-bold">New message form cate</h6>
                                                        <p class="m-0">
                                                            <small class="text-secondary">You have 3 unreded messages</small>
                                                        </p>
                                                        <p class="m-0">
                                                            <small class="text-secondary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>
                                                                5 hours ago</small>
                                                        </p>
                                                    </div>
                                                 </div>                                                
                                            </li>
                                             <li class="dropdown-item-1 float-none p-3">
                                                 <div class="list-item d-flex justify-content-start align-items-start">
                                                     <div class="avatar">
                                                        <div class="avatar-img avatar-warning avatar-20">
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" stroke="white" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path d="M386.689,304.403c-35.587,0-64.538,28.951-64.538,64.538s28.951,64.538,64.538,64.538    c35.593,0,64.538-28.951,64.538-64.538S422.276,304.403,386.689,304.403z M386.689,401.21c-17.796,0-32.269-14.473-32.269-32.269    c0-17.796,14.473-32.269,32.269-32.269c17.796,0,32.269,14.473,32.269,32.269C418.958,386.738,404.485,401.21,386.689,401.21z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M166.185,304.403c-35.587,0-64.538,28.951-64.538,64.538s28.951,64.538,64.538,64.538s64.538-28.951,64.538-64.538    S201.772,304.403,166.185,304.403z M166.185,401.21c-17.796,0-32.269-14.473-32.269-32.269c0-17.796,14.473-32.269,32.269-32.269    c17.791,0,32.269,14.473,32.269,32.269C198.454,386.738,183.981,401.21,166.185,401.21z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M430.15,119.675c-2.743-5.448-8.32-8.885-14.419-8.885h-84.975v32.269h75.025l43.934,87.384l28.838-14.5L430.15,119.675z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <rect x="216.202" y="353.345" width="122.084" height="32.269"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M117.781,353.345H61.849c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h55.933    c8.912,0,16.134-7.223,16.134-16.134C133.916,360.567,126.693,353.345,117.781,353.345z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M508.612,254.709l-31.736-40.874c-3.049-3.937-7.755-6.239-12.741-6.239H346.891V94.655    c0-8.912-7.223-16.134-16.134-16.134H61.849c-8.912,0-16.134,7.223-16.134,16.134s7.223,16.134,16.134,16.134h252.773v112.941    c0,8.912,7.223,16.134,16.134,16.134h125.478l23.497,30.268v83.211h-44.639c-8.912,0-16.134,7.223-16.134,16.134    c0,8.912,7.223,16.134,16.134,16.134h60.773c8.912,0,16.134-7.223,16.135-16.134V264.605    C512,261.023,510.806,257.538,508.612,254.709z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M116.706,271.597H42.487c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h74.218    c8.912,0,16.134-7.223,16.134-16.134C132.84,278.82,125.617,271.597,116.706,271.597z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M153.815,208.134H16.134C7.223,208.134,0,215.357,0,224.269s7.223,16.134,16.134,16.134h137.681    c8.912,0,16.134-7.223,16.134-16.134S162.727,208.134,153.815,208.134z"/>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path d="M180.168,144.672H42.487c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h137.681    c8.912,0,16.134-7.223,16.134-16.134C196.303,151.895,189.08,144.672,180.168,144.672z"/>
                                                                </g>
                                                            </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g> </svg>
                                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="list-style-detail ml-2 mr-2">
                                                        <h6 class="font-weight-bold">Your item is shipped</h6>
                                                        <p class="m-0">
                                                            <small class="text-secondary">You got new order of goods</small>
                                                        </p>
                                                        <p class="m-0">
                                                            <small class="text-secondary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>
                                                                5 hours ago</small>
                                                        </p>
                                                    </div>
                                                 </div>                                                
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-footer text-muted p-3">
                                        <p class="mb-0 text-primary text-center font-weight-bold">Show all notifications</p>
                                    </div>
                                </div>
                            </div>
                        </li>                        
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{asset('assets/auth/images/Flag/flag001.png')}}" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                            <span class="bg-primary"></span>
                            </a>
                            <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <div class="card shadow-none m-0 border-0">
                                    <div class=" p-0 ">
                                        <ul class="dropdown-menu-1 list-group list-group-flush">
                                            <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{asset('assets/auth/images/Flag/flag-03.png')}}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>Spanish</a></li>
                                            <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{asset('assets/auth/images/Flag/flag-04.png')}}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>Italian</a></li>
                                            <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{asset('assets/auth/images/Flag/flag-02.png')}}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>French</a></li>
                                            <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{asset('assets/auth/images/Flag/flag-05.png')}}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>German</a></li>
                                            <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{asset('assets/auth/images/Flag/flag-06.png')}}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>Japanese</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-icon search-content">
                            <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg class="svg-icon text-secondary" id="h-suns" height="25" width="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </a>
                            <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                <form action="#" class="searchbox p-2">
                                    <div class="form-group mb-0 position-relative">
                                    <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                    <a href="#" class="search-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a> 
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                            <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                <img src="{{asset('assets/auth/images/user/1.jpg')}}" class="img-fluid avatar-rounded" alt="user">
                                <span class="mb-0 ml-2 user-name">John Doe</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <a href="app/user/profile.html">My Profile</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                    <a href="app/user/profile-edit.html">Edit Profile</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <a href="app/user/account-setting.html">Account Settings</a>
                                </li>
                                <li class="dropdown-item d-flex svg-icon">
                                    <svg class="svg-icon mr-0 text-secondary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    <a href="app/user/privacy-setting.html">Privacy Settings</a>
                                </li>
                                <li class="dropdown-item  d-flex svg-icon border-top">
                                    <form method="POST" action="{{route('logout')}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">                                       
                                    <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                        <a href="javascript:void(0)"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            Log out
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>                     
                </div> 
            </div>
        </nav>
    </div>
</div>


<div class="iq-sidebar sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
        <a href="dashboard1.html" class="header-logo">
            <img src="{{asset('assets/auth/images/logo.png')}}" class="img-fluid rounded-normal light-logo" alt="logo">
            <img src="{{asset('assets/auth/images/logo-dark.png')}}" class="img-fluid rounded-normal darkmode-logo" alt="logo">
            <span>OR Hutapea</span>
        </a>
        <div class="side-menu-bt-sidebar-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="side-menu">
                <li class=" sidebar-layout">
                    <a href="{{route('dashboard')}}" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                        </i>
                        <span class="ml-2">Dashboard</span>
                        {{-- <p class="mb-0 w-10 badge badge-pill badge-primary">6</p> --}}
                    </a>
                </li>
                <li class="px-3 pt-3 pb-2 ">
                    <span class="text-uppercase small font-weight-bold">Kelola Data</span>
                </li>
                <li class=" sidebar-layout">
                    <a href="{{route('penduduk.index')}}" class="svg-icon ">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </i>
                        <span class="ml-2">Kelola Kependudukan</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="customer.html" class="svg-icon ">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </i>
                        <span class="ml-2">Kelola Perangkat Desa</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="invoice.html" class="svg-icon">
                        <i class="">
                            <svg class="icon line" width="18" id="receipt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17,16V3L13,5,10,3,7,5,3,3V17.83A3.13,3.13,0,0,0,5.84,21,3,3,0,0,0,9,18V17a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1v1a3,3,0,0,1-3,3H6" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                <line x1="8" y1="10" x2="12" y2="10" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                            </svg> 
                        </i>
                        <span class="ml-2">Kelola Kegiatan</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="app/todo.html" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                        </i><span class="ml-2">Kelola Pengumuman</span>
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="calender.html" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </i>
                        <span class="ml-2">Kelola Pengajuan</span>
                        {{-- <p class="mb-0 px-2 badge badge-pill badge-success">New</p> --}}
                    </a>
                </li>
                <li class=" sidebar-layout">
                    <a href="calender.html" class="svg-icon">
                        <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </i>
                        <span class="ml-2">Kelola Saran</span>
                        {{-- <p class="mb-0 px-2 badge badge-pill badge-success">New</p> --}}
                    </a>
                </li>
            </ul>
        </nav>
         
        <div class="pt-5 pb-5"></div>
    </div>
</div>

<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="font-weight-bold">Customer</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex">
                                <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="exampleInputText"
                                               aria-describedby="textHelp" placeholder="Search Customer">
                                        <a class="search-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                                <a href="{{route('create_penduduk')}}"
                                   class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    Add Customer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h5 class="font-weight-bold">Customer List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="20" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                        </svg>
                                        Export
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                        <tr class="">
                                            <th scope="col" class="pr-0 w-01">
                                                <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input m-0"
                                                               id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>
                                                </div>
                                            </th>
                                <th scope="col">
                                    Nama
                                </th>
                                <th scope="col">
                                    NIK
                                </th>
                                <th scope="col" class="text-right">
                                    Aksi
                                </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($penduduk as $penduduk )
                                <tr class="white-space-no-wrap">
                                    <td class="pr-0 ">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input m-0" id="customCheck" value="{{ $penduduk->id}}">
                                            <label class="custom-control-label" for="customCheck"></label>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div class="active-project-1 d-flex align-items-center mt-0 ">
                                            <div class="data-content">
                                                <div>
                                                    <a href="{{route('update_penduduk', $penduduk->id)}}" class="font-weight-bold">{{ $penduduk->nama }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $penduduk->nik}}</td>
                                    <td>
                                        <div class="d-flex justify-content-end align-items-center">
                                            <a class="" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="View" href="customer-view.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                     width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                            </a>
                                            <a class="" data-toggle="tooltip" data-placement="top" title=""
                                               data-original-title="Edit" href="customer-edit.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4"
                                                     width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                </svg>
                                            </a>
                                            <a class="badge bg-danger" data-toggle="tooltip" data-placement="top"
                                               title="" data-original-title="Delete" href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                     viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<footer class="iq-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="app/user/privacy-setting.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="app/user/terms-of-services.html">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-lg-6 text-right">
                <span class="mr-1">
                    Copyright 2023© <a href="#" class="">Datum</a>
                    All Rights Reserved.
                </span>
            </div>
        </div>
    </div>
</footer>
<!-- Backend Bundle JavaScript -->
<script src="{{asset('assets/auth/js/backend-bundle.min.js')}}"></script>

 
<!-- Flextree Javascript-->
<script src="{{asset('assets/auth/js/flex-tree.min.js')}}"></script>
<script src="{{asset('assets/auth/js/tree.js')}}"></script>

<!-- Table Treeview JavaScript -->
<script src="{{('assets/auth/js/table-treeview.js')}}"></script>

<!-- SweetAlert JavaScript -->
<script src="{{asset('assets/auth/js/sweetalert.js')}}"></script>

<!-- Vectoe Map JavaScript -->
<script src="{{('assets/auth/js/vector-map-custom.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('assets/auth/js/customizer.js')}}"></script>

<script src="{{asset('assets/auth/vendor/Leaflet/leaflet.js')}}"></script>

<script src="{{asset('assets/auth/vendor/vanillajs-datepicker/dist/js/datepicker-full.js')}}"></script>

<script src="{{asset('assets/auth/js/charts/progressbar.js')}}"></script>

<!-- Chart Custom JavaScript -->
<script src="{{asset('assets/auth/js/chart-custom.js')}}"></script>
<script src="{{asset('assets/auth/js/charts/01.js')}}"></script>
<script src="{{asset('assets/auth/js/charts/02.js')}}"></script>

<!-- slider JavaScript -->
<script src="{{asset('assets/auth/js/slider.js')}}"></script>

<!-- Emoji picker -->
<script src="{{asset('assets/auth/vendor/emoji-picker-element/index.js')}}" type="module"></script>
 <!-- app JavaScript -->
<script src="{{asset('assets/auth/js/app.js')}}"></script>
<script>
(function($) {
   "use strict";
   
   $(document).ready(function(){
       $('.select2js').select2();
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });

       $(document).on('click', '.loadRemoteModel', function(e) {
           e.preventDefault();
           var url = $(this).attr('href');

           if (url.indexOf('#') == 0) {
               $(url).modal('open');
           } else {
               $.get(url, function(data) {
                   $('#remoteModelData').html(data);
                   $('#remoteModelData').modal();
                   $('form').validator();
                   $(".datepicker").flatpickr({
                       dateFormat: "d-m-Y"
                   });
               });
           }
       });

       $(document).on('click', '[data-form="ajax"]', function(f) {
           $('form').validator('update');
           f.preventDefault();
           var current = $(this);
           current.addClass('disabled');
           var form = $(this).closest('form');
           var url = form.attr('action');
           var fd = new FormData(form[0]);

           $.ajax({
               type: "POST",
               url: url,
               data: fd, // serializes the form's elements.
               success: function(e) {
                   if (e.status == true) {
                       if (e.event == "submited") {
                           showMessage(e.message);
                           $(".modal").modal('hide');
                       }
                       if(e.event == 'refresh'){
                           // showMessage(e.message);
                           window.location.reload();
                       }
                       if(e.event == "callback"){
                           showMessage(e.message);
                           $(".modal").modal('hide');
                           location.reload();
                       }
                   }
                   if (e.status == false) {
                       if (e.event == 'validation') {
                           errorMessage(e.message);
                       }
                   }
               },
               error: function(error) {

               },
               cache: false,
               contentType: false,
               processData: false,
           });
           f.preventDefault(); // avoid to execute the actual submit of the form.

       });

       $(document).ready(function () {
           
           $(document).on('change','.change_status', function() {

               var status = $(this).prop('checked') == true ? 1 : 0;
               console.log(status)
               var id = $(this).attr('data-id');
               var type = $(this).attr('data-type');
               $.ajax({
                   type: "GET",
                   dataType: "json",
                   url: "https://templates.iqonic.design/datum/laravel/public/changeStatus",
                   data: { 'status': status, 'id': id ,'type': type  },
                   success: function(data){
                       alert(data.message);
                   }
               });
           })
       })

       $(document).on('click', '[data-toggle="tabajax"]', function(e) {
           e.preventDefault();
           var selectDiv = this;
           ajaxMethodCall(selectDiv);
       });
       
       function ajaxMethodCall(selectDiv) {

           var $this = $(selectDiv),
               loadurl = $this.attr('data-href'),
               targ = $this.attr('data-target'),
               id = selectDiv.id || '';

           $.post(loadurl, function(data) {
               $(targ).html(data);
               $('form').append('<input type="hidden" name="active_tab" value="'+id+'" />');
           });

           $this.tab('show');
           return false;
       }

       $('form[data-toggle="validator"]').on('submit', function (e) {
           window.setTimeout(function () {
               var errors = $('.has-error')
               if (errors.length) {
                   $('html, body').animate({ scrollTop: "0" }, 500);
                   e.preventDefault()
               }
           }, 0);
       });   
   });
})(jQuery);
</script>
</body>

<!-- Mirrored from templates.iqonic.design/datum/laravel/public/customer by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 03:09:35 GMT -->
</html>
