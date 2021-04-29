<div class="py-2">
    <div class="max-w-full mx-auto sm:px-4 lg:px-4">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 mb-4">
            <label class="px-3 block uppercase tracking-wide text-gray-700  font-bold mb-2" for="grid-last-name">
                Búsqueda
            </label>
            <div class="grid grid-cols-9 gap-3 ">
                <div class="col-span-12 sm:col-span-6 md:col-span-8 ">
                    <div class="flex flex-col ">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-state">
                            Periodo
                        </label>

                        <select
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:shadow-outline sm:text-sm leading-tight"
                            id="grid-state" wire:model="year">
                            @for ($i = 2010; $i <= date('Y'); $i++)
                                <option value="{{ $i }}" class=" text-gray-700">{{ $i }}</option>
                            @endfor
                        </select>

                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-1 ">
                    <div class="flex flex-col">
                        <label class="block text-sm font-bold uppercase text-gray-700"><br></label>
                        <button type="button"
                            class="m-0.5 inline-block px-6 py-2 text-xs font-medium leading-6 items-center text-blue-700 uppercase transition bg-transparent border-2 border-blue-700 rounded-full hover:bg-blue-100 focus:outline-none">
                            Descargar
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex flex-col mb-6">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    @if ($comparativo->count())
                        @if ($c1 === 1)
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th rowspan="3" scope="col-1"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Aspectos evaluados
                                            </th>
                                            <th colspan="18"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Periodo
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="9"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ $ti1 }}
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                CB</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                EC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ISC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                IND</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                EYE</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                INGEN</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                MEC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                QYB</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @for ($i = 0; $i < 9; $i++)
                                            <tr>

                                                <th class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-justify font-medium text-gray-900">
                                                        {{ $comparativo[$i]->competencia->competencia }}
                                                    </div>
                                                </th>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->cb }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->ec }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->isc }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->ind }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->eye }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->ingen }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->mec }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->qyb }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->total }} <br></div>
                                                </td>
                                            </tr>
                                        @endfor
                                        {{-- <tr class="text-sm"><th> sin info</th></tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        @else
                        @endif
                        @if ($c2 === 1)
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-4">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th rowspan="3" scope="col-1"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Aspectos evaluados
                                            </th>
                                            <th colspan="18"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Periodo
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="9"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ $ti2 }}
                                        </tr>
                                        <tr>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                CB</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                EC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ISC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                IND</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                EYE</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                INGEN</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                MEC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                QYB</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @if ($c2 === 1)
                                            @for ($i = 10; $i < 19; $i++)
                                                <tr>
                                                    <th class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-justify font-medium text-gray-900">
                                                            {{ $comparativo[$i]->competencia->competencia }}
                                                        </div>
                                                    </th>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->cb }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->ec }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->isc }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->ind }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->eye }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->ingen }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->mec }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->qyb }}</div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $comparativo[$i]->total }} <br></div>
                                                    </td>
                                                </tr>
                                            @endfor
                                        @else
                                            <tr class="text-sm">
                                                <th> sin info</th>
                                            </tr>
                                        @endif

                                    </tbody>
                                </table>
                            </div>
                        @else
                        @endif
                        @if ($c3 === 1)
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg mt-4">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th rowspan="3" scope="col-1"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Aspectos evaluados
                                            </th>
                                            <th colspan="18"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Periodo
                                            </th>
                                        </tr>
                                        <tr>
                                            <th colspan="9"
                                                class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                {{ $ti3 }}
                                            </th>
                                        </tr>
                                        <tr>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                CB</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                EC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                ISC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                IND</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                EYE</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                INGEN</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                MEC</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                QYB</th>
                                            <th scope="col-1"
                                                class="px-3 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @for ($i = 20; $i < 29; $i++)
                                            <tr>
                                                <th class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-justify font-medium text-gray-900">
                                                        {{ $comparativo[$i]->competencia->competencia }}
                                                    </div>
                                                </th>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->cb }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->ec }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->isc }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->ind }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->eye }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->ingen }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->mec }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->qyb }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $comparativo[$i]->total }} <br></div>
                                                </td>
                                            </tr>
                                        @endfor
                                        {{-- <tr class="text-sm"><th> sin info</th></tr> --}}
                                    </tbody>
                                </table>
                            </div>

                        @else
                        @endif
                    @else
                        <div class="bg-yellow-100 border-t-4 border-yellow-300 rounded-b text-yellow-900 px-4 py-3 shadow-md my-3"
                            role="alert">
                            <div class="flex">
                                <div>
                                    <p class="text-sm">Aún no se ha guardado información en este año</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <figure class="highcharts-figure">
            <div id="container"></div>
        </figure>
    </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
    var a = <?php echo json_encode($a); ?>;    var b = <?php echo json_encode($b); ?>;    var c = <?php echo json_encode($c); ?>;    var d = <?php echo json_encode($d); ?>;    var e = <?php echo json_encode($e); ?>;    var f = <?php echo json_encode($f); ?>;    var g = <?php echo json_encode($g); ?>;    var h = <?php echo json_encode($h); ?>;    var i = <?php echo json_encode($i); ?>;    var j = <?php echo json_encode($j); ?> ; //  var a = @this.a
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Enero - Junio'
        },
        subtitle: {
            text: 'Evaluación docente'
        },
        xAxis: {
            categories: [
                'CB',
                'EC',
                'ISC',
                'IND',
                'EYE',
                'INGEN',
                'MEC',
                'QYB',
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Docentes'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'DOMINIO DE LA ASIGNATURA',
            data: a

        }, {
            name: 'PLANIFICACIÓN DEL CURSO',
            data: b

        }, {
            name: 'DISEÑO DE AMBIENTES DE APRENDIZAJE',
            data: c

        }, {
            name: 'ESTRATEGÍAS, MÉTODOS Y TÉCNICAS DE APRENDIZAJE',
            data: d

        }, {
            name: 'MOTIVACIÓN',
            data: e

        }, {
            name: 'EVALUACIÓN DE APRENDIZAJE',
            data: f

        }, {
            name: 'COMUNICACIÓN',
            data: g

        }, {
            name: 'GESTIÓN DEL CURSO',
            data: h

        }, {
            name: 'TECNOLOGÍAS DE LA INF. Y LA COMUNICACIÓN',
            data: i

        }, {
            name: 'SATISFACCIÓN GENERAL',
            data: j

        }]
    });

</script>
