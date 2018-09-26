<html>

<head>
	<title>Product Toevoegen</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/flexboxgrid.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<!-- Modal voor het Toevoegen van Leden. -->
	<div id="ModalAdd" role="dialog">
		<div class="modal-dialog" role="document">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Product Toevoegen</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<form id="2DB" method="post" class="form-horizontal">
					<div class="modal-body flex">
						
						<div class="form-group col-sm-6">
							<label for="Voornaam" class="col-sm-4 control-label">Voornaam</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="Voornaam" placeholder="Voornaam...">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<label for="Achternaam" class="col-sm-4 control-label">Achternaam</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="Achternaam" placeholder="Achternaam...">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<label for="Tussenvoegsel" class="col-sm-4 control-label">Tussenvoegsel</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="Tussenvoegsel" placeholder="Tussenvoegsel...">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<label for="Geslacht" class="col-sm-4 control-label">Geslacht</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="Geslacht" placeholder="Geslacht...">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<label for="Organisatie" class="col-sm-4 control-label">Organisatie</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="Organisatie" placeholder="Organisatie...">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<label for="ContactPersoon" class="col-sm-4 control-label">Contact Persoon</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="Contact_persoon" placeholder="Contact Persoon...">
							</div>
						</div>
						<div class="form-group col-sm-6">
							<label for="Email" class="col-sm-4 control-label">Email</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="Email" placeholder="Email...">
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button id="FormPostAdd" method="POST" type="submit" class="btn btn-default" href="voorraadsystee.php">Toevoegen</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Annuleren</button>
					</div>
				</form>
				<!-- /.modal-footer End -->
			</div>
			<!-- /.modal-content End -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
</body>
</html>