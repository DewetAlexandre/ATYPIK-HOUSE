@extends('base.base')
@section('content')

<section class="flex justify-evenly w-full p-4 flex-wrap">

    @foreach($categories as $categorie)
    <a href="/categories/{{$categorie->id}}" class="w-2/5 h-32 sm:h-48 md:h-64 lg:h-96 mb-2 sm:mb-4 md:mb-6 lg:mb-8  bg-center bg-cover border border-neutral-500" style="background-image:url({{$categorie->image}})"><h3 class="text-center my-12 sm:my-16 md:my-24 lg:my-40 text-light-grey1-atypik text-xl sm:text-3xl md:text-5xl lg:text-6xl">{{ $categorie->nom }}</h3></a> 
    @endforeach
</section>

@endsection