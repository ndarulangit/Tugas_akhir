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
    } 
    public function login(){
        return view('login');
    }
}
