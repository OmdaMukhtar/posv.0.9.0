@extends('layouts.app')

@section('content')

 <div class="row">
     <div class="container">
         <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                التصنيفات
                </header>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th><a class="btn btn-success" href="{{route('items.create')}}"data-toggle="modal" data-target="#myModal" style="margin-bottom:5px">@lang('general.crud.create')</a></th>
                        <th>@lang('items.name')</th>
                        <th>@lang('items.code')</th>
                        <th>@lang('items.note')</th>
                        <th class="text-center">@lang('general.settings')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->code}}</td>
                        <td>{{$item->note}}</td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="{{ route('items.edit', ['item' => $item]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.edit')</a>
                            <a class="btn btn-danger" href="{{ route('items.confirm', ['item' => $item]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.delete')</a>
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
