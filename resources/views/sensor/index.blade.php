@extends('layouts.dashboard')

@section('title')

@endsection

@section('content')
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-gradient-menu-template/materialize.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/vertical-gradient-menu-template/style.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/eCommerce-products-page.css">
    <!-- END: Page Level CSS-->

            <div class="row">
              <div class="col s12">
                <div class="container">
                  <div class="section">
        <div class="row" id="ecommerce-products">
          <div class="col s12 m3 l3 pr-0 hide-on-med-and-down animate fadeLeft">
            <div class="card">
              <div class="card-content">
                <span class="card-title">Sensors</span>
                <hr class="p-0 mb-10">
                <ul class="collapsible categories-collapsible">
                  <li>
                    <div class="collapsible-header">Home <i class="material-icons"> keyboard_arrow_right </i></div>
                    <div class="collapsible-body">
                      <p>Living Room</p>
                      <p>Office</p>
                      <p>Bedroom</p>
                      <p>Kitchen</p>
                    </div>
                  </li>
                  <li>
                    <div class="collapsible-header">Garden <i class="material-icons"> keyboard_arrow_right </i></div>
                    <div class="collapsible-body">
                      <p>Apple</p>
                      <p>Samsung</p>
                      <p>Lenovo</p>
                    </div>
                  </li>
                  <li>
                    <div class="collapsible-header">Work <i class="material-icons"> keyboard_arrow_right </i></div>
                    <div class="collapsible-body">
                      <p>Apple</p>
                      <p>Samsung</p>
                      <p>Lenovo</p>
                      <p>HP</p>
                      <p>Dell</p>
                    </div>
                  </li>
                  <li>
                    <div class="collapsible-header">Car <i class="material-icons"> keyboard_arrow_right </i></div>
                    <div class="collapsible-body">
                      <p>Apple</p>
                      <p>Samsung</p>
                      <p>Lenovo</p>
                      <p>Mi</p>
                      <p>Nokia</p>
                    </div>
                  </li>
                </ul>
                <span class="card-title mt-10">Price</span>
                <hr class="p-0 mb-10">
                <div id="price-slider"></div>
                <span class="card-title mt-10">Size</span>
                <hr class="p-0 mb-10">
                <div class="size-filter">
                  <ul>
                    <li><a href="#">XL</a></li>
                    <li><a href="#">L</a></li>
                    <li class="active"><a href="#">M</a></li>
                    <li><a href="#">S</a></li>
                    <li><a href="#">XS</a></li>
                  </ul>
                </div>
                <span class="card-title mt-10">Color</span>
                <hr class="p-0 mb-10">
                <form action="#" class="display-grid">
                  <label class="mt-3">
                    <input type="checkbox" />
                    <span><i class="material-icons vertical-align-bottom blue-grey-text text-lighten-5"> lens </i> White</span>
                  </label>
                  <label class="mt-3">
                    <input type="checkbox" />
                    <span><i class="material-icons vertical-align-bottom black-text"> lens </i> Black</span>
                  </label>
                  <label class="mt-3">
                    <input type="checkbox" />
                    <span><i class="material-icons vertical-align-bottom amber-text"> lens </i> Amber</span>
                  </label>
                  <label class="mt-3">
                    <input type="checkbox" />
                    <span><i class="material-icons vertical-align-bottom blue-text"> lens </i> Blue</span>
                  </label>
                  <label class="mt-3">
                    <input type="checkbox" />
                    <span><i class="material-icons vertical-align-bottom green-text"> lens </i> Green</span>
                  </label>
                  <label class="mt-3">
                    <input type="checkbox" />
                    <span><i class="material-icons vertical-align-bottom link-text"> lens </i> Pink</span>
                  </label>
                  <label class="mt-3">
                    <input type="checkbox" />
                    <span><i class="material-icons vertical-align-bottom yellow-text"> lens </i> Yellow</span>
                  </label>
                </form>
                <span class="card-title mt-10">Brand</span>
                <hr class="p-0 mb-10">
                <form action="#" class="display-grid">
                  <label>
                    <input type="checkbox" />
                    <span>Apple</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>Samsung</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>Dell</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>Sony</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>Nokia</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>JBL</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>Philips</span>
                  </label>
                </form>
                <span class="card-title mt-10">Offers</span>
                <hr class="p-0 mb-10">
                <form action="#" class="display-grid">
                  <label>
                    <input type="checkbox" />
                    <span>Offer</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>No Cost EMI</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>Special Price</span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>Bank Offer</span>
                  </label>
                </form>
                <span class="card-title mt-10">Customer Ratings</span>
                <hr class="p-0 mb-10">
                <form action="#" class="display-grid">
                  <label>
                    <input type="checkbox" />
                    <span>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                    </span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                    </span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                    </span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>
                      <i class="material-icons amber-text"> star </i>
                      <i class="material-icons amber-text"> star </i>
                    </span>
                  </label>
                  <label>
                    <input type="checkbox" />
                    <span>
                      <i class="material-icons amber-text"> star </i>
                    </span>
                  </label>
                </form>
              </div>
            </div>
          </div>
          <div class="col s12 m12 l9">
            <div class="col s12 m4 l4">
              <div class="card animate fadeLeft">
                <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                <div class="card-content">
                  <p>Smartwatches</p>
                  <span class="card-title text-ellipsis">Smartwatch 2.0 LTE Wifi</span>
                  <img src="../../../app-assets/images/cards/watch-2.png" class="responsive-img" alt="">
                  <div class="row">
                    <h5 class="col s12 m12 l8 mt-3">$399.00</h5>
                    <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger"
                      href="#modal1">View</a>
                  </div>
                </div>
              </div>
              <!-- Modal Structure -->
              <div id="modal1" class="modal">
                <div class="modal-content pt-2">
                  <div class="row" id="product-one">
                    <div class="col s12">
                      <a class="modal-close right"><i class="material-icons">close</i></a>
                    </div>
                    <div class="col m6">
                      <img src="../../../app-assets/images/cards/watch-2.png" class="responsive-img" alt="">
                    </div>
                    <div class="col m6">
                      <p>Smartwatches</p>
                      <h5>Smartwatch 2.0 LTE Wifi</h5>
                      <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                      <p>Availability: <span class="green-text">36 Item Available</span></p>
                      <hr class="mb-5">
                      <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                      <p class="mt-3">- Accept SIM card and call</p>
                      <p>- Make calling instead of mobile phone</p>
                      <p>- Sync music play and sync control music</p>
                      <p>- Sync Facebook,Twiter,emailand calendar</p>
                      <h5>$399.00 <span class="prise-text-style ml-2">$459.00</span></h5>
                      <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                      <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="card animate fadeUp">
                <div class="card-content">
                  <p>Headphone</p>
                  <span class="card-title text-ellipsis">Purple Solo 2 Wireless</span>
                  <img src="../../../app-assets/images/cards/headphone.png" class="responsive-img" alt="">
                  <div class="row">
                    <h5 class="col s12 m12 l8 mt-3">$249.00</h5>
                    <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger"
                      href="#modal2">View</a>
                  </div>
                </div>
              </div>

              <!-- Modal Structure -->
              <div id="modal2" class="modal">
                <div class="modal-content">
                  <a class="modal-close right"><i class="material-icons">close</i></a>
                  <div class="row" id="product-two">
                    <div class="col m6">
                      <img src="../../../app-assets/images/cards/headphone.png" class="responsive-img" alt="">
                    </div>
                    <div class="col m6">
                      <p>Headphone</p>
                      <h5>Purple Solo 2 Wireless</h5>
                      <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                      <p>Availability: <span class="red-text">Out of stock</span></p>
                      <hr class="mb-5">
                      <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                      <p class="mt-3">- Fine-tuned acoustics for clarity,</p>
                      <p>- Streamlined design for a custom-fit</p>
                      <p>- Durable and foldable so you can take them on-the-go</p>
                      <p>- ake calls and control music with RemoteTalk cable</p>
                      <h5>$249.00 <span class="prise-text-style ml-2">$559.00</span></h5>
                      <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                      <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 m4 l4">
              <div class="card animate fadeRight">
                <div class="card-content">
                  <p>Smartphone</p>
                  <span class="card-title">iPhone x</span>
                  <img src="../../../app-assets/images/cards/iphone-x.png" class="responsive-img" alt="">
                  <div class="row">
                    <h5 class="col s12 m12 l8 mt-3">$899.00</h5>
                    <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger z-depth-4 z-depth-4 z-depth-4 z-depth-4"
                      href="#modal3">View</a>
                  </div>
                </div>
              </div>
              <!-- Modal Structure -->
              <div id="modal3" class="modal">
                <div class="modal-content">
                  <a class="modal-close right"><i class="material-icons">close</i></a>
                  <div class="row" id="product-three">
                    <div class="col m6">
                      <img src="../../../app-assets/images/cards/iphone-x.png" class="responsive-img" alt="">
                    </div>
                    <div class="col m6">
                      <p>Smartphone</p>
                      <h5>iPhone x</h5>
                      <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                      <p>Availability: <span class="green-text">Available</span></p>
                      <hr class="mb-5">
                      <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                      <p class="mt-3">- Accept SIM card and call</p>
                      <p>- Take photos</p>
                      <p>- Make calling instead of mobile phone</p>
                      <p>- Sync music play and sync control music</p>
                      <p>- Sync Facebook,Twiter,emailand calendar</p>
                      <h5>$899.00</h5>
                      <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                      <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12">
              <div class="card animate fadeUp">
                <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                <div class="card-content">
                  <div class="row" id="product-four">
                    <div class="col m6">
                      <img src="../../../app-assets/images/cards/remote.png" class="responsive-img" alt="">
                    </div>
                    <div class="col m6">
                      <p>Powerbank</p>
                      <h5>Game Remote</h5>
                      <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                      <p>Availability: <span class="green-text">Available</span></p>
                      <hr class="mb-5">
                      <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                      <p class="mt-3">- Dual output USB interfaces</p>
                      <p>- Compatible with all smartphones</p>
                      <p>- Portable design and light weight</p>
                      <p>- Battery type: Lithium-ion</p>
                      <h5 class="red-text">$79.00 <span class="grey-text lighten-2 ml-3">$199.00</span> </h5>
                      <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue z-depth-4 mt-2">ADD TO CART</a>
                      <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange z-depth-4 mt-2">BUY NOW</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="electronic-products">
              <div class="col s12 m4 l4">
                <div class="card animate fadeLeft">
                  <div class="card-content">
                    <p>Powerbank</p>
                    <span class="card-title text-ellipsis">Powerbank 11300 MAH</span>
                    <img src="../../../app-assets/images/cards/powerbank.png" class="responsive-img" alt="">
                    <div class="row">
                      <h5 class="col s12 m12 l8 mt-3">$1,300.00</h5>
                      <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger z-depth-4 z-depth-4 z-depth-4"
                        href="#modal4">View</a>
                    </div>
                  </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal4" class="modal">
                  <div class="modal-content">
                    <a class="modal-close right"><i class="material-icons">close</i></a>
                    <div class="row" id="product-five">
                      <div class="col m6">
                        <img src="../../../app-assets/images/cards/powerbank.png" class="responsive-img" alt="">
                      </div>
                      <div class="col m6">
                        <p>Powerbank</p>
                        <h5>Powerbank 11300 mAh</h5>
                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                        <p>Availability: <span class="green-text">Available</span></p>
                        <hr class="mb-5">
                        <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                        <p class="mt-3">- Dual output USB interfaces</p>
                        <p>- Compatible with all smartphones</p>
                        <p>- Portable design and light weight</p>
                        <p>- Battery type: Lithium-ion</p>
                        <h5>$1,300.00</h5>
                        <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 l4">
                <div class="card animate fadeUp">
                  <div class="card-badge"><a class="white-text"> <b>On Offer</b> </a></div>
                  <div class="card-content">
                    <p>Audio Speakers</p>
                    <span class="card-title text-ellipsis">Wireless Audio System</span>
                    <img src="../../../app-assets/images/cards/speakers.png" class="responsive-img" alt="">
                    <div class="row">
                      <h5 class="col s12 m12 l8 mt-3">$2,299.00</h5>
                      <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger z-depth-4 z-depth-4"
                        href="#modal5">View</a>
                    </div>
                  </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal5" class="modal">
                  <div class="modal-content">
                    <a class="modal-close right"><i class="material-icons">close</i></a>
                    <div class="row" id="product-six">
                      <div class="col m6">
                        <img src="../../../app-assets/images/cards/speakers.png" class="responsive-img" alt="">
                      </div>
                      <div class="col m6">
                        <p>Audio Speakers</p>
                        <h5>Wireless Audio System</h5>
                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                        <p>Availability: <span class="red-text">Out of stock</span></p>
                        <hr class="mb-5">
                        <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                        <p class="mt-3">- 360 Omnidirectional Sound</p>
                        <p>- Compatible with all smartphones</p>
                        <p>- Easy Intuitive Control</p>
                        <p>- Multiroom App</p>
                        <h5>$2,299.00</h5>
                        <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 l4">
                <div class="card animate fadeRight">
                  <div class="card-content">
                    <p>Cameras</p>
                    <span class="card-title text-ellipsis">White NX Mini F1</span>
                    <img src="../../../app-assets/images/cards/cameras.png" class="responsive-img" alt="">
                    <div class="row">
                      <h5 class="col s12 m12 l8 mt-3">$559.00</h5>
                      <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger z-depth-4"
                        href="#modal6">View</a>
                    </div>
                  </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal6" class="modal">
                  <div class="modal-content">
                    <a class="modal-close right"><i class="material-icons">close</i></a>
                    <div class="row" id="product-seven">
                      <div class="col m6">
                        <img src="../../../app-assets/images/cards/cameras.png" class="responsive-img" alt="">
                      </div>
                      <div class="col m6">
                        <p>Cameras</p>
                        <h5>White NX Mini F1 SMART NX</h5>
                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.2 Star</span>
                        <p>Availability: <span class="green-text">Available</span></p>
                        <hr class="mb-5">
                        <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                        <p class="mt-3">- Ultra Slim & Stylish</p>
                        <p>- Perfect for Selfies</p>
                        <p>- Capture & Share on the Go</p>
                        <p>- Outstanding Optics</p>
                        <h5>$559.00</h5>
                        <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 l4">
                <div class="card animate fadeLeft">
                  <div class="card-content">
                    <p>Phone</p>
                    <span class="card-title text-ellipsis">OnePlus 6T</span>
                    <img src="../../../app-assets/images/cards/oneplus-6t.png" class="responsive-img" alt="">
                    <div class="row">
                      <h5 class="col s12 m12 l8 mt-3">$499.00</h5>
                      <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger z-depth-4"
                        href="#modal7">View</a>
                    </div>
                  </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal7" class="modal">
                  <div class="modal-content">
                    <a class="modal-close right"><i class="material-icons">close</i></a>
                    <div class="row" id="product-eight">
                      <div class="col m6">
                        <img src="../../../app-assets/images/cards/oneplus-6t.png" class="responsive-img" alt="">
                      </div>
                      <div class="col m6">
                        <p>Phone</p>
                        <h5>OnePlus 6T</h5>
                        <span class="new badge left ml-0 mr-2" data-badge-caption="">5 Star</span>
                        <p>Availability: <span class="green-text">Available</span></p>
                        <hr class="mb-5">
                        <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                        <p class="mt-3">- Ultra Slim & Stylish</p>
                        <p>- Smoother than Stock.</p>
                        <p>- OxygenOS</p>
                        <p>- Outstanding Optics</p>
                        <h5>$499.00</h5>
                        <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 l4">
                <div class="card animate fadeUp">
                  <div class="card-content">
                    <p>Smart Speakers</p>
                    <span class="card-title text-ellipsis">Amazon Alexa</span>
                    <img src="../../../app-assets/images/cards/smartspeakers.png" class="responsive-img" alt="">
                    <div class="row">
                      <h5 class="col s12 m12 l8 mt-3">$799.00</h5>
                      <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger z-depth-4"
                        href="#modal8">View</a>
                    </div>
                  </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal8" class="modal">
                  <div class="modal-content">
                    <a class="modal-close right"><i class="material-icons">close</i></a>
                    <div class="row" id="product-nine">
                      <div class="col m6">
                        <img src="../../../app-assets/images/cards/smartspeakers.png" class="responsive-img" alt="">
                      </div>
                      <div class="col m6">
                        <p>Smart Speakers</p>
                        <h5>Amazon Alexa</h5>
                        <span class="new badge left ml-0 mr-2" data-badge-caption="">4.9 Star</span>
                        <p>Availability: <span class="green-text">Available</span></p>
                        <hr class="mb-5">
                        <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                        <p class="mt-3">- Ultra Slim & Stylish</p>
                        <p>- Controls smart home devices</p>
                        <p>- Dual speakers powered by Dolby</p>
                        <p>- Alexa Calling</p>
                        <h5>$559.00</h5>
                        <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s12 m4 l4">
                <div class="card animate fadeRight">
                  <div class="card-content">
                    <p>Mouse</p>
                    <span class="card-title text-ellipsis">Apple Magic Mouse</span>
                    <img src="../../../app-assets/images/cards/magic-mouse.png" class="responsive-img" alt="">
                    <div class="row">
                      <h5 class="col s12 m12 l8 mt-3">$359.00</h5>
                      <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger z-depth-4"
                        href="#modal9">View</a>
                    </div>
                  </div>
                </div>
                <!-- Modal Structure -->
                <div id="modal9" class="modal">
                  <div class="modal-content">
                    <a class="modal-close right"><i class="material-icons">close</i></a>
                    <div class="row" id="product-ten">
                      <div class="col m6">
                        <img src="../../../app-assets/images/cards/magic-mouse.png" class="responsive-img" alt="">
                      </div>
                      <div class="col m6">
                        <p>Mouse</p>
                        <h5>Apple Magic Mouse</h5>
                        <span class="new badge left ml-0 mr-2" data-badge-caption="">5 Star</span>
                        <p>Availability: <span class="green-text">Available</span></p>
                        <hr class="mb-5">
                        <span class="vertical-align-top mr-4"><i class="material-icons mr-3">favorite_border</i>Wishlist</span>
                        <p class="mt-3">- Ultra Slim & Stylish</p>
                        <p>- Bluetooth</p>
                        <p>- multi-touch capabilities</p>
                        <p>- Outstanding Optics</p>
                        <h5>$359.00</h5>
                        <a class="waves-effect waves-light btn gradient-45deg-deep-purple-blue mt-2">ADD TO CART</a>
                        <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange mt-2">BUY NOW</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pagination -->
            <div class="col s12 center">
              <ul class="pagination">
                <li class="disabled">
                  <a href="#!">
                    <i class="material-icons">chevron_left</i>
                  </a>
                </li>
                <li class="active"><a href="#!">1</a>
                </li>
                <li class="waves-effect"><a href="#!">2</a>
                </li>
                <li class="waves-effect"><a href="#!">3</a>
                </li>
                <li class="waves-effect"><a href="#!">4</a>
                </li>
                <li class="waves-effect"><a href="#!">5</a>
                </li>
                <li class="waves-effect">
                  <a href="#!">
                    <i class="material-icons">chevron_right</i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div><!-- START RIGHT SIDEBAR NAV -->
      <aside id="right-sidebar-nav">
         <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
            <div class="row">
               <div class="slide-out-right-title">
                  <div class="col s12 border-bottom-1 pb-0 pt-1">
                     <div class="row">
                        <div class="col s2 pr-0 center">
                           <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                        </div>
                        <div class="col s10 pl-0">
                           <ul class="tabs">
                              <li class="tab col s4 p-0">
                                 <a href="#messages" class="active">
                                    <span>Messages</span>
                                 </a>
                              </li>
                              <li class="tab col s4 p-0">
                                 <a href="#settings">
                                    <span>Settings</span>
                                 </a>
                              </li>
                              <li class="tab col s4 p-0">
                                 <a href="#activity">
                                    <span>Activity</span>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="slide-out-right-body">
                  <div id="messages" class="col s12">
                     <div class="collection border-none">
                        <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
                        <ul class="collection p-0">
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-online avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Elizabeth Elliott</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                              </div>
                              <span class="secondary-content medium-small">5.00 AM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-online avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Mary Adams</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                              </div>
                              <span class="secondary-content medium-small">4.14 AM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-off avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-2.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Caleb Richards</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                              </div>
                              <span class="secondary-content medium-small">4.14 AM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-online avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-3.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Caleb Richards</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                              </div>
                              <span class="secondary-content medium-small">9.00 PM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-online avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-4.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">June Lane</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                              </div>
                              <span class="secondary-content medium-small">4.14 AM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-off avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-5.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Edward Fletcher</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                              </div>
                              <span class="secondary-content medium-small">5.15 PM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-online avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-6.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Crystal Bates</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                              </div>
                              <span class="secondary-content medium-small">8.00 AM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-off avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Nathan Watts</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                              </div>
                              <span class="secondary-content medium-small">9.53 PM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-off avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-8.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Willard Wood</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                              </div>
                              <span class="secondary-content medium-small">4.20 AM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-online avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-1.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Ronnie Ellis</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                              </div>
                              <span class="secondary-content medium-small">5.20 AM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-online avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-9.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Daniel Russell</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                              </div>
                              <span class="secondary-content medium-small">12.00 AM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-off avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-10.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Sarah Graves</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                              </div>
                              <span class="secondary-content medium-small">11.14 PM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-off avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-11.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Andrew Hoffman</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                              </div>
                              <span class="secondary-content medium-small">7.30 PM</span>
                           </li>
                           <li class="collection-item sidenav-trigger display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                              <span class="avatar-status avatar-online avatar-50"
                                 ><img src="../../../app-assets/images/avatar/avatar-12.png" alt="avatar" />
                                 <i></i>
                              </span>
                              <div class="user-content">
                                 <h6 class="line-height-0">Camila Lynch</h6>
                                 <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                              </div>
                              <span class="secondary-content medium-small">2.00 PM</span>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div id="settings" class="col s12">
                     <p class="mt-8 mb-0 ml-5 font-weight-900">GENERAL SETTINGS</p>
                     <ul class="collection border-none">
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Notifications</span>
                              <div class="switch right">
                                 <label>
                                    <input checked type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Show recent activity</span>
                              <div class="switch right">
                                 <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Show recent activity</span>
                              <div class="switch right">
                                 <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Show Task statistics</span>
                              <div class="switch right">
                                 <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Show your emails</span>
                              <div class="switch right">
                                 <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Email Notifications</span>
                              <div class="switch right">
                                 <label>
                                    <input checked type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                     </ul>
                     <p class="mt-8 mb-0 ml-5 font-weight-900">SYSTEM SETTINGS</p>
                     <ul class="collection border-none">
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>System Logs</span>
                              <div class="switch right">
                                 <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Error Reporting</span>
                              <div class="switch right">
                                 <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Applications Logs</span>
                              <div class="switch right">
                                 <label>
                                    <input checked type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Backup Servers</span>
                              <div class="switch right">
                                 <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                        <li class="collection-item border-none mt-3">
                           <div class="m-0">
                              <span>Audit Logs</span>
                              <div class="switch right">
                                 <label>
                                    <input type="checkbox" />
                                    <span class="lever"></span>
                                 </label>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div id="activity" class="col s12">
                     <div class="activity">
                        <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
                        <ul class="collection with-header">
                           <li class="collection-item">
                              <div class="font-weight-900">
                                 Homepage mockup design <span class="secondary-content">Just now</span>
                              </div>
                              <p class="mt-0 mb-2">Melissa liked your activity.</p>
                              <span class="new badge amber" data-badge-caption="Important"> </span>
                           </li>
                           <li class="collection-item">
                              <div class="font-weight-900">
                                 Melissa liked your activity Drinks. <span class="secondary-content">10 mins</span>
                              </div>
                              <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                              <span class="new badge light-green" data-badge-caption="Resolved"></span>
                           </li>
                           <li class="collection-item">
                              <div class="font-weight-900">
                                 12 new users registered <span class="secondary-content">30 mins</span>
                              </div>
                              <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                           </li>
                           <li class="collection-item">
                              <div class="font-weight-900">
                                 Tina is attending your activity <span class="secondary-content">2 hrs</span>
                              </div>
                              <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                           </li>
                           <li class="collection-item">
                              <div class="font-weight-900">
                                 Josh is now following you <span class="secondary-content">5 hrs</span>
                              </div>
                              <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                              <span class="new badge red" data-badge-caption="Pending"></span>
                           </li>
                        </ul>
                        <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
                        <ul class="collection with-header">
                           <li class="collection-item">
                              <div class="font-weight-900">
                                 New order received urgent <span class="secondary-content">Just now</span>
                              </div>
                              <p class="mt-0 mb-2">Melissa liked your activity.</p>
                           </li>
                           <li class="collection-item">
                              <div class="font-weight-900">System shutdown. <span class="secondary-content">5 min</span></div>
                              <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                              <span class="new badge blue" data-badge-caption="Urgent"> </span>
                           </li>
                           <li class="collection-item">
                              <div class="font-weight-900">
                                 Database overloaded 89% <span class="secondary-content">20 min</span>
                              </div>
                              <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                           </li>
                        </ul>
                        <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
                        <ul class="collection with-header">
                           <li class="collection-item">
                              <div class="font-weight-900">System error <span class="secondary-content">10 min</span></div>
                              <p class="mt-0 mb-2">Melissa liked your activity.</p>
                           </li>
                           <li class="collection-item">
                              <div class="font-weight-900">
                                 Production server down. <span class="secondary-content">1 hrs</span>
                              </div>
                              <p class="mt-0 mb-2">Here are some news feed interactions concepts.</p>
                              <span class="new badge blue" data-badge-caption="Urgent"></span>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- BEGIN PAGE VENDOR JS-->
           <script src="../../../app-assets/vendors/noUiSlider/nouislider.min.js" type="text/javascript"></script>

          <!-- BEGIN PAGE LEVEL JS-->
          <script src="../../../app-assets/js/scripts/advance-ui-modals.js" type="text/javascript"></script>
          <script src="../../../app-assets/js/scripts/eCommerce-products-page.js" type="text/javascript"></script>
@endsection
