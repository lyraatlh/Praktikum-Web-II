<x-default-layout title="Majors" section_title="Add Major">
    <form action="{{ route('majors.store') }}" method="POST">
        @csrf
        @include('majors.show')
    </form>
</x-default-layout>