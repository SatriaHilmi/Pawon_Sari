@extends('Layout.index')
{{-- @include('navbar') --}}

@section('content')
    <section class="relative h-120 bg-fixed bg-center bg-cover overflow-hidden mb-10"
        style="background-image: url('{{ asset('assets/cake.jpg') }}')">

        {{-- Overlay --}}
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative text-center gap-y-2 py-50">
            <h1 class="relative text-3xl md:text-5xl font-bold text-amber-500">
                Welcome to Pawon Sari
            </h1>
            <h3 class="relative text-lg md:text-xl font-semibold text-white">Your favorite place for delicious cakes and
                pastries.</h3>
        </div>
        {{-- overlay gradient --}}
        <div class="absolute bottom-0 left-0 right-0 h-15 bg-linear-to-t from-white to-transparent z-10"></div>
    </section>
    <h2 class="text-2xl text-center font-bold mb-10 text-amber-400">Discover the Sweetest Delights at Pawon Sari!</h2>
    <div class="flex justify-center items-center">
        <div class="flex flex-col md:flex-row gap-8">
            <div
                class="bg-white border-2 border-amber-400 w-72 p-6 rounded-2xl shadow-lg text-center hover:-translate-y-2 hover:shadow-2xl transition duration-300">
                <h3 class="text-xl font-semibold mb-3">Freshly Baked Goodies</h3>
                <p class="text-gray-700">Indulge in our wide variety of cakes, pastries, and desserts made with the finest
                    ingredients.</p>
            </div>
            <div
                class="bg-white border-2 border-amber-400 w-72 p-6 rounded-2xl shadow-lg text-center hover:-translate-y-2 hover:shadow-2xl transition duration-300">
                <h3 class="text-xl font-semibold mb-3">Special Offers</h3>
                <p class="text-gray-700">Enjoy exclusive discounts and promotions for our loyal customers.</p>
            </div>
        </div>
        <div>

        </div>
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
