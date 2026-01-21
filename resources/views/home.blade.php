@extends('Layout.index')
@include('navbar')

@section('content')
    <section class="relative h-120 bg-fixed bg-center bg-cover overflow-hidden mb-10"
        style="background-image: url('{{ asset('assets/cake.jpg') }}')">

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black/40"></div>
    </section>
    <div class="text-2xl font-bold">
        Welcome to Pawon Sari
    </div>
    <div>
        Your favorite place for delicious cakes and pastries.
    </div>
    <div>
        Explore our menu and order your favorites today!
    </div>
    <div>
        Enjoy special discounts and offers for our valued customers.
    </div>
@endsection
