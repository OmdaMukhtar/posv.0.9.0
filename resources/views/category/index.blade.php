@extends('layouts.app')
@section('content')
   
<section class="panel" style="margin-right:190px">
        <header class="panel-heading tab-bg-primary">
            <ul class="nav nav-tabs" role="tablist" id="myTab">
                <li class="active">
                    <a data-toggle="tab" role="tab" aria-controls="home-2" aria-selected="true" href="#home-2">
                            البيانات الأساسية<i class="icon-home"></i>
                    </a>
                </li>
                <li >
                    <a data-toggle="tab" role="tab" aiea-controls="about-2" aria-selected="false" href="#about-2">
                        <i class="icon-user"></i>
                        الوحدات
                    </a>
                </li>
                <li class="">
                    <a data-toggle="tab" role="tab" aria-controls="contact-2" aria-selected="false" href="#contact-2">
                        <i class="icon-envelope"></i>
                        تسعير الوحدات
                    </a>
                </li>
                <li class="">
                    <a data-toggle="tab" role="tab" aria-controls="contact-3" aria-selected="false" href="#contact-3">
                        <i class="icon-envelope"></i>
                        الخيارات
                    </a>
                </li>
            </ul>
        </header>
        <div class="panel-body">
            <form action="{{route('catogries.store')}}" method="POST">
                {{csrf_field()}}
            <div class="tab-content" id="myContent" >
                <div id="home-2" class="tab-pane active" role="tabpanel" aria-labelledby="home-aria">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">رمز الصنف</label>
                                    <input type="text" class="form-control" placeholder="" name="code">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">الرقم التسلسلي</label>
                                    <input type="text" class="form-control" name="serail_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">اسم الصنف</label>
                                    <input type="text" class="form-control" placeholder="" name="name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="">التصنيف</label>
                                <div class="form-group" style="display:flex">
                                    <select name="item_id" class="form-control" style="margin-left:5px">
                                        <option value="0">choose one...</option>
                                        @foreach($items as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{ route('items.create') }}" data-target="#myModal" data-toggle="modal" class="btn btn-default">+</a>
                                </div>
                            </div>
                            {{-- <div class="col-md-2">
                                <div class="col-md-1"></div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <a href="{{ route('items.create') }}" data-target="#myModal" data-toggle="modal" class="btn btn-default">+</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">المقاس</label>
                                    <input type="number" class="form-control" placeholder="" name="size">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">المصدر</label>
                                    <select name="source" class="form-control" >
                                        <option value="">choose one...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">مكان التواجد</label>
                                    <input type="text" class="form-control" name="place_found">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">الشركة المصنعة</label>
                                    <input type="text" class="form-control" name="company_created">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">لون الصنف</label>
                                    <input type="text" class="form-control" name="catogry_color">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">بلد المنشأ</label>
                                    <input type="text" class="form-control" name="country_created">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">النوعية</label>
                                    <input type="text" class="form-control" name="type">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">الطراز</label>
                                    <input type="text" class="form-control" name="modal">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">تاريخ الأنتاج</label>
                                    <input type="date" class="form-control" name="production_date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">نهاية الصلاحية</label>
                                    <input type="date" class="form-control" name="production_end_date">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="about-2" class="tab-pane ">
                   <label for=""><strong>الوحد الأولي</strong></label>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="col-md-2">
                               <label for="">الأسم</label>
                           </div>
                           <div class="col-md-3">
                               <input type="text" class="form-control" name="unit_one_name">
                           </div>
                           <div class="col-md-2">
                               <input type="radio" name="unit_one_default" >
                           </div>
                           <div class="col-md-2">
                                <label for="">الحد الأعلى</label>
                            </div>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="unit_one_max_limit">
                            </div>
                       </div>
                       <div class="col-md-12">
                            <div class="col-md-2">
                                <label for="">الباركود</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="unit_one_barcode">
                            </div>
                            <div class="col-md-2">
                                 <label for="">الحد الأدنى</label>
                             </div>
                             <div class="col-md-3">
                                 <input type="number" class="form-control" name="unit_one_min_limit">
                             </div>
                        </div>
                         {{-- <div class="col-md-12">
                            <div class="col-md-2">
                                <label for="">معامل التحويل</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <label for="">حد الطلب</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control">
                            </div>
                        </div> --}}
                   </div>
                   <br/>
                   <br/>
                   <label for=""><strong>الوحد الثانية</strong></label>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="col-md-2">
                               <label for="">الأسم</label>
                           </div>
                           <div class="col-md-3">
                               <input type="text" class="form-control" name="unit_tow_name">
                           </div>
                           <div class="col-md-2">
                               <input type="radio" name="unit_tow_default" >
                           </div>
                           <div class="col-md-2">
                                <label for="">الحد الأعلى</label>
                            </div>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="unit_tow_max_limit">
                            </div>
                       </div>
                       <div class="col-md-12">
                            <div class="col-md-2">
                                <label for="">الباركود</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="unit_tow_barcode">
                            </div>
                            <div class="col-md-2">
                                 <label for="">الحد الأدنى</label>
                             </div>
                             <div class="col-md-3">
                                 <input type="number" class="form-control" name="unit_tow_min_limit">
                             </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-2">
                                <label for="">معامل التحويل</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="unit_tow_factor_converter">
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <label for="">حد الطلب</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="unit_tow_request_limit">
                            </div>
                        </div>
                   </div>
                   <br/>
                   <br/>
                   <label for=""><strong>الوحد الثالثة</strong></label>
                   <div class="row" style="margin:5px">
                       <div class="col-md-12">
                           <div class="col-md-2">
                               <label for="">الأسم</label>
                           </div>
                           <div class="col-md-3">
                               <input type="text" class="form-control" name="unit_three_name">
                           </div>
                           <div class="col-md-2">
                               <input type="radio" name="unit_three_default" >
                           </div>
                           <div class="col-md-2">
                                <label for="">الحد الأعلى</label>
                            </div>
                            <div class="col-md-3">
                                <input type="number" class="form-control" name="unit_three_max_limit">
                            </div>
                       </div>
                       <div class="col-md-12">
                            <div class="col-md-2">
                                <label for="">الباركود</label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" name="unit_three_barcode">
                            </div>
                            <div class="col-md-2">
                                 <label for="">الحد الأدنى</label>
                             </div>
                             <div class="col-md-3">
                                 <input type="number" class="form-control" name="unit_three_min_limit">
                             </div>
                        </div>
                         <div class="col-md-12">
                            <div class="col-md-2">
                                <label for="">معامل التحويل</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="unit_three_factor_converter">
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-2">
                                <label for="">حد الطلب</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="unit_three_request_limit">
                            </div>
                        </div>
                   </div>
                </div>
                <div id="contact-2" class="tab-pane ">
                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td colspan="2"><strong>الوحدة الاولي</strong></td>
                                                <td colspan="2"><strong>الوحدة الثانية</strong></td>
                                                <td colspan="2"><strong>الوحدةالثالثة</strong></td>
                                                <td><strong>الإفتراضي</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>سعر الجملة</td><td><input type="number" class="form-control" name="unit_one_price_jumla"></td>
                                                <td>سعر الجملة</td><td><input type="number" class="form-control" name="unit_tow_price_jumla"></td>
                                                <td>سعر الجملة</td><td><input type="number" class="form-control" name="unit_three_price_jumla"></td>
                                                <td style="text-align:center"><input type="radio" name="unit_price_default" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>نصف الجملة</td><td><input type="number" class="form-control" name="unit_one_price_half_jumla"></td>
                                                <td>نصف الجملة</td><td><input type="number" class="form-control" name="unit_tow_price_half_jumla"></td>
                                                <td>نصف الجملة</td><td><input type="number" class="form-control" name="unit_three_price_half_jumla"></td>
                                                <td style="text-align:center"><input type="radio" name="unit_price_default" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>سعر الموزع</td><td><input type="number" class="form-control" name="unit_one_price_disterbuted"></td>
                                                <td>سعر الموزع</td><td><input type="number" class="form-control" name="unit_tow_price_disterbuted"></td>
                                                <td>سعر الموزع</td><td><input type="number" class="form-control" name="unit_three_price_disterbuted"></td>
                                                <td style="text-align:center"><input type="radio" name="unit_price_default" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>سعر التصدير</td><td><input type="number" class="form-control" name="unit_one_price_export"></td>
                                                <td>سعر التصدير</td><td><input type="number" class="form-control" name="unit_tow_price_export"></td>
                                                <td>سعر التصدير</td><td><input type="number" class="form-control" name="unit_three_price_export"></td>
                                                <td style="text-align:center"><input type="radio" name="unit_price_default" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>سعر التجزئة</td><td><input type="number" class="form-control" name="unit_one_price_peices"></td>
                                                <td>سعر التجزئة</td><td><input type="number" class="form-control" name="unit_tow_price_peices"></td>
                                                <td>سعر التجزئة</td><td><input type="number" class="form-control" name="unit_three_price_peices"></td>
                                                <td style="text-align:center"><input type="radio" name="unit_price_default" id=""></td>
                                            </tr>
                                            <tr>
                                                <td>سعر المستهلك</td><td><input type="number" class="form-control" name="unit_one_price_consumer"></td>
                                                <td>سعر المستهلك</td><td><input type="number" class="form-control" name="unit_tow_price_consumer"></td>
                                                <td>سعر المستهلك</td><td><input type="number" class="form-control" name="unit_three_price_consumer"></td>
                                                <td style="text-align:center"><input type="radio" name="unit_price_default" id=""></td>
                                            </tr>
                                            
                                            {{-- @foreach($prices a                                               <tr>
                                                    <td></td><td><input type="number" class="form-control" name="unit_one"></td>
                                                    <td></td><td><input type="number" class="form-control" name=""></td>
                                                    <td></td><td><input type="number" class="form-control" name=""></td>
                                                    <td style="text-align:center"><input type="radio" name="unit_price_default" id=""></td>
                                                </tr>
                                            @endforeach --}}
                                    </table>
                            </section>
                        </div>
                    </div>
                </div>
                <div id="contact-3" class="tab-pane ">
                    <section class="panel">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="#" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-success" type="submit">@lang('general.crud.create')</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </form>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script>
       $('#myTab a:first').tab('show');

        $('a').on('click', function(){
            $('.tab-pane').hide();
            $($(this).attr("href")).show();
        })
       
    </script>
@endsection
<style>
   
</style>