
@extends('layouts.app')

@section('content')
    <div class="panel panel-default" style="width:70%;margin:auto">

        <div class="panel-body">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#basic" data-toggle="tab" aria-expanded="true">البيانات الأساسية</a></li>
                <li class=""><a href="#uints" data-toggle="tab" aria-expanded="false">الوحدات </a></li>
                <li class=""><a href="#uints-price" data-toggle="tab" aria-expanded="false">تسعير الوحدات </a></li>
                <li class=""><a href="#prices" data-toggle="tab" aria-expanded="false">اسعار البيع</a></li>
                <li class=""><a href="#options" data-toggle="tab" aria-expanded="false">خيارات</a></li>
            </ul>

             <!-- Tab panes -->
             <div class="tab-content">
                 <div class="tab-pane fade active in gap" id="basic">
                        <div class="well well-lg">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">رمز الصنف</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">الرقم التسلسلي</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">اسم الصنف</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">التصنيف</label>
                                        <select name="" class="form-control">
                                            <option value="">choose one...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">المقاس</label>
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">المصدر</label>
                                        <select name="" class="form-control">
                                            <option value="">choose one...</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">مكان التواجد</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">الشركة المصنعة</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">لون الصنف</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">بلد المنشأ</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">النوعية</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">الطراز</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">تاريخ الأنتاج</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">نهاية الصلاحية</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane fade gap" id="uints">
                    <div style="display:flex">
                        <div class="well well-lg" style="margin-left:5px">
                            <div style="display:flex" style="margin-right:20px">
                                <div class="panel panel-default">
                                    <div class="panel-heading">تفاصيل الوحدة الأولي</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="">الاسم</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">إفتراضيي</label>
                                                    <input type="radio" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">الباركورد</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default gap-right" >
                                    <div class="panel-heading">الوحدة الأولي</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">الحد الأعلي</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">الحد الأدني</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">حد الطلب </label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{-- 
                        <hr/>
                        <div class="well well-lg" style="margin-left:5px">
                           
                        </div> --}}

                        <hr>
                        <div class="well well-lg" style="margin-left:5px">
                            <div style="display:flex" style="margin-right:20px">
                                <div class="panel panel-default">
                                    <div class="panel-heading">تفاصيل الوحدة الثالثة</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="">الاسم</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">إفتراضيي</label>
                                                    <input type="radio" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">الباركورد</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">معامل التحويل</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default gap-right" >
                                    <div class="panel-heading">الوحدة الثالثة</div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">الحد الأعلي</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">الحد الأدني</label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">حد الطلب </label>
                                                        <input type="number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pan fade " id="uints-price">
                    <div style="display:flex" >
                        <div class="panel panel-default">
                            <div class="panel-heading">تفاصيل الوحدة الثانية</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="">الاسم</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">إفتراضيي</label>
                                            <input type="radio" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">الباركورد</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">معامل التحويل</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default gap-right">
                            <div class="panel-heading">الوحدة الثانية</div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">الحد الأعلي</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">الحد الأدني</label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">حد الطلب </label>
                                                <input type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade gap" id="prices">
                    <p>تاب الأسعار</p>
                </div>

                <div class="tab-pane fade gap" id="options">
                    <p>تاب الخيارات</p>
                </div>
             </div>
        </div>
    </div>
@endsection

<style>
    .gap{
        margin-top:20px
    }
    .gap-right{
        margin-right:20px;
    }
</style>