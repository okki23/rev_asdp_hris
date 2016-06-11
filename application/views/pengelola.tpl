				<!-- User dropdown -->
				<div class="user-menu dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="images/admin.png">
						<div class="user-info">
						{if $status == '0'}
						Admin Project <span>{$username}</span>
						{elseif $status == '1'}	
						Administrator <span>{$username}</span>
						{elseif $status == '2'}	
						Bagian Keuangan <span>{$username}</span>
						{elseif $status == '3'}	
						Kepala Bidang <span>{$username}</span>
						{/if}
						</div>
					</a>
					
				</div>
				<!-- /user dropdown -->