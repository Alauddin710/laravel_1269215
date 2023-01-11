@include('backend.layouts.header')
                <!-- main header @s -->
                @include('backend.layouts.topbar')
                
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                           @yield('content')
                        </div>
                    </div>
                </div>
               
        @include('backend.layouts.footer')