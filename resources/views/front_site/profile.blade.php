@extends('front_site.layout.master')

<style>
    :root {
        --blue: #5e72e4;
        --indigo: #5603ad;
        --purple: #8965e0;
        --pink: #f3a4b5;
        --red: #f5365c;
        --orange: #fb6340;
        --yellow: #ffd600;
        --green: #2dce89;
        --teal: #11cdef;
        --cyan: #2bffc6;
        --white: #fff;
        --gray: #8898aa;
        --gray-dark: #32325d;
        --light: #ced4da;
        --lighter: #e9ecef;
        --primary: #5e72e4;
        --secondary: #f7fafc;
        --success: #2dce89;
        --info: #11cdef;
        --warning: #fb6340;
        --danger: #f5365c;
        --light: #adb5bd;
        --dark: #212529;
        --default: #172b4d;
        --white: #fff;
        --neutral: #fff;
        --darker: black;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: Open Sans, sans-serif;
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    @-ms-viewport {
        width: device-width;
    }

    figcaption,
    footer,
    main,
    nav,
    section {
        display: block;
    }

    body {
        font-family: Open Sans, sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        margin: 0;
        text-align: left;
        color: #525f7f;
        background-color: #f8f9fe;
    }

    [tabindex='-1']:focus {
        outline: 0 !important;
    }

    hr {
        overflow: visible;
        box-sizing: content-box;
        height: 0;
    }

    h2,
    h3,
    h5 {
        margin-top: 0;
        margin-bottom: .5rem;
    }

    p {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    dfn {
        font-style: italic;
    }

    strong {
        font-weight: bolder;
    }

    a {
        text-decoration: none;
        color: #5e72e4;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    a:hover {
        text-decoration: none;
        color: #233dd2;
    }

    a:not([href]):not([tabindex]) {
        text-decoration: none;
        color: inherit;
    }

    a:not([href]):not([tabindex]):hover,
    a:not([href]):not([tabindex]):focus {
        text-decoration: none;
        color: inherit;
    }

    a:not([href]):not([tabindex]):focus {
        outline: 0;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    caption {
        padding-top: 1rem;
        padding-bottom: 1rem;
        caption-side: bottom;
        text-align: left;
        color: #8898aa;
    }

    button {
        border-radius: 0;
    }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color;
    }

    input,
    button {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        margin: 0;
    }

    button,
    input {
        overflow: visible;
    }

    button {
        text-transform: none;
    }

    button,
    [type='reset'],
    [type='submit'] {
        -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type='button']::-moz-focus-inner,
    [type='reset']::-moz-focus-inner,
    [type='submit']::-moz-focus-inner {
        padding: 0;
        border-style: none;
    }

    input[type='radio'],
    input[type='checkbox'] {
        box-sizing: border-box;
        padding: 0;
    }

    input[type='date'],
    input[type='time'],
    input[type='datetime-local'],
    input[type='month'] {
        -webkit-appearance: listbox;
    }

    legend {
        font-size: 1.5rem;
        line-height: inherit;
        display: block;
        width: 100%;
        max-width: 100%;
        margin-bottom: .5rem;
        padding: 0;
        white-space: normal;
        color: inherit;
    }

    [type='number']::-webkit-inner-spin-button,
    [type='number']::-webkit-outer-spin-button {
        height: auto;
    }

    [type='search'] {
        outline-offset: -2px;
        -webkit-appearance: none;
    }

    [type='search']::-webkit-search-cancel-button,
    [type='search']::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button;
    }

    [hidden] {
        display: none !important;
    }

    h2,
    h3,
    h5,
    .h2,
    .h3,
    .h5 {
        font-family: inherit;
        font-weight: 600;
        line-height: 1.5;
        margin-bottom: .5rem;
        color: #32325d;
    }

    h2,
    .h2 {
        font-size: 1.25rem;
    }

    h3,
    .h3 {
        font-size: 1.0625rem;
    }

    h5,
    .h5 {
        font-size: .8125rem;
    }

    hr {
        margin-top: 2rem;
        margin-bottom: 2rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .btn {
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.5;
        display: inline-block;
        padding: .625rem 1.25rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        border: 1px solid transparent;
        border-radius: .375rem;
    }

    @media screen and (prefers-reduced-motion: reduce) {
        .btn {
            transition: none;
        }
    }

    .btn:hover,
    .btn:focus {
        text-decoration: none;
    }

    .btn:focus {
        outline: 0;
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
    }

    .btn:disabled {
        opacity: .65;
        box-shadow: none;
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
    }

    .btn:not(:disabled):not(.disabled):active {
        box-shadow: none;
    }

    .btn:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08), none;
    }

    .btn-info {
        color: #fff;
        border-color: #11cdef;
        background-color: #11cdef;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    .btn-info:hover {
        color: #fff;
        border-color: #11cdef;
        background-color: #11cdef;
    }

    .btn-info:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(17, 205, 239, .5);
    }

    .btn-info:disabled {
        color: #fff;
        border-color: #11cdef;
        background-color: #11cdef;
    }

    .btn-info:not(:disabled):not(.disabled):active {
        color: #fff;
        border-color: #11cdef;
        background-color: #0da5c0;
    }

    .btn-info:not(:disabled):not(.disabled):active:focus {
        box-shadow: none, 0 0 0 0 rgba(17, 205, 239, .5);
    }

    .btn-default {
        color: #fff;
        border-color: #172b4d;
        background-color: #172b4d;
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
    }

    .btn-default:hover {
        color: #fff;
        border-color: #172b4d;
        background-color: #172b4d;
    }

    .btn-default:focus {
        box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08), 0 0 0 0 rgba(23, 43, 77, .5);
    }

    .btn-default:disabled {
        color: #fff;
        border-color: #172b4d;
        background-color: #172b4d;
    }

    .btn-default:not(:disabled):not(.disabled):active {
        color: #fff;
        border-color: #172b4d;
        background-color: #0b1526;
    }

    .btn-default:not(:disabled):not(.disabled):active:focus {
        box-shadow: none, 0 0 0 0 rgba(23, 43, 77, .5);
    }

    .btn-sm {
        font-size: .875rem;
        line-height: 1.5;
        padding: .25rem .5rem;
        border-radius: .375rem;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        border: 1px solid rgba(0, 0, 0, .05);
        border-radius: .375rem;
        background-color: #fff;
        background-clip: border-box;
    }

    .card > hr {
        margin-right: 0;
        margin-left: 0;
    }

    .card-body {
        padding: 1.5rem;
        flex: 1 1 auto;
    }

    .card-header {
        margin-bottom: 0;
        padding: 1.25rem 1.5rem;
        border-bottom: 1px solid rgba(0, 0, 0, .05);
        background-color: #fff;
    }

    .card-header:first-child {
        border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0;
        }

        to {
            background-position: 0 0;
        }
    }

    .bg-default {
        background-color: #172b4d !important;
    }

    a.bg-default:hover,
    a.bg-default:focus,
    button.bg-default:hover,
    button.bg-default:focus {
        background-color: #0b1526 !important;
    }

    .border-0 {
        border: 0 !important;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .d-flex {
        display: flex !important;
    }

    .justify-content-center {
        justify-content: center !important;
    }

    .justify-content-between {
        justify-content: space-between !important;
    }

    .align-items-center {
        align-items: center !important;
    }

    @media (min-width: 1200px) {
        .justify-content-xl-between {
            justify-content: space-between !important;
        }
    }

    .float-right {
        float: right !important;
    }

    .shadow,
    .card-profile-image img {
        box-shadow: 0 0 2rem 0 rgba(136, 152, 170, .15) !important;
    }

    .mr-2 {
        margin-right: .5rem !important;
    }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important;
    }

    .mr-4 {
        margin-right: 1.5rem !important;
    }

    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    .mb-5 {
        margin-bottom: 3rem !important;
    }

    .mt-7 {
        margin-top: 6rem !important;
    }

    .pt-0 {
        padding-top: 139px !important;
    }

    .pt-0 {
        padding-top: 140px !important;
    }

    .pb-0 {
        padding-bottom: 0 !important;
    }

    .pt-8 {
        padding-top: 8rem !important;
    }

    .m-auto {
        margin: auto !important;
    }

    @media (min-width: 768px) {
        .mt-md-5 {
            margin-top: 3rem !important;
        }

        .pt-md-4 {
            padding-top: 8.5rem !important
        }

        .pb-md-4 {
            padding-bottom: 8.5rem !important;
        }
    }

    @media (min-width: 1200px) {
        .mb-xl-0 {
            margin-bottom: 0 !important;
        }
    }

    .text-center {
        text-align: center !important;
    }

    .font-weight-light {
        font-weight: 300 !important;
    }

    @media print {

        *,
        *::before,
        *::after {
            box-shadow: none !important;
            text-shadow: none !important;
        }

        a:not(.btn) {
            text-decoration: underline;
        }

        img {
            page-break-inside: avoid;
        }

        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h2,
        h3 {
            page-break-after: avoid;
        }

    @ page {
          size: a3;
      }
    }

    @keyframes floating-lg {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    @keyframes floating-sm {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(5px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    [class*='shadow'] {
        margin: 20px;
        transition: all .15s ease;
    }

    .font-weight-300 {
        font-weight: 300 !important;
    }

    .btn {
        font-size: .875rem;
        position: relative;
        transition: all .15s ease;
        letter-spacing: .025em;
        text-transform: none;
        will-change: transform;
    }

    .btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 7px 14px rgba(50, 50, 93, .1), 0 3px 6px rgba(0, 0, 0, .08);
    }

    .btn:not(:last-child) {
        margin-right: .5rem;
    }

    .btn i:not(:first-child) {
        margin-left: .5rem;
    }

    .btn i:not(:last-child) {
        margin-right: .5rem;
    }

    .btn-sm {
        font-size: .75rem;
    }

    [class*='btn-outline-'] {
        border-width: 1px;
    }

    .card-profile-image {
        position: relative;
    }

    .card-profile-image img {
        min-height: 168px;
        min-width: 191px;
        position: absolute;
        left: 50%;
        max-width: 180px;
        transition: all .15s ease;
        transform: translate(-50%, -30%);
        border-radius: .375rem;
    }

    .card-profile-image img:hover {
        transform: translate(-50%, -33%);
    }

    .card-profile-stats {
        padding: 1rem 0;
    }

    .card-profile-stats > div {
        margin-right: 1rem;
        padding: .875rem;
        text-align: center;
    }

    .card-profile-stats > div:last-child {
        margin-right: 0;
    }

    .card-profile-stats > div .heading {
        font-size: 1.1rem;
        font-weight: bold;
        display: block;
    }

    .card-profile-stats > div .description {
        font-size: .875rem;
        color: #adb5bd;
    }

    .main-content {
        position: relative;
    }

    .footer {
        padding: 2.5rem 0;
        background: #f7fafc;
    }

    .footer .copyright {
        font-size: .875rem;
    }

    @media (min-width: 768px) {
    @ keyframes show-navbar-dropdown {

    0% {
        transition: visibility .25s, opacity .25s, transform .25s;
        transform: translate(0, 10px) perspective(200px) rotateX(-2deg);
        opacity: 0;
    }

    100% {
        transform: translate(0, 0);
        opacity: 1;
    }
    }

    @keyframes hide-navbar-dropdown {
        from {
            opacity: 1;
        }

        to {
            transform: translate(0, 10px);
            opacity: 0;
        }
    }

    }

    @keyframes show-navbar-collapse {
        0% {
            transform: scale(.95);
            transform-origin: 100% 0;
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes hide-navbar-collapse {
        from {
            transform: scale(1);
            transform-origin: 100% 0;
            opacity: 1;
        }

        to {
            transform: scale(.95);
            opacity: 0;
        }
    }

    p {
        font-size: 1rem;
        font-weight: 300;
        line-height: 1.7;
    }

    .description {
        font-size: .875rem;
    }

    .heading {
        font-size: .95rem;
        font-weight: 600;
        letter-spacing: .025em;
        text-transform: uppercase;
    }

    @media (max-width: 768px) {
        .btn {
            margin-bottom: 10px;
        }
    }

    }
</style>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

@section('content')

    <body>
    <div class="main-content">
        @include('admin.layout.masseges')

        <div class="container mt-7">

            <!-- Table -->
            <div class="row">
                <div class="col-xl-8 m-auto order-xl-2 mb-5 mb-xl-0">
                    <div class="card card-profile shadow">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 order-lg-2">
                                <div class="card-profile-image">
                                    <a href="">
                                        <img style="height: 0px" src="{{asset('images/user/'.$user->userImage)}}"
                                             class="rounded-circle">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0 pt-md-4">

                            <div class="text-center" style="    padding-top: 125px;">
                                <h3>
                                    {{$user->firstName ." " . $user->middleName . " " .$user->lastName}}
                                    </span>
                                </h3>
                                <div class="h5 font-weight-300">
                                    <i class="ni location_pin mr-2"></i> {{
                 \App\Models\City::find($user->city_id)->name}}

                                </div>
                                <div class="h5 mt-4">
                                    <i class="ni business_briefcase-24 mr-2"></i>{{$user->mobile_number}}
                                </div>
                                <div>
                                    <i class="ni education_hat mr-2"></i>{{$user->email}}
                                </div>


                                <div style="margin:10px">

                                    <a href="{{route('user.change' , $user->id)}}">
                                        <button class="btn btn-success"><i class="fa fa-edit"></i> edite profile
                                        </button>
                                    </a>
                                </div>
                                <div style="margin:10px">
                                    <a href="{{route('user.reset' , $user->id)}}">
                                        <button class="btn btn-success"><i class="fa fa-edit"></i> edite password
                                        </button>
                                    </a>
                                </div>
                                <div style="margin:10px">
                                    <a href="{{route('add_property')}}">
                                        <button class="btn btn-success"><i class="fa fa-edit"></i>add property</button>
                                    </a>
                                </div>
                                <div style="margin:10px">
                                    <a href="{{route('user_logout')}}">
                                        <button class="btn btn-success"><i class="fa fa-edit"></i> log out</button>
                                    </a>
                                </div>

                            </div>
                            <hr>


                            <div class="text-center">

                                <div class="row pt-md-5 pt-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="favorite-tab" data-bs-toggle="tab"
                                                    data-bs-target="#favorite" type="button" role="tab"
                                                    aria-controls="favorite" aria-selected="true">Favorite
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="my_property-tab" data-bs-toggle="tab"
                                                    data-bs-target="#my_property" type="button" role="tab"
                                                    aria-controls="my_property" aria-selected="false">my property
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="Reservations_requests-tab" data-bs-toggle="tab"
                                                    data-bs-target="#Reservations_requests" type="button" role="tab"
                                                    aria-controls="Reservations_requests" aria-selected="false">
                                                Reservations requests
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="favorite" role="tabpanel"
                                             aria-labelledby="home-tab">
                                            <div class="row pt-md-5 pt-4">

                                                @foreach($favorites as $fav)
                                                    <div class="col-lg-4 col-md-6 mt-lg-4 pt-lg-0 mt-4 pt-md-2">
                                                        <div class="w3property-grid">
                                                            <a href="{{route('property_details',$fav->property->id)}}">
                                                                <div class="box16">
                                                                    <img class="img-fluid" src="{{asset('images/property/'.$fav->property->image)}}"  alt="">
                                                                    <div class="box-content">
                                                                        <h3 class="title">{{$fav->property->name}}</h3>
                                                                        <span
                                                                            class="post"> {{$fav->property->address}}</span>

                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="list-information space-between">
                                                                <ul class="product-features">
                                                                    <li>
                                                                        <i class="fas fa-search-location"></i>
                                                                        <span class="listable-value">

                                            <span
                                                class="value"> {{\App\Models\City::find($fav->property->city_id)->name}}  </span>

                                            <span class="suffix">
                                            </span>
                                        </span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fas fa-user"></i>
                                                                        <span class="listable-value">

                                            <span class="value">
                                                 @php
                                                     $user = \App\Models\User::find($fav->property->user_id)
                                                 @endphp
                                                {{$user->firstName}}
                                            </span>
                                        </span>
                                                                    </li>
                                                                </ul>
                                                                <hr/>
                                                            </div>
                                                            <form action='{{route('delete_fav')}}' method='post'>
                                                                @csrf
                                                                <input type="hidden" value="{{$fav->id}}" name="fav_id">
                                                                <button type="submit" class="btn btn-outline-danger"
                                                                        name="delete">remove
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="my_property" role="tabpanel"
                                             aria-labelledby="profile-tab">
                                            <div class="row pt-md-5 pt-4">

                                                @foreach($properties as $property)
                                                    <div class="col-lg-4 col-md-6 mt-lg-4 pt-lg-0 mt-4 pt-md-2">
                                                        <div class="w3property-grid">
                                                            @php
                                                                $state  =  $property->state  ;
                                                            @endphp
                                                            <a @if($state == "accept") href="{{route('property_reservations',$property->id)}}" @endif>
                                                                <div class="box16">
                                                                    <div class="rentext-listing-category">
                                                                        <span> {{\App\Models\Type::find($property->type_id)->name}}</span>
                                                                    </div>
                                                                    <img class="img-fluid" src="{{asset('images/property/'.$property->image)}}" alt="">

                                                                    <div class="box-content">
                                                                        <h3 class="title">{{$property->name}}</h3>
                                                                        <span
                                                                            class="post"> {{$property->address}}</span>

                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <div class="list-information space-between">
                                                                <ul class="product-features">
                                                                    <li>
                                                                        <i class="fas fa-search-location"></i>
                                                                        <span class="listable-value">

                                            <span
                                                class="value"> {{\App\Models\City::find($property->city_id)->name}}  </span>

                                        </span>
                                                                    </li>

                                                                    <li>
                                                                        <i class="fas fa-user"></i>
                                                                        <span class="listable-value">

                                            <span class="value">
                                                 @php
                                                     $user = \App\Models\User::find($property->user_id)
                                                 @endphp
                                                {{$user->firstName}}
                                            </span>
                                        </span>
                                                                    </li>

                                                                </ul>
                                                                <div>

                                                                    @if($state == 'waiting')
                                                                        {{'waiting'}}
                                                                    @elseif($state == "accept")
                                                                        {{'accepted'}}
                                                                    @else
                                                                        {{'rejected'}}
                                                                    @endif

                                                                </div>
                                                                <hr/>
                                                            </div>
                                                            <form action='{{route('delete_my_property')}}'
                                                                  method='post'>
                                                                @csrf
                                                                <input type="hidden" value="{{$property->id}}"
                                                                       name="property_id">
                                                                <button type="submit" class="btn btn-outline-danger"
                                                                        name="delete">remove
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>


                                        <div class="tab-pane fade" id="Reservations_requests" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="row pt-md-5 pt-4">

                                                @foreach($reservations as $res)
                                                    <div class="col-lg-4 col-md-6 mt-lg-4 pt-lg-0 mt-4 pt-md-2">
                                                        <div class="w3property-grid">
                                                            <a href="">
                                                                <div class="box16">
                                                                    <div class="rentext-listing-category">
                                                                        <span> {{\App\Models\Type::find($res->property->type_id)->name}}</span>
                                                                    </div>
                                                                    <img class="img-fluid" src="{{asset('images/property/'.$res->property->image)}}" alt="">

                                                                    <div class="box-content">
                                                                        <h3 class="title">{{$res->property->name}}</h3>
                                                                        <span
                                                                            class="post"> {{$res->property->address}}</span>

                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <div class="list-information space-between">
                                                                <ul class="product-features">
                                                                    <li>
                                                                        <i class="fas fa-search-location"></i>
                                                                        <span class="listable-value">
                                                                            <span
                                                                                class="value"> {{\App\Models\City::find($res->property->city_id)->name}}
                                                                            </span>
                                                                        </span>
                                                                    </li>


                                                                    <li>
                                                                        <i class="fas fa-user"></i>
                                                                        <span class="listable-value">

                                                                                <span class="value">
                                                                                     @php
                                                                                         $user = \App\Models\User::find($res->property->user_id)
                                                                                     @endphp
                                                                                    {{$user->firstName}}
                                                                                </span>
                                                                            </span>
                                                                    </li>


                                                                    <li>
                                                                        <i class="fas fa-mobile"></i>
                                                                        <span class="listable-value">
                                                                            <span class="value">
                                                                                @php
                                                                                    $state  =  $res->state  ;
                                                                                @endphp
                                                                                @if($state == 'waiting')
                                                                                    {{'waiting'}}
                                                                                @elseif($state == "accepted")
                                                                                    @php
                                                                                        $user = \App\Models\User::find($res->property->user_id)
                                                                                    @endphp
                                                                                    {{$user->mobile_number}}
                                                                                @else
                                                                                    {{'rejected'}}
                                                                                @endif

                                                                            </span>
                                                                        </span>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                            <form action='{{route('delete_my_request')}}' method='post'>
                                                                @csrf
                                                                <input type="hidden" value="{{$res->id}}" name="res_id">
                                                                <button type="submit" class="btn btn-outline-danger"
                                                                        name="delete">remove
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="agileits_banner_bottom_grids">

                                    {{--                                @foreach($favorites as $fav)--}}
                                    {{--                                    <div class="col-md-3 agileits_banner_bottom_grid"  style="margin-bottom: 10px">--}}
                                    {{--                                        <a href='{{route('property_details' , $fav->property->id)}}'>--}}
                                    {{--                                            <div class="hovereffect w3ls_banner_bottom_grid">--}}
                                    {{--                                                <img  src="{{asset('images/property/'.$fav->property->image)}}"--}}
                                    {{--                                                     class="img-responsive"--}}
                                    {{--                                                     style=' border-radius: 7px ;width: 100% ; height: 100%'/>--}}
                                    {{--                                                <div class="overlay">--}}
                                    {{--                                                    <h4>{{$fav->property->name}}</h4>--}}
                                    {{--                                                    <p>learn more</p>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </a>--}}
                                    {{--                                        <form action='' method='post'>--}}
                                    {{--                                            @csrf--}}
                                    {{--                                            <input type="hidden" value="{{$fav->id}}" name="fav_id">--}}

                                    {{--                                            <input type="submit" value="remove from favorite">--}}
                                    {{--                                            <button name="tt">remove from favorite<i class="fa fa-close"--}}
                                    {{--                                                                                     style='color: red'></i>--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </form>--}}
                                    {{--                                    </div>--}}
                                    {{--                                @endforeach--}}

                                    <div class="clearfix"></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection

@section('title')
    User information page
@endsection
