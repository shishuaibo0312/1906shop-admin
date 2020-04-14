<form class="form-horizontal" role="form" action="{{url('goods/update_do/'.$data->gid)}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">商品名称 </label>
        <div class="col-sm-9">
            <input type="text" name="g_name" id="form-field-1" placeholder="商品名称" class="col-xs-10 col-sm-5" value="{{$data->g_name}}" />

        </div>
        <b style="color:pink">{{$errors->first('g_name')}}</b>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">价格  </label>
        <div class="col-sm-9">
            <input type="text" name="g_jiage" id="form-field-1" placeholder="价格" class="col-xs-10 col-sm-5" value="{{$data->g_jiage}}" />
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">赠送积分 </label>
        <div class="col-sm-9">
            <input type="text" name="g_jifen" id="form-field-1" placeholder="赠送积分" class="col-xs-10 col-sm-5" value="{{$data->g_jifen}}"/>
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">库存  </label>
        <div class="col-sm-9">
            <input type="text" name="g_kucun" id="form-field-1" placeholder="库存" class="col-xs-10 col-sm-5" value="{{$data->g_kucun}}" />
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 照片 </label>

        <img src="{{env('UPLOAD_URL')}}{{$data->g_img}}" width="100px">
        <div class="col-sm-9">
            <input type="file" name="g_img" id="form-field-1" class="col-xs-10 col-sm-5" />
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 相册 </label>


        <div class="col-sm-9">
            @foreach($data->g_imgs as $v)
                <img src="{{env('UPLOAD_URL')}}{{$v}}" width="100px">
            @endforeach
            <input type="file" name="g_imgs[]" id="form-field-1" class="col-xs-10 col-sm-5"  multiple/>
        </div>
    </div><br>



    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 商品详情 </label>
        <div class="col-sm-9">
            <textarea id="editor" name="g_count">{{$data->g_count}}</textarea>

        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否新品</label>
        <div class="col-sm-9">
            <input type="radio" name="g_new" value="1" {{$data->g_new ==1 ? "checked" : ''}}>是

            <input type="radio" name="g_new" value="2" {{$data->g_new ==2 ? "checked" : ''}}>否
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否精品</label>
        <div class="col-sm-9">
            <input type="radio" name="g_best" value="1" {{$data->g_best ==1 ? "checked" : ''}}>是

            <input type="radio" name="g_best" value="2" {{$data->g_best ==2 ? "checked" : ''}}>否
        </div>
    </div>

    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否热卖</label>
        <div class="col-sm-9">
            <input type="radio" name="g_hot" value="1" {{$data->g_hot ==1 ? "checked" : ''}}>是

            <input type="radio" name="g_hot" value="2" {{$data->g_hot ==2 ? "checked" : ''}}>否
        </div>
    </div>

    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否上架</label>
        <div class="col-sm-9">
            <input type="radio" name="g_type" value="1" {{$data->g_type ==1  ? "checked" : ''}}>是

            <input type="radio" name="g_type" value="2" {{$data->g_type ==2 ? "checked" : ''}}>否
        </div>
    </div>

    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 所属品牌</label>
        <div class="col-sm-9">
            <select name="brand_id">
                <option value="">--请选择--</option>
                @foreach($date as $v)

                    <option value="{{$v->brand_id}}" {{$data->brand_id == $v->brand_id ? "selected" : ''}}>{{$v->brand_name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 所属分类</label>
        <div class="col-sm-9">
            <select name="tid">
                <option value="0">--请选择--</option>
                @foreach($datt as $v)
                    <option value="{{$v->tid}}" {{$v->tid == $data->tid ? "selected" : ''}}><?php echo str_repeat('&nbsp;&nbsp;&nbsp;',$v->level*2);?>{{$v->t_name}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <input type="submit" value="修改">
            &nbsp; &nbsp; &nbsp;
            <input type="reset" value="重置">
        </div>
    </div>

    <div class="hr hr-24"></div>
