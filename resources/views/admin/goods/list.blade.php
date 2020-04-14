<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bootstrap 实例 - 上下文类</title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <script src="/jquery.js"></script>
    <script src="/static/admin/js/bootstrap.min.js"></script>
</head>
<body>
​{{session('msg')}}
        <!-- <form action="" method="get">
	<input type="text" name="key" value="{{$all['key']??''}}"  placeholder="品牌名称">
	<input type="text" name="url" value="{{$all['url']??''}}" placeholder="品牌URL">
	<input type="submit" value="搜索">

</form>	 -->
<table class="table">
    <!--  <caption>上下文表格布局</caption> -->
    <thead>
    <tr class="danger">
        <th>商品编号</th>
        <th>商品名称</th>
        <th>库存</th>
        <th>赠送积分</th>
        <th>商品价格</th>
        <th>商品图片</th>
        <th>商品相册</th>
        <th>是否新品</th>
        <th>所属分类</th>
        <th>所属品牌</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $v)
        <tr class="success">
            <td>{{$v->gid}}</td>
            <td>{{$v->g_name}}</td>
            <td>{{$v->g_kucun}}</td>
            <td>{{$v->g_jifen}}</td>
            <td>{{$v->g_jiage}}</td>
            <td><img src="{{env('UPLOAD_URL')}}{{$v->g_img}}" width="100px"></td>
            <td>
                @foreach($v->g_imgs as $vv)
                    <img src="{{env('UPLOAD_URL')}}{{$vv}}" width="100px">
                @endforeach
            </td>
            <td>{{$v->g_new==1 ? "是" : '否'}}</td>

            <td>{{$v->brand_name}}</td>
            <td>{{$v->t_name}}</td>
            <td>

                <a href="{{url('goods/delete/'.$v->gid)}}" class="btn btn-danger">删除</a>
                <!-- <button type="button" class="btn btn-danger">删除</button> -->
                <!-- <button type="button" class="btn btn-info">修改</button> -->
                <a href="{{url('goods/update/'.$v->gid)}}" class="btn btn-info">编辑</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$data->links()}}


​
</body>
</html>
<h3><a href="{{url('goods/add')}}" style="color:#00ffff">添加商品</a></h3>

