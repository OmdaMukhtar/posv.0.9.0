@extends('layouts.modal')
@section('content')

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('general.create_field')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('items.update', $item) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('put') }}

            <div class="row spaces">
                <div class="formo-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">@lang('items.name')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{ $item->name }}" class="form-control" autofocus>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row spaces">
                <div class="formo-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="">@lang('items.code')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="code" value="{{ $item->code }}" class="form-control">
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
                            <textarea type="text" name="note" class="form-control">{{ $item->note }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="submit">@lang('general.crud.update')</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
            </div>
        </form>
    </div>

@endsection

<style>
    .spaces{
        margin-bottom:5px;
    }
</style>