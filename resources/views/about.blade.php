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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h1 style="color: green"> {{ __('About the research & system') }}</h1></div>

                    <div class="card-body">
                    <h3 align="left" style="color: green"> About the research </h3>
                <p align="justify">
              Topic:   A review of documented findings on Text Summarization for Children news rendering. 
               <br>  Oyekan A.O 1., Enikuomehin A. O *2., Aribisala B.S 3.         
               <br> 1,2,3 Department of Computer Science, Lagos State University, Lagos, Nigeria.</p>

Summary-
 <p align="justify"> News rendering involves the representation of News in a suitable and useable manner essentially for better understanding.
 Over the years there has been severe interest in the ways by which this representation is being formulated. These concerns are
  majorly issues around the target audience especially children. Many approaches to re-render news objects to children have failed
   as they alter the semantics of the body of the contents. The difficulty has been a gap that necessitated the study. We therefore 
   present a basic parsing technique and a Text Summarization system to meet with the identified difficulties. The basic parsing
    model can summarize texts based on age-graded variation (Lower School level and the Middle school level). The system can 
    summarize texts of about 20,000 characters in length for children that belong to lower school level and 500,000 characters in
    length for children that belong to middle school level. After testing some of the collected datasets, the study reveals that
     the average processing time for summarizing input texts on the platform for children in lower school level is about 0.2036ms 
      while on the basic level is about 1264ms. The result indicates that the system adheres to the proposed approach, it summarizes 
      inputs from different sources and processes request very fast. After comparison with some of the existing summarizers based on
       level of grammar correctness, parameter information content, length of summary that can be processed and structured of content 
       that is generated, deductions shows that the proposed approach is a tool to reckon with for children news rendering activities. 
</p>
Keywords- Algorithm, Machine learning, News rendering, Natural Language Processing, Text Summarization.
<br>
<div align="center">
   <img src="{{ 'storage/research.png'}}" /> 
              </div>
 Where;
Tinput = input text
NP = Proper Noun 
AuxV = Auxiliary Verb
VP = Verb
PoS = Part of Speech
n = node (s)
Dictpos = Dictionary for Part of speech
Sscore = Sentence score
Tlength = length of Text

<br><br>
<p align="center" style="color: black">get the published paper on top leading journal repo 

<br><a href="https://https://www.researchgate.net/publication/333352692_A_review_of_documented_findings_on_Text_Summarization_for_Children_news_rendering"> Research gate </a>
<br><a href="https://www.academia.edu/37540447/A_review_of_documented_findings_on_Text_Summarization_for_Children_news_rendering..docx"> Academia </a>
<br><a href="https://Afribary.com"> Afribary </a><br>
<a href="https://google.com"> search Oyekan Oluwatobi on google </a></p>

                </p>
                    <h3 align="left" style="color: green"> About the System</h3>
                        <p align="justify">The Text Summarizer is a web based application that simplifies a text
                            document,
                            in order to create a summary of the major points of the original document. The Text Summarizer focuses on
                            the text, the summary, and the user. It's an important tool for text summary because it processes request 
                            very fast .</p>
                        <bR>
                        <h3 align="left" style="color: green"> How to use the System</h3>
                        <p align="justify">Click on Register on the horizontal menu link to register with your details. <br>
                            Copy and Paste your Texts form Pdf, word document, web page portal</br>
                        Click on the Summarize Button</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

