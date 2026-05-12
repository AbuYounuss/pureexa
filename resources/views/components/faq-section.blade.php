@pushOnce('styles')
<style>
    .faq-section {
        background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
        position: relative;
    }
    .faq-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23EC5598' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    .faq-accordion .panel {
        border: none;
        background: transparent;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .faq-accordion .panel:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.08);
    }
    .faq-accordion .acod-head {
        background: #fff;
        padding: 0;
    }
    .faq-accordion .acod-title a {
        padding: 20px 25px;
        display: block;
        font-size: 17px;
        font-weight: 600;
        color: #333;
        position: relative;
        text-decoration: none !important;
        transition: all 0.3s ease;
        background: #fff;
    }
    .faq-accordion .acod-title a:not(.collapsed) {
        color: #EC5598;
        background: #fff;
    }
    .faq-accordion .acod-title a .indicator {
        position: absolute;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
        width: 30px;
        height: 30px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    .faq-accordion .acod-title a:not(.collapsed) .indicator {
        background: #EC5598;
        color: #fff;
        transform: translateY(-50%) rotate(180deg);
    }
    .faq-accordion .acod-body {
        background: #fff;
        border-top: 1px solid #f1f1f1;
    }
    .faq-accordion .acod-content {
        padding: 25px;
        color: #666;
        line-height: 1.8;
        font-size: 15px;
    }
    .faq-icon {
        margin-right: 15px;
        color: #EC5598;
        font-size: 18px;
    }
</style>
@endpushOnce

<!-- FAQ SECTION START -->
<div class="section-full p-t100 p-b70 faq-section">
    <div class="container">
        <!-- TITLE START -->
        <div class="section-head text-center">
            <h2 class="m-b10"><span class="site-text-primary">Frequently</span> Asked Questions</h2>
            <div class="wt-separator-outer">
                <div class="wt-separator style-icon">
                    <i class="fa fa-leaf text-black"></i>
                    <span class="separator-left site-bg-primary"></span>
                    <span class="separator-right site-bg-primary"></span>
                </div>
            </div>
            <p class="max-w800 m-auto">Explore our detailed answers to common questions about Pureexa's luxury spa services and premium beauty products. We are here to help you achieve your ultimate wellness goals.</p>
        </div>
        <!-- TITLE END -->

        <div class="section-content">
            <div class="row faq-accordion">
                <div class="col-lg-6 col-md-12">
                    <div class="wt-accordion" id="accordion1">
                        <!-- Q1 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseOne" class="collapsed" aria-expanded="false" data-bs-target="#collapseOne">
                                        <i class="fa-solid fa-spa faq-icon"></i> What services does Pureexa Spa offer?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne" class="acod-body collapse" data-bs-parent="#accordion1">
                                <div class="acod-content">
                                    Pureexa provides an extensive menu of premium wellness services, including therapeutic aromatherapy massages, advanced rejuvenating facials, detoxifying herbal body wraps, and luxury spa manicures. We also offer expert professional makeup application for special events, all designed to harmonize your physical beauty with inner tranquility.
                                </div>
                            </div>
                        </div>
                        <!-- Q2 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseTwo" class="collapsed" aria-expanded="false" data-bs-target="#collapseTwo">
                                        <i class="fa-solid fa-leaf faq-icon"></i> Are your beauty products organic and safe?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseTwo" class="acod-body collapse" data-bs-parent="#accordion1">
                                <div class="acod-content">
                                    Yes, absolute safety and purity are our top priorities. All Pureexa products, including our signature skincare serums and hand-crafted herbal soaps, are formulated with ethically sourced, organic, and natural ingredients. We strictly avoid parabens, sulfates, and harsh chemicals, making our collection ideal even for the most sensitive skin types.
                                </div>
                            </div>
                        </div>
                        <!-- Q3 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseThree" class="collapsed" aria-expanded="false" data-bs-target="#collapseThree">
                                        <i class="fa-solid fa-calendar-alt faq-icon"></i> How can I book an appointment?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseThree" class="acod-body collapse" data-bs-parent="#accordion1">
                                <div class="acod-content">
                                    Booking your Pureexa experience is simple and convenient. You can reserve your session directly through our integrated online booking system available on our website 24/7. Alternatively, you may call our reception desk or visit our center in person. We recommend booking at least 3-5 days in advance for peak times like weekends.
                                </div>
                            </div>
                        </div>
                        <!-- Q7 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseSeven" class="collapsed" aria-expanded="false" data-bs-target="#collapseSeven">
                                        <i class="fa-solid fa-gift faq-icon"></i> Do you offer gift vouchers for spa services?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseSeven" class="acod-body collapse" data-bs-parent="#accordion1">
                                <div class="acod-content">
                                    Yes, Pureexa offers elegantly designed gift vouchers that can be purchased for specific treatments or for a set monetary value. They are the perfect gift for birthdays, anniversaries, or simply to show someone you care. Vouchers can be purchased online or at our reception and remain valid for 12 months.
                                </div>
                            </div>
                        </div>
                        <!-- Q8 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseEight" class="collapsed" aria-expanded="false" data-bs-target="#collapseEight">
                                        <i class="fa-solid fa-tshirt faq-icon"></i> What should I wear during my spa visit?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseEight" class="acod-body collapse" data-bs-parent="#accordion1">
                                <div class="acod-content">
                                    We want you to be as comfortable as possible. For most full-body treatments, we provide soft robes and slippers. During massages, our therapists use professional draping techniques to ensure your privacy and comfort at all times. For facials or nail services, your regular comfortable clothing is perfectly fine.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="wt-accordion" id="accordion2">
                        <!-- Q4 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseFour" class="collapsed" aria-expanded="false" data-bs-target="#collapseFour">
                                        <i class="fa-solid fa-clock faq-icon"></i> How long do treatments typically last?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFour" class="acod-body collapse" data-bs-parent="#accordion2">
                                <div class="acod-content">
                                    The duration of our treatments varies to suit your lifestyle. Standard therapeutic massages and specialized facials typically last between 60 to 90 minutes. For those with limited time, we offer 30-minute "Express Refresh" treatments. For the ultimate escape, we provide half-day and full-day "Signature Journey" packages that span 3 to 6 hours.
                                </div>
                            </div>
                        </div>
                        <!-- Q5 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseFive" class="collapsed" aria-expanded="false" data-bs-target="#collapseFive">
                                        <i class="fa-solid fa-shopping-bag faq-icon"></i> Can I purchase your products for home use?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFive" class="acod-body collapse" data-bs-parent="#accordion2">
                                <div class="acod-content">
                                    Absolutely! To help you maintain your spa-quality results at home, the majority of the premium products used during your professional treatments are available in our boutique retail section. Our expert consultants are always available to provide a personalized skin analysis and recommend the perfect home-care regimen tailored to your specific needs.
                                </div>
                            </div>
                        </div>
                        <!-- Q6 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseSix" class="collapsed" aria-expanded="false" data-bs-target="#collapseSix">
                                        <i class="fa-solid fa-info-circle faq-icon"></i> What is your cancellation policy?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseSix" class="acod-body collapse" data-bs-parent="#accordion2">
                                <div class="acod-content">
                                    We value our specialists' time and our clients' schedules. We kindly request a minimum of 24 hours' notice for any appointment cancellations or rescheduling requests. This allows us to reallocate the time to other clients on our waiting list. Cancellations made with less than 24 hours' notice may be subject to a 50% service fee.
                                </div>
                            </div>
                        </div>
                        <!-- Q9 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseNine" class="collapsed" aria-expanded="false" data-bs-target="#collapseNine">
                                        <i class="fa-solid fa-user-check faq-icon"></i> Is there a minimum age requirement?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseNine" class="acod-body collapse" data-bs-parent="#accordion2">
                                <div class="acod-content">
                                    Clients must be at least 18 years old to receive treatments independently. Minors aged 16 and 17 may receive selected services with a signed parental consent form and, in some cases, a parent or guardian must be present in the room during the treatment. We also offer specialized "Mini-Spa" days for younger guests on specific dates.
                                </div>
                            </div>
                        </div>
                        <!-- Q10 -->
                        <div class="panel wt-panel">
                            <div class="acod-head">
                                <h6 class="acod-title">
                                    <a data-bs-toggle="collapse" href="#collapseTen" class="collapsed" aria-expanded="false" data-bs-target="#collapseTen">
                                        <i class="fa-solid fa-users faq-icon"></i> Do you catering to group bookings?
                                        <span class="indicator"><i class="fa fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseTen" class="acod-body collapse" data-bs-parent="#accordion2">
                                <div class="acod-content">
                                    Absolutely! Pureexa is a popular choice for bridal parties, birthdays, and corporate wellness retreats. We can customize packages for groups of 4 or more, often including light refreshments and exclusive use of certain spa areas. Please contact our events coordinator for more details and special group rates.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ SECTION END -->