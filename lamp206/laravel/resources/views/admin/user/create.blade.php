@extends('admin.layout.index')


@section('container')
<!-- <div class="mws-form-message error">
	This is an error message
	<ul>
		<li>You are too fast</li>
		<li>You are too slow</li>
	</ul>
</div> -->
	<!-- 显示错误 -->
@if (count($errors) > 0)
	<div class="mws-form-message error">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif	
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span>{{ $title }}</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                    	<form class="mws-form" action="/admin/user" method="post">
                    		{{ csrf_field() }} 
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">用户名</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="username" value="{{ old('username') }}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">密码</label>
                    				<div class="mws-form-item">
                    					<input type="password" class="small" name="password">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">确认密码</label>
                    				<div class="mws-form-item">
                    					<input type="password" class="small" name="repassword">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">手机号</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="phone" value="{{ old('phone') }}">
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label class="mws-form-label">邮箱</label>
                    				<div class="mws-form-item">
                    					<input type="text" class="small" name="email" value="{{ old('email') }}">
                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="提交" class="btn btn-success"></font></font>
                    			<input type="reset" value="重置" class="btn btn-info">
                    		</div>
                    	</form>
                    </div>    	
                </div>
@endsection