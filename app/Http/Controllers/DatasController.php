<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UploadController;
use App\Data;


class DatasController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $data = Data::select("*")
                ->orderBy('id', 'DESC')
                ->get();
        // $datas=$data->get('items');
        // $datas = $datas->get('items');
        // dd($data);
        return view('dashboard', ['data' => $data]);
    }
    public function store(Request $request)
    {
        $uc = new UploadController;
        $pc = new PagesController;
        $data_f1 = $request->file('upload_1');
        // $title = $data_f1->getClientOriginalName();
        $extension =  $data_f1->extension();
        $data_f2 = $this->unggah($data_f1);
        $ff = preg_replace('~[\r\n]+~', ' ', $data_f2);
        $sentence = shell_exec("python  c:/xampp/htdocs/terakhir_ini_fix/app/Python/prepros.py 2>&1 $ff");
        $data_f = $pc->test($sentence);
        $fingerprint = implode(" ",$data_f);
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'years'=>'required'
        ]);
        $data = new Data;
            $data -> title = $request->get('title');
            $data -> fingerprint = $fingerprint;
            $data -> author = $request->get('author');
            $data -> years = $request->get('years');
            $data -> txxtt = $data_f2;
            $data -> type = $extension; 

        $data_11 = DB::table('data')
                    ->orderBy('created_at', 'DESC')
                    ->get();
        if (true) {
            $sm = [];
            for ($i=0; $i < count($data_11); $i++) { 
                $test = $data_11[$i];
                $test = $test->fingerprint;
                $t = $pc->similarity($fingerprint, $test, " ");
                $sm[] = $t;
            }
            // dd($sm);
            $sm = max($sm);
            if ($sm>=50) {
                Data::destroy($data->id);
            }else{
                $data->save();
            }
        }
            return redirect('dashboard')->with('success', 'Data disimpan');
    }
    public function unggah($datadoc){        
        $uc = new UploadController;
        $extension =  $datadoc->extension();
        
            if ($extension == 'doc' || $extension == 'docx' || $extension == 'pdf') {
                if ($extension == 'doc') {
                    return $uc->extract_doc($datadoc);
                } elseif ($extension == 'docx') {
                    return $uc->extract_docx($datadoc);
                }
                elseif($extension == 'pdf'){
                    return $uc->extract_pdf($datadoc);
                };
            } 
    }
    public function destroy(Data $data)
    {
        
        Data::destroy($data->id);
        return redirect('dashboard')->with('success', 'Data Terhapus');    }
}