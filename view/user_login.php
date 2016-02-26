


<div>
<form class="form-horizontal" action="/Login/doLogin/" method="post">
<div class="component" data-html="true">
<div class="form-group">
<label class="col-md-2 control-label" for="Nutzername">Nutzername</label>
<div class="col-md-4">
<input id="email" name="email" type="text" placeholder="Nutzername / Email" class="form-control input-md">
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label" for="password">Passwort</label>
<div class="col-md-4">
<input id="password" name="password" type="password" placeholder="Passwort" class="form-control input-md">
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label" for="send">&nbsp;</label>
<div class="col-md-4">
<input id="send" name="send" type="submit" class="btn btn-primary">
</div>
</div><br><br><br>
<?php if (isset($ErrorMessage))
{
	echo "<div class='alert alert-danger' role='alert'>" . $ErrorMessage . "</div>";
}
?>

	</div>
</form>
</div>
