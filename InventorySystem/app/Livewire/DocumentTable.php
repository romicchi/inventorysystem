<?php

namespace App\Livewire;

use App\Models\Document;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Facades\Filter;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Illuminate\Support\Facades\Log;

final class DocumentTable extends PowerGridComponent
{
    use WithExport;

    public $client_id;

    public function setClient($client_id)
    {
        $this->client_id = $client_id;
    }

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()
            ->showSearchInput()
            ->showToggleColumns(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Document::query()
            ->where('documents.client_id', $this->client_id)
            ->join('document_types', 'documents.document_type_id', '=', 'document_types.id')
            ->join('inventories', 'documents.product_id', '=', 'inventories.id')
            ->select(['documents.*', 'document_types.type as document_type', 'inventories.name as product_name'])
            ->select('documents.*', 'document_types.type as document_type', 'inventories.name as product_name');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('name')
            ->add('product_id')
            ->add('document_type_id')
            ->add('additional_notes')
            ->add('date_submitted', function ($row) {
                return Carbon::parse($row->date_submitted)->format('M. d, Y');
            })
            ->add('file')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Associated Product', 'product_name'),
            Column::make('Type', 'document_type'),
            Column::make('Additional notes', 'additional_notes')
                ->sortable()
                ->searchable(),

            Column::make('Date submitted', 'date_submitted')
                ->sortable()
                ->searchable(),

            Column::make('File', 'file')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }

    public function filters(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId): void
    {
        Log::info("Delete method called with ID: $rowId");
    
        $document = Document::find($rowId);

        if ($document) {
            $filePath = public_path('files/' . $document->file);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $document->delete();
        } else {
            Log::info("Document with ID: $rowId not found");
        }
    
        $this->dispatch('refresh');
    }

    public function actions(Document $row): array
    {
        return [
            // Button::add('edit')
            //     ->slot('Edit: '.$row->id)
            //     ->id()
            //     ->class('pg-btn-white dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
            //     ->dispatch('edit', ['rowId' => $row->id])

            Button::add('delete')
            ->slot('Delete')
            ->class('bg-red-500 rounded-md cursor-pointer text-white px-3 py-2 m-1 text-sm')
            ->dispatch('showDeleteConfirmation', ['rowId' => $row->id]),
        ];
    }

    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
