<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home')->with('viewData', [
            'title' => 'Home Page - Online Store',
        ]);
    }

    public function submit(Request $request)
    {
        $form = $request->validate([
            'money' => 'required',
        ]);

        $moneys = str_replace(".", "", $form['money']);
        $check = $this->paid($moneys);

        return view('home')->with('data', [
            'moneys' => $check['moneys'],
            'round_up' => number_format($check['round_up'], 2, ",", "."),
            'input' => number_format($moneys, 2, ",", "."),
        ]);
    }

    private function paid($total)
    {
        $my_moneys = [100, 200, 500, 1000, 2000, 5000, 10000, 20000, 50000, 100000];
        // bulatkan nilai total ke angka terdekat

        if ($total <1000) {
            $new_total = ceil($total / 100) * 100;
        } else {
            $new_total = $this->roundUpToAny($total);
        }

        $coins = [];
        foreach ($my_moneys as $key => $value) {
            if ($new_total >= $value) {
                $coins[] = $value;
                unset($my_moneys[$key]);
            }
        }

        rsort($coins);
        $result = $this->cetak($new_total, ($coins));
        foreach ($my_moneys as $key => $value) {
            $result[] = number_format($value, 2, ",", ".");
        }

        return [
            'moneys' => $result,
            'round_up' => $new_total,
        ];
    }

    private function cetak($new_total = 0, $coins = [])
    {
        $result = [];
        foreach ($coins as $key => $value) {
            if ($new_total % $value == 0) {
                $result[] = 'Bayar dengan ' . ($new_total / $value) . ' pecahan ' . $value;
            } else {
                // $result[] = non_modulo($new_total, $coins);
            }
        }
        return $result;
    }

    private function roundUpToAny($n, $x = 500)
    {
        return intval(round(($n + $x / 2) / $x) * $x);
    }
}
