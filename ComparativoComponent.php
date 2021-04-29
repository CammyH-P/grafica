<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Archivo;
use App\Models\AreaAcademica;
use App\Models\Carrera;
use App\Models\Comparativo;
use App\Models\Competencia;
use App\Models\Docente;
use App\Models\Periodo;
use Illuminate\Support\Facades\DB;
use League\CommonMark\DocParserInterface;

class ComparativoComponent extends Component
{
    public $year = 2010;
    public $c1 = 0, $c2 = 0, $c3 = 0;
    public $ti1 = '', $ti2 = '', $ti3 = '';
    public $a, $b, $c, $d, $e, $f, $g, $h, $i, $j;

    public function render()
    {
        $periodos = Periodo::all();
        $comparativo = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1")->orWhere('periodo', '=', $this->year .  "-2")->orWhere('periodo', $this->year .  "-3")->orderBy('periodo', 'DESC');
        })->get();

        $a = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 1)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->a = $this->array_flatten($a);

        $b = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 2)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->b = $this->array_flatten($b);

        $c = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 3)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->c = $this->array_flatten($c);

        $d = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 4)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->d = $this->array_flatten($d);

        $e = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 5)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->e = $this->array_flatten($e);

        $f = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 6)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->f = $this->array_flatten($f);

        $g = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 7)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->g = $this->array_flatten($g);

        $h = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 8)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->h = $this->array_flatten($h);

        $i = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 9)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->i = $this->array_flatten($i);

        $j = Comparativo::whereHas('periodo', function ($query) {
            $query->where('periodo', '=', $this->year . "-1");
        })->where('competencia_id', 10)->select('cb', 'ec', 'isc', 'ind', 'eye', 'ingen', 'mec', 'qyb',)->get()->toArray();
        $this->j = $this->array_flatten($j);


        if ($comparativo->count() == 10) {
            $this->clean();
            $this->c1 = 1;
            $this->ti1 = $this->setTitle($comparativo[0]->periodo->periodo);
        }
        if ($comparativo->count() == 20) {
            $this->clean();
            $this->c1 = 1;
            $this->c2 = 1;
            $this->ti1 = $this->setTitle($comparativo[0]->periodo->periodo);
            $this->ti2 = $this->setTitle($comparativo[10]->periodo->periodo);
        }
        if ($comparativo->count() == 30) {
            $this->clean();
            $this->c1 = 1;
            $this->c2 = 1;
            $this->c3 = 1;
            $this->ti1 = $this->setTitle($comparativo[0]->periodo->periodo);
            $this->ti2 = $this->setTitle($comparativo[10]->periodo->periodo);
            $this->ti3 = $this->setTitle($comparativo[20]->periodo->periodo);
        }

        return view('livewire.comparativo-component', compact('periodos', 'comparativo', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'));
    }

    public function clean()
    {
        //restablece programáticamente los valores de propiedad pública a su estado inicial.
        $this->reset(['c1', 'c2', 'c3', 'ti1', 'ti2', 'ti3']);
    }

    public function setTitle($periodo)
    {
        if (str_ends_with($periodo, '1')) {
            return 'Enero Junio';
        } elseif (str_ends_with($periodo, '2')) {
            return 'Verano';
        } else {
            return 'Agosto Diciembre';
        }
    }

    function array_flatten($array)
    {
        foreach ($array as $ar) {
            $array = array($ar['cb'], $ar['ec'], $ar['isc'], $ar['ind'], $ar['eye'], $ar['ingen'], $ar['mec'], $ar['qyb']);
        }
        return $array;
    }
}
