@extends('layouts.dashboard')

@section('title')

@endsection

@section('content')

<div id="ecommerce-product">
        <div class="row">
           <div class="col s12 m4">
              <div class="card animate fadeLeft">
                 <div class="card-content  center">
                    <h6 class="card-title font-weight-400 mb-0">Airmo Nano</h6>
                    <img src="<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 800 600">
                        <defs>
                          <linearGradient id="liquidGrad" x1="557" y1="150" x2="557" y2="546" gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#FF0909"/>
                            <stop offset="0.2" stop-color="#F3481A"/>
                            <stop offset="0.5" stop-color="#FABA2C"/>
                            <stop offset="1" stop-color="#00BCF2"/>
                          </linearGradient>
                      <rect id="tube" x="357" y="150" width="86" height="400" rx="43" ry="43"/>
                          <clipPath id="liquidMask">
                              <use xlink:href="#tube" class="liquidMask" />
                          </clipPath>
                         <clipPath id="tubeMask">
                              <use xlink:href="#tube" class="liquidMask" />
                          </clipPath>
                         <path id="liquid" d="M757,552v490H357V552c50,0,50,20,100,20s50-20,100-20,50,20,100,20S707,552,757,552Z" />
                      <mask id="gradMask">

                            <use xlink:href="#liquid" class="liquid" x="0" fill="#FCEFD6" />
                            <use xlink:href="#liquid" class="liquid" x="0" fill="#EEE" opacity="0.7"/>

                          </mask>
                        </defs>


                          <g class="whole" transform="translate(0, -40)">

                                 <use xlink:href="#tube" class="tubeBg" fill="#C8D9D3" opacity="0.61"/>

                            <g class="dragger" transform="translate(-6, 0)">
                              <circle cx="294" cy="540" r="36" fill="#3A3335"/>
                              <path class="dragTip" d="M315.5,556.76,299.24,540.5l16.26-16.26,36.26,16.26Z" fill="#3A3335"/>
                              <text class="label" x="294" y="551">100</text>
                      <!--  <path id="dragShine" d="M330,540c-26,2-18-44-72,0a36,36,0,0,1,72,0Z" fill="#E9E9E9" opacity="0.052"/>    -->
                            </g>


                       <g mask="url(#gradMask)">
                              <use xlink:href="#tube" fill="url(#liquidGrad)" />
                        </g>
                        <line class="tubeShine" x1="371" y1="200" x2="371" y2="443" fill="none" stroke="#FFF" stroke-linecap="round" stroke-miterlimit="10" stroke-width="8" opacity="0.21" stroke-dasharray="153 30" stroke-dashoffset="-20"/>
                       <!--        <text class="tubeLabel" x="400" y="180">100°</text>
                              <text class="tubeLabel" x="400" y="356">50°</text>
                              <text class="tubeLabel" x="400" y="540">0°</text> -->
                            <g class="measurements" fill="none" stroke="#FCEFD6" stroke-width="3" stroke-linecap="round" opacity="1">
                              <line x1="358" y1="196" x2="370" y2="196" />
                              <line x1="358" y1="234" x2="370" y2="234" />
                              <line x1="358" y1="273" x2="370" y2="273" />
                              <line x1="358" y1="311" x2="370" y2="311" />
                              <line x1="358" y1="350" x2="370" y2="350" />
                              <line x1="358" y1="388" x2="370" y2="388" />
                              <line x1="358" y1="426" x2="370" y2="426" />
                              <line x1="358" y1="465" x2="370" y2="465" />
                              <line x1="358" y1="503" x2="370" y2="503" />
                            </g>

                      <!--  <rect class="tubeShine" x="372" y="162" width="56" height="364.02" rx="31.5" ry="31.5" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="8" stroke-linecap="round" stroke-dasharray="15 30" opacity="0.31"/> -->
                        <circle class="follower" cx="400" cy="540" r="0" fill="#62B6CB" fill-opacity="1" stroke="#FCEFD6" stroke-width="0"/>




                       </g>
                      </svg>
                      " alt="" class="responsive-img">
                    <p><b>Bedroom Sensor</b></p>
                    <p>Pressure, Temperature, Humidity</p>
                 </div>
                 <div class="card-action border-non center">
                    <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">$ 999/-</a>
                 </div>
              </div>
           </div>
           <div class="col s12 m8 l8">
                <div id="revenue-chart" class="card animate fadeUp">
                   <div class="card-content">
                      <h4 class="header mt-0">
                         Sensor Info
                         <span class="purple-text small text-darken-1 ml-1">
                            <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span>
                         <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Details</a>
                      </h4>
                      <div class="row">
                         <div class="col s12">
                            <div class="yearly-revenue-chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                               <canvas id="thisYearRevenue" class="firstShadow chartjs-render-monitor" height="388" width="1602" style="display: block; height: 259px; width: 1068px;"></canvas>
                               <canvas id="lastYearRevenue" height="388" width="1602" class="chartjs-render-monitor" style="display: block; height: 259px; width: 1068px;"></canvas>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
        </div>
        <!-- ecommerce product end-->
        <!-- ecommerce offers start-->
        <div id="ecommerce-offer">
           <div class="row">
              <div class="col s12 m3">
                 <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
                    <div class="card-content center">
                       <img src="../../../app-assets/images/icon/apple-watch.png" class="width-40 border-round z-depth-5" alt="">
                       <h5 class="white-text lighten-4">{{ $temperature->pressure }} <small>hPa</small></h5>
                       <p class="white-text lighten-4">Pressure</p>
                    </div>
                 </div>
              </div>
              <div class="col s12 m3">
                 <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
                    <div class="card-content center">
                       <img src="../../../app-assets/images/icon/printer.png" class="width-40 border-round z-depth-5" alt="">
                    <h5 class="white-text lighten-4">{{ $temperature->temperature }} <small>℃</small></h5>
                       <p class="white-text lighten-4">Temperature</p>
                    </div>
                 </div>
              </div>
              <div class="col s12 m3">
                 <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
                    <div class="card-content center">
                       <img src="../../../app-assets/images/icon/laptop.png" class="width-40 border-round z-depth-5" alt="">
                       <h5 class="white-text lighten-4">{{ $temperature->altitude }}</h5>
                       <p class="white-text lighten-4">Altitude</p>
                    </div>
                 </div>
              </div>
              <div class="col s12 m3">
                 <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
                    <div class="card-content center">
                       <img src="../../../app-assets/images/icon/bowling.png" class="width-40 border-round z-depth-5" alt="">
                       <h5 class="white-text lighten-4">{{ $temperature->humidity }}  <small>%</small></h5>
                       <p class="white-text lighten-4">Humidity</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- ecommerce offers end-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
     </div>

  <!-- Striped Table -->
  <div class="row">
        <div class="col s12 m12 l12">
          <div id="striped-table" class="card card card-default scrollspy">
            <div class="card-content">
              <h4 class="card-title">Sensor Data</h4>
              <p class="mb-2">Add <code class=" language-markup">class="striped"</code> to the table tag for a striped
                table</p>
              <div class="row">
                <div class="col s12">
                </div>
                <div class="col s12">
                  <table class="striped">
                    <thead>
                      <tr>
                        <th data-field="id">id</th>
                        <th data-field="temperature">Temperature</th>
                        <th data-field="Pressure">Pressure</th>
                        <th data-field="Altitude">Altitude</th>
                        <th data-field="Humidity">Humidity</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($sensors as $sensor)
                      <tr>
                        <td>{{ $sensor->id }}</td>

                        <!--The basic level of warmth required for a healthy and well-dressed person is 18°C. This standard is recognized by the World Health Organization and is the minimum standard in the latest UK cold weather plan.

                        Here are some basic benchmarks for indoor temperatures:

                        > 24°C  - cardiovascular risk

                        18-21°C -  comfortable temperature

                        18°C   - minimum for comfort

                        12-16°C   - respiratory risk

                        <12°C  - cardiovascular risk

                        9°C – hypothermia risk -->

                        @if ($sensor->temperature <= 9)
                        <td><b><span class="red-text text-darken-2">{{ $sensor->temperature }}</span> ℃ Hypothermia Risk</b> </td>

