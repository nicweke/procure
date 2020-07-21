
@extends('layouts.front')
<link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('/js/parsley.min.js')}}"></script>



@section('content')

<div id="scoped-content">
    <style  type="text/css" scoped>
    /*-----------------------------------------------------------------------------------

    Template Name: Sass Landing Page,
    Template URI: site.com
    Description: Sass Landing Page,
    Author: Uideck
    Author URI: https://uideck.com/
    Support: https://uideck.com/support/
    Version: 1.0

-----------------------------------------------------------------------------------

    CSS INDEX
    ===================

    01.COMMON 
    02.HEADER
    03.BRAND
    04.SERVICES
    05.ABOUT
    06.VIDEO COUNTER
    07.TEAM
    08.TESTIMONIAL
    09.BLOG
    10.SUBSCRIBE
    11.FOOTER

-----------------------------------------------------------------------------------*/
/*===========================
     01.COMMON css 
===========================*/
@import url("https://fonts.googleapis.com/css?family=Poppins:400,700|Lato:300,400,700&display=swap");
body {
  font-family: "Lato", sans-serif;
  font-weight: normal;
  font-style: normal;
  color: #6A6972;
  overflow-x: hidden; }

* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

img {
  max-width: 100%; }

a:focus,
input:focus,
textarea:focus,
button:focus {
  text-decoration: none;
  outline: none; }

a:focus,
a:hover {
  text-decoration: none; }

i,
span,
a {
  display: inline-block; }

audio,
canvas,
iframe,
img,
svg,
video {
  vertical-align: middle; }

h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  color: #2E2E2E;
  margin: 0px; }

h1 {
  font-size: 48px; }

h2 {
  font-size: 36px; }

h3 {
  font-size: 28px; }

h4 {
  font-size: 22px; }

h5 {
  font-size: 18px; }

h6 {
  font-size: 16px; }

ul, ol {
  margin: 0px;
  padding: 0px;
  list-style-type: none; }

p {
  font-size: 16px;
  font-weight: 400;
  line-height: 26px;
  color: #6A6972;
  margin: 0px; }

.bg_cover {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  height: 100%; }

/*===== All Slick Slide Outline Style =====*/
.slick-slide {
  outline: 0; }

