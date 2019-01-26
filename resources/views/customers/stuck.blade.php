@extends('layout.app')

@section('content')

{!! Form::open(['action' => ['ClientController@store'],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
<div class="panel panel-primary" id="myPanel" >
    <div class="panel-heading">
        <h3 class="panel-title">شاشة سند استلام اصناف</h3>
    </div>
    <div class="panel-body">
        <div class="baisc-data" style="background-color:#e5eef5;border:1px solid #CCC;padding:5px;">
            <div class="row " >
                <div class="col-md-2 offset-8">
                    <div class="form-group">
                        {{Form::label('subject', 'رمز السند')}}		
                        {{ Form::text('code',$cod, ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        {{ Form::label('subject', 'نوع الفاتورة')}}		
                        {{ Form::select('size',['class'=>'نقدي','r'=>'آجل'], ['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-2">
                    <div class="form-group">
                        {{Form::label('subject', 'تاريخ السند')}}		
                        {{ Form::date('code','', ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-md-7 ">
                    <div class="form-group">
                        {{ Form::label('subject', 'اسم المورد')}}		
                        {{ Form::text('size', '', ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-md-1" style="margin-top:23px;">
                    <div class="form-group">
                        <button type="button" style="font-size:18px;height:24px;text-align:center;margin-right:-25px" class="btn btn-primary btn-xs" id="myBtn">+</button>
                    </div>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        {{Form::label('subject', 'رقم الفاتورة')}}		
                        {{ Form::text('code','', ['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
            <div class="row " >
                <div class="col-md-2 ">
                    <div class="form-group">
                        {{Form::label('subject', 'ضريبة مبيعات')}}		
                        {{ Form::text('code','', ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-md-1 offset-7" style="margin-top:23px;">
                    <lable class="form-controle" style="font-weight:1000">%</lable>
                </div>
                <div class="col-md-2 ">
                    <div class="form-group">
                        {{ Form::label('subject', 'تاريخ الفاتورة')}}		
                        {{ Form::date('size','', ['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
            <div class="row " >
                <div class="col-md-12 ">
                    <div class="form-group">
                        {{Form::label('subject', 'ملاحظات')}}		
                        {{ Form::textarea('code','', ['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="data-table">
            <div class="row">
                <button type="button" class="btn btn-success" >+</button>
                <div class="table-responsive" style="width:96%"> 
                    <table class="table table-bordered" id="myTab">
                        <thead >
                        <tr >
                            <th>رمز الصنف</th>
                            <th>اسم الصنف</th>
                            <th>الوحدة</th>
                            <th>سعر الوحدة</th>
                            <th>الكمية</th>
                            <th>الخصم</th>
                            <th>إجمالي السعر</th>
                            <th>+ / - </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr><td>لاتوجد بيانات </td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="business" >
            <div class="row ">
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('subject', 'إجمالي الخصم') }}		
                        {{ Form::text('code','', ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('subject', 'إجالي الفاتورة')}}		
                        {{ Form::text('size', '', ['class'=>'form-control']) }}
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="form-group">
                        {{Form::label('subject', 'القيمة بالحروف')}}		
                        {{ Form::text('code','', ['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="controle">
            <div class="row">
                <div class="offset-5"></div>
                <div class="col-md-2 offset-5">
                    <div class="form-group">
                        {{ Form::submit('حفظ', ['class'=>"btn btn-success"]) }}
                        {{ Form::submit('ادخال باركود', ['class'=>"btn btn-warning"]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:10px 5px;background-color:#CCC;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> اضافة مورد</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
            @include('mowared.index');
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal">
            <i class="fa fa-remove"></i> إلغاء</button>
        </div>
      </div>
      
    </div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

@endsection

<style>
.controle{
    padding-bottom:10px;
}
.business{
    padding-bottom:10px;
}
table{
    background-color:#FFF !important;
}
table th{
    font-size:14px;
    height:25px !important;
    font-weight:700;
    text-align:center;
}
#myPanel  table td{
    font-size:14px;
    text-align:center;
    height:20px !important;
}
#myPanel .data-table , .business ,.controle{
    border:1px solid #CCC;
    margin-top:5px;
    padding-top:5px;
    padding-right:15px;
    padding-left:15px;
    background-color:#e5eef5;
}
#myPanel .row .form-group{
    display:inline !important;
}
#myPanel label {
    display: inline !important;
    margin-bottom: 0px !important;
}
#myPanel .row {
    width: 100%;
    margin-right: 0px !important; 
}

.panel-primary{
    margin:-60px auto;
}
#myModel{
    margin-top:200px !important;
}
 table {
    white-space:nowrap;
    //word-wrap:break-word;
}
td{
    padding:2px !important;
    align:center !important;
}
#myPanel .form-control{
    height:25px !important;
}
</style>

