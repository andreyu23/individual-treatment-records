<x-app-layout>

    <form action="{{route('visit.save')}}" method="POST">
          @csrf
          @include('pages.purpose-visit.purpose-visit-form')
      </form>
      @include('pages.purpose-visit.purpose-visit-table')


      </x-app-layout>
