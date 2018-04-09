@extends('home')

@section('content')


  {{-- banner taken from style.css and search form--}}
  <div class="parallax">
    <div class="material">

      {{-- search-form --}}
        <div class="search_keywords">

          @include('layouts.search')

        </div>

        <div class="links">


          @foreach ($materials as $material)



              <!-- <a href="/materials/{{$material->id}}"> -->

                <a href="/{{$material->material_name}}/faculties">

                <button type="button" class="button_material">{{$material->material_name}}</button>

              </a>



          @endforeach

        </div>
    </div>
</div>


@endsection
