<x-app-layout>

    <form action="{{route('child.save')}}" method="POST">
          @csrf
          @include('pages.child-immunization.child-immunization-form')
      </form>
      @include('pages.child-immunization.child-immunization-table')


      </x-app-layout>
