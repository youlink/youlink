<form class="form-horizontal" action="/user/doCreate" method="post">
	<div class="component" data-html="true">
		<div class="form-group">
		  <label class="col-md-2 control-label" for="salutation">Anrede</label>
		  <div class="col-md-4">
		  	<input id="salutation" name="salutation" type="salutation" placeholder="salutation" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="firstName">Vorname</label>
		  <div class="col-md-4">
		  	<input id="firstName" name="firstName" type="text" placeholder="Vorname" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="lastName">Nachname</label>
		  <div class="col-md-4">
		  	<input id="lastName" name="lastName" type="text" placeholder="Nachname" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="email">Mail</label>
		  <div class="col-md-4">
		  	<input id="email" name="email" type="text" placeholder="Mail" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="password">Passwort</label>
		  <div class="col-md-4">
		  	<input id="password" name="password" type="password" placeholder="Passwort" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="nickname">Benutzername</label>
		  <div class="col-md-4">
		  	<input id="nickname" name="nickname" type="nickname" placeholder="nickname" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="dateOfBirth">Geburtsdatum</label>
		  <div class="col-md-4">
		  	<input id="dateOfBirth" name="dateOfBirth" type="dateOfBirth" placeholder="dateOfBirth" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
		  <label class="col-md-2 control-label" for="phone">Telefon</label>
		  <div class="col-md-4">
		  	<input id="phone" name="phone" type="phone" placeholder="phone" class="form-control input-md">
		  </div>
		</div>
		<div class="form-group">
	      <label class="col-md-2 control-label" for="send">&nbsp;</label>
		  <div class="col-md-4">
		    <input id="send" name="send" type="submit" class="btn btn-primary">
		  </div>
		</div>
	</div>
</form>
