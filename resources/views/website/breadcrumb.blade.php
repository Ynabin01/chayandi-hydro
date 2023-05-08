{{-- <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">{{ $slug1->caption ?? $slug1 }}</h1>
                @if (isset($slug2))
                    <ul class="breadcrumb">

                        <li><a href="/">{{ $slug2->caption ?? $slug2 }}</a></li>

                    </ul>
                @endif
            </div>
        </div>
    </div>
</section> --}}
<section id="breadcrumb" class="breadcrumb-section position-relative"
data-background="/website/img/background/bcbg.jpg">
<div class="background_overlay"></div>
<div class="container">
    <div class="breadcrumb-content headline">
        @if (isset($slug2))
        <h2 class="breadcrumb-title">{{ $slug2->caption ?? $slug2 }}</h2>
        @endif
        <div class="breadcrumb_item ul-li">
            @if (isset($slug1))
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">{{ $slug1->caption ?? $slug1 }}</li>
            </ul>
            @endif
        </div>
    </div>
</div>
</section>