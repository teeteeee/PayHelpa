@extends('layouts.master')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="row">
                <div class="col-md-12">
                   

                    <div class="row">
                        <div class="col">
                            <div class="card" style="box-shadow: 0px 0.298734px 1.19494px rgba(0, 0, 0, 0.25);">
                                <div class="card-body">
                                   
                                    <div class="row" style="margin-top: 8rem; margin-bottom: 10rem;">
                                        <div class="col text-center">
                                            
                                            <h6 class="mt-5" style="font-style: normal; font-weight: 600; font-size: 26px; line-height: 43.57px; text-align: center; color: #231F20;">Your phone number has been verified</h6>
                                            
                                            <a href="{{route('kyc')}}" class="btn btn-primary px-5 mt-3" style="background: #2A8BF2; border: 1px solid #2A8BF2; box-sizing: border-box;border-radius: 30px;">Continue your verification</a>
                                        </div>
                                      </div>
                                    
                                </div> 
                            </div>
                        </div>
                       
                    </div>
                
                </div>
               
            </div>

        </div>
    </div>
    
</div>




