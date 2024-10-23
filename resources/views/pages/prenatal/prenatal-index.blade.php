<x-app-layout>

    <form action="{{route('prenatal.save')}}" method="POST">
          @csrf
          @include('pages.prenatal.prenatal-form')
      </form>
      @include('pages.prenatal.prenatal-table')


      </x-app-layout>
