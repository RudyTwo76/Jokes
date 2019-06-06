
	
	<div class="row">
		<div id="body" class="col-sm">
			<font style="color: red; font-weight: bold;"><?php echo validation_errors(); ?></font>

			<?php echo form_open('joke/create'); ?>
				<div class="form-group">
					<label for="Joke">Joke</label>
					<textarea class="form-control" id="JokeText" name="JokeText" rows="2" autofocus></textarea>
				</div>
  			<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
