<div class="form-group">
	<label class="col-sm-2 control-label" for="small-headline">Intro</label>
	<div class="col-sm-10">
		<input class="form-control" id="small-headline" type="text" name="REX_INPUT_VALUE[1]" value="<?= htmlspecialchars_decode($this->intro) ?>" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="headline">Überschrift</label>
	<div class="col-sm-10">
		<input class="form-control" id="headline" type="text" name="REX_INPUT_VALUE[2]" value="<?= htmlspecialchars_decode($this->headline) ?>" />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="markitup_1">Text</label>
	<div class="col-sm-10">
		<textarea cols="1" rows="6" class="form-control markitupEditor-textile_full" id="markitup_1" name="REX_INPUT_VALUE[3]"><?= htmlspecialchars_decode($this->text) ?></textarea>
	</div>
</div>