@elseif ($sensor->temperature <= 12)
                        <td><b><span class="red-text text-darken-2">{{ $sensor->temperature }}</span> ℃ Cardiovascular Risk</b> </td>

@elseif ($sensor->temperature <= 16)
                        <td><b><span class="red-text text-darken-2">{{ $sensor->temperature }}</span> ℃ Respiratory Risk</b> </td>

@elseif ($sensor->temperature <= 23)
                        <td><b><span class="blue-text text-darken-2">{{ $sensor->temperature }}</span> ℃  Comfortable</b> </td>

@elseif ($sensor->temperature >= 24)
                        <td><b><span class="red-text text-darken-2">{{ $sensor->temperature }}</span> ℃  Cardiovascular Risk</b> </td>

@endif


                        <td>{{ $sensor->pressure }} <b>hPa</b></td>
                        <td>{{ $sensor->altitude }}</td>
                        @if ($sensor->humidity > 30 ) <!-- If the humidity is over 40% we make it bold -->
                        <td><b><span class="blue-text text-darken-2">{{ $sensor->humidity }}</span> % Comfortable</b></td>
                        @elseif ($sensor->humidity > 55)
                        <td><b><span class="red-text text-darken-2">{{ $sensor->humidity }}</span> % High</b></td>
                        @else
                        <td>{{ $sensor->humidity }} %</td>
                        @endif
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {{ $sensors->links() }}
                </div>
              </div>
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

       <!-- Slide Out Chat -->
       <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
          <li class="center-align pt-2 pb-2 sidenav-close chat-head">
             <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
          </li>
          <li class="chat-body">
             <ul class="collection">
                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                   <span class="avatar-status avatar-online avatar-50"
                      ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                   </span>
                   <div class="user-content speech-bubble">
                      <p class="medium-small">hello!</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                   <div class="user-content speech-bubble-right">
                      <p class="medium-small">How can we help? We're here for you!</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                   <span class="avatar-status avatar-online avatar-50"
                      ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                   </span>
                   <div class="user-content speech-bubble">
                      <p class="medium-small">I am looking for the best admin template.?</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                   <div class="user-content speech-bubble-right">
                      <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
                   </div>
                </li>

                <li class="collection-item display-grid width-100 center-align">
                   <p>8:20 a.m.</p>
                </li>

                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                   <span class="avatar-status avatar-online avatar-50"
                      ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                   </span>
                   <div class="user-content speech-bubble">
                      <p class="medium-small">Ohh! very nice</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                   <div class="user-content speech-bubble-right">
                      <p class="medium-small">Thank you.</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                   <span class="avatar-status avatar-online avatar-50"
                      ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                   </span>
                   <div class="user-content speech-bubble">
                      <p class="medium-small">How can I purchase it?</p>
                   </div>
                </li>

                <li class="collection-item display-grid width-100 center-align">
                   <p>9:00 a.m.</p>
                </li>

                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                   <div class="user-content speech-bubble-right">
                      <p class="medium-small">From ThemeForest.</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                   <div class="user-content speech-bubble-right">
                      <p class="medium-small">Only $24</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                   <span class="avatar-status avatar-online avatar-50"
                      ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                   </span>
                   <div class="user-content speech-bubble">
                      <p class="medium-small">Ohh! Thank you.</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
                   <span class="avatar-status avatar-online avatar-50"
                      ><img src="../../../app-assets/images/avatar/avatar-7.png" alt="avatar" />
                   </span>
                   <div class="user-content speech-bubble">
                      <p class="medium-small">I will purchase it for sure.</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                   <div class="user-content speech-bubble-right">
                      <p class="medium-small">Great, Feel free to get in touch on</p>
                   </div>
                </li>
                <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
                   <div class="user-content speech-bubble-right">
                      <p class="medium-small">https://pixinvent.ticksy.com/</p>
                   </div>
                </li>
             </ul>
          </li>
          <li class="center-align chat-footer">
             <form class="col s12" onsubmit="slide_out_chat()" action="javascript:void(0);">
                <div class="input-field">
                   <input id="icon_prefix" type="text" class="search" />
                   <label for="icon_prefix">Type here..</label>
                   <a onclick="slide_out_chat()"><i class="material-icons prefix">send</i></a>
                </div>
             </form>
          </li>
       </ul>
    </aside>
    <!-- END RIGHT SIDEBAR NAV -->
                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
        <ul>
            <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
            <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
            <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
            <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
        </ul>
    </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Page Main-->

