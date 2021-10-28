

@extends('layouts.app')

@section('content')
<div class="bg-primary">



<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <div class="bg-dark">
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                  
                    </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>
              
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</i> Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-bank"></i> Contacts</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-dropbox"></i> Services</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-twitter"></i> Informations</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
</div>
          </button>
          <div class="logoss">

<img src="{{url('images/logo.png')}}" width="300" height="300" alt=""/>

</div>

          <style>

              .logoss{
                  position:relative;
                  left:360px;
                  padding-top:40px;
                  padding-bottom:100px;
                  


              }
              </style>
@endsection
