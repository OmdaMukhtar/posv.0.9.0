@extends('layouts.modal')

@section('content')
    {{-- @include('shared.errors') --}}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('general.delete_field')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('suppliers.destroy', ['supplier' => $supplier]) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}

        @lang('general.crud.delete_confirmation_message')

        <br>

        {{ $supplier->name }}

        <div class="modal-footer">
            <button class="btn btn-danger" type="submit">@lang('general.crud.delete')</button>
            <button class="btn btn-default" class="form-control">إلغاء</button>
        </div>
    </form>
    </div>

@endsection