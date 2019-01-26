@extends('layouts.app')

@section('content')
<div class="row">
        <a href="#" class="btn btn-link">رجوع</a>
        <hr>
        <div class="container">
            <div class="col-lg-12">
                <section class="panel">
                    {{-- <header class="panel-heading">
                        الموردين
                    </header> --}}
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><a class="btn btn-success" href="{{route('suppliers.create')}}" data-toggle="modal" data-target="#myModal" style="margin-bottom:5px">@lang('general.crud.create')</a></th>
                            <th>@lang('items.name')</th>
                            <th>@lang('items.code')</th>
                            <th>@lang('items.note')</th>
                            <th class="text-center">@lang('general.settings')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($suppliers as $supplier)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->code }}</td>
                                <td class="text-center">
                                    <a class="btn btn-warning" href="{{ route('suppliers.edit', ['supplier' => $supplier]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.edit')</a>
                                    <a class="btn btn-danger" href="{{ route('suppliers.confirm', ['supplier' => $supplier]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.delete')</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection