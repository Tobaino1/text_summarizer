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
                    <div class="card-header"><h1> {{ __('About the system') }}</h1></div>

                    <div class="card-body">
                        <p align="justify">The Text Summarizer is a web based application that simplifies a text
                            document,
                            in order to create a summary of the major points of the original document. </p>
                        <p align="justify"> The Text Summarizer focuses on the text, the summary, and the user. It's an
                            important tool for text summary because it processes request very fast .</p>
                        <bR>
                        <h1 align="left"> How to use the System</h1>
                        <p align="justify">Click on Register on the horizontal menu link to register with your
                            details </p>
                        <p align="justify">Copy and Paste your Texts form Pdf, word document, web page portal</p>
                        <p align="justify">Click on the Summarize Button</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
