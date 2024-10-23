<x-app-layout>

    <form action="{{route('personnel.save')}}" method="POST">
          @csrf
          @include('pages.chu-rhu-personnel.chu-rhu-personnel-form')
      </form>
      @include('pages.chu-rhu-personnel.chu-rhu-personnel-table')


      </x-app-layout>
