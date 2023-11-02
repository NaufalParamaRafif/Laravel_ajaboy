<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBaru extends Controller
{
    public function index()
    {
        $penulis = array("Raditya Dika", "Naufal Parama Rafif", "Mamang Samele");
        $judul = array("Marmut Merah Jambu", "Membuat AI dalam 1 menit", "Ide Berjualan Bakso");
        $genre = array("Fiksi", "Fiksi Ilmiah", "Non Fiksi");
        return view('books', compact('penulis', 'judul', 'genre'));
    }
}