@extends('layouts.app')

@section('content')
<nav class="panel">
    <p class="panel-heading">
    إستلام أصناف
    </p>
    <div class="panel-block" style="display:block;">
        <div class="card " style="width:100%;margin-bottom:10px;padding:10px">
            <div class="content">
                <form action="">
                    <div class="columns">
                        <div class="column is-3">
                            <div class="field">
                                <div class="control">
                                    <label>رقم السند</label>
                                    <input class="input" type="text" placeholder="Primary input">
                                </div>
                            </div>
                        </div>
                        <div class="column is-offset-1"></div>
                        <div class="column is-3">
                            <div class="field">
                                <div class="control">
                                    <label>نوع الفاتورة</label>
                                    <input class="input" type="date" placeholder="Primary input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column is-3">
                            <div class="field">
                                <div class="control">
                                    <label>تاريخ السند</label>
                                    <input class="input" type="date" placeholder="Primary input">
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="field">
                                <label>اسم المورد</label>
                                <div class="control">
                                    <div class="select is-fullwidth">
                                    <select>
                                        <option>Select dropdown</option>
                                        <option>With options</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-3">
                            <div class="field">
                                <div class="control">
                                    <label>تاريخ الفاتورة</label>
                                    <input class="input" type="date" placeholder="Primary input">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <div class="control">
                                    <label>ملاحظات</label>
                                    <textarea name="note" id=""  rows="3" class="textarea"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card " style="width:100%;margin-bottom:10px;padding:10px">
            <div class="content">
                <table class="table">
                    <thead>
                        <tr>
                            <th><abbr title="Position">رمز الصنف</abbr></th>
                            <th>أسم الصنف</th>
                            <th>الوحدة</th>
                            <th>سعر الوحدة</th>
                            <th>الكمية</th>
                            <th>الخصم</th>
                            <th>إجمالي السعر</th>
                            <th><button class="button is-primary">+</button></th>
                            <th><button class="button is-danger">-</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            </td>
                            <td>38</td>
                            <td>23</td>
                            <td>12</td>
                            <td>3</td>
                            <td>68</td>
                            <td>36</td>
                            <td>+32</td>
                            <td>81</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card " style="width:100%;margin-bottom:10px;padding:10px">
            <div class="content">
                <div class="columns">
                    <div class="column is-3">
                        <div class="field">
                            <div class="control">
                                <label>إجمالي الخصم</label>
                                <input class="input" type="text" placeholder="Primary input">
                            </div>
                        </div>
                    </div>

                     <div class="column is-3">
                        <div class="field">
                            <div class="control">
                                <label>إجمالي الفاتورة</label>
                                <input class="input" type="text" placeholder="Primary input">
                            </div>
                        </div>
                    </div>

                     <div class="column is-6">
                        <div class="field">
                            <div class="control">
                                <label>القيمة بالحروف</label>
                                <input class="input" type="text" placeholder="Primary input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
            <div class="panel-block">
                <button class="button is-primary">حفظ</button>
            </div>
    
  </nav>
@endsection