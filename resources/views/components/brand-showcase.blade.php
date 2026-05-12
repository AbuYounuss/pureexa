<!-- BRAND SHOWCASE SECTION START -->
<div class="section-full p-t100 p-b70 bg-gray">
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head text-center">
            <h2><span class="site-text-primary">Featured</span> Brands</h2>
            <div class="wt-separator-outer">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-black"></i>
                    <span class="separator-left site-bg-primary"></span>
                    <span class="separator-right site-bg-primary"></span>
                </div>
            </div>
            <p>Discover our premium selection of products from world-renowned brands. We bring you the finest in skincare and beauty from The Ordinary, CeraVe, and Cetaphil.</p>
        </div>
        <!-- TITLE END -->

        <div class="section-content">
            <!-- THE ORDINARY SECTION -->
            <div class="m-b50">
                <div class="wt-separator-outer m-b30">
                    <div class="wt-separator style-square">
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                    <h3 class="text-uppercase m-t0">The Ordinary</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/ordinary/ordinary1.png') }}"
                            title="ordinary1"
                            url="{{ url('/brand/ordinary') }}"
                            desc="High-quality skincare formulated with effective ingredients."
                            price="$15.99"
                            :showAction="false"
                        />
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/ordinary/ordinary2.png') }}"
                            title="ordinary2"
                            url="{{ url('/brand/ordinary') }}"
                            desc="Targeted treatments for healthy, glowing skin."
                            price="$18.50"
                            :showAction="false"
                        />
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/ordinary/ordinary3.png') }}"
                            title="ordinary3"
                            url="{{ url('/brand/ordinary') }}"
                            desc="Science-backed beauty solutions at an affordable price."
                            price="$12.99"
                            :showAction="false"
                        />
                    </div>
                </div>
            </div>

            <!-- CERAVE SECTION -->
            <div class="m-b50">
                <div class="wt-separator-outer m-b30">
                    <div class="wt-separator style-square">
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                    <h3 class="text-uppercase m-t0">CeraVe</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/cerave/ceraveBabyScreencareLotion.png') }}"
                            title="ceraveBabyScreencareLotion"
                            url="{{ url('/brand/cerave') }}"
                            desc="Gentle care for your baby's delicate skin barrier."
                            price="$22.00"
                            :showAction="false"
                        />
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/cerave/ceraveHydratingAcideSerum.png') }}"
                            title="ceraveHydratingAcideSerum"
                            url="{{ url('/brand/cerave') }}"
                            desc="Intense hydration with hyaluronic acid and essential ceramides."
                            price="$25.99"
                            :showAction="false"
                        />
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/cerave/ceraveHydratingfamingOilCleanser.png') }}"
                            title="ceraveHydratingfamingOilCleanser"
                            url="{{ url('/brand/cerave') }}"
                            desc="Cleanses and hydrates with a unique foaming oil formula."
                            price="$20.50"
                            :showAction="false"
                        />
                    </div>
                </div>
            </div>

            <!-- CETAPHIL SECTION -->
            <div class="m-b50">
                <div class="wt-separator-outer m-b30">
                    <div class="wt-separator style-square">
                        <span class="separator-left site-bg-primary"></span>
                        <span class="separator-right site-bg-primary"></span>
                    </div>
                    <h3 class="text-uppercase m-t0">Cetaphil</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/cetaphil/cataphilBabyOil.png') }}"
                            title="cataphilBabyOil"
                            url="{{ url('/brand/cetaphil') }}"
                            desc="Soothes and protects your baby's skin from dryness."
                            price="$14.99"
                            :showAction="false"
                        />
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/cetaphil/cataphiloilySkinCleanser.png') }}"
                            title="cataphiloilySkinCleanser"
                            url="{{ url('/brand/cetaphil') }}"
                            desc="Deep cleans oily and combination skin without drying it out."
                            price="$16.50"
                            :showAction="false"
                        />
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30">
                        <x-product-card 
                            image="{{ asset('assets/images/brandProduct/cetaphil/cataphilPoreClearingAcneCleanser.png') }}"
                            title="cataphilPoreClearingAcneCleanser"
                            url="{{ url('/brand/cetaphil') }}"
                            desc="Clears breakouts and prevents new acne from forming."
                            price="$19.99"
                            :showAction="false"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BRAND SHOWCASE SECTION END -->