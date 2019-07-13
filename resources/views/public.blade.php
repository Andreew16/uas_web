@extends('front')
@section('content')
<!-- <div class="container"> -->
    <section class="page">
        <div class="row ml-4 mr-4">
        
        @foreach($product as $p)
            <div class="col-sm-4">
                <div class="card mb-3">
                    <div class="card-header bg-transparent mb-3">
                        <a href="{{route('admin.products.show', $p->id)}}" class="nav-link text-dark">
                    <img src="{{ asset('/images/'. $p->images()->first()->image_src) }}" class="img-fluid">
                      </a>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a href="{{route('admin.products.show', $p->id)}}" class="nav-link text-dark">{{$p->name}}</a>
                            
                            @if($p->review->count(0))
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            
                            @endif
                            <br>
                            {{$p->review()->count()}}
                            <br>
                            <div class="btn btn-primary btn-mini">Rp. {{$p->price}}</div>
                        </div>
                        <br>
                        <center><a href="{{ route('carts.add',$p->id) }}" class="btn btn-outline-primary"><i class="fa fa-shopping-cart"></i> Add to Cart</a></center>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </section>
    {{$product->links()}}
@endsection