@extends('layouts.page')

@section('content')
    <checkout />
@endsection

@section('styles')
<style>
    .cart-wrap {
	padding: 40px 0;
	font-family: 'Open Sans', sans-serif;
}
.main-heading {
	font-size: 19px;
	margin-bottom: 20px;
}
.table-cart table {
    width: 100%;
}
.table-cart thead {
    border-bottom: 1px solid #e5e5e5;
    margin-bottom: 5px;
}
.table-cart thead tr th {
    padding: 8px 0 18px;
    color: #484848;
    font-size: 15px;
    font-weight: 400;
}
.table-cart tr td {
    padding: 40px 0 27px;
    vertical-align: middle;
}
.table-cart tr td:nth-child(1) {
    width: 52%;
}
.table-cart tr td:nth-child(2) {
    width: 26%;
}
.table-cart tr td:nth-child(3) {
    width: 13.333%;
}
.table-cart tr td:nth-child(4) {
    width: 8.667%;
    text-align: right;
}
.table-cart tr td .img-product {
    width: 72px;
    float: left;
    margin-left: 8px;
    margin-right: 31px;
    line-height: 63px;
}
.table-cart tr td .img-product img {
	width: 100%;
}
.table-cart tr td .name-product {
    font-size: 15px;
    color: #484848;
    padding-top: 8px;
    line-height: 24px;
    width: 50%;
}
.table-cart tr td .price {
    text-align: right;
    line-height: 64px;
    margin-right: 40px;
    color: #989898;
    font-size: 16px;
    font-family: 'Nunito';
}
.table-cart tr td .quanlity {
    position: relative;
}
.product-count .qtyminus,
.product-count .qtyplus {
	width: 34px;
    height: 34px;
    background: transparent;
    text-align: center;
    font-size: 19px;
    line-height: 34px;
    color: #000;
    cursor: pointer;
    font-weight: 600;
}
.product-count .qtyminus {
    line-height: 32px;
}
.product-count .qtyminus {
	border-radius: 3px 0 0 3px; 
}
.product-count .qtyplus {
	border-radius: 0 3px 3px 0; 
}
.product-count .qty {
	width: 60px;
	text-align: center;
	border: none;
}
.count-inlineflex {
	display: inline-flex;
	border: solid 2px #ccc;
	border-radius: 20px;  
}
.total {
	font-size: 24px;
	font-weight: 600;
	color: #8660e9;
}
.display-flex {
	display: flex;
}
.align-center {
	align-items: center;
}

.coupon-box {
    padding: 63px 0 58px;
    text-align: center;
    border: 2px dotted #e5e5e5;
    border-radius: 10px;
    margin-top: 55px;
}
.coupon-box form input {
    display: inline-block;
    width: 264px;
    margin-right: 13px;
    height: 44px;
    border-radius: 25px;
    border: solid 2px #cccccc;
    padding: 5px 15px;
    font-size: 14px;
}
input:focus {
	outline: none;
	box-shadow: none;
}
.round-black-btn {
	border-radius: 25px;
    background: #212529;
    color: #fff;
    padding: 8px 35px;
    display: inline-block;
    border: solid 2px #212529; 
    transition: all 0.5s ease-in-out 0s;
    cursor: pointer;
}
.round-black-btn:hover,
.round-black-btn:focus {
	background: transparent;
	color: #212529;
	text-decoration: none;
}
.cart-totals {
	border-radius: 3px;
	background: #e7e7e7;
	padding: 25px;
}
.cart-totals h3 {
	font-size: 19px;
    color: #3c3c3c;
    letter-spacing: 1px;
    font-weight: 500;
}
.cart-totals table {
	width: 100%;
}
.cart-totals table tr th,
.cart-totals table tr td {
	width: 50%;
    padding: 3px 0;
    vertical-align: middle;
}
.cart-totals table tr td:last-child {
	text-align: right;
}
.cart-totals table tr td.subtotal {
	font-size: 20px;
    color: #6f6f6f;
}
.cart-totals table tr td.free-shipping {
	font-size: 14px;
    color: #6f6f6f;
}
.cart-totals table tr.total-row td {
	padding-top: 25px;
}
.cart-totals table tr td.price-total {   
	font-size: 24px;
    font-weight: 600;
    color: #8660e9;
}
.btn-cart-totals {
	text-align: center;
	margin-top: 60px;
	margin-bottom: 20px;
}
.btn-cart-totals .round-black-btn {
	margin: 10px 0; 
}

/* Style for payment information */

