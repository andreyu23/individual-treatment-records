<x-app-layout>

    <form action="{{route('lab.save')}}" method="POST">
          @csrf
          @include('pages.lab-imaging-exam.lab-imaging-exam-form')
      </form>
      @include('pages.lab-imaging-exam.lab-imaging-exam-table')


      </x-app-layout>
