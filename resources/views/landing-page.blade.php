<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jaracrayfish</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo">Jaracrayfish</div>
                        {{ menu('main', 'partials.menus.main') }}
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right')
                    </div>
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                        <h1>Hypergold's Jaracrayfish &amp; Jarahealth</h1>
                        <p>The demand for quality food is increasing as the world is getting knowledgeable of the risk of eating unhealthy foods.</p>
                        <div class="hero-buttons">
                            <a href="#" class="button button-white">Get Started Buying!</a>
                        </div>
                    </div> <!-- end hero-copy -->

                    <div class="hero-image">
                        <img src="img/macbook-pro-laravel.png" alt="hero image">
                    </div> <!-- end hero-image -->
                </div> <!-- end hero -->
            </header>

            <div class="featured-section">

                <div class="container">
                    <h1 class="text-center">Jaracrayfish &amp; Jarahealth</h1>

                    <p class="section-description">
                        We enlighten you about cancerous foods you don’t know about and how to replace them with hygienic also,
                        Jaracrayfish is very rich in selenium. It's ideal for female fertility, pregnant women & nursing mothers 
                        who want to have safe delivery and healthy growing babies.
                    </p>

                    <div class="text-center button-container">
                        <a href="#" class="button">Buy Now</a>
                    </div>

                    {{-- <div class="tabs">
                            <div class="tab">
                                Featured
                            </div>
                            <div class="tab">
                                On Sale
                            </div>
                        </div> --}}

                    <div class="products text-center">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }}</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">View more products</a>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            <div class="featured-section">

                <div class="container">
                    <h1 class="text-center">Jara Benefits</h1>

                    <p class="section-description">
                        Below are the health benefits when using Jaracrayfish to cook is proven to boost your memory and learning capacity 10 times.
                    </p>

                    <div class="products text-center">
                        <div class="product">
                            <img src="img/childschool.jpg" width="250px" height="200px" alt="hero image">
                            <div class="product-name">
                                Using Jaracrayfish to cook is proven to boost your memory and learning capacity 10 times. 
                                Very ideal for school children and elderly who have difficulty remembering things
                            </div>
                        </div>

                        <div class="product">
                            <img src="img/happy-mom.jpg" width="250px" height="200px" alt="hero image">
                            <div class="product-name">
                                Jaracrayfish is very rich in selenium. It's ideal for female fertility, 
                                pregnant women & nursing mothers who want to have safe delivery and healthy growing babies.
                            </div>
                        </div>

                        <div class="product">
                            <img src="img/belle-fat.jpg" width="250px" height="200px" alt="hero image">
                            <div class="product-name">
                                Jaracrayfish comes with a list of secret natural spices which you can mix together to cook and 
                                it will eliminate your belly fat in 2 months GUARANTEED!
                            </div>
                        </div>

                        <div class="product">
                            <img src="img/blog1.png" width="250px" height="200px" alt="hero image">
                            <div class="product-name">We enlighten you about cancerous foods you don’t know about and how to replace them with hygienic</div>
                        </div>
                    </div> <!-- end products -->
                    

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            <div class="featured-section">

                <div class="container">
                    <h1 class="text-center">Jara does &amp; Jara can do</h1>

                    <p class="section-description">
                        Jara has had impacts on children, families, its customers and the community at large, below are the Jara effects
                    </p>

                    <div class="products text-center">
                        <div class="product">
                            <img src="img/children.jpg" width="250px" height="200px" alt="hero image">
                            <div class="product-name">
                                Just imagine how you will make the world a better place. 
                                JaraHealth donates 5% of your purchase to help children cancer
                            </div>
                        </div>

                        <div class="product">
                            <img src="img/guarantee.jpg" width="250px" height="200px" alt="hero image">
                            <div class="product-name">
                                Just use Jaracrayfish to cook and watch it work like magic! We will refund double your money back, 
                                if Jaracrayfish does not satisfy you
                            </div>
                        </div>

                        <div class="product">
                            <img src="img/accreditation.jpg" width="250px" height="200px" alt="hero image">
                            <div class="product-name">
                                Jaracrayfish is NAFDAC certified. It is also recognized as a member of reputable government 
                                bodies like Port Harcourt Chambers of Commerce, Nigerian Export Promotion Counci
                            </div>
                        </div>

                        <div class="product">
                            <img src="img/NEW_HYPERGOLD_LOGO.png" width="250px" height="200px" alt="hero image">
                            <div class="product-name">
                                HyperGold limited located in Choba, Rivers State, 
                                Nigeria was incorporated under laws of the federal republic of Nigeria in 2014.
                            </div>
                        </div>
                    </div> <!-- end products -->
                    

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            <div class="featured-section">

                <div class="container">
                    <h1 class="text-center">TESTIMONIALS</h1>

                    <p class="section-description">
                        You can read up what people say about our product from our various clients, distributors. 
                        People find Jaracrayfish an exciting product for every home
                    </p>

                    <div class="products text-center">
                        <div class="product">
                            <img src="img/blog1.png" width="250px" height="200px" alt="hero image">
                            <div class="product-name">This product is very nice for cooking, it makes all my meals taste great</div>
                            <div class="product-price">Peter Edward</div>
                            <div class="product-price">Programmer/Retep Systems</div>
                        </div>

                        <div class="product">
                            <img src="img/blog2.png" width="250px" height="200px" alt="hero image">
                            <div class="product-name">This product is very nice for cooking, it makes all my meals taste great</div>
                            <div class="product-price">Katrine Maduba</div>
                            <div class="product-price">House Wife</div>
                        </div>

                        <div class="product">
                            <img src="img/blog3.png" width="250px" height="200px" alt="hero image">
                            <div class="product-name">This product is very nice for cooking, it makes all my meals taste great</div>
                            <div class="product-price">Chinedu Alphonso</div>
                            <div class="product-price">Chef/Allan Eatries</div>
                        </div>

                        <div class="product">
                            <img src="img/blog1.png" width="250px" height="200px" alt="hero image">
                            <div class="product-name">This product is very nice for cooking, it makes all my meals taste great</div>
                            <div class="product-price">Amaka Blessing</div>
                            <div class="product-price">Cook/Breakfast Kitchen</div>
                        </div>
                    </div> <!-- end products -->
                    

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            @include('partials.footer')

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
    </body>
</html>
