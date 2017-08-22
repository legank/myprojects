<h2>Welcome</h2>
<div class="form-horizontal">

	<div class="form-group">
		<div class="col-md-4">
			<div class="radio">
				<label>
					<input type="radio" id="createdb" name="usedb" class="radio" value="createdb" checked>
					Create new Database
				</label>
			</div>
		</div>
		
		<div class="col-md-4">
			<div class="radio">
				<label>
					<input type="radio" id="existingdb" name="usedb" class="radio" value="existingdb">
					Use existing database
				</label>
			</div>
		</div>
		
		<div class="col-md-4"></div>
		
	</div>

	<div class="form-group">
		<label class="col-md-3 control-label" for="dbname">Database Name: </label>
		<div class="col-md-9">
			<input type="text" id="dbname" class="form-control"  autocomplete="off">
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-2">
			<button class="form-control btn btn-primary" onclick="dbquery()" id="dbbtn">Submit</button>
		</div>
		<div class="col-md-10"></div>
	</div>

</div>
