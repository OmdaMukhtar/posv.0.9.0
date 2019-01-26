@extends('layouts.modal')

@section('content')
    <section>
        <div class="container">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">@lang('general.create_field')</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3 ">
                                <label for="">رقم المستند</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-3">
                                <label for="">نوع الفاتورة</label>
                                <select name="" id="" class="form-control">
                                    <option value="0"> choose one ..</option>
                                    <option value="0"> آجل</option>
                                    <option value="0"> دين</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3 ">
                                <label for="">تاريخ السند</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-6" >
                                <label for="">اسم المورد</label>
                                <div >
                                    <select name="" id="" class="form-control">
                                        <option value="0">choose_one ..</option>
                                    </select>
                                    <button class="btn btn-success">+</button>
                                </div>
                                  {{-- <div style="display:flex;">
                                    <input type="text" class="form-control" style="margin-left:5px">
                                    <a href="{{ route('items.create') }}" data-target="#myModal" data-toggle="modal" class="btn btn-default">+</a>
                                </div> --}}
                            </div>
                            <div class="col-md-3">
                                <label for="">رقم الفاتورة</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3 ">
                                <label for="">ضريبة مبيعات</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">ملاحظات</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">تاريخ الفاتورة</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <hr style="color:#000 !important"/>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label for="">الاصناف</label>
                            </div>
                            <div class="col-md-10">
                                <select name="" id="" class="form-control">
                                    <option value="0">choose_one ..</option>
                                    <option value="0">choose_one ..</option>
                                    <option value="0">choose_one ..</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-md-12" style="min-height:300px">
                            <div class="table-responsive"  style="border:1px solid #CCC">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>@lang('catogry.code')</th>
                                        <th>@lang('catogry.name')</th>
                                        <th>@lang('catogry.unit')</th>
                                        <th>@lang('catogry.unitPrice')</th>
                                        <th>@lang('catogry.quantaty')</th>
                                        <th>@lang('catogry.dutecuted')</th>
                                        <th>@lang('catogry.totalPrice')</th>
                                        <th class="text-center">@lang('general.settings')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {{-- @foreach($catogry as $item) --}}
                                    <tr>
                                        <td>CD12525</td>
                                        <td>CD12525</td>
                                        <td>CD12525</td>
                                        <td>CD12525</td>
                                        <td>CD12525</td>
                                        <td>CD12525</td>
                                        <td>CD12525</td>
                                        {{-- <td>{{$loop->iteration}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->code}}</td>
                                        <td>{{$item->note}}</td> --}}
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary">+</button>
                                            <button class="btn btn-sm btn-danger">-</button>
                                        </td> 
                                    </tr>
                                    {{-- @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <label for="">إجمالي الخصم</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">إجمالي الفاتورة</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="">القيمة بالحروف</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">@lang('general.crud.create')</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

<style>
   
</style>