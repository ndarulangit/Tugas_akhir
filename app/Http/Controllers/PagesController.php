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
        return view('home');
        // return redirect()->action([UploadController::class, 'upload_file']);
    } 
    // public function upload_file(Request $request){
    //     if ($document = $request->file()) {
    //         # code...
    //     $document = $request->file('file_browse');
    //     $extension = $request->file('file_browse')->extension();

    //         if ($extension == 'doc' || $extension == 'docx' || $extension == 'pdf') {
    //             if ($extension == 'doc') {
    //                 return $this->extract_doc($document);
    //             } elseif ($extension == 'docx') {
    //                 return $this->extract_docx($document);
    //             }
    //             elseif($extension == 'pdf'){
    //                 return $this->extract_pdf($document);
    //             };
    //         }
    //     }else{
    //         $text = null;
    //         return view('home',[
    //             "text"=>$text
    //         ]);
    //     }
    // }
    //     private function extract_pdf($document){
    //         $text = (new Pdf('C:\Program Files\Git\mingw64\bin\pdftotext'))
    //         ->setPdf($document)
    //         ->text();
    //         return view('home',[
    //             "text"=>$text
    //         ]);
    //     }
                    
    //     private function extract_doc($document){
    //         $fileHandle = fopen($document, 'r');
    //         $allLines = @fread($fileHandle, filesize($document));
    //         $lines = explode(chr(0x0D), $allLines);
    //         $text = '';
    //         foreach ($lines as $line) {
    //             $pos = strpos($line, chr(0x00));
    //             if (($pos !== false) || (strlen($line) == 0)) {
    //             } else {
    //                 $text .= $line . ' ';
    //             }
    //         }
    //         $text = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/", '', $text);
    //         return view('home',[
    //             "text"=>$text
    //         ]);
    //     }
    //     private function extract_docx($document){
    //         $text = '';
    //         $content = '';
    
    //         $zip = zip_open($document);
            
    //         if (!$zip || is_numeric($zip)) {
    //             return false;
    //         }
            
    //         while ($zip_entry = zip_read($zip)) {
    //             if (zip_entry_open($zip, $zip_entry) == false) {
    //                 continue;
    //             }
    
    //             if (zip_entry_name($zip_entry) != 'word/document.xml') {
    //                 continue;
    //             }
                
    //             $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
                
    //             zip_entry_close($zip_entry);
    //         }
            
    //         zip_close($zip);
            
    //         $content = str_replace('</w:r></w:p></w:tc><w:tc>', ' ', $content);
    //         $content = str_replace('</w:r></w:p>', "\r\n", $content);
    //         $text = strip_tags($content);
            
    //         return view('home',[
    //             "text"=>$text
    //         ]);
    //     }
}
