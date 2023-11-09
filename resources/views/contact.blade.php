@extends('layouts.main')
@section('title','contact')
@section('content')
    @if(session()->has('store'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('store') }}
        </div>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut();
            }, 5000);
        </script>
    @endif
    <!-- site-main -->
    <div id="main" class="site-main">
        <div class="layout-medium"> 
            <div id="primary" class="content-area">
                    <!-- site-content -->
                    <div id="content" class="site-content" role="main"> <!-- .hentry -->
                        <article class="hentry page">
                            
                            
                            
                            <header class="entry-header">
                                <h1 class="entry-title">CONTACT</h1>
                            </header>
                                
                                
                            <!-- .entry-content -->
                            <div class="entry-content">
                                
                                <p>You can contact me almost about anything, would like to hear from you.</p>
                                
                                <!-- .contact-form -->
                                <div class="contact-form">
                                
                                <form class="validate-form" method="POST" action="{{url('insert-contact')}}">
                                    @csrf
                                    <!-- enter mail subject here -->
                                    <input type="hidden" name="subject" id="subject" value="You have a new message!">
                                    
                                    <p>
                                    <label for="name">NAME</label>
                                    <input type="text" name="name" id="name" class="required">
                                    </p>
                                    
                                    <p>
                                    <label for="email">EMAIL</label>
                                    <input type="text" name="email" id="email" class="required email">
                                    </p>
                                    
                                    <p class="antispam">Leave this empty if you are a human :
                                        <br /><input name="url" />
                                    </p>
                                
                                    <p>
                                    <label for="message">MESSAGE</label>
                                    <textarea name="message" id="message" class="required"></textarea>
                                    </p>
                                
                                    <p>
                                    {{-- <button class="submit button"><span class="submit-label">Submit</span><span class="submit-status"></span></button> --}}
                                    <input type="submit" class="submit button" value="Submit">
                                    </p>
                                    
                                </form>
                                
                                </div>
                                <!-- .contact-form -->
                                    
                            
                            </div>
                            <!-- .entry-content -->
                            
                            
                        </article>
                        <!-- .hentry -->
                    
                    
                    </div>
                    <!-- site-content -->
            
            </div>
            <!-- primary -->
        </div>
        <!-- layout -->
    </div>
    <!-- site-main -->
@endsection