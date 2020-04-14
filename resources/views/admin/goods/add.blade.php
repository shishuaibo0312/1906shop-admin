<form class="form-horizontal" role="form" action="{{url('goods/add_do')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">商品名称 </label>
        <div class="col-sm-9">
            <input type="text" name="g_name" id="form-field-1" placeholder="商品名称" class="col-xs-10 col-sm-5" />
        </div>
        <b style="color:pink">{{$errors->first('g_name')}}</b>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">价格  </label>
        <div class="col-sm-9">
            <input type="text" name="g_jiage" id="form-field-1" placeholder="价格" class="col-xs-10 col-sm-5" />
        </div>

    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">赠送积分 </label>
        <div class="col-sm-9">
            <input type="text" name="g_jifen" id="form-field-1" placeholder="赠送积分" class="col-xs-10 col-sm-5" />
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2">库存  </label>
        <div class="col-sm-9">
            <input type="text" name="g_kucun" id="form-field-1" placeholder="库存" class="col-xs-10 col-sm-5" />
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 照片 </label>


        <div class="col-sm-9">
            <input type="file" name="g_img" id="form-field-1" class="col-xs-10 col-sm-5" />
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 相册 </label>


        <div class="col-sm-9">
            <input type="file" name="g_imgs[]" id="form-field-1" class="col-xs-10 col-sm-5"  multiple/>
        </div>
    </div><br>



    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 商品详情 </label>
        <div class="col-sm-9">
            <textarea id="editor" name="g_count"></textarea>

        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否新品</label>
        <div class="col-sm-9">
            <input type="radio" name="g_new" value="1" checked>是

            <input type="radio" name="g_new" value="2">否
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否精品</label>
        <div class="col-sm-9">
            <input type="radio" name="g_best" value="1" checked>是

            <input type="radio" name="g_best" value="2">否
        </div>
    </div>

    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否热卖</label>
        <div class="col-sm-9">
            <input type="radio" name="g_hot" value="1" checked>是

            <input type="radio" name="g_hot" value="2">否
        </div>
    </div>

    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否上架</label>
        <div class="col-sm-9">
            <input type="radio" name="g_type" value="1" checked>是

            <input type="radio" name="g_type" value="2">否
        </div>
    </div>

    <div class="space-4"></div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 所属品牌</label>
        <div class="col-sm-9">
            <select name="brand_id">
                <option value="">--请选择--</option>
                @foreach($date as $v)

                    <option value="{{$v->brand_id}}">{{$v->brand_name}}</option>
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
                @foreach($data as $v)
                    <option value="{{$v->tid}}"><?php echo str_repeat('&nbsp;&nbsp;&nbsp;',$v->level*2);?>{{$v->t_name}}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <input type="submit" value="添加">
            &nbsp; &nbsp; &nbsp;
            <input type="reset" value="重置">
        </div>
    </div>

    <div class="hr hr-24"></div>
