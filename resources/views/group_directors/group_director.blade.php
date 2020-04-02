@extends('layouts.app')
    @section('title', 'Create New User')
    @section('content')  
<div class="row">
          
    <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
        <!-- Search for small screen-->
        <div class="container">
            <div class="row">
                <div class="col s10 m6 l6 breadcrumbs-left">
                    <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Group Directors</span></h5>
<!--                    <ol class="breadcrumbs mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Form</a>
                        </li>
                        <li class="breadcrumb-item active">Form Validation
                        </li>
                    </ol>-->
                </div>
            </div>
        </div>
    </div>
    <div class="col s12">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col s12">
                        <div id="html-validations" class="card card-tabs">
                            <div class="card-content">
                                <div id="html-view-validations">
                                    <form class="formValidate0" action="{{route('groupdirector.store')}}" id="formValidate0" method="post" enctype= multipart/form-data>
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <label for="uname0">Name *</label>
                                                <input class="validate" required id="uname0" name="name" type="text">
                                            </div>
                                            <div class="input-field col s12">
                                                <label for="cemail0">Position *</label>
                                                <input class="validate" required id="cemail0" type="text" name="position">
                                            </div>
                                            <div class="input-field col s12">
                                                <!--<label for="password0">Image *</label>-->
                                                <div class="file-field input-field validate">
                                                    <div class="btn">
                                                      <span>File</span>
                                                      <input type="file" name="image" required>
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                      <input class="file-path validate" required type="text">
                                                    </div>
                                                  </div>
                                            </div>
                                            
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- START RIGHT SIDEBAR NAV -->
        </div>
    </div>
</div>
@endsection