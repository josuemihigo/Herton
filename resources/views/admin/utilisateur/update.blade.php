<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('head')
{{-- fin entete de page  --}}


<head>


<body>
    <!-- Preloader
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
        {{-- menu horizontal  --}}
        @include('menu')
        {{-- fin menu horizontal --}}
        {{-- menu verital  --}}
        @include('menulateral')
         {{-- fin menu verital  --}}

         <!-- Setting Panel -->
         <!-- Main Content -->
         <div class="hk-pg-wrapper">
             <!-- Breadcrumb -->
             <nav class="hk-breadcrumb" aria-label="breadcrumb">
                 <ol class="breadcrumb breadcrumb-light bg-transparent">
                     <li class="breadcrumb-item"><a href="#">Forms</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                 </ol>
             </nav>
             <!-- /Breadcrumb -->

             <!-- Container -->
             <div class="container">
                 <!-- Title -->
                 <div class="hk-pg-header">
                     <h4 class="hk-pg-title"><span class="pg-title-icon">
                         <span class="feather-icon">
                            <i data-feather="external-link"></i>
                        </span>
                    </span>Modifier l "'"adresse :  {{ $contact->adresse }}</h4>
                 </div>
                 <!-- /Title -->

                 <!-- Row -->
                 <div class="row">
                     <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Tooltips</h5>
                        {{-- <p class="mb-40">Swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p> --}}
                        <div class="row">
                            <div class="col-sm">
                                <form class="needs-validation" action="/contact/{{ $contact->id }}" method="POST">
                                @method('PATCH')
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-8 mb-15">
                                            <label for="validationTooltipUsername">Adresse</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="">@</span>
                                                </div>
                                                <input type="text" class="form-control @error('adresse')is-invalid
                                                @enderror "  name="adresse" value="{{ old('adresse')   ??   $contact->adresse }}" placeholder="Adresse complet"
                                                 aria-describedby="validationTooltipUsernamePrepend" required>
                                               @error('adresse')
                                                <div class="invalid-tooltip">
                                                    {{ $errors->first('adresse') }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                     <div class="col-md-8 mb-15">
                                            <label for="validationTooltip03">Mail</label>
                                            {{-- <div class="input-group-prepend"> --}}
                                                {{-- <span class="input-group-text" id="">@</span>
                                            </div> --}}
                                            <input type="mail" class="form-control" id="validationTooltip03"
                                            name="mail" value=" {{ old('mail')  ??  $contact->mail }}" placeholder="aaaaaa@gggg.cd" required>
                                            @error('mail')
                                            <div class="invalid-tooltip">
                                                {{ $errors->first('mail') }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-8 mb-15">
                                            <label for="cc-number">Telephone</label>
                                            <input type="text" class="form-control" id="cc-number"  data-mask="999-999-999" name="telephone"
                                            value="{{ old('telephone')   ??   $contact->telephone }}" placeholder="State" required>
                                            @error('telephone')
                                            <div class="invalid-tooltip">
                                                {{ $errors->first('telephone') }}
                                            </div>
                                             @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Enregistrer</button>

                                </form>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>


        @include('footer')


