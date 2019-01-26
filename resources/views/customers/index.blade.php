@extends('layouts.app')

@section('content')

 <div class="row">
     <div class="container">
         <div class="col-lg-12">
             <section class="panel">
                 <header class="panel-heading">
                    العملاء
                 </header>
                 <div class="table-responsive">
                 <table class="table">
                     <thead>
                     <tr>
                         <th><a class="btn btn-success" href="{{route('customers.create')}}"data-toggle="modal" data-target="#myModal" style="margin-bottom:5px">@lang('general.crud.create')</a></th>
                         <th>@lang('customers.name')</th>
                         <th>@lang('customers.code')</th>
                         <th class="text-center">@lang('general.settings')</th>
                     </tr>
                     </thead>
                     <tbody>
                     @foreach($customers as $customer)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->code}}</td>
                            <td class="text-center">
                                <a class="btn btn-warning" href="{{ route('customers.edit', ['customer' => $customer]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.edit')</a>
                                <a class="btn btn-danger" href="{{ route('customers.confirm', ['customer' => $customer]) }}" data-toggle="modal" data-target="#myModal">@lang('general.crud.delete')</a>
                            </t
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
