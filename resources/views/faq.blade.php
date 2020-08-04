@extends('layout')

@section('content')

<!-- Container -->
<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="container mt-sm-60 mt-30">
                <div class="hk-row">
                    <div class="col-xl-4">
                        <div class="card">
                            <h6 class="card-header">
                                Category
                            </h6>
                            <ul class="list-group list-group-flush">
                                @foreach ($categorie as $itemcat)
                                    <li class="list-group-item d-flex align-items-center ">
                                        <a href="/"><i class="ion ion-md-sunny mr-15"></i>{{ $itemcat->description}}<span
                                            class="badge badge-light badge-pill ml-15">06</span></a>
                                    </li>
                                @endforeach                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card card-lg">
                            @foreach($faqe as $itemfaq)
                                @foreach($categorie as $itemcategorie)
                                    @if($itemfaq->faq_id==$itemcategorie->descfaq_id)
                                     <h3 class="card-header border-bottom-0">
                                        {{$itemcategorie->description}}
                                     </h3>
                                     @endif
                                @endforeach
                                    <div class="accordion accordion-type-2 accordion-flush" id="accordion_2">
                                 @foreach($categorie as $itemcategorie )
                                      @if($itemfaq->faq_id==$itemcategorie->descfaq_id)  

                                                            <div class="card">
                                                            <div class="card-header d-flex justify-content-between ">
                                                                <a role="button" data-toggle="collapse" href="#collapse_1i{{$itemfaq->faq_id}}"
                                                                    aria-expanded="true">{{$itemfaq->question}}</a>
                                                            </div>
                                                            <div id="collapse_1i{{$itemfaq->faq_id}}" class="collapse show" data-parent="#accordion_2"
                                                                role="tabpanel">
                                                                <div class="card-body pa-15">{{$itemfaq->reponse}}.</div>
                                                            </div>
                                                        </div>
                                                    
                                        @endif
                                     @endforeach
                                     </div>

                                @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Row -->
</div>


@endsection