.wrapper{
    background: #f7f7f7;
}
.steps {
    margin-top: -41px;
    display: inline-block;
    float: right;
    font-size: 16px
}
.step {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
    position: relative
}
.step_line {
    margin: 0;
    width: 0;
    height: 0;
    border-left: 16px solid #fff;
    border-top: 16px solid transparent;
    border-bottom: 16px solid transparent;
    z-index: 1008;
    position: absolute;
    left: 99px;
    top: 1px
}
.step_line.backline {
    border-left: 20px solid #f7f7f7;
    border-top: 20px solid transparent;
    border-bottom: 20px solid transparent;
    z-index: 1006;
    position: absolute;
    left: 99px;
    top: -3px
}
.step_complete {
    background: #357ebd
}
.step_complete a.check-bc, .step_complete a.check-bc:hover,.afix-1,.afix-1:hover{
    color: #eee;
}
.step_line.step_complete {
    background: 0;
    border-left: 16px solid #357ebd
}
.step_thankyou {
    float: left;
    background: white;
    padding: 7px 13px;
    border-radius: 1px;
    text-align: center;
    width: 100px;
}
.step.check_step {
    margin-left: 5px;
}
.ch_pp {
    text-decoration: underline;
}
.ch_pp.sip {
    margin-left: 10px;
}
.check-bc,
.check-bc:hover {
    color: #222;
}
.SuccessField {
    border-color: #458845 !important;
    -webkit-box-shadow: 0 0 7px #9acc9a !important;
    -moz-box-shadow: 0 0 7px #9acc9a !important;
    box-shadow: 0 0 7px #9acc9a !important;
    background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
}

.btn-xs{
    line-height: 28px;
}

/*login form*/
.login-container{
    margin-top:30px ;
}
.login-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.login-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.login-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.login-container-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #357ebd;/*#4d90fe;*/
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.login-container-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.login-help{
  font-size: 12px;
}

.asterix{
    background:#f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
}

/* images*/
ol, ul {
  list-style: none;
}
.hand {
  cursor: pointer;
  cursor: pointer;
}
.cards{
    padding-left:0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .mastercard {
  background-position: -51px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards .amex {
  background-position: -102px 0;
}
.cards li {
  -webkit-transition: all .2s;
  -moz-transition: all .2s;
  -ms-transition: all .2s;
  -o-transition: all .2s;
  transition: all .2s;
  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
  background-position: 0 0;
  float: left;
  height: 32px;
  margin-right: 8px;
  text-indent: -9999px;
  width: 51px;
}
.cards li:last-child {
  margin-right: 0;
}
/* images end */



/*
 * BOOTSTRAP
 */
.container{
    border: none;
}
.panel-footer{
    background:#fff;
}
.btn{
    border-radius: 1px;
}
.btn-sm, .btn-group-sm > .btn{
    border-radius: 1px;
}
.input-sm, .form-horizontal .form-group-sm .form-control{
    border-radius: 1px;
}

.panel-info {
    border-color: #999;
}

.panel-heading {
    border-top-left-radius: 1px;
    border-top-right-radius: 1px;
}
.panel {
    border-radius: 1px;
}
.panel-info > .panel-heading {
    color: #eee;
    border-color: #999;
}
.panel-info > .panel-heading {
    background-image: linear-gradient(to bottom, #555 0px, #888 100%);
}

hr {
    border-color: #999 -moz-use-text-color -moz-use-text-color;
}

.panel-footer {
    border-bottom-left-radius: 1px;
    border-bottom-right-radius: 1px;
    border-top: 1px solid #999;
}

.btn-link {
    color: #888;
}

hr{
    margin-bottom: 10px;
    margin-top: 10px;
}

/** MEDIA QUERIES **/
@media only screen and (max-width: 989px){
    .span1{
        margin-bottom: 15px;
        clear:both;
    }
}

@media only screen and (max-width: 764px){
    .inverse-1{
        float:right;
    }
}

@media only screen and (max-width: 586px){
    .cart-titles{
        display:none;
    }
    .panel {
        margin-bottom: 1px;
    }
}

.form-control {
    border-radius: 1px;
}

@media only screen and (max-width: 486px){
    .col-xss-12{
        width:100%;
    }
    .cart-img-show{
        display: none;
    }
    .btn-submit-fix{
        width:100%;
    }
    
}
/*
@media only screen and (max-width: 777px){
    .container{
        overflow-x: hidden;
    }
}*/
</style>
@endsection

@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
@endsection







