<x-app-layout>

  <form action="{{route('patients.save')}}" method="POST">
        @csrf
        @include('pages.patients.patient-information-form')
    </form>
    @include('pages.patients.patient-information-table')


    </x-app-layout>
