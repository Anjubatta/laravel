<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" >
      <link href="{{asset('fontawesome/css/fontawesome.css')}}" rel="stylesheet">
      <link href="{{asset('fontawesome/css/brands.css')}}" rel="stylesheet">
      <link href="{{asset('fontawesome/css//solid.css')}}" rel="stylesheet">
      <!-- style CSS -->
      <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/fav.png')}}">
      <link rel="stylesheet" href="css/style.css" >
      <title>{{ config('app.name', 'Laravel') }}</title>
   </head>
   <body>
      <header class="head">
         <div class="container">
           
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <a class="navbar-brand" href="#"><img width="260px"
                  src="img/logo.png" alt="logo"/></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class=""><i class="fas fa-bars"></i></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Créations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="#">SAS</a>
                           <a class="dropdown-item" href="#">SARL</a>
                           <a class="dropdown-item" href="#">SASU</a>
						    <a class="dropdown-item" href="#">EURL</a>
							<a class="dropdown-item" href="#">SCI</a>
							<a class="dropdown-item" href="#">Auto entrepreneur</a>
							<a class="dropdown-item" href="#">EI</a>
                        </div>
                     </li>
					 <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Modifications
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="#">Change of headquarters</a>
                           <a class="dropdown-item" href="#">Secondary address</a>
						   <a class="dropdown-item" href="#">Social object </a>
                           <a class="dropdown-item" href="#">Denomination</a>
						   <a class="dropdown-item" href="#">Change of leader</a>
						   <a class="dropdown-item" href="#">Corporate status update</a>
						   <a class="dropdown-item" href="#">Disposals</a>
						   <a class="dropdown-item" href="#">Liquidation</a>
						   
                        </div>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Comptabilité</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">Actualités</a>
                     </li>
					  <li class="nav-item">
                        <a class="nav-link" href="#">Dossiers</a>
                     </li>
                     
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
				   <div class="phn d-flex justify-content-center justify-content-sm-center justify-content-md-end align-items-center" >
               <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+01 60 99 99 99">01 60 99 99 99</a>
            </div>
                     <a href="" class="btn btn-outline-success my-2 my-sm-0 cust-btn" >Espace Client</a>
                  </form>
               </div>
            </nav>
         </div>
      </header>
	  
      