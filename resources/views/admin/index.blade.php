@extends('layouts.admin')
@section('content')

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{url('admin/Report')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->
@endsection
