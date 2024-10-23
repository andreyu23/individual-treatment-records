<x-app-layout>

    <form action="{{route('family.save')}}" method="POST">
          @csrf
          @include('pages.family-planning.family-planning-form')
      </form>
      @include('pages.family-planning.family-planning-table')


      </x-app-layout>
