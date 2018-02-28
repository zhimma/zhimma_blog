@extends('home.layout.app')
@section('content')
    <div class="text-center" style="padding-top: 60px">
        <h1 class="heading underline-title uppercase">关于</h1>
    </div>
    <div class="row row-35">

        <div class="col-sm-6">
            <img src="{{ asset('home/img/about.jpg') }}" class="img-fw mb-30" alt="">
        </div>
        <div class="col-sm-6">
            <p>
                Sed at libero mauris. Nullam eget vehicula nulla. Aenean maximus risus ex, at efficitur massa molestie id. Integer sagittis neque ut mauris imperd biet imperdiet. Integer nisi diam, auctor at mi nec, feugiat tempus metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce commodo, velit non faucibus elementum, dolor risus convallis massa, venenatis luctus ante turpis id nisl.
            </p>
            <p>
                Nullam efficitur luctus dictum. Vestibulum sollicitudin, neque ac faucibus molestie, libero felis malesuada libero, a pellentesque sapien lectus vitae tellus. In purus dolor, bibendum a nisi sit amet, malesuada eleifend ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <p>
                Quisque condimentum ornare augue, eu tempor ex accumsan iaculis. Duis rutrum ante eget tortor vulputate, ac auctor enim molestie. Nulla tincidunt felis diam, id porta mi porttitor astrout. Vivamus in posuere lorem.
            </p>
            <p>
                Quisque condimentum ornare augue, eu tempor ex accumsan iaculis. Duis rutrum ante eget tortor vulputate, ac auctor enim molestie. Nulla tincidunt felis diam, id porta mi porttitor astrout. Vivamus in posuere lorem.
            </p>
            <img src="{{ asset('home/img/signature.png') }}" class="mt-30" alt="">
        </div>

    </div> <!-- end row -->
@endsection