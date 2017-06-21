<?php
/**
 * The template for displaying pages
 */

get_header(); ?>

<div id="page" class="site">
    <header class="site-header navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="site-logo"><a href="http://rpplatform.com/" rel="home"><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/logo-dark.png" alt="Logo" /></a></div>
                </div>
                <div id="lang-wrapper" class="col-sm-5 col-sm-offset-3 col-md-3 col-md-offset-0 col-md-push-6">
                    <div class="header-lang">
                        <p><a class="demo-request" href="#" data-toggle="modal" data-target="#modal-request-demo">Request a Demo</a></p>
                        <ul>
                            <li class="active"><a>EN</a></li>
                            <li><a>DE</a></li>
                        </ul>
                    </div>
                </div>
                <div id="site-header-menu-wrapper" class="col-sm-12 col-md-6 col-md-pull-3">
                    <nav id="site-header-menu" class="site-header-menu">
                        <div class="menu-main-menu-container">
                            <ul id="menu-main-menu" class="main-menu">
                                <li id="menu-item-28" class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-26 menu-item-28"><a href="http://rpplatform.com/features/">Features</a></li>
                                <li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="http://rpplatform.com/pricing/">Pricing</a></li>
                                <li id="menu-item-15" class="hide-menu-item menu-item menu-item-type-taxonomy menu-item-object-category menu-item-15"><a href="http://rpplatform.com/category/blog/">Blog</a></li>
                                <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="http://rpplatform.com/about-us/">About us</a></li>
                                <li id="menu-item-17" class="hide-menu-item menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17"><a href="http://rpplatform.com/category/faq/">FAQ</a></li>
                                <li id="menu-item-18" class="hide-menu-item menu-item menu-item-type-custom menu-item-object-custom menu-item-18"><a href="#">Sign up</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div id="content" class="site-content">
        <div id="pricing-plans" class="pricing-plans">
            <div class="container">
                <div class="row">
                    <div class="plans-container">
                        <div class="header">
                            <h2>Flexible plans to suit your needs</h2>
                            <p>Choose best option for you</p>
                        </div>
                        <div class="col-sm-12">
                            <div class="btn-container">
                                <div class="btn-group"><button class="btn btn-default-rp active" type="button" data-currency="EUR">€</button><button class="btn btn-default-rp" type="button" data-currency="GBP">£</button><button class="btn btn-default-rp" type="button" data-currency="USD">$</button></div>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-1" data-toggle="tab">Solutions for Service Bureau</a></li>
                                <li class="li"><a href="#tab-2" data-toggle="tab">Solutions for In-House Production</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="col-sm-3 col-md-3 m-col">
                                        <div class="col-xs-12 v-row"></div>
                                        <div class="col-xs-12 v-row row-big"></div>
                                        <div class="col-xs-12 v-row row-big">
                                            <p>Website Orders</p>
                                            <p><a tabindex="0" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="And here's some amazing content. It's very engaging. Right?"><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-price-info.png" alt="Info" /></a></p>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <p>In-house Quotation</p>
                                            <p><a tabindex="0" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="And here's some amazing content. It's very engaging. Right?"><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-price-info.png" alt="Info" /></a></p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <ul class="">
                                            <li class="text">Instant Quotations for<br />
                                                Additive Manufacturing</li>
                                            <li class="text">Customer Management</li>
                                            <li class="text">Proposal Management</li>
                                            <li class="text">Order Management</li>
                                            <li class="text">File formats</li>
                                            <li class="text">Customer payment types</li>
                                            <li class="text">Template customization</li>
                                            <li class="text">E-mail and chat support</li>
                                            <li class="text">Telephone support</li>
                                            <li class="text">Custom integrations</li>
                                            <li class="text">On premis hosting</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 col-md-3 m-col">
                                        <div class="col-xs-12 v-row">
                                            <h4>Starter</h4>
                                            <p><span id="order-lable" class="order-lable">[Type #1] New order on &#8220;Starter&#8221;</span></p>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <span class="currency-field active" data-currency="EUR">50 € per month</span>
                                            <span class="currency-field" data-currency="GBP">£ 40 per month</span>
                                            <span class="currency-field" data-currency="USD">60 $ per month</span>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <p>6% per online order</p>
                                            <span class="currency-field active" data-currency="EUR">after 1100 € in sales</span>
                                            <span class="currency-field" data-currency="GBP">after £ 1000 in sales</span>
                                            <span class="currency-field" data-currency="USD">after 1200 $ in sales</span>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <p>50 free quotations per month</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <ul class="">
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li class="text">STL, OBJ</li>
                                            <li class="text">7 types</li>
                                            <li class="text">Standard</li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-nocheck.png" alt="no" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-nocheck.png" alt="no" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-nocheck.png" alt="no" /></li>
                                        </ul>
                                        <p><a class="order-button" href="#" data-toggle="modal" data-target="#modal-request-pricing">Start trial now</a></p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 m-col">
                                        <div class="col-xs-12 v-row">
                                            <h4>Professional</h4>
                                            <p><span id="order-lable" class="order-lable">[Type #1] New order on &#8220;Professional&#8221;</span></p>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <span class="currency-field active" data-currency="EUR">310 € per month</span>
                                            <span class="currency-field" data-currency="GBP">£ 300 per month</span>
                                            <span class="currency-field" data-currency="USD">320 $ per month</span>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <p>4% per online order</p>
                                            <span class="currency-field active" data-currency="EUR">after 8000 € in sales</span>
                                            <span class="currency-field" data-currency="GBP">after £ 7500 in sales</span>
                                            <span class="currency-field" data-currency="USD">after 8500 $ in sales</span>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <p>600 free quotations per month</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <ul class="">
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li class="text">20 CAD file formats</li>
                                            <li class="text">7 types</li>
                                            <li class="text">Standard</li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-nocheck-white.png" alt="no" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-nocheck-white.png" alt="no" /></li>
                                        </ul>
                                        <p><a class="order-button" href="#" data-toggle="modal" data-target="#modal-request-pricing">Start trial now</a></p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 m-col">
                                        <div class="col-xs-12 v-row">
                                            <h4>Enterprise</h4>
                                            <p><span id="order-lable" class="order-lable">[Type #1] New order on &#8220;Enterprise&#8221;</span></p>
                                        </div>
                                        <div class="col-xs-12 v-row row-x2">
                                            <p>Please contact us for a quote</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <ul class="">
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li class="text">20 CAD file formats</li>
                                            <li class="text">80 types</li>
                                            <li class="text">Custom</li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                        </ul>
                                        <p><a class="order-button" href="#" data-toggle="modal" data-target="#modal-request-pricing">Contact Us</a></p>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="col-sm-1 col-md-1 m-col"></div>
                                    <div class="col-sm-3 col-md-3 m-col">
                                        <div class="col-xs-12 v-row"></div>
                                        <div class="col-xs-12 v-row row-big">
                                            <p>In-house Estimation</p>
                                            <p><a tabindex="0" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="And here's some amazing content. It's very engaging. Right?"><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-price-info.png" alt="Info" /></a></p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <ul class="">
                                            <li class="text">Instant Quotations for<br />
                                                Additive Manufacturing</li>
                                            <li class="text">Customer Management</li>
                                            <li class="text">Proposal Management</li>
                                            <li class="text">Order Management</li>
                                            <li class="text">File formats</li>
                                            <li class="text">Customer payment types</li>
                                            <li class="text">Template customization</li>
                                            <li class="text">E-mail and chat support</li>
                                            <li class="text">Telephone support</li>
                                            <li class="text">Custom integrations</li>
                                            <li class="text">On premis hosting</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3 col-md-3 m-col">
                                        <div class="col-xs-12 v-row">
                                            <h4>Professional</h4>
                                            <p><span id="order-lable" class="order-lable">[Type #2] New order on &#8220;Professional&#8221;</span></p>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <span class="currency-field active" data-currency="EUR">310 €</span>
                                            <span class="currency-field" data-currency="GBP">£ 300</span>
                                            <span class="currency-field" data-currency="USD">320 $</span>
                                            <p>for 600 files</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <ul class="">
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li class="text">20 CAD file formats</li>
                                            <li class="text">7 types</li>
                                            <li class="text">Standard</li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-nocheck.png" alt="no" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-nocheck.png" alt="no" /></li>
                                        </ul>
                                        <p><a class="order-button" href="#" data-toggle="modal" data-target="#modal-request-pricing">Start trial now</a></p>
                                    </div>
                                    <div class="col-sm-3 col-md-3 m-col">
                                        <div class="col-xs-12 v-row">
                                            <h4>Enterprise</h4>
                                            <p><span id="order-lable" class="order-lable">[Type #2] New order on &#8220;Enterprise&#8221;</span></p>
                                        </div>
                                        <div class="col-xs-12 v-row row-big">
                                            <p>Please contact us for a quote</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <ul class="">
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li class="text">20 CAD file formats</li>
                                            <li class="text">80 types</li>
                                            <li class="text">Custom</li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                            <li><img src="http://rpplatform.com/wp-content/themes/rpplatform/images/icon-check.png" alt="yes" /></li>
                                        </ul>
                                        <p><a class="order-button" href="#" data-toggle="modal" data-target="#modal-request-pricing">Contact Us</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="pricing-faq" class="pricing-faq">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="accordion-container">
                            <h2>Pricing FAQ</h2>
                            <div id="accordion" class="panel-group">
                                <div class="panel">
                                    <div id="heading-1" class="panel-heading">
                                        <h4 class="panel-title"><a class="collapsed" href="#collapse_1" data-toggle="collapse" data-parent="#accordion">What if I exceed my plan’s event limit?</a></h4>
                                    </div>
                                    <div id="collapse_1" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#8217;t heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div id="heading-2" class="panel-heading">
                                        <h4 class="panel-title"><a class="collapsed" href="#collapse_2" data-toggle="collapse" data-parent="#accordion">Are there any step fees? How do I implement?</a></h4>
                                    </div>
                                    <div id="collapse_2" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#8217;t heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div id="heading-3" class="panel-heading">
                                        <h4 class="panel-title"><a class="collapsed" href="#collapse_3" data-toggle="collapse" data-parent="#accordion">What’s an event?</a></h4>
                                    </div>
                                    <div id="collapse_3" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#8217;t heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div id="heading-4" class="panel-heading">
                                        <h4 class="panel-title"><a class="collapsed" href="#collapse_4" data-toggle="collapse" data-parent="#accordion">What’s an engagement?</a></h4>
                                    </div>
                                    <div id="collapse_4" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#8217;t heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div id="heading-5" class="panel-heading">
                                        <h4 class="panel-title"><a class="collapsed" href="#collapse_5" data-toggle="collapse" data-parent="#accordion">What does Kissmetrics do?</a></h4>
                                    </div>
                                    <div id="collapse_5" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#8217;t heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div id="heading-6" class="panel-heading">
                                        <h4 class="panel-title"><a class="collapsed" href="#collapse_6" data-toggle="collapse" data-parent="#accordion">What the difference between Kissmetrics and Google Analitics?</a></h4>
                                    </div>
                                    <div id="collapse_6" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#8217;t heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div id="heading-7" class="panel-heading">
                                        <h4 class="panel-title"><a class="collapsed" href="#collapse_7" data-toggle="collapse" data-parent="#accordion">How does the 14-day free trial work?</a></h4>
                                    </div>
                                    <div id="collapse_7" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#8217;t heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-group">
                                <h4>Get Started with Our Free 30 days Trial</h4>
                                <p><a class="demo-request" href="#" data-toggle="modal" data-target="#modal-start-trial">Start trial now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="colophon" class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <p class="footer-menu-title">Home:</p>
                        <nav class="site-footer-menu">
                            <div class="menu-footer-menu-container">
                                <ul id="menu-footer-menu" class="footer-menu">
                                    <li id="menu-item-19" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19"><a href="http://rpplatform.com/features/">Features</a></li>
                                    <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20"><a href="http://rpplatform.com/pricing/">Pricing</a></li>
                                    <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21"><a href="http://rpplatform.com/about-us/">About Us</a></li>
                                    <li id="menu-item-22" class="hide-menu-item menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22"><a href="http://rpplatform.com/category/blog/">Blog</a></li>
                                    <li id="menu-item-23" class="hide-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="http://rpplatform.com/about-us/">About us</a></li>
                                    <li id="menu-item-24" class="hide-menu-item menu-item menu-item-type-taxonomy menu-item-object-category menu-item-24"><a href="http://rpplatform.com/category/faq/">FAQ</a></li>
                                    <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25"><a href="http://rpplatform.com/policy/">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <p class="social-navigation-title">Follow us:</p>
                        <nav class="social-navigation">
                            <div class="menu-footer-social-menu-container">
                                <ul id="menu-footer-social-menu" class="social-links-menu">
                                    <li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7"><a href="#">LinkedIn</a></li>
                                    <li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8"><a href="#">Twitter</a></li>
                                    <li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9"><a href="#">Facebook</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2 address">
                        <p class="footer-contacts-title">Contact us:</p>
                        <p>contact@email.com</p>
                        <p>London, Beriuk-street, 34</p>
                        <p>+1 800 754 25 85</p>
                        <p>+1 800 456 78 98</p>
                    </div>
                    <div class="col-md-4">
                        <div class="site-map"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.6799571664687!2d-0.1049717840138887!3d51.51908731766911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b53c630c7c1%3A0x980a99ef39f4ed91!2s1+E+Poultry+Ave%2C+London+EC1A+9PT%2C+UK!5e0!3m2!1sen!2sua!4v1453820230137" width="100%" height="276" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
                    </div>
                    <div class="col-md-12">
                        <p class="copyright">© RP Platform, 2016</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <p><!-- Modal --></p>
    <div id="modal-request-demo" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p><button class="close" type="button" data-dismiss="modal">×</button></p>
                    <div id="form-title">
                        <h4 id="myModalLabel" class="modal-title">Request for a Demo</h4>
                        <p>Please provide us with you contact information, so that we can set you up with a product demo!</p>
                    </div>
                    <div id="form-title-success">
                        <h4 class="modal-title">Thank you!<br />
                            We will contact you soon.</h4>
                    </div>
                </div>
                <div class="modal-body"><div role="form" class="wpcf7" id="wpcf7-f83-p85-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/pricing/#wpcf7-f83-p85-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="83" />
                                <input type="hidden" name="_wpcf7_version" value="4.3.1" />
                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f83-p85-o1" />
                                <input type="hidden" name="_wpnonce" value="528dccda4a" />
                            </div>
                            <div><span class="wpcf7-form-control-wrap rpd-name"><input type="text" name="rpd-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name *" /></span></div>
                            <div><span class="wpcf7-form-control-wrap rpd-email"><input type="email" name="rpd-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail *" /></span></div>
                            <div><span class="wpcf7-form-control-wrap rpd-phone"><input type="text" name="rpd-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone *" /></span></div>
                            <div><span class="wpcf7-form-control-wrap rpd-message"><textarea name="rpd-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Enter your message"></textarea></span></div>
                            <div><input type="submit" value="Send request" class="wpcf7-form-control wpcf7-submit" /></div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>
            </div>
        </div>
    </div>
    <div id="modal-start-trial" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <p><button class="close" type="button" data-dismiss="modal">×</button></p>
                    <div id="form-title">
                        <h4 class="modal-title">Start your free trial</h4>
                        <p>Please provide us with you contact information, so that we can set you up with a product demo and free trial!</p>
                    </div>
                    <div id="form-title-success">
                        <h4 class="modal-title">Thank you!<br />
                            We will contact you soon.</h4>
                    </div>
                </div>
                <div class="modal-body"><div role="form" class="wpcf7" id="wpcf7-f84-p85-o2" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/pricing/#wpcf7-f84-p85-o2" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="84" />
                                <input type="hidden" name="_wpcf7_version" value="4.3.1" />
                                <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f84-p85-o2" />
                                <input type="hidden" name="_wpnonce" value="990813e3d1" />
                            </div>
                            <div><span class="wpcf7-form-control-wrap rpd-name"><input type="text" name="rpd-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name *" /></span></div>
                            <div><span class="wpcf7-form-control-wrap rpd-email"><input type="email" name="rpd-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail *" /></span></div>
                            <div><span class="wpcf7-form-control-wrap rpd-phone"><input type="text" name="rpd-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone *" /></span></div>
                            <div><span class="wpcf7-form-control-wrap rpd-message"><textarea name="rpd-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Enter your message"></textarea></span></div>
                            <div><input type="submit" value="Send request" class="wpcf7-form-control wpcf7-submit" /></div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>
            </div>
        </div>
    </div>
</div>
<div id="modal-request-pricing" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p><button class="close" type="button" data-dismiss="modal">×</button></p>
                <div id="form-title">
                    <h4 class="modal-title">Request on pricing</h4>
                    <p>Please provide us with you contact information, so that we can set you up with a product demo and free trial!</p>
                </div>
                <div id="form-title-success">
                    <h4 class="modal-title">Thank you!<br />
                        We will contact you soon.</h4>
                </div>
            </div>
            <div class="modal-body"><div role="form" class="wpcf7" id="wpcf7-f191-p85-o3" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="/pricing/#wpcf7-f191-p85-o3" method="post" class="wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="191" />
                            <input type="hidden" name="_wpcf7_version" value="4.3.1" />
                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f191-p85-o3" />
                            <input type="hidden" name="_wpnonce" value="f660a088ba" />
                        </div>
                        <div><span class="wpcf7-form-control-wrap rpd-name"><input type="text" name="rpd-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name *" /></span></div>
                        <div><span class="wpcf7-form-control-wrap rpd-email"><input type="email" name="rpd-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="E-mail *" /></span></div>
                        <div><span class="wpcf7-form-control-wrap rpd-phone"><input type="text" name="rpd-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone *" /></span></div>
                        <div><span class="wpcf7-form-control-wrap rpd-message"><textarea name="rpd-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Enter your message"></textarea></span></div>
                        <div class="hidden"><span class="wpcf7-form-control-wrap rpd-order"><input type="text" name="rpd-order" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Order" /></span></div>
                        <div><input type="submit" value="Send request" class="wpcf7-form-control wpcf7-submit" /></div>
                        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
