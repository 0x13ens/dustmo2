@extends('layouts.dashboard')

@section('title')

@endsection

@section('content')
<div id="app">
<div id="ecommerce-product">
        <div class="row">
           <div class="col s12 m4">
              <div class="card animate fadeLeft">
                 <div class="card-content  center">
                    <h6 class="card-title font-weight-400 mb-0">Airmo Nano</h6>
                    <img src="../../../app-assets/images/cards/airmo-nano.png" alt="" class="responsive-img">
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

            <!-- High pressure = Low pressure = thunderstorms if a fire starts in the bottom of a high rise building the smoke rises to counter this
            some buildings seal off the top flow to create a high pressure meaning the smoke cannot rise which kills people.-->
           <div class="row">
              <div class="col s12 m3">
                 <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
                    <div class="card-content center">
                       <img src="../../../app-assets/images/weather/good.png" class="width-40 border-round z-depth-5" alt="">
                       <h5 class="white-text lighten-4">{{ $temperature->pressure }} <small>hPa</small></h5>
                       <p class="white-text lighten-4">Pressure</p>
                    </div>
                 </div>
              </div>
              <div class="col s12 m3">
                 <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3 animate fadeUp">
                    <div class="card-content center">
                       <img src="../../../app-assets/images/weather/good.png" class="width-40 border-round z-depth-5" alt="">
                    <h5 class="white-text lighten-4">{{ $temperature->temperature }} <small>℃</small></h5>
                       <p class="white-text lighten-4">Temperature</p>
                    </div>
                 </div>
              </div>
              <div class="col s12 m3">
                 <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3 animate fadeUp">
                    <div class="card-content center">
                       <img src="../../../app-assets/images/weather/good.png" class="width-40 border-round z-depth-5" alt="">
                       <h5 class="white-text lighten-4">{{ $temperature->altitude }}</h5>
                       <p class="white-text lighten-4">Altitude</p>
                    </div>
                 </div>
              </div>
              <div class="col s12 m3">
                 <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3 animate fadeUp">
                    <div class="card-content center">
                       <img src="../../../app-assets/images/weather/humidity.png" class="width-40 border-round z-depth-5" alt="">
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
                  <table class="striped">
                    <thead>
                      <tr>
                        <th data-field="id">id</th>
                        <th data-field="temperature">Temperature</th>
                        <th data-field="Pressure">Pressure</th>
                        <th data-field="Altitude">Altitude</th>
                        <th data-field="Humidity">Humidity</th>
                        <th data-field="LPG">LPG</th>
                        <th data-field="C0">C0</th>
                        <th data-field="Smoke">Smoke</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($sensors as $sensor)
                      <tr v-for="sensors in sensor">
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

                        @elseif ($sensor->temperature <= 23.99)
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
                        <td>0 <b>ppm</b></td>
                        <td>0 <b>ppm</b></td>
                        <td>0 <b>ppm</b></td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {{ $sensors->links() }}
                </div>
              </div>
            </div>
    <!-- END RIGHT SIDEBAR NAV -->
              </div>
            </div>
          </div>
        <!-- END: Page Main-->
    </div>

        <script>

            const app = new Vue([
                el: '#app',
                data: {
                    sensors: {},
                    mounted() {
                        this.getSensors();
                    },
                    methods: {
                        getSensors() {
                            axios.get('/api/sensors')
                            .then((response) => {
                                this.sensors = response.data
                            });
                            .catch(function (error) {
                                console.log(error);
                            })
                        },
                    }
                }
            ]);
        </script>
@endsection
