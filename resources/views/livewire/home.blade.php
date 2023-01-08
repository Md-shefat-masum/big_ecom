{{-- @section('content')     --}}


    <main class="main-content">

        <!--== Start Hero Area Wrapper ==-->
        @include('frontend.include.banner')
        <!--== End Hero Area Wrapper ==-->

        <!--== Start Features Area Wrapper ==-->
        @include('frontend.include.categories')
        <!--== End Features Area Wrapper ==-->

        @livewire('products')
        {{-- @include('frontend.include.hot_product') --}}

    </main>

    <!--== Start Footer Area Wrapper ==-->
    
    <!--== Start Side Menu -->

{{-- @endsection --}}
