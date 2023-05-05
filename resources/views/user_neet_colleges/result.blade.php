@extends('layouts.app')
@section('content')

<section id="yl-category" class="yl-category-section">
  <div class="card">
      <div class="card-body pt-6">
          <div class="final-section">
              <div class="flex-column">
                  @include('user_neet_colleges._estimated_college_list', array('class' => 'mb-5 mb-xl-10', 'dataTable' => $dataTable))
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
