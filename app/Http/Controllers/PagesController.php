<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use PhpOffice\PhpWord\IOFactory;
use Spatie\PdfToText\Pdf;
use Carrooi\DocxExtractor\DocxExtractor;
use App\Http\Controllers\UploadController;


class PagesController extends Controller
{
    public function landing(){
        return view('landing');
    }
    public function home(){
        // $test = $_POST['text_area'];
        // $testr = json_encode($test);
        // $r = shell_exec("python  c:/xampp/htdocs/terakhir_ini_fix/app/Python/test.py 2>&1 $testr");
        // echo $r;
        
        // Result (string): {'neg': 0.204, 'neu': 0.531, 'pos': 0.265, 'compound': 0.1779}
        
        // $UID = "hagdskajghdkjas";
        // $command = shell_exec("python \app\Python\test.py");
		// echo $command;
        // $test = "coba lah ya";
        // if (isset($_POST['mulai'])) {
        //     $PostContent=$_POST['text_area'];
        //     $output =nl2br($PostContent);
        //     shell_exec("python C:\xampp\htdocs\terakhir_ini_fix\app\Python\test.py $output > /dev/null 2>&1 &");
        //     }
        return view('home');
    }
    public function result(){
        return view('result');
    }
    public function test($sentence){
        for ($i=0; $i <= 3 ; $i++) { 
        if ($i==0) {
            $sentence = $this->k_gram($sentence);
        }
        elseif ($i==1) {
            $sentence = $this->hashing($sentence);
        }elseif ($i==2) {
            $sentence = $this->windowing($sentence);
        }else{
            return $this->fingerprint($sentence);
        }
    }
    } 
    public function k_gram($k_gram){
        //menghilangkan spasi
       $hilangspasi = $k_gram;
       $hilangspasi = str_replace(" ", "", $hilangspasi);
       //ngram
       $word = $hilangspasi;
       $kgr = array();
       $lengt = strlen($word);
       for($i = 0; $i < $lengt; $i++) {
       if($i > (6 - 2)) {
       $kg = '';
       for($j = 6-1; $j >= 0; $j--) {
       $kg .= $word[$i-$j];
       }
       $kgr[] = $kg;
       }
       }
        return $kgr;
        }
    public function hashing($gram){
        $hashing = array();
        for($x=0; $x < count($gram); $x++){
        $panjang = strlen($gram[$x]);
        $hash=0;
        for ($i = 0; $i < $panjang; $i++) {
        $hash += ord(substr($gram[$x], $i, 1))*pow(3,($panjang-($i+1)));
        }
        $hashing[] = $hash;
        }
        return $hashing;
    }
    public function windowing($hash){
        //windowing
       $window = array();
       $pjng = count($hash);
       $x = 0;
       for($c = 0; $c < $pjng; $c++){
       if($c > (5 - 2)) {
       $window[$x] = array();
       $y = 0;
       for($d = 5-1; $d >= 0; $d--){
       $window[$x][$y] = $hash[$c-$d];
       $y++;
        }
       $x++;
       }
       }
        return $window;
        }
    public function fingerprint($window){
        $fingers = array();
        for($e = 0; $e < count($window); $e++){
        $min = $window[$e][0];
        for($f = 1 ; $f < 4; $f++){
        if($min > $window[$e][$f]){
        $min = $window[$e][$f];
        }
        }
        $fingers[] = $min;
        }
        return $fingers;
        }      
        
    public function similarity( $item1, $item2) {

        $item1 = array_unique(array_map('trim', explode( " ", $item1 )));
        $item2 = array_unique(array_map('trim', explode( " ", $item2 )));
        $arr_intersection = array_intersect($item2, $item1);
        $arr_union = array_unique(array_merge( $item1, $item2 ));
        $coefficient = count( $arr_intersection ) / count( $arr_union );
        $coefficient = $coefficient *100;
        // dd($coefficient);
        return $coefficient;
    
    // print ($coefficient);
    }     
}
