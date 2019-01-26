@extends('layouts.modal')

@section('content')

    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">@lang('general.create_field')</h4>
    </div>
    <div class="modal-body">
        <form action="{{ route('suppliers.store') }}" method="post">
            {{ csrf_field() }}
            
            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="code">@lang('customers.code') </label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="code" readonly class="form-control" value="{{$code}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="name">@lang('customers.name')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="name" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="address"> @lang('customers.address')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="address" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="country"> @lang('customers.country')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="country" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

             <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="city"> @lang('customers.city')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="city" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
           
             <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="fax">  @lang('customers.fax')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="fax" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="phone">@lang('customers.phone')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="phone" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="email"> @lang('customers.email')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

             <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="facebook"> @lang('customers.facebook')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="facebook" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="note"> @lang('customers.note')</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="" name="note" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>

             <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="debit"> @lang('customers.debit')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" name="debit" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="credit"> @lang('customers.credit')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="credit" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

             <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="balance"> @lang('customers.balance')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="balance" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row spaces">
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-md-3">
                            <label for="status"> @lang('customers.status')</label>
                        </div>
                        <div class="col-md-9">
                            <input type="number" name="status" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="submit">@lang('general.crud.create')</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">إلغاء</button>
            </div>
        </form>
    </div>
    
   

    
@endsection