/*===== All Button Style =====*/
.main-btn {
  display: inline-block;
  font-weight: 500;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  padding: 0 25px;
  font-size: 16px;
  line-height: 48px;
  border-radius: 8px;
  border: 0;
  color: #fff;
  cursor: pointer;
  z-index: 5;
  -webkit-transition: all 0.4s ease-out 0s;
  -moz-transition: all 0.4s ease-out 0s;
  -ms-transition: all 0.4s ease-out 0s;
  -o-transition: all 0.4s ease-out 0s;
  transition: all 0.4s ease-out 0s;
  background: -webkit-linear-gradient(left, #33c8c1 0%, #119bd2 50%, #33c8c1 100%);
  background: -o-linear-gradient(left, #33c8c1 0%, #119bd2 50%, #33c8c1 100%);
  background: linear-gradient(to right, #33c8c1 0%, #119bd2 50%, #33c8c1 100%);
  background-size: 200%; }
  .main-btn:hover {
    color: #fff;
    background-position: right center; }

/*===== All SECTION TITLE Style =====*/
.section-title .line {
  background: -webkit-linear-gradient(#fe8464 0%, #fe6e9a 100%);
  background: -o-linear-gradient(#fe8464 0%, #fe6e9a 100%);
  background: linear-gradient(#fe8464 0%, #fe6e9a 100%);
  width: 150px;
  height: 5px;
  margin-bottom: 10px !important; }

.section-title .title {
  font-size: 38px;
  font-weight: 700;
  line-height: 42px; }
  @media (max-width: 767px) {
    .section-title .title {
      font-size: 20px; } }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .section-title .title {
      font-size: 30px; } }
  .section-title .title span {
    font-weight: 400;
    display: contents; }

/*===== All Section Title Style =====*/
.section-title .sub-title {
  font-size: 18px;
  font-weight: 400;
  color: #361CC1;
  text-transform: uppercase; }
  @media (max-width: 767px) {
    .section-title .sub-title {
      font-size: 16px; } }

.section-title .title {
  font-size: 32px;
  padding-top: 10px; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .section-title .title {
      font-size: 30px; } }
  @media (max-width: 767px) {
    .section-title .title {
      font-size: 24px; } }
  .section-title .title span {
    font-weight: 400;
    display: contents; }

/*===== All Slick Slide Outline Style =====*/
.slick-slide {
  outline: 0; }


/*===========================
      02.HEADER css 
===========================*/
/*===== NAVBAR =====*/
.navbar-area {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 99;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s; }

.sticky {
  position: fixed;
  z-index: 99;
  background-color: #fff;
  -webkit-box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0px 20px 50px 0px rgba(0, 0, 0, 0.05);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s; }
  .sticky .navbar {
    padding: 10px 0; }

.navbar {
  padding: 25px 0;
  border-radius: 5px;
  position: relative;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s; }

.navbar-brand {
  padding: 0; }

.navbar-toggler {
  padding: 0; }
  .navbar-toggler .toggler-icon {
    width: 30px;
    height: 2px;
    background-color: #fff;
    display: block;
    margin: 5px 0;
    position: relative;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s; }
  .navbar-toggler.active .toggler-icon:nth-of-type(1) {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
    top: 7px; }
  .navbar-toggler.active .toggler-icon:nth-of-type(2) {
    opacity: 0; }
  .navbar-toggler.active .toggler-icon:nth-of-type(3) {
    -webkit-transform: rotate(135deg);
    -moz-transform: rotate(135deg);
    -ms-transform: rotate(135deg);
    -o-transform: rotate(135deg);
    transform: rotate(135deg);
    top: -7px; }

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-collapse {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: #fff;
    z-index: 9;
    -webkit-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    padding: 5px 12px; } }

@media (max-width: 767px) {
  .navbar-collapse {
    position: absolute;
    top: 100%;
    left: 0;
    width: 100%;
    background-color: #fff;
    z-index: 9;
    -webkit-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 15px 20px 0px rgba(0, 0, 0, 0.1);
    padding: 5px 12px; } }

.navbar-nav .nav-item {
  margin-right: 45px;
  position: relative; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .navbar-nav .nav-item {
      margin-right: 30px; } }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .navbar-nav .nav-item {
      margin: 0; } }
  @media (max-width: 767px) {
    .navbar-nav .nav-item {
      margin: 0; } }
  .navbar-nav .nav-item a {
    font-size: 16px;
    font-weight: 400;
    color: #fff;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s;
    padding: 10px 0;
    position: relative;
    font-family: "Poppins", sans-serif; }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .navbar-nav .nav-item a {
        display: block;
        padding: 4px 0;
        color: #2E2E2E; } }
    @media (max-width: 767px) {
      .navbar-nav .nav-item a {
        display: block;
        padding: 4px 0;
        color: #2E2E2E; } }
  .navbar-nav .nav-item:hover .sub-menu {
    top: 100%;
    opacity: 1;
    visibility: visible; }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .navbar-nav .nav-item:hover .sub-menu {
        top: 0; } }
    @media (max-width: 767px) {
      .navbar-nav .nav-item:hover .sub-menu {
        top: 0; } }
  .navbar-nav .nav-item .sub-menu {
    width: 200px;
    background-color: #fff;
    -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
    position: absolute;
    top: 110%;
    left: 0;
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s; }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
      .navbar-nav .nav-item .sub-menu {
        position: relative;
        width: 100%;
        top: 0;
        display: none;
        opacity: 1;
        visibility: visible; } }
    @media (max-width: 767px) {
      .navbar-nav .nav-item .sub-menu {
        position: relative;
        width: 100%;
        top: 0;
        display: none;
        opacity: 1;
        visibility: visible; } }
    .navbar-nav .nav-item .sub-menu li {
      display: block; }
      .navbar-nav .nav-item .sub-menu li a {
        display: block;
        padding: 8px 20px;
        color: #2E2E2E; }
        .navbar-nav .nav-item .sub-menu li a.active, .navbar-nav .nav-item .sub-menu li a:hover {
          padding-left: 25px;
          color: #361CC1; }

.navbar-nav .sub-nav-toggler {
  display: none; }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .navbar-nav .sub-nav-toggler {
      display: block;
      position: absolute;
      right: 0;
      top: 0;
      background: none;
      color: #2E2E2E;
      font-size: 18px;
      border: 0;
      width: 30px;
      height: 30px; } }
  @media (max-width: 767px) {
    .navbar-nav .sub-nav-toggler {
      display: block;
      position: absolute;
      right: 0;
      top: 0;
      background: none;
      color: #2E2E2E;
      font-size: 18px;
      border: 0;
      width: 30px;
      height: 30px; } }
  .navbar-nav .sub-nav-toggler span {
    width: 8px;
    height: 8px;
    border-left: 1px solid #2E2E2E;
    border-bottom: 1px solid #2E2E2E;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
    position: relative;
    top: -5px; }

@media only screen and (min-width: 768px) and (max-width: 991px) {
  .navbar-btn {
    position: absolute;
    top: 50%;
    right: 50px;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%); } }

@media (max-width: 767px) {
  .navbar-btn {
    position: absolute;
    top: 50%;
    right: 50px;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%); } }

.navbar-btn .main-btn {
  height: 45px;
  line-height: 45px;
  background: -webkit-linear-gradient(left, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
  background: -o-linear-gradient(left, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
  background: linear-gradient(to right, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
  background-size: 200%; }
  .navbar-btn .main-btn:hover {
    color: #fff;
    background-position: right center; }

.sticky .navbar-toggler .toggler-icon {
  background-color: #2E2E2E; }

.sticky .navbar-nav .nav-item a {
  color: #2E2E2E; }

.sticky .navbar-nav .nav-item.active > a, .sticky .navbar-nav .nav-item:hover > a {
  color: #361CC1; }

/*===== HEADER HERO =====*/
.header-hero {
  position: relative;
  z-index: 5;
  background-position: bottom center; }

#particles-1 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1; }

.header-hero-content {
  padding-top: 180px; }
  @media (max-width: 767px) {
    .header-hero-content {
      padding-top: 100px; } }
  .header-hero-content .header-sub-title {
    font-size: 38px;
    font-weight: 300;
    color: #fff; }
    @media (max-width: 767px) {
      .header-hero-content .header-sub-title {
        font-size: 24px; } }
    @media only screen and (min-width: 576px) and (max-width: 767px) {
      .header-hero-content .header-sub-title {
        font-size: 30px; } }
  .header-hero-content .header-title {
    font-size: 38px;
    font-weight: 700;
    color: #fff; }
    @media (max-width: 767px) {
      .header-hero-content .header-title {
        font-size: 24px; } }
    @media only screen and (min-width: 576px) and (max-width: 767px) {
      .header-hero-content .header-title {
        font-size: 30px; } }
  .header-hero-content .text {
    color: #fff;
    margin-top: 30px; }
  .header-hero-content .main-btn {
    margin-top: 40px; }

.header-hero-image {
  padding-top: 45px; }
  .header-hero-image img {
    max-width: 650px; }
    @media (max-width: 767px) {
      .header-hero-image img {
        max-width: 100%; } }
  @media (max-width: 767px) {
    .header-hero-image {
      padding-top: 30px; } }

/*===========================
      03.BRAND css 
===========================*/
@media (max-width: 767px) {
  .brand-logo {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap; } }

.single-logo {
  padding: 0 30px; }
  @media only screen and (min-width: 768px) and (max-width: 991px) {
    .single-logo {
      padding: 0 15px; } }
  @media (max-width: 767px) {
    .single-logo {
      padding: 0 15px; } }
  @media (max-width: 767px) {
    .single-logo {
      width: 50%; } }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    .single-logo {
      width: 33.33%; } }
  .single-logo img {
    width: 100%;
    opacity: 0.5;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s; }
  .single-logo:hover img {
    opacity: 1; }

/*===========================
      04.SERVICES css 
===========================*/
.single-services {
  background-color: #fff;
  -webkit-box-shadow: 0px 5px 30px 0px rgba(167, 167, 167, 0.16);
  -moz-box-shadow: 0px 5px 30px 0px rgba(167, 167, 167, 0.16);
  box-shadow: 0px 5px 30px 0px rgba(167, 167, 167, 0.16);
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  padding: 50px 30px;
  border: 2px solid transparent;
  border-radius: 8px; }
  @media (max-width: 767px) {
    .single-services {
      padding: 20px 20px 30px; } }
  .single-services .services-icon {
    display: inline-block;
    position: relative; }
    .single-services .services-icon img {
      -webkit-transition: all 0.4s ease-out 0s;
      -moz-transition: all 0.4s ease-out 0s;
      -ms-transition: all 0.4s ease-out 0s;
      -o-transition: all 0.4s ease-out 0s;
      transition: all 0.4s ease-out 0s; }
    .single-services .services-icon .shape-1 {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
    .single-services .services-icon i {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -moz-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      -o-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
      font-size: 34px;
      color: #fff; }
  .single-services .services-content .services-title a {
    font-size: 26px;
    font-weight: 700;
    color: #2E2E2E;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s; }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
      .single-services .services-content .services-title a {
        font-size: 24px; } }
    @media (max-width: 767px) {
      .single-services .services-content .services-title a {
        font-size: 20px; } }
    .single-services .services-content .services-title a:hover {
      color: #361CC1; }
  .single-services .services-content .text {
    margin-top: 30px; }
    @media (max-width: 767px) {
      .single-services .services-content .text {
        margin-top: 20px; } }
  .single-services .services-content .more {
    margin-top: 30px;
    font-size: 16px;
    font-weight: 400;
    color: #2E2E2E;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s; }
    .single-services .services-content .more i {
      margin-left: 10px; }
    .single-services .services-content .more:hover {
      color: #361CC1; }
  .single-services:hover {
    border-color: #FE7A7B; }
    .single-services:hover .services-icon .shape {
      -webkit-transform: rotate(25deg);
      -moz-transform: rotate(25deg);
      -ms-transform: rotate(25deg);
      -o-transform: rotate(25deg);
      transform: rotate(25deg); }

/*===========================
      05.ABOUT css 
===========================*/
.about-area {
  position: relative;
  z-index: 5; }

.about-shape-1 {
  position: absolute;
  top: 0;
  right: 0;
  width: 35%;
  height: 100%;
  z-index: -1; }
  .about-shape-1 img {
    width: 100%; }
  @media (max-width: 767px) {
    .about-shape-1 {
      display: none; } }

.about-shape-2 {
  position: absolute;
  top: 0;
  left: 0;
  width: 35%;
  height: 100%;
  z-index: -1; }
  .about-shape-2 img {
    width: 100%; }
  @media (max-width: 767px) {
    .about-shape-2 {
      display: none; } }

.about-content {
  max-width: 480px; }
  .about-content .text {
    margin-top: 15px; }
  .about-content .main-btn {
    background: -webkit-linear-gradient(left, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
    background: -o-linear-gradient(left, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
    background: linear-gradient(to right, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
    background-size: 200%;
    height: 50px;
    line-height: 50px;
    padding: 0 35px;
    margin-top: 40px; }
    .about-content .main-btn:hover {
      background-position: right center; }


/*===========================
       10.SUBSCRIBE  css 
===========================*/
.subscribe-area {
  padding: 40px 50px 90px;
  -webkit-box-shadow: 0px 0px 18px 0px rgba(50, 77, 215, 0.14);
  -moz-box-shadow: 0px 0px 18px 0px rgba(50, 77, 215, 0.14);
  box-shadow: 0px 0px 18px 0px rgba(50, 77, 215, 0.14);
  border-radius: 10px;
  background-color: #fff; }
  @media (max-width: 767px) {
    .subscribe-area {
      padding: 10px 30px 60px; } }

.subscribe-content .subscribe-title {
  font-size: 35px;
  font-weight: 700; }
  @media only screen and (min-width: 992px) and (max-width: 1199px) {
    .subscribe-content .subscribe-title {
      font-size: 30px; } }
  @media (max-width: 767px) {
    .subscribe-content .subscribe-title {
      font-size: 24px; } }
  .subscribe-content .subscribe-title span {
    font-weight: 400; }

.subscribe-form {
  position: relative; }
  .subscribe-form input {
    border: 2px solid #E1E1E1;
    height: 65px;
    padding: 0 30px;
    border-radius: 5px;
    width: 100%;
    color: #2E2E2E; }
    .subscribe-form input::placeholder {
      opacity: 1;
      color: #B9B9B9; }
    .subscribe-form input::-moz-placeholder {
      opacity: 1;
      color: #B9B9B9; }
    .subscribe-form input::-moz-placeholder {
      opacity: 1;
      color: #B9B9B9; }
    .subscribe-form input::-webkit-input-placeholder {
      opacity: 1;
      color: #B9B9B9; }
    .subscribe-form input:focus {
      border-color: #361CC1; }
  .subscribe-form button {
    position: absolute;
    top: 0;
    right: 0;
    border-radius: 0;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
    height: 65px;
    line-height: 65px;
    background: -webkit-linear-gradient(left, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
    background: -o-linear-gradient(left, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
    background: linear-gradient(to right, #fe8464 0%, #fe6e9a 50%, #fe8464 100%);
    background-size: 200%; }
    @media (max-width: 767px) {
      .subscribe-form button {
        position: relative;
        width: 100%;
        margin-top: 10px;
        border-radius: 5px; } }
    @media only screen and (min-width: 576px) and (max-width: 767px) {
      .subscribe-form button {
        position: absolute;
        width: auto;
        margin-top: 0;
        border-radius: 0;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px; } }
    .subscribe-form button:hover {
      color: #fff;
      background-position: right center; }

/*===========================
       11.FOOTER  css 
===========================*/
.footer-area {
  background-position: top center;
  position: relative;
  z-index: 5; }

.footer-area::before {
  position: absolute;
  content: '';
  bottom: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-image: url(../images/footer-bg.svg);
  background-position: top center;
  z-index: -1;
  background-size: cover; }
  @media only screen and (min-width: 1921px) {
    .footer-area::before {
      height: 1120px; } }

#particles-2 {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1; }

.footer-widget {
  padding-top: 50px; }

.footer-about .logo img {
  width: 160px; }

.footer-about .text {
  color: #fff;
  line-height: 30px;
  margin-top: 30px; }

.footer-about .social {
  margin-top: 40px; }
  .footer-about .social li {
    display: inline-block;
    margin-right: 30px; }
    .footer-about .social li a {
      font-size: 22px;
      color: #fff;
      -webkit-transition: all 0.3s ease-out 0s;
      -moz-transition: all 0.3s ease-out 0s;
      -ms-transition: all 0.3s ease-out 0s;
      -o-transition: all 0.3s ease-out 0s;
      transition: all 0.3s ease-out 0s; }
      .footer-about .social li a:hover {
        color: #FE8464; }

.footer-title .title {
  font-size: 24px;
  font-weight: 700;
  color: #fff; }

.link-wrapper {
  padding: 0 35px; }
  @media (max-width: 767px) {
    .link-wrapper {
      padding: 0;
      padding-right: 50px; } }
  .link-wrapper .link {
    padding-top: 20px; }
    .link-wrapper .link li {
      margin-top: 20px; }
      .link-wrapper .link li a {
        font-size: 16px;
        color: #fff;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s; }
        .link-wrapper .link li a:hover {
          color: #FE8464; }

.footer-contact .contact {
  padding-top: 20px; }
  .footer-contact .contact li {
    margin-top: 20px;
    font-size: 16px;
    color: #fff; }

.footer-copyright {
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  padding-top: 15px;
  padding-bottom: 30px; }

.copyright-content {
  padding-top: 15px;
  text-align: center; }
  .copyright-content p {
    color: #fff; }
  .copyright-content a {
    font-size: 16px;
    color: #fff;
    -webkit-transition: all 0.3s ease-out 0s;
    -moz-transition: all 0.3s ease-out 0s;
    -ms-transition: all 0.3s ease-out 0s;
    -o-transition: all 0.3s ease-out 0s;
    transition: all 0.3s ease-out 0s; }
    .copyright-content a:hover {
      color: #FE8464; }

/*===== BACK TO TOP =====*/
.back-to-top {
  font-size: 20px;
  color: #fff;
  position: fixed;
  right: 20px;
  bottom: 20px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 5px;
  background: -webkit-linear-gradient(left, #361cc1 0%, #2e82ef 100%);
  background: -o-linear-gradient(left, #361cc1 0%, #2e82ef 100%);
  background: linear-gradient(to right, #361cc1 0%, #2e82ef 100%);
  text-align: center;
  z-index: 99;
  -webkit-transition: all 0.3s ease-out 0s;
  -moz-transition: all 0.3s ease-out 0s;
  -ms-transition: all 0.3s ease-out 0s;
  -o-transition: all 0.3s ease-out 0s;
  transition: all 0.3s ease-out 0s;
  display: none; }
  .back-to-top:hover {
    color: #fff; }

    /* Deafult Margin & Padding */
/*-- Margin Top --*/
.mt-5 {
	margin-top: 5px;
}
.mt-10 {
	margin-top: 10px;
}
.mt-15 {
	margin-top: 15px;
}
.mt-20 {
	margin-top: 20px;
}
.mt-25 {
	margin-top: 25px;
}
.mt-30 {
	margin-top: 30px;
}
.mt-35 {
	margin-top: 35px;
}
.mt-40 {
	margin-top: 40px;
}
.mt-45 {
	margin-top: 45px;
}
.mt-50 {
	margin-top: 50px;
}
.mt-55 {
	margin-top: 55px;
}
.mt-60 {
	margin-top: 60px;
}
.mt-65 {
	margin-top: 65px;
}
.mt-70 {
	margin-top: 70px;
}
.mt-75 {
	margin-top: 75px;
}
.mt-80 {
	margin-top: 80px;
}
.mt-85 {
	margin-top: 85px;
}
.mt-90 {
	margin-top: 90px;
}
.mt-95 {
	margin-top: 95px;
}
.mt-100 {
	margin-top: 100px;
}
.mt-105 {
	margin-top: 105px;
}
.mt-110 {
	margin-top: 110px;
}
.mt-115 {
	margin-top: 115px;
}
.mt-120 {
	margin-top: 120px;
}
.mt-125 {
	margin-top: 125px;
}
.mt-130 {
	margin-top: 130px;
}
.mt-135 {
	margin-top: 135px;
}
.mt-140 {
	margin-top: 140px;
}
.mt-145 {
	margin-top: 145px;
}
.mt-150 {
	margin-top: 150px;
}
.mt-155 {
	margin-top: 155px;
}
.mt-160 {
	margin-top: 160px;
}
.mt-165 {
	margin-top: 165px;
}
.mt-170 {
	margin-top: 170px;
}
.mt-175 {
	margin-top: 175px;
}
.mt-180 {
	margin-top: 180px;
}
.mt-185 {
	margin-top: 185px;
}
.mt-190 {
	margin-top: 190px;
}
.mt-195 {
	margin-top: 195px;
}
.mt-200 {
	margin-top: 200px;
}
/*-- Margin Bottom --*/

.mb-5 {
	margin-bottom: 5px;
}
.mb-10 {
	margin-bottom: 10px;
}
.mb-15 {
	margin-bottom: 15px;
}
.mb-20 {
	margin-bottom: 20px;
}
.mb-25 {
	margin-bottom: 25px;
}
.mb-30 {
	margin-bottom: 30px;
}
.mb-35 {
	margin-bottom: 35px;
}
.mb-40 {
	margin-bottom: 40px;
}
.mb-45 {
	margin-bottom: 45px;
}
.mb-50 {
	margin-bottom: 50px;
}
.mb-55 {
	margin-bottom: 55px;
}
.mb-60 {
	margin-bottom: 60px;
}
.mb-65 {
	margin-bottom: 65px;
}
.mb-70 {
	margin-bottom: 70px;
}
.mb-75 {
	margin-bottom: 75px;
}
.mb-80 {
	margin-bottom: 80px;
}
.mb-85 {
	margin-bottom: 85px;
}
.mb-90 {
	margin-bottom: 90px;
}
.mb-95 {
	margin-bottom: 95px;
}
.mb-100 {
	margin-bottom: 100px;
}
.mb-105 {
	margin-bottom: 105px;
}
.mb-110 {
	margin-bottom: 110px;
}
.mb-115 {
	margin-bottom: 115px;
}
.mb-120 {
	margin-bottom: 120px;
}
.mb-125 {
	margin-bottom: 125px;
}
.mb-130 {
	margin-bottom: 130px;
}
.mb-135 {
	margin-bottom: 135px;
}
.mb-140 {
	margin-bottom: 140px;
}
.mb-145 {
	margin-bottom: 145px;
}
.mb-150 {
	margin-bottom: 150px;
}
.mb-155 {
	margin-bottom: 155px;
}
.mb-160 {
	margin-bottom: 160px;
}
.mb-165 {
	margin-bottom: 165px;
}
.mb-170 {
	margin-bottom: 170px;
}
.mb-175 {
	margin-bottom: 175px;
}
.mb-180 {
	margin-bottom: 180px;
}
.mb-185 {
	margin-bottom: 185px;
}
.mb-190 {
	margin-bottom: 190px;
}
.mb-195 {
	margin-bottom: 195px;
}
.mb-200 {
	margin-bottom: 200px;
}
/*-- margin left --*/
.ml-5 {
	margin-left: 5px;
}
.ml-10 {
	margin-left: 10px;
}
.ml-15 {
	margin-left: 15px;
}
.ml-20 {
	margin-left: 20px;
}
.ml-25 {
	margin-left: 25px;
}
.ml-30 {
	margin-left: 30px;
}
.ml-35 {
	margin-left: 35px;
}
.ml-40 {
	margin-left: 40px;
}
.ml-45 {
	margin-left: 45px;
}
.ml-50 {
	margin-left: 50px;
}
.ml-55 {
	margin-left: 55px;
}
.ml-60 {
	margin-left: 60px;
}
.ml-65 {
	margin-left: 65px;
}
.ml-70 {
	margin-left: 70px;
}
.ml-75 {
	margin-left: 75px;
}
.ml-80 {
	margin-left: 80px;
}
.ml-85 {
	margin-left: 85px;
}
.ml-90 {
	margin-left: 90px;
}
.ml-95 {
	margin-left: 95px;
}
.ml-100 {
	margin-left: 100px;
}
.ml-105 {
	margin-left: 105px;
}
.ml-110 {
	margin-left: 110px;
}
.ml-115 {
	margin-left: 115px;
}
.ml-120 {
	margin-left: 120px;
}
.ml-125 {
	margin-left: 125px;
}
.ml-130 {
	margin-left: 130px;
}
.ml-135 {
	margin-left: 135px;
}
.ml-140 {
	margin-left: 140px;
}
.ml-145 {
	margin-left: 145px;
}
.ml-150 {
	margin-left: 150px;
}
.ml-155 {
	margin-left: 155px;
}
.ml-160 {
	margin-left: 160px;
}
.ml-165 {
	margin-left: 165px;
}
.ml-170 {
	margin-left: 170px;
}
.ml-175 {
	margin-left: 175px;
}
.ml-180 {
	margin-left: 180px;
}
.ml-185 {
	margin-left: 185px;
}
.ml-190 {
	margin-left: 190px;
}
.ml-195 {
	margin-left: 195px;
}
.ml-200 {
	margin-left: 200px;
}
/*-- margin right --*/
.mr-5 {
	margin-right: 5px;
}
.mr-10 {
	margin-right: 10px;
}
.mr-15 {
	margin-right: 15px;
}
.mr-20 {
	margin-right: 20px;
}
.mr-25 {
	margin-right: 25px;
}
.mr-30 {
	margin-right: 30px;
}
.mr-35 {
	margin-right: 35px;
}
.mr-40 {
	margin-right: 40px;
}
.mr-45 {
	margin-right: 45px;
}
.mr-50 {
	margin-right: 50px;
}
.mr-55 {
	margin-right: 55px;
}
.mr-60 {
	margin-right: 60px;
}
.mr-65 {
	margin-right: 65px;
}
.mr-70 {
	margin-right: 70px;
}
.mr-75 {
	margin-right: 75px;
}
.mr-80 {
	margin-right: 80px;
}
.mr-85 {
	margin-right: 85px;
}
.mr-90 {
	margin-right: 90px;
}
.mr-95 {
	margin-right: 95px;
}
.mr-100 {
	margin-right: 100px;
}
.mr-105 {
	margin-right: 105px;
}
.mr-110 {
	margin-right: 110px;
}
.mr-115 {
	margin-right: 115px;
}
.mr-120 {
	margin-right: 120px;
}
.mr-125 {
	margin-right: 125px;
}
.mr-130 {
	margin-right: 130px;
}
.mr-135 {
	margin-right: 135px;
}
.mr-140 {
	margin-right: 140px;
}
.mr-145 {
	margin-right: 145px;
}
.mr-150 {
	margin-right: 150px;
}
.mr-155 {
	margin-right: 155px;
}
.mr-160 {
	margin-right: 160px;
}
.mr-165 {
	margin-right: 165px;
}
.mr-170 {
	margin-right: 170px;
}
.mr-175 {
	margin-right: 175px;
}
.mr-180 {
	margin-right: 180px;
}
.mr-185 {
	margin-right: 185px;
}
.mr-190 {
	margin-right: 190px;
}
.mr-195 {
	margin-right: 195px;
}
.mr-200 {
	margin-right: 200px;
}


/*-- Padding Top --*/

.pt-5 {
	padding-top: 5px;
}
.pt-10 {
	padding-top: 10px;
}
.pt-15 {
	padding-top: 15px;
}
.pt-20 {
	padding-top: 20px;
}
.pt-25 {
	padding-top: 25px;
}
.pt-30 {
	padding-top: 30px;
}
.pt-35 {
	padding-top: 35px;
}
.pt-40 {
	padding-top: 40px;
}
.pt-45 {
	padding-top: 45px;
}
.pt-50 {
	padding-top: 50px;
}
.pt-55 {
	padding-top: 55px;
}
.pt-60 {
	padding-top: 60px;
}
.pt-65 {
	padding-top: 65px;
}
.pt-70 {
	padding-top: 70px;
}
.pt-75 {
	padding-top: 75px;
}
.pt-80 {
	padding-top: 80px;
}
.pt-85 {
	padding-top: 85px;
}
.pt-90 {
	padding-top: 90px;
}
.pt-95 {
	padding-top: 95px;
}
.pt-100 {
	padding-top: 100px;
}
.pt-105 {
	padding-top: 105px;
}
.pt-110 {
	padding-top: 110px;
}
.pt-115 {
	padding-top: 115px;
}
.pt-120 {
	padding-top: 120px;
}
.pt-125 {
	padding-top: 125px;
}
.pt-130 {
	padding-top: 130px;
}
.pt-135 {
	padding-top: 135px;
}
.pt-140 {
	padding-top: 140px;
}
.pt-145 {
	padding-top: 145px;
}
.pt-150 {
	padding-top: 150px;
}
.pt-155 {
	padding-top: 155px;
}
.pt-160 {
	padding-top: 160px;
}
.pt-165 {
	padding-top: 165px;
}
.pt-170 {
	padding-top: 170px;
}
.pt-175 {
	padding-top: 175px;
}
.pt-180 {
	padding-top: 180px;
}
.pt-185 {
	padding-top: 185px;
}
.pt-190 {
	padding-top: 190px;
}
.pt-195 {
	padding-top: 195px;
}
.pt-200 {
	padding-top: 200px;
}
/*-- Padding Bottom --*/

.pb-5 {
	padding-bottom: 5px;
}
.pb-10 {
	padding-bottom: 10px;
}
.pb-15 {
	padding-bottom: 15px;
}
.pb-20 {
	padding-bottom: 20px;
}
.pb-25 {
	padding-bottom: 25px;
}
.pb-30 {
	padding-bottom: 30px;
}
.pb-35 {
	padding-bottom: 35px;
}
.pb-40 {
	padding-bottom: 40px;
}
.pb-45 {
	padding-bottom: 45px;
}
.pb-50 {
	padding-bottom: 50px;
}
.pb-55 {
	padding-bottom: 55px;
}
.pb-60 {
	padding-bottom: 60px;
}
.pb-65 {
	padding-bottom: 65px;
}
.pb-70 {
	padding-bottom: 70px;
}
.pb-75 {
	padding-bottom: 75px;
}
.pb-80 {
	padding-bottom: 80px;
}
.pb-85 {
	padding-bottom: 85px;
}
.pb-90 {
	padding-bottom: 90px;
}
.pb-95 {
	padding-bottom: 95px;
}
.pb-100 {
	padding-bottom: 100px;
}
.pb-105 {
	padding-bottom: 105px;
}
.pb-110 {
	padding-bottom: 110px;
}
.pb-115 {
	padding-bottom: 115px;
}
.pb-120 {
	padding-bottom: 120px;
}
.pb-125 {
	padding-bottom: 125px;
}
.pb-130 {
	padding-bottom: 130px;
}
.pb-135 {
	padding-bottom: 135px;
}
.pb-140 {
	padding-bottom: 140px;
}
.pb-145 {
	padding-bottom: 145px;
}
.pb-150 {
	padding-bottom: 150px;
}
.pb-155 {
	padding-bottom: 155px;
}
.pb-160 {
	padding-bottom: 160px;
}
.pb-165 {
	padding-bottom: 165px;
}
.pb-170 {
	padding-bottom: 170px;
}
.pb-175 {
	padding-bottom: 175px;
}
.pb-180 {
	padding-bottom: 180px;
}
.pb-185 {
	padding-bottom: 185px;
}
.pb-190 {
	padding-bottom: 190px;
}
.pb-195 {
	padding-bottom: 195px;
}
.pb-200 {
	padding-bottom: 200px;
}

/*-- Padding left --*/

.pl-0 {
	padding-left: 0px;
}
.pl-5 {
	padding-left: 5px;
}
.pl-10 {
	padding-left: 10px;
}
.pl-15 {
	padding-left: 15px;
}
.pl-20 {
	padding-left: 20px;
}
.pl-25 {
	padding-left: 25px;
}
.pl-30 {
	padding-left: 30px;
}
.pl-35 {
	padding-left: 35px;
}
.pl-40 {
	padding-left: 40px;
}
.pl-45 {
	padding-left: 45px;
}
.pl-50 {
	padding-left: 50px;
}
.pl-55 {
	padding-left: 55px;
}
.pl-60 {
	padding-left: 60px;
}
.pl-65 {
	padding-left: 65px;
}
.pl-70 {
	padding-left: 70px;
}
.pl-75 {
	padding-left: 75px;
}
.pl-80 {
	padding-left: 80px;
}
.pl-85 {
	padding-left: 85px;
}
.pl-90 {
	padding-left: 90px;
}
.pl-100 {
	padding-left: 100px;
}
.pl-105 {
	padding-left: 105px;
}
.pl-110 {
	padding-left: 110px;
}
.pl-115 {
	padding-left: 115px;
}
.pl-120 {
	padding-left: 120px;
}
.pl-125 {
	padding-left: 125px;
}
/*-- Padding right --*/

.pr-0 {
	padding-right: 0px;
}
.pr-5 {
	padding-right: 5px;
}
.pr-10 {
	padding-right: 10px;
}
.pr-15 {
	padding-right: 15px;
}
.pr-20 {
	padding-right: 20px;
}
.pr-25 {
	padding-right: 25px;
}
.pr-30 {
	padding-right: 30px;
}
.pr-35 {
	padding-right: 35px;
}
.pr-40 {
	padding-right: 40px;
}
.pr-45 {
	padding-right: 45px;
}
.pr-50 {
	padding-right: 50px;
}
.pr-55 {
	padding-right: 55px;
}
.pr-60 {
	padding-right: 60px;
}
.pr-65 {
	padding-right: 65px;
}
.pr-70 {
	padding-right: 70px;
}
.pr-75 {
	padding-right: 75px;
}
.pr-80 {
	padding-right: 80px;
}
.pr-85 {
	padding-right: 85px;
}
.pr-90 {
	padding-right: 90px;
}
.pr-95 {
	padding-right: 95px;
}
.pr-100 {
	padding-right: 100px;
}
.pr-105 {
	padding-right: 105px;
}
/* Background Color */

.gray-bg {
	background: #f6f6f6;
}
.white-bg {
	background: #fff;
}
.black-bg {
	background: #222;
}
/* Color */

.white {
	color: #fff;
}
.black {
	color: #222;
}
/* black overlay */

[data-overlay] {
	position: relative;
}
[data-overlay]::before {
	background: #000 none repeat scroll 0 0;
	content: "";
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 1;
}
[data-overlay="3"]::before {
	opacity: 0.3;
}
[data-overlay="4"]::before {
	opacity: 0.4;
}
[data-overlay="5"]::before {
	opacity: 0.5;
}
[data-overlay="6"]::before {
	opacity: 0.6;
}
[data-overlay="7"]::before {
	opacity: 0.7;
}
[data-overlay="8"]::before {
	opacity: 0.8;
}
[data-overlay="9"]::before {
	opacity: 0.9;
}

    
    </style>

  <div >
    <div class="container">
  
    <div>

    

    

    <form action="{{route('shops.store')}}" method="POST" enctype="multipart/form-data" class="ml-2" data-parsley-validate>
    @csrf
     
    <h2 style="text-align: center">Shop Details</h2>
    
    <div class="col-md-12 py-5">
        <h4 class="mb-3">Personal Information</h4>
        <div class="col-md-4 mb-3">
            <label for="ownername">Owners Name*</label>
            <input type="text" name="ownername"  id="ownername" class="form-control" placeholder="" aria-describedby="helpId" required>
            <small>*Enter your First and Last Names</small>
            @error('ownername')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label for="email">Shop Email Address*</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" required>
            @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label for="tel">Telephone/Mobile Number*</label>
            <input type="tel" name="tel" id="tel" class="form-control" placeholder="+254712345678" aria-describedby="helpId" required>
            @error('tel')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror
        </div>

    </div>
    <div class="col-md-12 py-4">   
        <h4>Shop Information</h4>
      <div class="form-group mt-4 mb-3">
          <label for="cover_img">Upload company logo</label>
          <div class="col-md-12">
          <input type="file" class="form-control-file" name="cover_img" required>
          <small>* Make sure your image dimensions are 281 x 179 pixels before upload</small>
          @error('cover_img')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror
          </div>
        </div> 
      <div class="form-group mt-4 mb-3">
          <label for="license">Upload Trade License</label>
          <div class="col-md-12">
          <input type="file" class="form-control-file" name="license" required>
          @error('license')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror
          </div>
        </div> 
      <div class="form-group mt-4 mb-3">
          <label for="cert">Upload Certificate of Incorporation/Registration</label>
          <div class="col-md-12">
          <input type="file" class="form-control-file" name="cert" required>
          @error('cert')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror
          </div>
        </div> 


        <div class="form-group mt-4 mb-3">
            <label for="name">Company/Shop Name*</label>
            <div class="col-md-12">
            <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
            </div>
        </div>
   


        <div class="form-group mt-2 mb-3">
            <label for="description">Describe Your Business</label>
            <div class="col-md-12">
            <textarea class="form-control" name="description" id="" rows="3" maxlength="255" required></textarea> 
            @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
             @enderror
            </div>
        </div>

        <div class="form-group mt-2 mb-3">
            <label for="specialization">Area Of Specialization</label>
            <div class="col-md-12">
            <input type="text" name="specialization" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
            <small><i>a)Electrical  b)Mechanical  c)Plumbing  d)Electro-mechanical</i></small>
            </div>
        </div>

    </div>

    <div class="col-md-12 mb-3">
        <h4 class="py-4">Seller Settlement Information</h4>

        <div class="form-group mt-2 mb-3">
            <label for="account_name">Bank Account Name*</label>
            <div class="col-md-12">
            <input type="text" name="account_name" id="account_name" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="form-group mt-2 mb-3">
            <label for="account_number">Bank Account Number*</label>
            <div class="col-md-12">
            <input type="number" name="account_number" id="account_number" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="form-group mt-2 mb-3">
            <label for="bank_name">Bank Name*</label>
            <div class="col-md-12">
            <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>
        <div class="form-group mt-2 mb-3">
            <label for="branch_name">Bank Branch Name*</label>
            <div class="col-md-12">
            <input type="text" name="branch_name" id="branch_name" class="form-control" placeholder="" aria-describedby="helpId" required>
            </div>
        </div>

    </div>


      
        <button type="submit" class="btn btn-primary btn-lg btn-block mt-5 mb-5" style="font: 20px">Create Shop</button>



    </form>

    
  </div>

</div>

</div>

<script src="{{ asset('/js/parsley.min.js')}}"></script>

@endsection