<script>
body {
 background-color: #FCEFD6;
 overflow: hidden;
 text-align:center;
}
body,
html {
 height: 50%;
 width: 100%;
 margin: 0;
 padding: 0;
 overflow: hidden;
}

svg {

 width: 100%;
 height: 100%;

}

.label{
 fill:#FFFCF9;
 font-size:1.8em;
 font-family: "din-condensed-web", sans-serif;
 /* font-family: "filson-soft", sans-serif; */
 text-anchor:middle;
 letter-spacing:1.2px;
}


 .tubeLabel{
 fill:#FCEFD6;
 font-size:1.4em;
 font-family: "din-condensed-web", sans-serif;
 /* font-family: "filson-soft", sans-serif; */
 text-anchor:middle;
}
.dragger{
 -webkit-tap-highlight-color:transparent;
}
</script>

<script>
var xmlns = "http://www.w3.org/2000/svg",
  xlinkns = "http://www.w3.org/1999/xlink",
  select = function(s) {
    return document.querySelector(s);
  },
  selectAll = function(s) {
    return document.querySelectorAll(s);
  },
    liquid = selectAll('.liquid'),
    tubeShine = select('.tubeShine'),
    label = select('.label'),
    follower = select('.follower'),
    dragger = select('.dragger'),
    dragTip = select('.dragTip'),
    minDragY = -380,
    liquidId = 0,
    step = Math.abs(minDragY/100),
    snap = Math.abs(minDragY/10),
    followerVY = 0


