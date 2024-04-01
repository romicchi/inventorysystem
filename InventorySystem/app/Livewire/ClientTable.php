<?php

namespace App\Livewire;

use App\Models\Client;
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

final class ClientTable extends PowerGridComponent
{
    use WithExport;

        //Custom per page
        public int $perPage = 10;
    
        //Custom per page values
        public array $perPageValues = [10, 25, 50, 100, 0];

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
                ->showRecordCount()
                ->showPerPage($this->perPage, $this->perPageValues),
        ];
    }

    public function datasource(): Builder
    {
        return Client::query()->join('report_statuses', 'clients.report_status_id', '=', 'report_statuses.id')
            ->select('clients.*', 'report_statuses.status as report_status');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('id')
            ->add('company')
            ->add('contact_name')
            ->add('phone')
            ->add('email')
            ->add('password')
            ->add('address')
            ->add('tin')
            ->add('vn')
            ->add('rdo_code')
            ->add('report_status')
            ->add('duration')
            ->add('created_at');
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id'),
            Column::make('Company', 'company')
                ->sortable()
                ->searchable(),

            Column::make('Contact Name', 'contact_name')
                ->sortable()
                ->searchable(),

            Column::make('Phone', 'phone')
                ->sortable()
                ->searchable(),

            Column::make('Email', 'email')
                ->sortable()
                ->searchable(),

            Column::make('Password', 'password')
                ->sortable()
                ->searchable(),

            Column::make('Address', 'address')
                ->sortable()
                ->searchable(),

            Column::make('Tin', 'tin')
                ->sortable()
                ->searchable(),

            Column::make('Vn', 'vn')
                ->sortable()
                ->searchable(),

            Column::make('RDO code', 'rdo_code')
                ->sortable()
                ->searchable(),

            Column::make('Report Status', 'report_status'),
            Column::make('Duration', 'duration')
                ->sortable()
                ->searchable(),

            Column::make('Created at', 'created_at')
                ->sortable()
                ->searchable(),

            Column::action('Action')
        ];
    }

    // public function filters(): array
    // {
    //     return [
    //         // Report Status filter
    //         Filter::make('report_status')
    //             ->select([
    //                 '' => 'All',
    //                 'Pending' => 'Pending',
    //                 'Approved' => 'Approved',
    //                 'Disapproved' => 'Disapproved',
    //             ])
    //             ->label('Report Status')
    //             ->inline(),
    //     ];
    // }
    

    protected function queryString(): array
    {
        return [
        ];
    }

    #[\Livewire\Attributes\On('edit')]
    public function edit($rowId): void
    {
        $this->js('alert('.$rowId.')');
    }

    public function actions(Client $row): array
    {
        return [
            Button::add('edit')
                ->slot('Edit')
                ->id()
                ->class('pg-btn-white justify-center dark:ring-pg-primary-600 dark:border-pg-primary-600 dark:hover:bg-pg-primary-700 dark:ring-offset-pg-primary-800 dark:text-pg-primary-300 dark:bg-pg-primary-700')
                // ->route(route('clients.edit', $row->id)),
        ];
    }

    // update
    // public function update(array $data): bool
    // {
    //     try {
    //         $update = Client::query()->find($data['id'])->update([
    //             $data['field'] => $data['value']
    //         ]);
    //     }   catch (QueryException $exception) {
    //             $update = false;
    //     }
    //         return false;
    // }

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
