<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Storage;
use DB;
use App\Models\UserNeetInfo;

class StudentsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        UserNeetInfo::query()->update(['is_viewed'=>0]);
        if (Storage::disk('public')->exists('sync.txt')) { 
            $to = date('Y-m-d h:i:s', strtotime(Storage::disk('public')->get('sync.txt')));
            $from = date('Y-m-d h:i:s'); 
            UserNeetInfo::whereDate('created_at','>=',$to)->whereDate('created_at','<=',$from)->update(['is_viewed'=>0]);
        }
        $query->select('users.email', 'users.mobile_no','users.name','users.id','users.created_at','user_neet_info.state_id_10th','user_neet_info.state_id_12th','user_neet_info.pincode','user_neet_info.state_by_pincode','user_neet_info.city_id','user_neet_info.area','user_neet_info.neet_category','user_neet_info.state_category','user_neet_info.gender','user_neet_info.physical_handicap','user_neet_info.armed_force','user_neet_info.minority','user_neet_info.eligible_quota','user_neet_info.is_viewed');
        $query->join('user_neet_info', 'users.id', '=', 'user_neet_info.user_id');
        return datatables()->eloquent($query)
            ->editColumn('created_at',function($row){
                return date('d-m-Y @ H:i:s A', strtotime($row->created_at));
            })
            ->setRowAttr([
                'style' => function($user) {
                    return ($user->is_viewed  == 0 ? '':'background-color:#dcdcdc');
                },
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Student $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        return $model->newQuery()->orderBy('created_at','desc');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('students-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf')
                    ]);

    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('mobile_no'),
            Column::make('state_id_10th')->name('user_neet_info.state_id_10th'),
            Column::make('state_id_12th')->name('user_neet_info.state_id_12th'),
            Column::make('pincode')->name('user_neet_info.pincode'),
            Column::make('state_by_pincode')->name('user_neet_info.state_by_pincode'),
            Column::make('city_id')->name('user_neet_info.city_id'),
            Column::make('area')->name('user_neet_info.area'),
            Column::make('neet_category')->name('user_neet_info.neet_category'),
            Column::make('state_category')->name('user_neet_info.state_category'),
            Column::make('gender')->name('user_neet_info.gender'),
            Column::make('physical_handicap')->name('user_neet_info.physical_handicap'),
            Column::make('armed_force')->name('user_neet_info.armed_force'),
            Column::make('minority')->name('user_neet_info.minority'),
            Column::make('eligible_quota')->name('user_neet_info.eligible_quota'),
            Column::make('created_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Students_' . date('YmdHis');
    }
}
