@extends('Layout.index')
{{-- @include('navbar') --}}

@section('content')
    <section class="relative h-120 bg-fixed bg-center bg-cover overflow-hidden mb-10"
        style="background-image: url('{{ asset('assets/cake.jpg') }}')">

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative text-center gap-y-2 py-50">
            <h1 class="relative text-3xl font-bold text-white">
                Welcome to Pawon Sari
            </h1>
            <h3 class="relative text-lg font-semibold text-white">Your favorite place for delicious cakes and
                pastries.</h3>
        </div>
        {{-- overlay gradient --}}
        <div class="absolute bottom-0 left-0 right-0 h-15 bg-linear-to-t from-white to-transparent z-10"></div>
    </section>
    <div>
        Your favorite place for delicious cakes and pastries.
    </div>
    <div>
        Explore our menu and order your favorites today!
    </div>
    <div>
        Enjoy special discounts and offers for our valued customers.
    </div>
    <div>
        cake to cook today!
    </div>
@endsection
