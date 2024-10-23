<x-app-layout>

    <form action="{{route('adult.save')}}" method="POST">
          @csrf
          @include('pages.adult-immunization.adult-immunization-form')
      </form>
      @include('pages.adult-immunization.adult-immunization-table')


      </x-app-layout>
