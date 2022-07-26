<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use Spatie\PdfToText\Pdf;
use Carrooi\DocxExtractor\DocxExtractor;
use App\Http\Controllers\PagesController;
use App\Data;
use Illuminate\Support\Facades\DB;



class UploadController extends Controller
{
   
    public function upload_file(Request $request){

        $document = $request->file('file_browse');
        $extension =  $request->file('file_browse')->extension();
        // dd($nama);        
            if ($extension == 'doc' || $extension == 'docx' || $extension == 'pdf') {
                if ($extension == 'doc') {
            return redirect('home')->with( ['text' => $this->extract_doc($document)] );

                    // return ;
                } elseif ($extension == 'docx') {
            return redirect('home')->with( ['text' => $this->extract_docx($document)] );

                    // return $this->extract_docx($document);
                }
                elseif($extension == 'pdf'){
            return redirect('home')->with( ['text' => $this->extract_pdf($document)] );

                    // return $this->extract_pdf($document);
                };
            } 
    }
    public function submit(Request $request){
        $pc = new PagesController;
        if (isset($_POST['mulai'])) {
            $file=$_POST['text_area'];
            $title = $request->input('in_judul');
            $author = $request->input('in_nama');
            $ff = preg_replace('~[\r\n]+~', ' ', $file);
            $sentence = shell_exec("python  c:/xampp/htdocs/terakhir_ini_fix/app/Python/prepros.py 2>&1 $ff");
            $data_f = $pc->test($sentence);
            $fingerprint = implode(" ",$data_f);
                $data = new Data;
                $data -> title = $title;
                $data -> fingerprint = $fingerprint;
                $data -> author = $author;
                $data -> years = '2022';
                $data -> txxtt = $file;
                $data -> type = 'xml';
        $data_11 = DB::table('data')
                    ->orderBy('created_at', 'DESC')
                    ->get();
        $tmpTb = DB::table('biodata');
        if (true) {
            $sm = [];
            for ($i=0; $i < count($data_11); $i++) { 
                $test_1 = $data_11[$i];
                $test = $test_1->fingerprint;
                $t = $pc->similarity($fingerprint, $test, " ");
                $sm[] = $t;

                $tmpTb->insert([
                    'title' => $test_1->title,
                    'txxtt' => $test_1->txxtt,
                    'result' => $t
            ]);  
        }
        $maxv = $tmpTb
        ->orderBy('result', 'DESC')->take(3)
        ->get();
        $maxv1 = $maxv->first();
        $rslt = $maxv1->result;
        $rslt1 = $maxv;
        $tmpTb->truncate();
        // dd($maxv);
        if ($maxv1->result >=50) {
            Data::destroy($data->id);
        }else{
            $data->save();
        }
    }
        // $maxv = $tmpTb->select('result')
        //               ->where('result' , 'ASC')->take(3)
        //               ->get();
        //               dd($maxv);
        //               $tmpTb->delete();
        //             }
        // dd($sm);
        //     // $sm = max($sm);
        
        // dd($maxv);
        // $tmpTb->delete();
    }
    return view('result', compact('rslt', 'rslt1'));
    }
                    
                    public function extract_pdf($document){
                        $text = (new Pdf('C:\Program Files\Git\mingw64\bin\pdftotext'))
                        ->setPdf($document)
                        ->text();
                        return $text;
                        // return redirect('home')->with( ['text' => $text] );
                    }
                    
                    public function extract_doc($document){
                        $fileHandle = fopen($document, 'r');
                        $allLines = @fread($fileHandle, filesize($document));
                        $lines = explode(chr(0x0D), $allLines);
                        $text = '';
                        foreach ($lines as $line) {
                            $pos = strpos($line, chr(0x00));
                            if (($pos !== false) || (strlen($line) == 0)) {
                            } else {
                                $text .= $line . ' ';
                            }
                        }
                        $text = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/", '', $text);
                        return $text;
                        
                    }
                    public function extract_docx($document){
                        $text = '';
                        $content = '';
                
                        $zip = zip_open($document);
                        
                        if (!$zip || is_numeric($zip)) {
                            return false;
                        }
                        
                        while ($zip_entry = zip_read($zip)) {
                            if (zip_entry_open($zip, $zip_entry) == false) {
                                continue;
                            }
                
                            if (zip_entry_name($zip_entry) != 'word/document.xml') {
                                continue;
                            }
                            
                            $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
                            
                            zip_entry_close($zip_entry);
                        }
                        
                        zip_close($zip);
                        
                        $content = str_replace('</w:r></w:p></w:tc><w:tc>', ' ', $content);
                        $content = str_replace('</w:r></w:p>', "\r\n", $content);
                        $text = strip_tags($content);
                        return $text;
                    }
    }
    
    
    