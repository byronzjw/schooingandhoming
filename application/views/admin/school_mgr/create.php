<script type="text/javascript" charset="utf-8" src="/public/edit/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/edit/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/public/edit/lang/zh-cn/zh-cn.js"></script>
<div class="container-fluid" style="margin-top:60px;">
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal" name="form" role="form" id="form" enctype="multipart/form-data" method="post" action="/admin/common/submit_school">
            <h2 class="col-xs-offset-1 col-xs-10">基本信息</h2>
                <div class="form-group">
                    <label class="col-xs-2 control-label">名称（中文）</label>
                    <div class="col-xs-4">
                        <input class="form-control input-sm" type="text" name="name_cn" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">名称（英文）</label>
                    <div class="col-xs-4">
                        <input class="form-control input-sm" type="text" name="name_en" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">网址</label>
                    <div class="col-xs-4">
                        <input class="form-control input-sm" type="text" name="url" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">城市</label>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" id="state_id" name="state_id">
                            <?php foreach($state as $item): ?>
                            <option value="<?php echo $item['id'] ?>"><?php echo $item['name_cn'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" id="city_id" name="city_id">
                            
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">邮编</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="zip_code" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">封面</label>
                    <div class="col-xs-2">
                        <img src="/upload/default/school/default.jpg" style="width:200px;" id="perview_cover" class="img-thumbnail" />
                    </div>
                    <div class="col-xs-2">
                        <input type="file" name="cover" onchange="showPerview(this,'perview_cover');">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">移动端封面</label>
                    <div class="col-xs-2">
                        <img src="/upload/default/school/default.jpg" style="width:200px;" id="perview_cover_mobile" class="img-thumbnail" />
                    </div>
                    <div class="col-xs-2">
                        <input type="file" name="cover_mobile" onchange="showPerview(this,'perview_cover_mobile');">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">推荐图</label>
                    <div class="col-xs-2">
                        <img src="/upload/default/school/default.jpg" style="width:200px;" id="perview_index_hot_cover" class="img-thumbnail" />
                    </div>
                    <div class="col-xs-2">
                        <input type="file" name="index_hot_cover" onchange="showPerview(this,'perview_index_hot_cover')">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">LOGO</label>
                    <div class="col-xs-2">
                        <img src="/upload/default/school/default.jpg" style="width:200px;" id="perview_school_log" class="img-thumbnail" />
                    </div>
                    <div class="col-xs-2">
                        <input type="file" name="school_logo" onchange="showPerview(this,'perview_school_log')">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">联系地址</label>
                    <div class="col-xs-4">
                        <input class="form-control input-sm" type="text" name="address" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">联系电话</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="number" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">简介</label>
                    <div class="col-xs-4">
                        <textarea class="form-control" rows="3" name="intro"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">学校类型</label>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" name="basic_school_type">
                        	<?php foreach($school_type as $k=>$v): ?>
                            <option value="<?php echo $k ?>"><?php echo $v ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">学校年级</label>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" name="basic_grade_start">
                            <option value="">--无--</option>
                            <?php foreach($school_grade as $item): ?>
                            <option value="<?php echo $item['name'] ?>"><?php echo $item['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" name="basic_grade_end">
                            <option value="">--无--</option>
                            <?php foreach($school_grade as $item): ?>
                            <option value="<?php echo $item['name'] ?>"><?php echo $item['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">建校时间</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm datetimepicker" type="text" name="basic_createtime" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">在校人数</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="basic_school_enrollments" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">是否接收国际学生</label>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" name="basic_accept_international_students">
                            <option value="0">否</option>
                            <option value="1">是</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">是否发送I-20</label>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" name="basic_issue_i20">
                            <option value="0">否</option>
                            <option value="1">是</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">校园面积</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="basic_school_area" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">有色人种学生比例</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="basic_proportion_of_individuals" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">宗教倾向</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="basic_religious_tendency" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">申请截至日期</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="apply_deadline" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">是否要求SSAT</label>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" name="apply_ssat">
                            <option value="0">否</option>
                            <option value="1">是</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="display:none;">
                    <label class="col-xs-2 control-label">平均SAT</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="apply_sat_avg" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">联系招办</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="apply_link_email" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">师生比</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="teach_pupil_ratio" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">平均班级大小</label>
                    <div class="col-xs-4">
                        <input class="form-control input-sm" type="text" name="teach_class_avg" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">是否提供ESL</label>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" name="teach_esl">
                            <option value="0">否</option>
                            <option value="1">是</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">学士以上学位教职人员比例</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="teach_edu_scale" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">校友捐赠</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="financial_contribute" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">学费/年</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="financial_tuition" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">学费备注</label>
                    <div class="col-xs-10">
                        <script id="editor" type="text/plain" style="width:1024px;height:500px;"></script>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">是否热门</label>
                    <div class="col-xs-1">
                        <select class="form-control input-sm" name="is_hot">
                            <option value="0">否</option>
                            <option value="1">是</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">排序</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="sort" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">经度</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="lng" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">纬度</label>
                    <div class="col-xs-1">
                        <input class="form-control input-sm" type="text" name="lat" value="">
                    </div>
                     <div class="col-xs-1">
                        <a class="btn btn-primary" onclick="getDistance();">查看附近住家</a>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">关联住家ID（多个ID逗号分割）</label>
                    <div class="col-xs-3">
                        <input class="form-control input-sm" type="text" name="suggest_house" value="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-xs-2 control-label">申请费用</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="apply_cost" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">是否提供课后辅导</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="after_school_care" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">SAT阅读</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="sat_read" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">SAT数学</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="sat_math" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">SAT写作</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="sat_write" value="0">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">考试要求（小学）</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="exam_req1" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">考试要求（中学）</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="exam_req2" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-2 control-label">考试要求（高中）</label>
                    <div class="col-xs-2">
                        <input class="form-control input-sm" type="text" name="exam_req3" value="">
                    </div>
                </div>
                

                <h2 class="col-xs-offset-1 col-xs-10">AP</h2>
                <div class="form-group">
                    <label class="col-xs-2 control-label"></label>
                    <div class="col-xs-8">
                        <?php foreach($aps_item as $item): ?>
                            <button type="button" class="btn btn-default" data-id=<?php echo $item['id'] ?> style="margin:2px;" data-type="ap"><?php echo $item['name'] ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <h2 class="col-xs-offset-1 col-xs-10">运动项目</h2>
                <div class="form-group">
                    <label class="col-xs-2 control-label"></label>
                    <div class="col-xs-8">
                        <?php foreach($sports_item as $item): ?>
                            <button type="button" class="btn btn-default" data-id=<?php echo $item['id'] ?> style="margin:2px;" data-type="sport"><?php echo $item['name'] ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <h2 class="col-xs-offset-1 col-xs-10">社团</h2>
                <div class="form-group">
                    <label class="col-xs-2 control-label"></label>
                    <div class="col-xs-8">
                        <?php foreach($clubs_item as $item): ?>
                            <button type="button" class="btn btn-default" data-id=<?php echo $item['id'] ?> style="margin:2px;" data-type="club"><?php echo $item['name'] ?></button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <h2 class="col-xs-offset-1 col-xs-10">毕业生去向</h2>
                <?php foreach($gds_item as $item): ?>
                <div class="form-group">
                    <label class="col-xs-2 control-label"></label>
                    <div class="col-xs-2">
                        <button type="button" class="btn btn-default" data-id=<?php echo $item['key'] ?> data-type="gd"><?php echo $item['value'] ?></button>
                    </div>
                    <div class="col-xs-2">
                        <div class="input-group">
                            <div class="input-group-addon">人数</div>
                            <input class="form-control" type="text" value="<?php echo $item['num'] ?>" name="gd_<?php echo $item['key'] ?>">
                        </div>
                    </div>
                    <div class="col-xs-5"></div>
                </div>
                <?php endforeach; ?>
                <h2 class="col-xs-offset-1 col-xs-10">照片视频</h2>
                <?php for($i=1;$i<=5;$i++): ?>
                <div class="form-group">
                    <label class="col-xs-2 control-label">图片上传</label>
                    <div class="col-xs-2">
                        <img src="/upload/default/school/default.jpg" style="width:200px;" class="img-thumbnail" id="perview_image_<?php echo $i ?>" />
                    </div>
                    <div class="col-xs-2">
                        <input type="file" name="image_<?php echo $i ?>" onchange="showPerview(this,'perview_image_<?php echo $i ?>')">
                    </div>
                </div>
                <?php endfor; ?>
                <div class="form-group">
                    <div class="col-xs-offset-4 col-xs-10">
                    	<input type="hidden" name="financial_tuition_remark" />
                        <input class="btn btn-success" type="button" value="保存" id="submitForm">
                        <input class="btn btn-info" type="button" value="返回" id="back">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="areaModal"  role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">住家距离列表</h4>
      </div>
      <div class="modal-body row">
      	<table class="table"  id="distanceArea">
      		
      	</table>
      	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
$(document).ready(function() {
	 var ue = UE.getEditor('editor');
	
    $('.datetimepicker').datetimepicker({
        format: 'yyyy',
        language: 'zh-CN',
        startView: 'decade',
        minView: 'decade',
        maxView: 'decade',
        autoClose: true,
    });

    $("button[data-type]").click(function(){
        var is_selected = $(this).hasClass('btn-success');
        if(is_selected) {
            $(this).removeClass('btn-success').addClass('btn-default');
        } else {
            $(this).removeClass('btn-default').addClass('btn-success');
        }
    });

    $("#state_id").change(function(){
        var state_id = $(this).val();
        get_city(state_id,function(arr){
            var html = [];
            for(var i in arr) {
                html.push("<option value=\""+arr[i].id+"\">"+arr[i].name_cn+"</option>");
            }
            $("#city_id").html(html.join(""));
        });
    });

    $("#back").click(function(){
        window.location.href = "/admin/common/school_mgr";
    });
   
    $("#submitForm").click(function(){
        var data = {};

        var ap_ids = [];
        $("button[data-type='ap']").each(function(){
            if($(this).hasClass('btn-success')) {
                ap_ids.push($(this).attr('data-id'));
            }
        });
        data.ap_ids = ap_ids.join(",");

        var sport_ids = [];
        $("button[data-type='sport']").each(function(){
            if($(this).hasClass('btn-success')) {
                sport_ids.push($(this).attr('data-id'));
            }
        });
        data.sport_ids = sport_ids.join(",");

        var club_ids = [];
        $("button[data-type='club']").each(function(){
            if($(this).hasClass('btn-success')) {
                club_ids.push($(this).attr('data-id'));
            }
        });
        data.club_ids = club_ids.join(",");

        var gd_ids = [];
        $("button[data-type='gd']").each(function(){
            if($(this).hasClass('btn-success')) {
                gd_ids.push($(this).attr('data-id'));
            }
        });
        data.gd_ids = gd_ids.join(",");

        var $form = $("#form");
    	var hiddenHtml = [];
        hiddenHtml.push("<input type=\"hidden\" name=\"action\" value=\"create\">");
    	for(var item in data){
    		hiddenHtml.push("<input type=\"hidden\" name=\""+item+"\" value=\""+data[item]+"\">");
    	}
    	$form.append(hiddenHtml.join(""));

    	var content = UE.getEditor('editor').getContent();
    	$('input[name=financial_tuition_remark]').val(content);
    	
    	$form.submit();
    });
});

function showPerview(obj,perviewId) {
    var file = obj.files[0];
    if (!/image\/\w+/.test(file.type)) {
        alert("请确保文件为图像类型");
        return false;
    }
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function(e) {
        $("#" + perviewId).attr("src",this.result);
    }
}
function getDistance(){
	lng = $('input[name=lng]').val();
	lat = $('input[name=lat]').val();
	if(!lng || !lat){
		alert('经纬度不能为空!');return false;
	}
	$.post('/admin/common/getHouseDistance',{'lat':lat,'lng':lng},function(data){
		if(data.status){
			html = '<tr><td>住家名称</td><td>住家ID</td><td>距离（KM）</td><td>绑定</td></tr>';
			$.each(data.msg,function(k,v){
				html +='<tr><td>'+v.title+'</td><td>'+v.id+'</td><td>'+v.distance+'</td><td><input type="checkbox" onclick="addSchool(this,'+v.id+')" /></td></tr>';
			})
			$('#distanceArea').html(html);
			$('#areaModal').modal();
		}
	},'json')
}
function addSchool(ts,id){
	if( $(ts).prop('checked') ){
		var school_id_string = $('input[name=suggest_house]').val();
		add_id = id+',';	
		if(school_id_string.indexOf(add_id) <0){
			school_id_string = school_id_string + add_id;
			$('input[name=suggest_house]').val(school_id_string)
		}
	}else{
		var school_id_string = $('input[name=suggest_house]').val();
		add_id = id+',';	
		if(school_id_string.indexOf(add_id) >=0){
			school_id_string = school_id_string.replace(add_id,'');
			$('input[name=suggest_house]').val(school_id_string)
		}
	}
}

function get_state(city_id,callback) {
    $.getJSON('/ajax/get_state/' + city_id,{},function(resp){
        callback(resp);
    });
}

function get_city(state_id,callback) {
    $.getJSON('/ajax/get_city_list/' + state_id,{},function(resp){
        callback(resp);
    });
}
</script>