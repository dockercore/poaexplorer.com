<div class="row">
	<div class="col-md-12">
		<p class="lead">TXID: <?php echo $this->uri->segment(3); ?></p>
		<hr>

		<table id="trans_table" class="table table-striped transaction_table">
			<tr><th>Hash:</th><td id="trans_hash"></td></tr>
			<tr><th>Block Number:</th><td id="trans_blockNumber"></td></tr>
			<tr><th>From:</th><td id="trans_from"></td></tr>
			<tr><th>To:</th><td id="trans_to"></td></tr>
			<tr><th>Value:</th><td id="trans_value"></td></tr>
			<tr><th>Gas:</th><td><span class="trans_gas"></span></td></tr>
			<tr><th>Gas Price:</th><td><span class="trans_gasPrice"></span> (<span class="trans_gwei"></span> GWEI)</td></tr>
			<tr><th>Actual Tx Cost/Fee:</th><td id="trans_txfee"></td></tr>
			<tr><th>Nonce:</th><td id="trans_nonce"></td></tr>
			<tr><th>Input:</th><td id="trans_input"><figure class="highlight"><pre></pre></figure></td></tr>
			
			
		</table>
	</div>
</div>