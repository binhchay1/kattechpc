<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden scroll-smooth group" data-mode="light" dir="ltr">

<head>

    <meta charset="utf-8">
    <title>Product Landing Page | Tailwick - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    <link href="https://fonts.googleapis.com/css2?family=Tourney:wght@100&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    <!-- Swiper Slider css-->
    <link href="{{ URL::asset('build/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
    
    @include('layouts.head-css')

</head>

<body class="text-base bg-white text-body font-public dark:text-zink-50 dark:bg-zinc-900">

    <nav class="fixed inset-x-0 top-0 z-50 flex items-center justify-center h-20 py-3 [&.is-sticky]:bg-white dark:[&.is-sticky]:bg-zinc-900 border-b border-slate-200 dark:border-zinc-800 [&.is-sticky]:shadow-lg [&.is-sticky]:shadow-slate-200/25 dark:[&.is-sticky]:shadow-zinc-700/30 navbar" id="navbar">
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto flex items-center self-center w-full">
            <div class="shrink-0">
                <a href="#!">
                    <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-6 dark:hidden">
                    <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-6 dark:block">
                </a>
            </div>
            <div class="mx-auto">
                <ul id="navbar7" class="absolute inset-x-0 z-20 items-center hidden py-3 mt-px bg-white shadow-lg md:mt-0 dark:bg-zinc-800 dark:md:bg-transparent md:z-0 navbar-menu rounded-b-md md:shadow-none md:flex top-full ltr:ml-auto rtl:mr-auto md:relative md:bg-transparent md:rounded-none md:top-auto md:py-0">
                    <li>
                        <a href="#home" class="block md:inline-block px-4 md:px-3 py-2.5 md:py-0.5 text-15 font-medium text-slate-800 transition-all duration-300 ease-linear hover:text-custom-500 [&.active]:text-custom-500 dark:text-zinc-200 dark:hover:text-custom-500 dark:[&.active]:text-custom-500 active">Home</a>
                    </li>
                    <li>
                        <a href="#product" class="block md:inline-block px-4 md:px-3 py-2.5 md:py-0.5 text-15 font-medium text-slate-800 transition-all duration-300 ease-linear hover:text-custom-500 [&.active]:text-custom-500 dark:text-zinc-200 dark:hover:text-custom-500 dark:[&.active]:text-custom-500">Our Product</a>
                    </li>
                    <li>
                        <a href="#features" class="block md:inline-block px-4 md:px-3 py-2.5 md:py-0.5 text-15 font-medium text-slate-800 transition-all duration-300 ease-linear hover:text-custom-500 [&.active]:text-custom-500 dark:text-zinc-200 dark:hover:text-custom-500 dark:[&.active]:text-custom-500">Features</a>
                    </li>
                    <li>
                        <a href="#about" class="block md:inline-block px-4 md:px-3 py-2.5 md:py-0.5 text-15 font-medium text-slate-800 transition-all duration-300 ease-linear hover:text-custom-500 [&.active]:text-custom-500 dark:text-zinc-200 dark:hover:text-custom-500 dark:[&.active]:text-custom-500">About Us</a>
                    </li>
                    <li>
                        <a href="#feedback" class="block md:inline-block px-4 md:px-3 py-2.5 md:py-0.5 text-15 font-medium text-slate-800 transition-all duration-300 ease-linear hover:text-custom-500 [&.active]:text-custom-500 dark:text-zinc-200 dark:hover:text-custom-500 dark:[&.active]:text-custom-500">Feedback</a>
                    </li>
                </ul>
            </div>
            <div class="flex gap-2">
                <div class="ltr:ml-auto rtl:mr-auto md:hidden navbar-toggale-button">
                    <button type="button" class="flex items-center  justify-center size-[37.5px] p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="menu"></i></button>
                </div>
                <button type="button" class="text-slate-500 dark:text-zinc-300 hover:text-custom-500 dark:hover:text-custom-500 border-0 btn bg-gradient-to-r w-[36.39px] p-0 flex items-center justify-center"><i data-lucide="shopping-bag" class="inline-block size-4"></i></button>
                <button type="button" class="text-white border-0 btn bg-gradient-to-r from-custom-500 to-purple-500 hover:text-white hover:from-purple-500 hover:to-custom-500"><span class="align-middle">Sign In</span> <i data-lucide="log-in" class="inline-block size-4 ltr:ml-1 rtl:mr-1"></i></button>
            </div>
        </div>
    </nav>

    <section class="relative pb-28 xl:pb-36 pt-44 xl:pt-52" id="home">
        <div class="absolute top-0 left-0 size-64 bg-custom-500 opacity-10 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 size-64 bg-purple-500/10 blur-3xl"></div>
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="grid items-center grid-cols-12 gap-5 2xl:grid-cols-12">
                <div class="col-span-12 xl:col-span-5 2xl:col-span-5">
                    <h1 class="mb-4 !leading-normal lg:text-5xl 2xl:text-6xl dark:text-zinc-100" data-aos="fade-right" data-aos-delay="300">Exclusive Collections 2024</h1>
                    <p class="text-lg mb-7 text-slate-500 dark:text-zinc-400" data-aos="fade-right" data-aos-delay="600">In 2024, metallics will be taking over the sneaker world. I love this trend because there are so many different ways to wear it. You can wear sequined sneakers, white sneakers with metallic accents, or all-over silver.</p>
                    <div class="flex items-center gap-2" data-aos="fade-right" data-aos-delay="800">
                        <button type="button" class="px-8 py-3 text-white border-0 text-15 btn bg-gradient-to-r from-custom-500 to-purple-500 hover:text-white hover:from-purple-500 hover:to-custom-500">Shop Now <i data-lucide="shopping-cart" class="inline-block size-4 align-middle rtl:mr-1 ltr:ml-1"></i></button>
                    </div>
                </div>
                <div class="col-span-12 xl:col-span-7 2xl:col-start-8 2xl:col-span-6">
                    <div class="relative mt-10 xl:mt-0">
                        <div class="absolute text-center -top-20 xl:-right-40 lg:text-[10rem] 2xl:text-[14rem] text-slate-100 dark:text-zinc-800/60 font-tourney" data-aos="zoom-in-down" data-aos-delay="1400">
                            Unique Fashion
                        </div>
                        <img src="{{ URL::asset('build/images/landing/offer.png') }}" alt="" class="absolute h-40 left-10 xl:-left-10 top-32" data-aos="fade-down-right" data-aos-delay="900" data-aos-easing="linear">
                        <div class="relative" data-aos="zoom-in" data-aos-delay="500">
                            <button data-tooltip="default" data-tooltip-content="$199.99" class="absolute items-center justify-center hidden size-8 bg-white rounded-full xl:flex bottom-20 text-slate-800 left-20"><i data-lucide="plus"></i></button>
                            <img src="{{ URL::asset('build/images/landing/product-home.png') }}" alt="" class="mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--end -->
    
    <section class="relative py-24 xl:py-32" id="product">
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="mx-auto text-center xl:max-w-3xl">
                <h1 class="mb-0 leading-normal capitalize">Our Latest Product</h1>
            </div>
            <div class="grid grid-cols-1 gap-5 mt-12 md:grid-cols-2 xl:grid-cols-4">
                <div class="p-5 rounded-md bg-gradient-to-b from-slate-100 to-white dark:from-zinc-800 dark:to-zinc-900" data-aos="fade-up" data-aos-easing="linear">
                    <img src="{{ URL::asset('build/images/product/img-16.png') }}" alt="" class="mx-auto h-52">
                    <div class="mt-3">
                        <p class="mb-3"><i data-lucide="star" class="inline-block size-4 text-yellow-500 align-middle ltr:mr-1 rtl:ml-1"></i> (4.8)</p>
                        <h5><a href="#!">Green Sneakers Skate</a></h5>

                        <div class="flex items-center gap-3 mt-3">
                            <h6 class="text-16 grow">$299.99</h6>
                            <div class="shrink-0">
                                <button type="button" class="px-2 py-1.5 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div><!--end-->
                <div class="p-5 rounded-md bg-gradient-to-b from-slate-100 to-white dark:from-zinc-800 dark:to-zinc-900" data-aos="fade-up" data-aos-easing="linear">
                    <img src="{{ URL::asset('build/images/product/img-17.png') }}" alt="" class="mx-auto h-52">
                    <div class="mt-3">
                        <p class="mb-3"><i data-lucide="star" class="inline-block size-4 text-yellow-500 align-middle ltr:mr-1 rtl:ml-1"></i> (4.4)</p>
                        <h5><a href="#!">Nike Running Shoes</a></h5>
                
                        <div class="flex items-center gap-3 mt-3">
                            <h6 class="text-16 grow">$129.49</h6>
                            <div class="shrink-0">
                                <button type="button" class="px-2 py-1.5 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div><!--end-->
                <div class="p-5 rounded-md bg-gradient-to-b from-slate-100 to-white dark:from-zinc-800 dark:to-zinc-900" data-aos="fade-up" data-aos-easing="linear">
                    <img src="{{ URL::asset('build/images/product/img-18.png') }}" alt="" class="mx-auto h-52">
                    <div class="mt-3">
                        <p class="mb-3"><i data-lucide="star" class="inline-block size-4 text-yellow-500 align-middle ltr:mr-1 rtl:ml-1"></i> (4.9)</p>
                        <h5><a href="#!">Nike Air Max Sneakers Shoe</a></h5>
                
                        <div class="flex items-center gap-3 mt-3">
                            <h6 class="text-16 grow">$149.99</h6>
                            <div class="shrink-0">
                                <button type="button" class="px-2 py-1.5 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div><!--end-->
                <div class="p-5 rounded-md bg-gradient-to-b from-slate-100 to-white dark:from-zinc-800 dark:to-zinc-900" data-aos="fade-up" data-aos-easing="linear">
                    <img src="{{ URL::asset('build/images/product/img-19.png') }}" alt="" class="mx-auto h-52">
                    <div class="mt-3">
                        <p class="mb-3"><i data-lucide="star" class="inline-block size-4 text-yellow-500 align-middle ltr:mr-1 rtl:ml-1"></i> (4.6)</p>
                        <h5><a href="#!">Dunk Sneakers Skate shoe</a></h5>
                
                        <div class="flex items-center gap-3 mt-3">
                            <h6 class="text-16 grow">$174.65</h6>
                            <div class="shrink-0">
                                <button type="button" class="px-2 py-1.5 text-xs text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div><!--end-->
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end -->

    <section class="relative py-24 xl:py-32" id="features">
        <div class="absolute top-0 left-0 size-64 bg-purple-500/10 blur-3xl"></div>
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="grid items-center grid-cols-1 gap-6 mt-20 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <h1 class="mb-3 leading-normal capitalize" data-aos="fade-right" data-aos-delay="400">Explore our flagship product and discover its unique features</h1>
                    <p class="mb-5 text-lg text-slate-500 dark:text-zinc-400" data-aos="fade-right" data-aos-delay="500">Whatever your running gait, a good pair of running shoes will provide flexibility, durability, and support.</p>
                    <ul class="flex flex-col gap-2 mb-6 list-disc list-inside text-15" data-aos="fade-right" data-aos-delay="500">
                        <li>Matches Your Foot Shape & Type</li>
                        <li>Easy to Wear</li>
                        <li>Heels That You Can Wear</li>
                        <li>Good Quality & Condition</li>
                        <li>Segments of Solid Rubber</li>
                    </ul>
                    <a href="#!" class="text-custom-500 text-16" data-aos="fade-right" data-aos-delay="600">Shopping Now <i data-lucide="move-right" class="inline-block size-4 align-middle ltr:ml-1 rtl:mr-1 rtl:rotate-180"></i></a>
                </div><!--end col-->
                <div class="relative lg:col-start-8 lg:col-span-7">
                    <div class="absolute right-0 bg-center bg-cover bottom-40 w-52 h-96 bg-[url('../images/product/cta-2.png')] rounded-md" data-aos="fade-left" data-aos-delay="400">
                        <div class="absolute inset-0 bg-gradient-to-b from-purple-500/30 to-white dark:to-zinc-900 from-30%"></div>                    
                    </div>
                    <div class="mr-16">
                        <img src="{{ URL::asset('build/images/product/cta.png') }}" alt="" class="relative inline-block" data-aos="fade-up-right">
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end -->

    <section class="relative py-24 xl:py-32" id="about">
        <div class="absolute bottom-0 right-0 size-64 bg-custom-500/10 blur-3xl"></div>
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="grid items-center grid-cols-1 gap-6 mt-20 lg:grid-cols-12">
                <div class="relative lg:col-span-5">
                    <div class="relative before:absolute before:h-full before:w-full before:border-[15px] before:border-double before:border-green-500/10 before:-top-16 lg:before:-right-16" data-aos="zoom-out-up">
                        <img src="{{ URL::asset('build/images/landing/about.jpg') }}" alt="" class="relative inline-block rounded-md" data-aos="zoom-out-up" data-aos-delay="500">
                    </div>
                </div><!--end col-->
                <div class="ml-auto lg:col-span-5 lg:col-start-8">
                    <p class="mb-2 text-purple-500 text-15" data-aos="fade-left" data-aos-delay="300">About Us</p>
                    <h1 class="mb-3 leading-normal capitalize" data-aos="fade-left" data-aos-delay="400">We Provide high Quality shoes</h1>
                    <p class="mb-5 text-lg text-slate-500 dark:text-zinc-400" data-aos="fade-left" data-aos-delay="500">Look for a shoe with solid construction that will give your feet the support they need. Next, look for quality materials that will make your feet comfortable and keep them healthy.</p>
                    <p class="mb-5 text-lg text-slate-500 dark:text-zinc-400" data-aos="fade-left" data-aos-delay="500">Low-quality shoes may skimp on stitching, or use low quality glue that's prone to coming apart. A higher-quality shoe will use advanced construction to ensure that the shoe holds up over time, and also eliminate any spots.</p>
                    <button type="button" class="px-8 py-3 text-white border-0 text-15 btn bg-gradient-to-r from-custom-500 to-purple-500 hover:text-white hover:from-purple-500 hover:to-custom-500" data-aos="fade-left" data-aos-delay="600">Explore Now <i data-lucide="move-right" class="inline-block size-4 align-middle rtl:mr-1 ltr:ml-1"></i></button>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end -->

    <section class="relative py-24 xl:py-32" id="feedback">
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="mx-auto mb-8 text-center xl:max-w-3xl">
                <h1 class="mb-0 leading-normal capitalize">What Our Customer Says</h1>
            </div>
            <!-- Swiper -->
            <div class="pb-6 swiper feedback-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="p-5 text-center" data-aos="fade-up" data-aos-easing="linear">
                            <div class="size-20 mx-auto rounded-full bg-custom-500/10">
                                <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt="" class="size-20 rounded-full">
                            </div>
                            <p class="mt-6 text-16">" The best templates which is supported multiple programming languages with beautiful templates. thank you for the valuable template. "</p>
                            <h6 class="mt-4 mb-1 text-15">Angela Ulligan</h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-5 text-center" data-aos="fade-up" data-aos-easing="linear">
                            <div class="size-20 mx-auto rounded-full bg-yellow-500/10">
                                <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt="" class="size-20 rounded-full">
                            </div>
                            <p class="mt-6 text-16">" I encountered a few errors in the design of the product detail page in Angular. I contacted the support team and they established. "</p>
                            <h6 class="mt-4 mb-1 text-15"><a href="#!">muratoztrkk01</a></h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="p-5 text-center" data-aos="fade-up" data-aos-easing="linear">
                            <div class="size-20 mx-auto rounded-full bg-red-500/10">
                                <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt="" class="size-20 rounded-full">
                            </div>
                            <p class="mt-6 text-16">" This theme is very good. I really recommend it. It's very good optimized, elegant, well documented, etc. "</p>
                            <h6 class="mt-4 mb-1 text-15"><a href="#!">Christine Marbury</a></h6>
                            <div class="text-yellow-500">
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                                <i class="ri-star-fill"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <div class="p-5 text-center" data-aos="fade-up" data-aos-easing="linear">
                                <div class="size-20 mx-auto rounded-full bg-purple-500/10">
                                    <img src="{{ URL::asset('build/images/users/avatar-9.png') }}" alt="" class="size-20 rounded-full">
                                </div>
                                <p class="mt-6 text-16">" ThemesDesign used Anydesk to fix the bug in Flask and django version. I highly recommend this product! "</p>
                                <h6 class="mt-4 mb-1 text-15"><a href="#!">Anthony Hobbs</a></h6>
                                <div class="text-yellow-500">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div><!--end container-->
    </section><!--end -->

    <section class="relative py-20 border-t border-slate-200 dark:border-zinc-800">
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="grid items-center grid-cols-1 gap-5 lg:grid-cols-12">
                <div class="lg:col-span-8" data-aos="fade-right">
                    <h1 class="mb-4 leading-normal capitalize">Sign up for update & newsletter</h1>
                    <p class="text-lg text-slate-500 dark:text-zinc-400">Tell us which describes you, and we'll get in touch with next steps.</p>
                </div>
                <div class="ltr:lg:text-right rtl:lg:text-left lg:col-span-4">
                    <form action="#!" class="relative" data-aos="fade-left">
                        <input type="email" id="subscribeInput" class="py-3 ltr:pr-40 rtl:pl-40 bg-slate-100 dark:bg-zinc-800/40 form-input text-slate-200 border-slate-200 dark:border-zinc-800 focus:outline-none focus:border-custom-500 dark:focus:border-custom-500 placeholder:text-slate-500 dark:placeholder:text-zinc-400 backdrop-blur-md" autocomplete="off" placeholder="tailwick@themesdesign.com" required>
                        <button type="submit" class="absolute px-6 py-2 text-base transition-all duration-200 ease-linear border-0 ltr:right-1 rtl:left-1 text-custom-50 btn top-1 bottom-1 bg-gradient-to-r from-custom-500 to-purple-500 hover:text-white hover:from-purple-500 hover:to-custom-500">Subscribe Now</button>
                    </form>
                </div>
            </div>
        </div><!--end container-->
    </section>

    <footer class="relative pt-20 pb-12 border-t border-slate-200 dark:border-zinc-800">
        <div class="absolute left-0 size-64 bg-purple-500 -top-16 opacity-10 blur-3xl"></div>
        <div class="container 2xl:max-w-[87.5rem] px-4 mx-auto">
            <div class="relative z-10 grid grid-cols-12 gap-5 xl:grid-cols-12">
                <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-4">
                    <div class="mb-5">
                        <a href="#!"><img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-7 dark:block"></a>
                        <a href="#!"><img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-7 dark:hidden"></a>
                    </div>
                    <p class="mb-5 text-slate-500 dark:text-zinc-400">Premium Multipurpose Admin & Dashboard Template You can build any type of web application like eCommerce, CRM, CMS, Project management apps, Admin Panels, etc using Tailwick.</p>
                    <ul class="flex items-center gap-3">
                        <li>
                            <a href="#!" class="flex items-center justify-center size-10 transition-all duration-200 ease-linear border rounded-full text-slate-500 border-slate-200 dark:text-zinc-400 dark:border-zinc-800 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="facebook" class="size-4"></i></a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center justify-center size-10 transition-all duration-200 ease-linear border rounded-full text-slate-500 border-slate-200 dark:text-zinc-400 dark:border-zinc-800 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="linkedin" class="size-4"></i></a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center justify-center size-10 transition-all duration-200 ease-linear border rounded-full text-slate-500 border-slate-200 dark:text-zinc-400 dark:border-zinc-800 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="instagram" class="size-4"></i></a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center justify-center size-10 transition-all duration-200 ease-linear border rounded-full text-slate-500 border-slate-200 dark:text-zinc-400 dark:border-zinc-800 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="twitter" class="size-4"></i></a>
                        </li>
                        <li>
                            <a href="#!" class="flex items-center justify-center size-10 transition-all duration-200 ease-linear border rounded-full text-slate-500 border-slate-200 dark:text-zinc-400 dark:border-zinc-800 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="youtube" class="size-4"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-3">
                    <h5 class="mb-4 font-medium tracking-wider dark:text-zink-50">Dashboards</h5>
                    <ul class="flex flex-col gap-3 text-15">
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Analytics</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">CRM</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Ecommerce</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Email</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">HR</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Social Media</a>
                        </li>
                    </ul>
                </div><!--end col-->
                <div class="col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-3">
                    <h5 class="mb-4 font-medium tracking-wider dark:text-zinc-50">About Us</h5>
                    <ul class="flex flex-col gap-3 text-15">
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">News</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Service</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Our Policy</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Support 24/7</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">FAQ's</a>
                        </li>
                    </ul>
                </div><!--end col-->
                <div class="col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-2">
                    <h5 class="mb-4 font-medium tracking-wider dark:text-zink-50">Get Help</h5>
                    <ul class="flex flex-col gap-3 text-15">
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">About Us</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Contact Us</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Payment Policy</a>
                        </li>
                        <li>
                            <a href="#!" class="relative inline-block transition-all duration-200 ease-linear text-slate-500 dark:text-zinc-400 hover:text-slate-800 dark:hover:text-zinc-50 before:absolute before:border-b before:border-slate-200 dark:before:border-zinc-700 before:inset-x-0 before:bottom-0 before:w-0 hover:before:w-full before:transition-all before:duration-300 before:ease-linear">Return Policy</a>
                        </li>
                    </ul>
                </div><!--end col-->
            </div><!--end grid-->

        </div>
        <div class="pt-10 mt-16 text-center border-t text-slate-500 dark:text-zinc-400 dark:border-zinc-800 text-16">
            <p>
                {{ date('Y') }} © Tailwick. Design & Develop by <a href="#!" class="underline text-slate-800 dark:text-zinc-100">Themesdesign</a>
            </p>
        </div>
    </footer>

    <button id="back-to-top" class="fixed flex items-center justify-center size-10 text-white bg-purple-500 rounded-md bottom-10 right-10">
        <i data-lucide="chevron-up" class="animate animate-icons"></i>
    </button>

    @include('layouts.vendor-scripts')

    <script src="{{ URL::asset('build/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/aos/aos.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/landing-product.init.js') }}"></script>

</body>

</html>