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
                <span class="card-title mt-10">Air Quality</span>
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
                  <img src="/app-assets/images/cards/airmo-nano.png" class="responsive-img" alt="">
                  <div class="row">
                    <h5 class="col s12 m12 l8 mt-3">$399.00</h5>
                    <a class="col s12 m12 l4 mt-2 waves-effect waves-light gradient-45deg-deep-purple-blue btn modal-trigger"
                      href="http://dustmo.com/sensors/1">View</a>
                  </div>
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
