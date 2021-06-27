<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scan Result') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="pie-chart" class="max-w-5xl mx-auto sm:px-6 lg:px-8"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

    <table class="min-w-full leading-normal">
        <thead>
          <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-m font-semibold text-gray-700 uppercase tracking-wider">
              Type
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-m font-semibold text-gray-700 uppercase tracking-wider">
              Details
            </th>
          </tr>
        </thead>

     <tbody class="bg-white divide-y divide-gray-200">
        <tr>
           <td class="px-6 py-4 whitespace-nowrap">
             <div class="flex items-center">
               <div class="ml-4">
                 <div class="text-m font-medium text-gray-900">
                   Website Info
                 </div>
                </td><td>
                 <div class="text-m text-gray-500">
                    <ol>
                        @for ($i = 0; $i < count($data['data'][0]["Cms-info"]); $i++)
                            <li> {{ $data['data'][0]["Cms-info"][$i] }}</li>
                        @endfor
                      </ol>
                 </div>
               </div>
             </div>
           </td>
        </tr>
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="ml-4">
                  <div class="text-m font-medium text-gray-900">
                    Low Vulnerability
                  </div>
                 </td><td>
                  <div class="text-m text-gray-500">
                      <ol>
                        @for ($i = 0; $i < count($data['data'][0]["Low-vulnerability"]); $i++)
                            <li> {{ $data['data'][0]["Low-vulnerability"][$i] }}</li>
                        @endfor
                      </ol>
                    {{-- {{$data['data'][0]["Low-vulnerability"]}} --}}
                  </div>
                </div>
              </div>
            </td>
        </tr>
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="ml-4">
                  <div class="text-m font-medium text-gray-900">
                    Medium Vulnerability
                  </div>
                 </td><td>
                  <div class="text-m text-gray-500">
                    <ol>
                        @for ($i = 0; $i < count($data['data'][0]["Medium-vulnerability"]); $i++)
                            <li> {{ $data['data'][0]["Medium-vulnerability"][$i] }}</li>
                        @endfor
                      </ol>
                  </div>
                </div>
              </div>
            </td>
        </tr>
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="flex items-center">
                <div class="ml-4">
                  <div class="text-m font-medium text-gray-900">
                    High Vulnerability
                  </div>
                 </td><td>
                  <div class="text-m text-gray-500">
                    <ol>
                        @for ($i = 0; $i < count($data['data'][0]["High-vulnerability"]); $i++)
                            <li> {{ $data['data'][0]["High-vulnerability"][$i] }}</li>
                        @endfor
                      </ol>
                  </div>
                </div>
              </div>
            </td>
        </tr>
    </tbody>

                    </div>
            </div>
        </div>
    </div>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <script>
            var data=<?php echo json_encode($data);?>;
            // console.log(data);
            countHigh=data['data'][0].countHigh;
            countMed=data['data'][0].countMed;
            countLow=data['data'][0].countLow;
            countTotal=data['data'][0].countTotal;
            cmsInfo=data['data'][0]["Cms-info"];
            lowVulnerability=data['data'][0]["Low-vulnerability"];
            medVulnerability=data['data'][0]["Medium-vulnerability"];
            highVulnerability=data['data'][0]["High-vulnerability"];
            // document.getElementById("lowVulnerability").innerHTML = lowVulnerability;
            console.log(lowVulnerability)
        </script>
        <script>

                Highcharts.setOptions({
                colors: ['#ffff00','#ffa500','#ff0000' ]
                });

                Highcharts.chart('pie-chart', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: 'Vulnerability Percentage'
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.y}</b>'
                    },
                    accessibility: {
                        point: {
                            valueSuffix: '%'
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                            }
                        }
                    },

                    series: [{
                            name: 'Vulnerability',
                            colorByPoint: true,
                            data: [{
                                name: 'Low Vulnerability',
                                y: countLow ,
                                sliced: true,
                                selected: true
                            }, {
                                name: 'Medium Vulnerability',
                                y: countMed
                            }, {
                                name: 'High Vulnerabilty',
                                y: countHigh
                            }]
                        }]
                    });


        </script>



</x-app-layout>
