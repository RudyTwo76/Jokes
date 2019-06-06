
	
	<div class="row">
		<div id="body" class="col-sm">
			<table class="table table-striped">
				<?php foreach($jokes as $joke): ?>
					<tr>
						<td>
							<h5><a href=<?php echo base_url('joke/edit/' . $joke['ID']); ?> style="text-decoration: none;" class="text-dark"><?php echo $joke['Joke']; ?></a></h5>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>

	
