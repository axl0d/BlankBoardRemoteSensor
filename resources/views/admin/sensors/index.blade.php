@extends('layouts.admin')

@section('title', config('app.name', 'Laravel') . ' - ' . __($name . '.title'))

@section('content')
<!-- Content header (Page header) -->
  @include('includes.content-header', ['name' => $name, 'before' => [['name' => __('messages.admin-site'), 'route' => 'admin']]])
<!-- /. content header -->

<!-- Main content -->
<section class="content container-fluid">

  <div class="row">

    <div class="col-sm-12">
      @include('includes.alerts')
    </div>

    <div class="col-sm-12">
      <div class="box box-primary">

        <div class="box-header with-border">
          <h3 class="box-title">{{ __($name . '.list', ['title' => __($name . '.title')]) }}</h3>
          <div class="box-tools pull-right">
            <a class="{{ __('messages.btn.new.class') }}" href="{{ route($name . '.create') }}" >            <i class="fa fa-plus-circle"></i>
              {{ __('messages.btn.new.name') }}
            </a>
            <button class="btn btn-box-tool" type="button" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
          </div>
        </div><!-- /. box header -->

        <div class="box-body no-padding">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>{{ __($name . '.table.id') }}</th>
                <th class="col-sm-12">{{ __($name . '.table.name') }}</th>
                <th>{{ __($name . '.table.dni') }}</th>
                <th>{{ __($name . '.table.user') }}</th>
                <th>{{ __($name . '.table.type') }}</th>
                <th class="text-center">{{ __($name . '.table.action') }}</th>
              </tr>
            </thead>
            <tbody>

            @foreach ($resources as $resource)
              <tr>
                <td>{{ $resource->id }}</td>
                <td><a href="{{ route($name . '.edit', $resource->id) }}">{{ $resource->name }}</a></td>
                <td>{{ $resource->user->dni }}</td>
                <td>{{ $resource->user->name }}</td>
                <td>{{ __($name . '.table.' . $resource->type) }}</td>
                <td class="text-nowrap">
                    {{ Form::open(['method' => 'DELETE','route' => [$name . '.destroy', $resource->id]]) }}
                      {{ Form::button( __('messages.action.trash'), array(
                        'type' => 'submit',
                        'class'=> 'btn-danger btn-xs',
                        'onclick'=>'return confirm("' . __($name . '.confirm-delete') . '")'
                      )) }}
                    {{ Form::close() }}
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <div class="col-sm-12">
            <div class="text-right">{{ $resources->links() }}</div>
          </div>
        </div><!-- /. box-body -->

      </div><!-- /. box -->
    </div><!-- /. col -->
  </div><!-- /. row -->

</section><!-- /. content -->
@stop
