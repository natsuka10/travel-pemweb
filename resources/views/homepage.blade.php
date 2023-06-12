@extends('layouts.frontend')

@section('content')
<!--==================== HOME ====================-->
<section>
    <div class="swiper-container">
        <div>
            <!--========== ISLANDS 1 ==========-->
            <section class="islands">
                <img
                    src="{{ asset('frontend/assets/img/hero1.jpg') }}"
                    alt=""
                    class="islands__bg"
                />
                <div class="bg__overlay">
                    <div class="islands__container container">
                        <div
                            class="islands__data"
                            style="z-index: 99; position: relative"
                        >
                            <h2 class="islands__subtitle">
                                Jelajah
                            </h2>
                            <h1 class="islands__title">
                                Beautiful Malang
                            </h1>
                            <p class="islands__description">
                                Temukan berbagai destinasi wisata menarik <br />
                                di Malang Raya.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!--==================== LOGOS ====================-->
<section
    class="logos"
    style="margin-top: 9rem; padding-bottom: 3rem"
>
    <div class="logos__container container grid">
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/tripadvisor.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/airbnb.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/booking.png') }}" alt="" />
        </div>
        <div class="logos__img">
            <img src="{{ asset('frontend/assets/img/airasia.png') }}" alt="" />
        </div>
    </div>
</section>

<!--==================== POPULAR ====================-->
<section class="section" id="popular">
    <div class="container">
        <span class="section__subtitle" style="text-align: center"
            >Rekomendasi</span
        >
        <h2 class="section__title" style="text-align: center">
            Destinasi Wisata
        </h2>

        <div class="popular__container swiper">
            <div class="swiper-wrapper">
                @foreach($travel_packages as $travel_package)
                    <article class="popular__card swiper-slide">
                        <a href="{{ route('travel_package.show', $travel_package->slug) }}">
                            <img
                                src="{{ Storage::url($travel_package->galleries->first()->images) }}"
                                alt=""
                                class="popular__img"
                            />
                            <div class="popular__data">
                                <h2 class="popular__price">
                                    <span>Rp </span>{{ number_format($travel_package->price,2) }}
                                </h2>
                                <h3 class="popular__title">
                                    {{ $travel_package->location}}
                                </h3>
                                <p class="popular__description">{{ $travel_package->type }}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>

            <div class="swiper-button-next">
                <i class="bx bx-chevron-right"></i>
            </div>
            <div class="swiper-button-prev">
                <i class="bx bx-chevron-left"></i>
            </div>
        </div>
    </div>
</section>

<!--==================== VALUE ====================-->
<section class="value section" id="value">
    <div class="value__container container grid">
        <div class="value__images">
            <div class="value__orbe"></div>

            <div class="value__img">
                <img src="{{ asset('frontend/assets/img/bedengan.jpg') }}" alt="" />
            </div>
        </div>

        <div class="value__content">
            <div class="value__data">
                <span class="section__subtitle">Kenapa harus Malang?</span>
                <h2 class="section__title">
                    Apa saja yang ada di Malang?
                </h2>
                <p class="value__description">
                    Kombinasi daya tarik alam, keragaman budaya, kuliner, 
                    serta potensi pariwisata dan pendidikan, 
                    merupakan potensi yang sayang untuk kamu lewatkan!
                </p>
            </div>

            <div class="value__accordion">
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="fa fa-mountain value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Keindahan Alam
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Malang dikelilingi oleh panorama alam yang menakjubkan, seperti Gunung Bromo, Gunung Semeru, Kawah Ijen, 
                            dan Air Terjun Coban Rondo. Keberadaan pegunungan, perkebunan, dan danau juga menambah pesona alam Malang.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-paint value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Warisan Budaya
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Malang memiliki beragam warisan budaya, seperti arsitektur kolonial Belanda yang terlihat di bangunan-bangunan tua, 
                            seperti Jalan Ijen dan Jalan Basuki Rahmat.
                            Ada juga desa-desa tradisional seperti Desa Wisata Jodipan yang menampilkan seni mural.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="fa fa-utensils value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Wisata Kuliner
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Malang terkenal dengan makanan khasnya, seperti bakso Malang, rujak cingur, dan kue apel Malang. 
                            Wisata kuliner di Malang menawarkan kelezatan dan variasi menu yang dapat memanjakan lidah para wisatawan.
                        </p>
                    </div>
                </div>
                <div class="value__accordion-item">
                    <header class="value__accordion-header">
                        <i
                            class="bx bxs-graduation value-accordion-icon"
                        ></i>
                        <h3 class="value__accordion-title">
                            Pusat Pendidikan
                        </h3>
                        <div class="value__accordion-arrow">
                            <i class="bx bxs-down-arrow"></i>
                        </div>
                    </header>

                    <div class="value__accordion-content">
                        <p class="value__accordion-description">
                            Malang adalah kota pendidikan dengan universitas-universitas terkenal 
                            seperti Universitas Brawijaya dan Universitas Negeri Malang. Keberadaan 
                            institusi pendidikan ini juga memberikan warna dan kehidupan bagi kota, 
                            serta menyediakan berbagai acara dan kegiatan budaya.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- blog -->
<section class="blog section" id="blog">
    <div class="blog__container container">
        <span class="section__subtitle" style="text-align: center"
            >Artikel</span
        >
        <h2 class="section__title" style="text-align: center">
            Rekomendasi Wisata
        </h2>

        <div class="blog__content grid">
            @foreach($blogs as $blog)
                <article class="blog__card">
                    <div class="blog__image">
                        <img
                            src="{{ Storage::url($blog->image) }}"
                            alt=""
                            class="blog__img"
                        />
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog__button">
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>

                    <div class="blog__data">
                        <h2 class="blog__title">
                            {{ $blog->title }}
                        </h2>
                        <p class="blog__description">
                            {{ $blog->excerpt }}
                        </p>

                        <div class="blog__footer">
                            <div class="blog__reaction">
                                {{ date('d M Y', strtotime($blog->created_at)) }}
                            </div>
                            <div class="blog__reaction">
                                <i class="bx bx-show"></i>
                                <span>{{ $blog->reads }}</span>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
@endsection