TweenMax.set('svg', {
  visibility: 'visible'
})

TweenMax.set(dragTip, {
 transformOrigin:'20% 50%'
})

var tl = new TimelineMax()
tl.staggerTo(liquid, 0.7, {
 x:'-=200',
 ease:Linear.easeNone,
 repeat:-1
},0.9)

tl.time(100);

document.addEventListener("touchmove", function(event){
    event.preventDefault();
});
Draggable.create(dragger, {
 type:'y',
 bounds:{minY:minDragY, maxY:0},
 onDrag:onUpdate,
 throwProps:true,
 throwResistance:2300,
 onThrowUpdate:onUpdate,
 overshootTolerance:0,
 snap:function(value){
  //Use this to snap the values to steps of 10
  //return Math.round(value/snap) * snap
 }
})

function onUpdate(){
 liquidId = Math.abs(Math.round(dragger._gsTransform.y/step));

 label.textContent = liquidId + '°';
 TweenMax.to(liquid, 1.3, {
  y:dragger._gsTransform.y*1.12,
  ease:Elastic.easeOut.config(1,0.4)
 })

}

TweenMax.to(follower, 1, {
 y:'+=0',
 repeat:-1,
 modifiers:{
  y:function(y, count){
  followerVY += (dragger._gsTransform.y - follower._gsTransform.y) * 0.23;
   followerVY *= 0.69;
   return follower._gsTransform.y + followerVY;
  }
 }
})

TweenMax.to(dragTip, 1, {
 rotation:'+=0',
 repeat:-1,
 modifiers:{
  rotation:function(rotation, count){
   return rotation-followerVY
  }
 }
})

TweenMax.to(label, 1, {
 y:'+=0',
 repeat:-1,
 modifiers:{
  y:function(y, count){
   return y-followerVY * 0.5
  }
 }
})


TweenMax.to(dragger, 1.4, {
 y:minDragY/2,
 onUpdate:onUpdate,
 ease:Expo.easeInOut
})


//ScrubGSAPTimeline(tl);


</script>
@endsection
