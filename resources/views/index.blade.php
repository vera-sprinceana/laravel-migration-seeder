@extends('layouts.layout');

@section('content')
<div class="container">
    <div class="col">
        @forelse( $trains as $key =>$train)
        <div >
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$train->azienda}}</h5> 
                  <h6 class="card-subtitle mb-2 text-muted">{{$train->stazione_di_partenza}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">{{$train->stazione_di_arrivo}}</h6>
                  <h6 class="card-text">{{$train->orario_di_partenza}}</h6>
                  <h6 class="card-text">{{$train->orario_di_arrivo}}</h6>
                  <h6 class="card-text">{{$train->codice_treno}}</h6>
                  <h6 class="card-text">{{$train->numero_di_carrozze}}</h6>
                  <h6 class="card-text">{{$train->in_orario}}</h6>
                  <h6 class="card-text">{{$train->cancellato}}</h6>
                 
                </div>
              </div>
        </div>
        @Empty
        <p> Non ci sono treni</p>
        @endforelse
    </div>
</div>


@endsection
