<?php

namespace App\Livewire;

use App\Models\Inventory;
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

final class InventoryTable extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {
        $this->showCheckBox();

        return [
            Exportable::make('export')
                ->striped()
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return Inventory::query()->join('inventory_type', 'inventories.inventory_type_id', '=', 'inventory_type.id')
            ->select('inventories.*', 'inventory_type.type as inventory_type');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('name')
            ->add('inventory_type_id')
            ->add('description')
            ->add('unit')
            ->add('price')
            ->add('quantity')
            ->add('total')
            ->add('image')
            ->add('date_purchase_formatted', fn (Inventory $model) => Carbon::parse($model->date_purchase)->format('M. d, Y'));
    }

    public function columns(): array
    {
        return [
            Column::make('Name', 'name')
                ->sortable()
                ->searchable(),

            Column::make('Inventory Type', 'inventory_type'),
            Column::make('Description', 'description')
                ->sortable()
                ->searchable(),

            Column::make('Unit', 'unit')
                ->sortable()
                ->searchable(),

            Column::make('Price', 'price')
                ->sortable()
                ->searchable(),

            Column::make('Quantity', 'quantity')
                ->sortable()
                ->searchable(),

            Column::make('Total', 'total')
                ->sortable()
                ->searchable(),

            Column::make('Image', 'image')
                ->sortable()
                ->searchable(),

            Column::make('Date purchase', 'date_purchase_formatted', 'date_purchase')
                ->sortable(),

            Column::action('Action')
        ];
    }

    // public function filters(): array
    // {
    //     return [
    //         Filter::datepicker('date_purchase'),
    //     ];
    // }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    #[\Livewire\Attributes\On('delete')]
    public function delete($rowId): void
    {
        Log::info("Delete method called with ID: $rowId");
    
        $inventory = Inventory::find($rowId);
    
        if ($inventory) {
            $inventory->delete();
        } else {
            Log::info("ActivityLog with ID: $rowId not found");
        }
    
        $this->dispatch('refresh');
    }

    public function actions(Inventory $row): array
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
