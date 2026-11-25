@extends('partials.layout')
@section('content')
    <button type="button" class="rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base leading-6 text-white hover:border-[#0b5ed7] hover:bg-[#0b5ed7] focus-visible:outline-none focus-visible:ring-4 focus-visible:ring-[#3184fd]/50 active:border-[#0a58ca] active:bg-[#0a58ca] disabled:pointer-events-none disabled:opacity-65">Button</button>
    <button type="button" disabled class="rounded-md border border-[#0d6efd] bg-[#0d6efd] px-3 py-1.5 text-base leading-6 text-white disabled:pointer-events-none disabled:opacity-65">Disabled</button>
@endsection
