<div class="px-3 py-3" ng-controller="tax_calc">
		<form class="border border-primary px-3 py-3" ng-submit="submitForm()">
			<div class="mb-3">
				<input type="text" class="form-control" ng-model="owner_fname" placeholder="First Name">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" ng-model="owner_mname" placeholder="Middle Name (Optional)">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" ng-model="owner_lname" placeholder="Last Name">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" ng-model="khatiyan" placeholder="Khatiyan No.">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" ng-model="dag" placeholder="Dag No.">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" ng-model="plot" placeholder="Plot No.">
			</div>
			<div class="mb-3">
				<input type="text" class="form-control" ng-model="area" placeholder="Plot Area (in sq.feet)">
			</div>
			<label class="form-label">Area Under</label>
			<select class="form-select mb-3" ng-model="area_under" ng-change="changeRate()">
				<option hidden value="">---Select Option---</option>
				<option value="panchayat">Panchayat</option>
				<option value="municipality">Municipality</option>
				<option value="municipal_corporation">Municipal Corporation</option>
			</select>
			<div ng-if="area_under && area" class="mb-3">
				<label class="form-label">Tax Evaluated (in Rupees) : {{area*rate}}</label>
			</div>
			<input type="submit" class="btn btn-primary" value="Denote Area">
		</form>
</div>