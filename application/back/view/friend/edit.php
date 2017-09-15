{extend name='public:base' /}
{block name="title"}编辑合作伙伴{/block}

{block name="content"}
<style>
    .control-label{
        padding-right:10px;
    }
</style>

	<!--弹出添加用户窗口--><form class="form-horizontal" action="{:url('update')}" method="post" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="{$row_->id}">
    <input type="hidden" name="referer" value="{$referer}">
		<div class="row" >
			<div class="col-xs-8">
				<div class="text-center">
					<h4 class="modal-title" id="gridSystemModalLabel">编辑合作伙伴</h4>
				</div>
				<div class="">
					<div class="container-fluid">
                        <div class="form-group">
                            <label for="situation" class="col-xs-3 control-label">类型：</label>
                            <div class="col-xs-8">
                                <label class="control-label" >
                                    <input type="radio" name="type" class="friend" value="1" <?= $row_->type=='友情链接'?'checked':'';?>>友情链接</label> &nbsp;
                                <label class="control-label">
                                    <input type="radio" name="type" class="hezuo" value="2" <?= $row_->type=='战略合作'?'checked':'';?>>战略合作</label>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label">名称：</label>
                            <div class="col-xs-8 ">
                                <input type="text" class="form-control input-sm duiqi" name='name' value="{$row_->name}" id="" placeholder="">
                            </div>
                        </div>


                        <div class="form-group ">
                            <label for="sName" class="col-xs-3 control-label">链接：</label>
                            <div class="col-xs-8 ">
                                <input type="text" class="form-control input-sm" name='url' value="{$row_->url}" id="" placeholder="请添加开头有http://" >
                            </div>
                        </div>

                        <div class="form-group" id="logo_" <?php if($row_->type=='友情链接'){?>style="display:none;"<?php }?>>
                            <label for="sOrd" class="col-xs-3 control-label"><span style="color:red;">*&nbsp;&nbsp;</span>logo：</label>
                            <div class="col-xs-4 ">
                                <img src="__IMGURL__{$row_->logo}" alt="没有上传图片" height="100"/>

                                <input type="file" title='' class="form-control  duiqi" id="sOrd" name="img" placeholder=""><span style="color:red">尺寸要求（150*100），大小不超过<?php echo floor(config('upload_size')/1024/1024);?>MM。不选择表示不修改。</span>
                            </div>

                        </div>
                        </div>
					</div>
            </div></div>
				<div class="text-center">
                    <a href="{:url('index')}"><button type="button" class="btn btn-xs btn-white" data-dismiss="modal">返回列表 </button></a>
					<button type="submit" class="btn btn-xs btn-green">保 存</button>
				</div>
			</div>
		</div>
</form>

<script>
    $('.friend').click(function () {
        $('#logo_').hide();
    });
    $('.hezuo').click(function () {
        $('#logo_').show();
    });
    $(function () {
        $('form').bootstrapValidator({
            fields: {
                type: {
                    validators: {
                        notEmpty: {
                            message: '不能为空'
                        }


                    }
                }


            }
        });

    });
</script>

{/block}
