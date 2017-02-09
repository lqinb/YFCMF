<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:55:"D:\phpsite\YFCMF/app/admin\view\model\ajax_cmslist.html";i:1484560944;}*/ ?>
<?php if(is_array($data) || $data instanceof \think\Collection): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$v): ?>
<tr>
	<td class="hidden-xs" align="center">
		<label class="pos-rel">
			<input name="<?php echo $model['model_pk']; ?>[]" id="navid" class="ace"  type='checkbox' value="<?php echo $v[$model['model_pk']]; ?>">
			<span class="lbl"></span>
		</label>
	</td>
	<td height="28" ><input name="<?php echo $v[$model['model_pk']]; ?>" value="<?php echo (isset($v[$model['model_order']]) && ($v[$model['model_order']] !== '')?$v[$model['model_order']]:50); ?>" class="list_order"/></td>
	<?php if(is_array($fields) || $fields instanceof \think\Collection): if( count($fields)==0 ) : echo "" ;else: foreach($fields as $k=>$vv): if($k != $model['model_order']): ?>
	<td height="28" ><?php echo $v[$k]; ?></td>
	<?php endif; endforeach; endif; else: echo "" ;endif; ?>
	<td>
		<div class="hidden-sm hidden-xs action-buttons">
			<a class="green"  href="<?php echo url('cmsedit',['id'=>$model_id,$model['model_pk']=>$v[$model['model_pk']]]); ?>" title="修改">
				<i class="ace-icon fa fa-pencil bigger-130"></i>
			</a>
			<a class="red confirm-rst-url-btn" href="<?php echo url('cmsdel',['id'=>$model_id,$model['model_pk']=>$v[$model['model_pk']]]); ?>" data-info="你确定要删除吗？" title="删除">
				<i class="ace-icon fa fa-trash-o bigger-130"></i>
			</a>
		</div>
		<div class="hidden-md hidden-lg">
			<div class="inline position-relative">
				<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
					<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
				</button>
				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
					<li>
						<a href="" class="tooltip-success" data-rel="tooltip" title="" data-original-title="修改">
							<span class="green">
								<i class="ace-icon fa fa-pencil bigger-120"></i>
							</span>
						</a>
					</li>

					<li>
						<a href="<?php echo url('cmsdel',['id'=>$model_id,$model['model_pk']=>$v[$model['model_pk']]]); ?>"  class="tooltip-error confirm-rst-url-btn" data-info="你确定要删除吗？" data-rel="tooltip" title="" data-original-title="删除">
							<span class="red">
								<i class="ace-icon fa fa-trash-o bigger-120"></i>
							</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</td>
</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
	<td align="left" class="hidden-xs"><button id="btnsubmit" class="btn btn-white btn-yellow btn-sm hidden-xs">删</button> </td>
	<td align="left" class="hidden-xs"><button  id="btnorder" href="<?php echo url('cmsorder',['id'=>$model_id]); ?>" class="btn btn-white btn-yellow btn-sm">排序</button></td>
	<td colspan="20" align="right" class="hidden-xs"><?php echo $page; ?></td>
</tr>