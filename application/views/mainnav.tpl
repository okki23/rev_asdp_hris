<!-- Main navigation -->
{if $status == "0"}
				<ul class="navigation">				
					<li {if $samping == "1" } class="active" {/if}><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
									</li>
					<li><a href="#"><span>Transaction</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "30" } class="active" {/if}><a href="entryrevenue.php">Entry Revenue Project</a></li>
							<li {if $samping == "31" } class="active" {/if}><a href="entrycost.php">Entry Cost Project</a></li>
							<li {if $samping == "33" } class="active" {/if}><a href="checkverify.php">Check Verification</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Reporting</span> <i class="icon-accessibility"></i></a>
					<ul>
							<li {if $samping == "40" } class="active" {/if}><a href="laprev.php">Revenue Project</a></li>
							<li {if $samping == "4" } class="active" {/if}><a href="lapcost.php">Cost Project</a></li>
							<li {if $samping == "41" } class="active" {/if}><a href="lapprofit.php">Profit Project</a></li>
					</ul>
					</li>
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>
{elseif $status == "2"}
				<ul class="navigation">				
					<li {if $samping == "1" } class="active" {/if}><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
									</li>
					<li><a href="#"><span>Transaction</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "32" } class="active" {/if}><a href="ver_cost.php">Verification Cost Project</a></li>
					</ul>
					</li>
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>				
{elseif $status == "1"}
				<ul class="navigation">				
					<li {if $samping == "1" } class="active" {/if}><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Master</span> <i class="icon-profile"></i></a>
					<ul>
							<li {if $samping == "21" } class="active" {/if}><a href="coap.php">Chart of Account Project</a></li>
							<li {if $samping == "22" } class="active" {/if}><a href="user.php">Manajemen User</a></li>
							<li {if $samping == "23" } class="active" {/if}><a href="log.php">Logging</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Transaction</span> <i class="icon-clipboard"></i></a>
					<ul>
							<li {if $samping == "30" } class="active" {/if}><a href="entryrevenue.php">Entry Revenue Project</a></li>
							<li {if $samping == "31" } class="active" {/if}><a href="entrycost.php">Entry Cost Project</a></li>
							<li {if $samping == "32" } class="active" {/if}><a href="ver_cost.php">Verify Cost Project</a></li>
					</ul>
					</li>
					<li><a href="#"><span>Reporting</span> <i class="icon-accessibility"></i></a>
					<ul>	
							<li {if $samping == "40" } class="active" {/if}><a href="laprev.php">Revenue Project</a></li>
							<li {if $samping == "4" } class="active" {/if}><a href="lapcost.php">Cost Project</a></li>
							<li {if $samping == "41" } class="active" {/if}><a href="lapprofit.php">Profit Project</a></li>
					</ul>
					</li>
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>				

{elseif $status == "3"}
				<ul class="navigation">				
					<li {if $samping == "1" } class="active" {/if}><a href="index.php?action=showmenu"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
					<li><a href="#"><span>Reporting</span> <i class="icon-accessibility"></i></a>
					<ul>	
							<li {if $samping == "40" } class="active" {/if}><a href="laprev.php">Revenue Project</a></li>
							<li {if $samping == "4" } class="active" {/if}><a href="lapcost.php">Cost Project</a></li>
							<li {if $samping == "41" } class="active" {/if}><a href="lapprofit.php">Profit Project</a></li>
					</ul>
					</li>
					<li><a href="index.php?action=logout"><span>Logout</span> <i class="icon-exit"></i></a></li>
				</ul>		
{/if}
				<!-- /main navigation -->