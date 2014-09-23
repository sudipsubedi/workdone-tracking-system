<?php 

	class StaffController extends BaseController {

		public function show() {
			return View::make('staff.entry_staff');
		}
	}