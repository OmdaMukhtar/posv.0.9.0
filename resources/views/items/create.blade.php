@extends('layouts.modal')
@section('content')

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('general.create_field')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('items.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="row spaces">
                <div class="formo-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">@lang('items.name')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control" autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row spaces">
                <div class="formo-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="code">@lang('items.code')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="code" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row spaces">
                <div class="formo-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">@lang('items.note')</label>
                        </div>
                        <div class="col-md-9">
                            <textarea type="text" name="note" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit">@lang('general.crud.create')</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
            </div>
        </div>
        </form>
    </div>

@endsection

<style>
    .spaces{
        margin-bottom:5px;
    }
</style>