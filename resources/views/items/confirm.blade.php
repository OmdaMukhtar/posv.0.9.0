@extends('layouts.modal')

@section('content')
    {{-- @include('shared.errors') --}}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('general.delete_field')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('items.destroy', ['item' => $item]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}

            @lang('general.crud.delete_confirmation_message')

            <br>

            {{ $item->name }}

            <div class="modal-footer">
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">@lang('general.crud.delete')</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                </div>
            </div>
        </form>
    </div>

@endsection