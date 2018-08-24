

@extends('admin.layout.index')

@section('container')               

		<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-magic"></i>订单修改</span>
                    </div>
                  <form class="mws-form wzd-default wizard-form wizard-form-horizontal" action="/admin/orders/{{ $data['id'] }}" method="post">
                            {{ csrf_field()}}
                            {{ method_field('PUT') }}
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1clj7bdqomcnmu21rqt_0" style="display: block;">
                                <legend class="wizard-label" style="display: none;"><i class="icol-accept"></i> Member Profile</legend>
                                <div id="" class="mws-form-row">
                                    <label class="mws-form-label text-info">收货人 <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="rec" style="width: 400px" value="{{ $data['rec'] }}" >
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label text-info">电话 <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="phone" style="width: 400px" value="{{ $data['phone'] }}">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label text-info">收货地址 <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="addr" style="width: 400px" value="{{ $data['addr'] }}">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label text-info">收货日期<span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="SendDate" style="width: 400px" value="{{ $data['SendDate'] }}">
                                    </div>
                                </div>
                                 <div class="mws-form-row">
                                    <label class="mws-form-label text-info">收货时间 <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <input type="text" name="ToDate" style="width: 400px" value="{{ $data['ToDate'] }}">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label text-info">留言卡 <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="umsg" rows="1" cols="80" >{{ $data['umsg'] }}</textarea>
                                    </div>
                                </div>
                               
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1clj7bdqomcnmu21rqt_1" style="display: none;">
                                <legend class="wizard-label" style="display: none;"><i class="icol-delivery"></i> Membership Type</legend>
                                <div id="" class="mws-form-row">
                                    <label class="mws-form-label">Membership Plan <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="required large">
                                            <option>Free</option>
                                            <option>Standard</option>
                                            <option>Premium</option>
                                        </select>
                                    </div>
                                </div>
                               <!--  <div class="mws-form-row">
                                    <label class="mws-form-label">Subscription Period <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <select class="required large">
                                            <option>One Month</option>
                                            <option>Six Months</option>
                                            <option>Twelve Months</option>
                                        </select>
                                    </div>
                                </div> -->
                              <!--   <div class="mws-form-row">
                                    <label class="mws-form-label">Payment Method <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <ul class="mws-form-list">
                                            <li><input type="radio" id="cc" name="pm" class="required"> <label for="cc">Credit Card</label></li>
                                            <li><input type="radio" id="pp" name="pm"> <label for="pp">PayPal</label></li>
                                        </ul>
                                        <label class="error plain" generated="true" for="pm" style="display:none"></label>
                                    </div>
                                </div> -->
                            </fieldset>
                            
                            <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1clj7bdqomcnmu21rqt_2" style="display: none;">
                                <legend class="wizard-label" style="display: none;"><i class="icol-user"></i> Confirmation</legend>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">Message <span class="required">*</span></label>
                                    <div class="mws-form-item">
                                        <textarea name="" rows="" cols="" class="required large"></textarea>
                                    </div>
                             
                            </fieldset>
                        <div class="mws-button-row">
                        	<button type="submit" class="btn">重置</button>
                        	<button type="submit" class="btn">确认</button>
                        	 
                        	<button type="button" class="btn btn-primary pull-right" name="wizard-submit" style="display: none;">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
@endsection
 