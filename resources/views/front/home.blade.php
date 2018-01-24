@extends('layouts.admin')

@section('content')
<section class="content container-fluid">

  <div class="col-sm-offset-2 col-sm-8">

    <div class="row">

      <div class="col-sm-12">
        @include('includes.alerts')
      </div>

      <div class="col-sm-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Home</h3> 
          </div><!-- Box header -->

          <div class="box-body" align="center" >
            <img src="/img/porto.jpg" style="width:50%">
          </div><!-- /. box body -->

        </div><!-- /. box -->

      </div><!-- /. col -->
    </div><!-- /. row -->

  </div><!-- /. col -->

</section>
@endsection
