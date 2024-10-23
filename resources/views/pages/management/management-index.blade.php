<x-app-layout>

    <form action="{{route('manage.save')}}" method="POST">
          @csrf
          @include('pages.management.management-form')
      </form>
      @include('pages.management.management-table')


      </x-app-layout>
