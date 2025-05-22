<x-default-layout title="Major" section_title="Major detail">
<div class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3 md:col-span-2">
<div class="flex flex-col gap-2">
    <label for="name">Major Name</label>
    <input type="text" id="name" name="name"
            class="px-3 py-2 border border-zinc-300 bg-slate-50"
            value="{{ old('name', $major->name ?? '') }}"
            placeholder="Example: S1 Teknik Informatika">
</div>
<div class="flex gap-2 self-end">
    <a href="{{ route('majors.index') }}"
        class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2">
        Cancel
    </a>
    <button type="submit"
            class="bg-blue-500 border border-blue-500 text-white px-3 py-2 flex items-center gap-2">
        <i class="ph ph-floppy-disk"></i>
        Save
    </button>
</div>
</div>
</x-default-layout>