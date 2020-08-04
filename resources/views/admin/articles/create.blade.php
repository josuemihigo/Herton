@extends('layoutadmin')

@section('content')
     <div class="container">
        

         <!-- Row -->
         <!-- Container -->
            <div class="container">
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <form action="/articles" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="fileinput fileinput-new input-group"  data-provides="fileinput">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Charger</span>
                                        </div>
                                        
                                        

                                        
                                        <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" id="validateCustomFile" >
                                        @error('img')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                        
                                    </div>
                                    
                                </div>







<div class="col-sm">
    <!-- Row -->
    <div class="row">
        <div class="col-md-8">
            <!-- <h3 class="page-header">Demo:</h3> -->
            <div class="img-container">
                <img src="" alt="Picture">
            </div>
        </div>
        <div class="col-md-4">
            <!-- <h3 class="page-header">Preview:</h3> -->
            <div class="docs-preview clearfix">
                <div class="img-preview preview-lg"></div>
            </div>
            <!-- <h3 class="page-header">Data:</h3> -->
            <div class="docs-data">
                <div class="col-md-8 docs-buttons">
                <!-- <h3 class="page-header">Toolbar:</h3> -->
                <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" data-method="reset" title="Reset">
                    <span title="cropper.reset()">
                      <span class="fa fa-refresh"></span>
                    </span>
                </button>

                <div class="btn-group">
                   <label class="btn btn-primary btn-upload mb-0" data-toggle="tooltip" data-placement="top" for="inputImage" title="Upload image file">
                      <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                      <span title="Import image with Blob URLs">
                        <span class="fa fa-upload"></span>
                      </span>
                  </label>
                </div>
              </div>
            </div>
        </div>
    </div>
  </div>












                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1">Titre</span>
                                        </div>
                                        <input type="text" class="form-control @error('titre') is-invalid @enderror" placeholder="Titre" aria-label="Username" aria-describedby="basic-addon1" name="titre" >
                                        @error('titre')
                                            <div class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <div class="col-sm">
                                        <div class="">
                                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" ></textarea>
                                            @error('content')
                                              <div class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </div>
                                          @enderror
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Enregister </button>
                            </form>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
                
        </div>
    </div>
@endsection
