<x-default-layout title="Majors" section_title="Edit Major">
    <form action="{{ route('majors.update', $major->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('majors.show', ['major' => $major])
    </form>
</x-default-layout>