@extends('layouts.main')
@section('title','bloglar')
@section('keywords','bloglar,ana sayfa')
@section('description','bloglar sayfasi icerik kismi')
@section('content')
            <!-- site-main -->
        <div id="main" class="site-main">
            <div class="layout-medium"> 
                <div id="primary" class="content-area with-sidebar">
                        <!-- site-content -->
                        <div id="content" class="site-content" role="main">
                            @livewire('site.blogs-page')
                        </div>
                        <!-- site-content -->
                </div>
                <!-- primary -->  

                <!-- #secondary -->
                    @livewire('site.sidebar')
                <!-- #secondary -->
            </div>
            <!-- layout -->
        </div>
        <!-- site-main -->
@endsection