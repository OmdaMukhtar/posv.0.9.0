@extends('layouts.modal')

@section('content')
    {{-- @include('shared.errors') --}}
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('general.delete_field')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('customers.destroy', ['customer' => $customer]) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}

            @lang('general.crud.delete_confirmation_message')

            <br>

            {{ $customer->name }}

            <div class="modal-footer">
                <div class="row">
                    <button class="btn btn-danger" type="submit">@lang('general.crud.delete')</button>
                    <button class="btn btn-default" data-dismiss="close">إلغاء</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        $(".modal-wide").on("show.bs.modal", function() {
            var height = $(window).height() - 600;
            $(this).find(".modal-body").css("max-height", 20);
        });
    </script>
@endsection