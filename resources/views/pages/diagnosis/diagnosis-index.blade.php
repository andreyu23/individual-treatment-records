<x-app-layout>

    <form action="{{route('diagnosis.save')}}" method="POST">
          @csrf
          @include('pages.diagnosis.diagnosis-form')
      </form>
      @include('pages.diagnosis.diagnosis-table')


      </x-app-layout>
