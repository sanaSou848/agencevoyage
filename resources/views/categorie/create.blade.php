
<fieldset>
	<legend>Nouvelle Categorie</legend>
	
	<from action="{{route('categorie.store')}}" method="post">
		@csrf
		<div class="form-group">
		    <label for="categorie">Categorie</label>
		    <input type="text" class="form-control" id="categorie" name="category">
	  	</div>
	  	<button type="submit" class="btn btn-success">enregister</button>
  		<button type="reset" class="btn btn-warning">annuler</button>
	</from>
</fieldset>
