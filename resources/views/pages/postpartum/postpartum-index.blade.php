<x-app-layout>

    <form action="{{route('postpartum.save')}}" method="POST">
          @csrf
          @include('pages.postpartum.postpartum-form')
      </form>
      @include('pages.postpartum.postpartum-table')


      </x-app-layout>
