<x-app-layout>

    <form action="{{route('general.save')}}" method="POST">
          @csrf
          @include('pages.general-consultation.general-consultation-form')
      </form>
      @include('pages.general-consultation.general-consultation-table')


      </x-app-layout>
