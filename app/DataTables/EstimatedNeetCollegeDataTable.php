<?php

namespace App\DataTables;

use App\Models\College;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EstimatedNeetCollegeDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('stateName', function ($row) {
                return ($row->state ? ($row->state->name ?? '') : '');
            })
            ->editColumn('cityName', function ($row) {
                return ($row->city ? ($row->city->name ?? '') : '');
            });
        // ->addColumn('action', 'estimatedneetcollege.action')
        // ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\EstimatedNeetCollege $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(College $model): QueryBuilder
    {
        $stateId = [0];
        if (session()->has('checkoutSummary')) {
            $stateId = session()->get('checkoutSummary.state_id') ?? [0];
        }
        return $model->newQuery()
            ->with(['state', 'city'])
            ->when(!empty($stateId), function ($q) use ($stateId) {
                $q->whereIn('state_id', $stateId);
            });
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('estimatedneetcollege-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0, 'asc')
            ->selectStyleSingle();
        // ->buttons([
        //     Button::make('create'),
        //     Button::make('export'),
        //     Button::make('print'),
        //     Button::make('reset'),
        //     Button::make('reload')
        // ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            'College Name' => ['data' => 'name', 'name' => 'name', 'title' => 'College Name', 'width' => '30%'],
            'State' => ['data' => 'stateName', 'name' => 'state.name', 'title' => 'State', 'width' => '15%'],
            'City' => ['data' => 'cityName', 'name' => 'city.name', 'title' => 'City', 'width' => '8%'],
            'Pincode' => ['data' => 'pincode', 'name' => 'pincode', 'title' => 'Pincode', 'width' => '6%'],
            'Year Of Inception' => ['data' => 'year_inspection', 'name' => 'year_inspection', 'title' => 'Year Of Inception', 'width' => '8%'],
            'Course' => ['data' => 'course_name', 'name' => 'course_name', 'title' => 'Course', 'width' => '5%'],
            'Conselling Seat' => ['data' => 'annual_seat', 'name' => 'annual_seat', 'title' => 'Conselling Service', 'width' => '5%'],
            'Institution Type' => ['data' => 'institution_type', 'name' => 'institution_type', 'title' => 'Institution Type', 'width' => '8%'],
            'Total Fee' => ['data' => 'total_fee', 'name' => 'total_fee', 'title' => 'Total Fee', 'width' => '15%'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'NEETCollegeList_' . date('YmdHis');
    }
}
