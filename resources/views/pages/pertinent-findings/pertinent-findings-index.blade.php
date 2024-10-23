<x-app-layout>

    <form action="{{route('pertinent.save')}}" method="POST">
          @csrf
          @include('pages.pertinent-findings.pertinent-findings-form')
      </form>
      @include('pages.pertinent-findings.pertinent-findings-table')


      </x-app-layout>
