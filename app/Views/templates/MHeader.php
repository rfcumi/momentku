<!DOCTYPE html><html lang='en'><head>
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>Home | Momentku</title>
	<link rel='icon' type='image/png' href='<?php echo base_url($linkIcon)?>'>
	<link rel='stylesheet' href='<?php echo base_url($linkBootstrapCSS)?>'>
	<script src='<?php echo base_url($linkJqueryJS)?>'></script>
	<script src='<?php echo base_url($linkBootstrapJS)?>'></script>
	<style>
		::-webkit-scrollbar{width:1px;}
		/*for offline, for online use google font "quicksand" */
		@font-face{font-family:quicksand;src:url(public/assets/fontQuicksand.ttf);}
	    body{ 
	        font-size:1rem;
			font-family:quicksand;}
		.frame{
		    min-height:100vh;
		    text-align:center;}
		.frame:first-of-type{
		    margin-top:60px;}
		.contents{
			padding-top:2rem;
			padding-left:.5rem;
			padding-right:.5rem;}
		.title {
			margin-bottom:10px!important;
			text-transform:uppercase;
			letter-spacing:1px;
			font-weight:600;}
		/*NavBar Style*/
		.navbar{
			padding:.5rem 1rem;}
		.navbar-brand{
			padding:.5rem;		}
		.navbar-brand img{
			width:25px;
			height:25px;}
		.navbar-brand span{
			width:0%;
			overflow:hidden;
			padding-left:7px;
			white-space:nowrap;
			font-weight:600;
			display:inline-flex;}
		.navbar-nav a{
			text-align:center;}
		/*home pages style*/
		.btn-join{
			cursor:pointer;
			border-radius:50px;
			border:1px solid transparent;
			padding:0.5rem 2rem}

		@media only screen and (min-width: 810px){
			.navbar-nav a{
			  width:120px;}
			.navbar-expand-custom{
				flex-flow:row nowrap;
				-ms-flex-pack:start;
				-ms-flex-flow:row nowrap;
				justify-content:flex-start;}
			.navbar-expand-custom .navbar-nav{
				-ms-flex-direction:row;
				flex-direction:row;}
			.navbar-expand-custom .navbar-nav .dropdown-menu{
				position:absolute;}
			.navbar-expand-custom .navbar-nav .nav-link{
				padding-right:0.5rem;
				padding-left:0.5rem;}
			.navbar-expand-custom > .container,
			.navbar-expand-custom > .container-fluid{
				-ms-flex-wrap:nowrap;
				flex-wrap:nowrap;}
			.navbar-expand-custom .navbar-collapse{
				display:-ms-flexbox!important;
				display:flex!important;
				-ms-flex-preferred-size:auto;
				flex-basis:auto;}
			.navbar-expand-custom .navbar-toggler {
				display:none;}
		}
		/*Animation CSS*/
		/*Brand*/
		.slider{
			animation:slider 2s;
			animation-delay:0.5s;
			animation-fill-mode:forwards;}
		@keyframes slider{
			0%	{width:0%;}
			100%{width:100%;}}
		.bellshake{
			animation:bellshake .5s;}
		@keyframes bellshake{
			0%	{transform:rotate(0);}
			15%	{transform:rotate(5deg);}
			30%	{transform:rotate(-5deg);}
			45%	{transform:rotate(4deg);}
			60%	{transform:rotate(-4deg);}
			75%	{transform:rotate(2deg);}
			85%	{transform:rotate(-2deg);}
			92%	{transform:rotate(1deg);}
			100%{transform:rotate(0);}}
	    /*Under Construction*/
        .material-icons{
		    color:aqua;
		    font-size:50px;
		    animation:spin 3s linear infinite;}
		.material-icons:last-of-type{
			top:12px;
			color:grey;
			margin-left:-11px;
			position:relative;
			animation-direction:reverse;}
		@keyframes spin{
		    0%	{transform:rotate(0deg);}
			100%{transform:rotate(360deg);}}
		.blinking{
	        animation: blinking 0.8s infinite;}
	    @keyframes blinking{
				0%	{color:transparent;}
				50%	{color:grey;}
				100%{color:transparent;}}
		/*End Under Construction
		/*End Animation*/			
	</style>
</head><body>