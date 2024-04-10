<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryType;
use App\Models\DocumentType;
use App\Models\Inventory;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('client');
    }

    public function create()
    {
        $inventoryTypes = InventoryType::all();
        $documentTypes = DocumentType::all();

        return view('client.new-inventory', 
        [
            'inventoryTypes' => $inventoryTypes,
            'documentTypes' => $documentTypes
        ]);    
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'inventory_type_id' => 'required',
            'image' => 'required|image',
            'description' => 'required',
            'unit' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'total' => 'required|numeric',
            'date_purchase' => 'required|date',
        ]);
    
        // Store the image
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
    
        // Store the inventory data
        $inventory = Inventory::create(array_merge($request->only([
            'name', 'inventory_type_id', 'description', 'unit', 'price', 'quantity', 'total', 'date_purchase'
        ]), [
            'client_id' => Auth::guard('client')->user()->id,
            'image' => $imageName,
        ]));
    
        if ($request->has('doc_name')) {
            // Store the document data
            $document = Document::create(array_merge($request->only([
                'doc_name', 'document_type_id', 'additional_notes'
            ]), [
                'name' => $request->doc_name,
                'product_id' => $inventory->id,
                'date_submitted' => now(),
            ]));
        
            // Store the file
            if ($request->hasFile('file')) {
                $fileName = time().'.'.$request->file->extension();  
                $request->file->move(public_path('files'), $fileName);
                $document->file = $fileName;
                $document->save();
            }
        }
    
        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'Inventory and document have been added successfully.');
    }
}
