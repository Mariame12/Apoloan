@extends('Presentation/menu')
@section('content')
    <section style="margin-top: 7rem;"class="w3-container ">
        <div class="new-arrived-products  " id="new-arrivals">
            <!-- @foreach ($response['list'] as $as) -->
                <div style="height: 350px;width: 29%;color: gray;"
                    class=" w3-container  w3-card w3-round-xlarge w3-center new-product  s12 m3 l3">

                    <div class="w3-margin-top" style="overflow: hidden; padding:0px 20px;">
                        <div class="card-body">
                            <h3 class="card-title">Listes des propositions</h3>
                                <p class="card-text">
                                <h6>:test</h6>
                                
                                </p>
                                <a href="#" class="btn btn-primary">Plus d info</a>
                        </div>
                    </div>
                </div>
            <!-- @endforeach -->
        </div>
    </section>
@endsection