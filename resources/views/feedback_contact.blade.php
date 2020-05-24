<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 1/30/2019
 * Time: 1:22 PM
 */
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1> {{ __('Feedback / Contact Us') }}</h1></div>

                    <div class="card-body">
                        <p align="justify">
                            <marquee> For Further Enquiries about the research / system, you can reach out via:
                            </marquee>
                        </p>
                        <p align="justify"> Oyekan.oluwatobi.adebayo@gmail.com 
                        <br> Toyinenikuomehin@gmail.com </p>
                       
                        {{--<h1 align="left"> How to use the System</h1>--}}
                        <p align="justify"><a href="https://twitter.com/@tobainocycle"> @Tobainocycle </a> <br>
                        <a href="https://twitter.com/@enikuomehin"> @Enikuommehin </a></p>
                        {{--<p align="justify">Click on the Summarize Button</p>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>

@endsection
