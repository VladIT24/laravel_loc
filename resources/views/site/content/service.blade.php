<div class="container">
    <h2>Services</h2>
    <div class="service_wrapper">



        @foreach($services as $k => $service)
{{--            {{ dd($service) }}--}}
            @if($k === 0 || $k % 3 === 0)
                <div class="row {{ ($k != 0) ? 'borderTop': '' }}">
            @endif
            <div class="col-lg-4 {{ ($k > 2) ? 'mrgTop' : '' }} {{ ($k % 3 > 0) ? 'borderLeft' : '' }}">
                <div class="service_block">
                    <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa {{ $service->images }}"></i></span> </div>
                    <h3 class="animated fadeInUp wow">{{ $service->title }}</h3>
                    <p class="animated fadeInDown wow">{{ $service->text }}</p>
                </div>
            </div>
            @if(($k +1)%3 === 0)
                </div>
            @endif

        @endforeach

    </div>
</div>
