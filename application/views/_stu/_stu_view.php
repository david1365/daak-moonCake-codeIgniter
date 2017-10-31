
<header>
	ثبت گروه
</header>

<form action="../group/group_ctl.php" method="POST" id="add_group">
	<input type="hidden" name="mode" value="<?php echo "" ?>"/>

	<div class="form-group" >
		<label >نام گروه</label>
		<input type="text" name="group_name"  class="form-control"/>
	</div>

	<div class="form-group">
		<label >توضیحات</label>
		<textarea name="desc" class="form-control" ></textarea>
	</div>

	<div class="modal-footer text-left">
		<button id="submit" type="submit" class="btn btn-warning" data-command="save">تایید</button>
		<button type="button" class="btn btn-primary" data-dismiss="modal">بازگشت</button>
	</div>

</form>


<script src="assets/js/test/add_group.js"></script>
