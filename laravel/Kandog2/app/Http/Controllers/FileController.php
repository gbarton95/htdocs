<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class FileController extends Controller
{
    // Método para mostrar el formulario de carga de archivos
    public function create()
    {
        $files = File::all();
        return view('file.create', compact('files'));
    }
     
    public function store(Request $request)
    {
        // Valida la petición
        $request->validate([
            'file' => 'required|file|max:10240', // Max size 10MB
        ]);

        // Sube el archivo
        $path = $request->file('file')->store('uploads');

        // Crea un nuevo registro en la base de datos
        $file = new File();
        $file->user_id = auth()->id(); 
        $file->perro_id = "1"; //;
        if($request->filled('filename')) {
           $file->filename = $request->input('filename');
        } else {
           $file->filename = $request->file('file')->getClientOriginalName(); 
        }

        $file->type = $request->file('file')->getClientMimeType();
        $file->path = $path;
        $file->coleccion = ""; //;
        $file->active = true;
        
        $file->save();

        return back()->with('success', 'Archivo subido exitosamente.');
    }

    // Método para descargar un archivo
    public function download(File $file)
    {
        $filePath = storage_path('app/' . $file->path);
        return Response::download($filePath, $file->filename);
    }
}
