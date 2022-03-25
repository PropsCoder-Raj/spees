<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Page Heading-->
				<div class="d-flex align-items-baseline flex-wrap mr-5">
					<!--begin::Page Title-->
					<h5 class="text-dark font-weight-bold my-1 mr-5">Admin Dashboard</h5>
					<!--end::Page Title-->

				</div>
				<!--end::Page Heading-->
			</div>
			<!--end::Info-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<!--begin::Stats Widget 1-->
					<div class="card card-custom  gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-1">
							<h3 class="card-title ml-n6">
								<span class="">
									<img src="<?php echo assets_url; ?>media/images/weeklysales.png"
										class="h-50px align-self-center" alt="">
								</span>
								<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Weekly
									Sales</span>
							</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex align-items-center justify-content-between pt-0 flex-wrap">
							<!--begin::label-->
							<span class="font-weight-bolder display5 ml-n5 text-dark-75  py-4 pl-0 pr-5">
								<span
									class="font-weight-normal font-size-h6 text-muted pr-1"></span><?php echo $this->main_model->adminWeeklySales(); ?></span>
							<!--end::label-->
							<!--begin::Chart-->
							<div class="progress-vertical w-130px h-115px">
							<?php $total = $this->main_model->adminWeeklySales(); ?>
								<?php foreach($this->main_model->getSalesCountLastSevenDays() as $item): ?>
								<div class="progress bg-light-primary" data-toggle="tooltip" title="₹ <?php echo $item->Fees; ?>"
									data-original-title="<?php echo $item->Fees*(100/$total); ?>%">
									<div class="progress-bar bg-primary" role="progressbar" style="height: <?php echo $item->Fees*(100/$total); ?>%"
										aria-valuenow="<?php echo $item->Fees*(100/$total); ?>" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<?php endforeach; ?>
							</div>
							<!--end::Chart-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Stats Widget 1-->
				</div>
				<div class="col-lg-4">
					<!--begin::Stats Widget 2-->
					<div class="card card-custom gutter-a">
						<!--begin::Header-->
						<div class="card-header border-0 pt-2">
							<div class="table-responsive">
								<table class="table table-borderless table-vertical-center">
									<thead>
										<tr>
											<th class="p-0 w-30px"></th>
											<th class="p-0 min-w-159px"></th>
											<th class="p-0 min-w-58px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="py-5 pl-0">
												<div class="symbol symbol-45  mr-2">
													<span class="">
														<img src="<?php echo assets_url; ?>media/images/equipmentssold.png"
															class="h-40px align-self-center" alt="">

													</span>
												</div>
											</td>
											<td class="pl-0 text-left">
												<a href="#"
													class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-h5">Hearing Aid
													Sold</a>

											</td>
											<td class="text-right">

												<span class="mblu font-weight-bolder d-block display5">0</span>
											</td>

										</tr>


									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="card card-custom gutter-a mt-8">
						<!--begin::Header-->
						<div class="card-header border-0 pt-2">
							<div class="table-responsive">
								<table class="table table-borderless table-vertical-center">
									<thead>
										<tr>
											<th class="p-0 w-30px"></th>
											<th class="p-0 min-w-159px"></th>
											<th class="p-0 min-w-58px"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="py-5 pl-0">
												<div class="symbol symbol-45 symbol-light mr-2">
													<span class="">
														<img src="<?php echo assets_url; ?>media/images/overallpatients.png"
															class="h-40px align-self-center" alt="">
													</span>
												</div>
											</td>
											<td class="pl-0 text-left">
												<a href="#"
													class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-h5">Overall
													Patients</a>

											</td>
											<td class="text-right">

												<span
													class="text-danger font-weight-bolder d-block display5"><?php echo $this->main_model->getPatientCount(); ?></span>
											</td>

										</tr>


									</tbody>
								</table>
							</div>
						</div>

						<!--end::Header-->
						<!--begin::Body-->

					</div>
					<!--end::Stats Widget 2-->
				</div>
				<div class="col-lg-4 branch">
					<!--begin::Stats Widget 3-->
					<div class="card card-custom gutter-a ora">
						<!--begin::Header-->
						<div class="card-header border-0 pt-1 pb-1">
							<h3 class="card-title">
								<span class="">
									<img src="<?php echo assets_url; ?>media/images/topBranches.png"
										class="h-50px align-self-center" alt="">
								</span>
								<span class="card-label font-weight-bolder font-size-h4 text-light">Top 5
									Branches</span>
							</h3>
						</div>

					</div>

					<div class="card card-custom gutter-a lgreen">
						<!--begin::Header-->
						<div class="card-header border-0 pt-1 pb-1">
							<h3 class="card-title">
								<span class="">
									<img src="<?php echo assets_url; ?>media/images/topEmployees.png"
										class="h-50px align-self-center" alt="">
								</span>
								<span class="card-label font-weight-bolder font-size-h4 text-light">Top 5
									employees</span>
							</h3>
						</div>

					</div>

					<div class="card card-custom gutter-a lblu">
						<!--begin::Header-->
						<div class="card-header border-0 pt-1 pb-1">
							<h3 class="card-title">
								<span class="">
									<img src="<?php echo assets_url; ?>media/images/topDoctors.png"
										class="h-50px align-self-center" alt="">
								</span>
								<span class="card-label font-weight-bolder font-size-h4 text-light">Top 5
								Professionals</span>
							</h3>
						</div>

					</div>
					<!--end::Stats Widget 3-->
				</div>
			</div>




			<div class="row">
				<div class="col-lg-8">
					<!--begin::Mixed Widget 2-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title align-items-start flex-column ml-n5">
								<span class="">
									<img src="<?php echo assets_url; ?>media/images/overallLeads.png"
										class="h-50px align-self-center" alt="">

									<span class="card-label font-weight-bolder font-size-h4 text-dark-75">Overall
										Leads</span></span>
							</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-12">

							<div class="row ml-9">



								<div class="col-4">
									<div class="d-flex  bd-highlight ">
										<div class="p-2 font-size-h4 bd-highlight">Unable to Counsel
											<a class="nav-link bg_lgry  shadow-sm brd justify-content-around text-center  w-70px ml-12 "
												data-toggle="tab" href="#kt_tab_mixed_2_1">
												<span
													class=" pt-6 mgry  display5 font-weight-bold"><?php echo $this->main_model->getTeleUACCalls(); ?></span></a>
										</div>
									</div>
								</div>


								<div class="col-4">
									<div class="d-flex  bd-highlight">
										<div class="p-2 font-size-h4 mora bd-highlight">Counselled
											<a class="nav-link bg_lora  shadow-sm brd justify-content-around text-center  w-70px ml-4 "
												data-toggle="tab" href="#kt_tab_mixed_2_1">
												<span
													class=" pt-6 mora  display5 font-weight-bold"><?php echo $this->main_model->getTeleConsCalls(); ?></span></a>
										</div>
									</div>
								</div>


								<div class="col-4">
									<div class="d-flex  bd-highlight">
										<div class="p-2 font-size-h4 text-danger bd-highlight">Post-poned
											<a class="nav-link bg_lred  shadow-sm brd justify-content-around text-center  w-70px ml-5 "
												data-toggle="tab" href="#kt_tab_mixed_2_1">
												<span
													class=" pt-6  text-danger display5 font-weight-bold"><?php echo $this->main_model->getTelePostCalls(); ?></span></a>
										</div>
									</div>
								</div>

							</div>

							<div class="row mt-14 ml-9 mb-14">


								<div class="col-4">
									<div class="d-flex  bd-highlight">
										<div class="p-2 font-size-h4 mblu bd-highlight">Visiting Branch
											<a class="nav-link bg_lblu  shadow-sm brd justify-content-around text-center  w-70px ml-10 "
												data-toggle="tab" href="#kt_tab_mixed_2_1">
												<span
													class=" pt-6 mblu  display5 font-weight-bold"><?php echo $this->main_model->getTeleBranchCalls(); ?></span></a>
										</div>
									</div>
								</div>


								<div class="col-4">
									<div class="d-flex  bd-highlight">
										<div class="p-2 font-size-h4 mgreen bd-highlight">Visiting H.O.
											<a class="nav-link bg_vlg  shadow-sm brd justify-content-around text-center  w-70px ml-4 "
												data-toggle="tab" href="#kt_tab_mixed_2_1">
												<span
													class=" pt-6 mgreen  display5 font-weight-bold"><?php echo $this->main_model->getTeleHQCalls(); ?></span></a>
										</div>
									</div>
								</div>






							</div>






						</div>
					</div>
				</div>

				<div class="col-4">

					<div class="card card-custom  gutter-a mb-4">
						<!--begin::Header-->
						<div class="card-header border-0 pt-1">
							<h3 class="card-title ml-n4 align-items-start flex-column">

								<span class="card-label font-weight-bolder font-size-h4 text-dark-75"><span
										class=""><img src="<?php echo assets_url; ?>media/images/internalDoctors.png"
											class="h-40px  align-self-center" alt=""></span>Internal
											Professionals</span>
								<span class="text-muted  mt-3 font-weight-bold font-size-lg">Patients Statistics</span>
							</h3>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-2">
							<!--begin::Nav-->
							<ul class="nav ml-n4 nav-pills nav-fill flex-nowrap">
								<!--begin::Nav Item-->
								<li class="nav-item w-90px ">
									<a class="nav-link d-flex flex-column indocYes shadow-sm h-90px " data-toggle="tab"
										href="#">

										<span class="nav-text pt-6 font-weight-bold  mgry">Yesterday</span>

										<span
											class="nav-text pt-3 pb-6 display5 mgry font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE() - 1 ',2) ?></span>
									</a>

								</li>
								<!--begin::Nav Item-->
								<!--end::Nav Item-->
								<li class="nav-item w-90px mx-5  ">
									<a class="nav-link d-flex flex-column indocTod shadow-sm h-90px" data-toggle="tab"
										href="#">

										<span class="nav-text pt-6 font-weight-bold text-light ">Today</span>

										<span
											class="nav-text pt-3 pb-6 display5 text-light font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE()',2) ?></span>
									</a>
								</li>
								<!--begin::Nav Item-->
								<!--end::Nav Item-->
								<li class="nav-item w-90px ">

									<a class="nav-link d-flex flex-column indocTom shadow-sm h-90px " data-toggle="tab"
										href="#">

										<span class="nav-text pt-6 font-weight-bold text-dark ">Tomorrow</span>

										<span
											class="nav-text pt-3 pb-6 display5 text-dark font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE() + 1 ',2) ?></span>
									</a>


								</li>
								<!--end::Nav Item-->
							</ul>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
					</div>


					<div class="card card-custom  gutter-a">
						<!--begin::Header-->
						<div class="card-header border-0 pt-1">
							<h3 class="card-title ml-n4 align-items-start flex-column">

								<span class="card-label font-weight-bolder font-size-h4 text-dark-75"><span
										class=""><img src="<?php echo assets_url; ?>media/images/externalDoctors.png"
											class="h-40px mt-2 align-self-center" alt=""></span>External
											Professionals</span>
								<span class="text-muted mt-3 font-weight-bold font-size-lg">Patients Statistics</span>

							</h3>


						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-2">
							<!--begin::Nav-->
							<ul class="nav ml-n4 nav-pills nav-fill flex-nowrap">
								<!--begin::Nav Item-->
								<li class="nav-item w-90px">
									<a class="nav-link d-flex flex-column indocYes shadow-sm h-90px" data-toggle="tab"
										href="#kt_tab_mixed_2_1">

										<span class="nav-text pt-3 mgry font-weight-bold">Yesterday</span>

										<span
											class="nav-text pt-3 mgry display5 font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE() - 1 ',3) ?></span>
									</a>

								</li>
								<!--begin::Nav Item-->
								<!--end::Nav Item-->
								<li class="nav-item w-90px mx-5">
									<a class="nav-link d-flex flex-column indocTod shadow-sm h-90px" data-toggle="tab"
										href="#kt_tab_mixed_2_2">

										<span class="nav-text pt-3 text-light font-weight-bold">Today</span>

										<span
											class="nav-text pt-3 display5 text-light font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE()',3) ?></span>
									</a>
								</li>
								<!--begin::Nav Item-->
								<!--end::Nav Item-->
								<li class="nav-item w-90px">

									<a class="nav-link d-flex flex-column indocTom shadow-sm h-90px" data-toggle="tab"
										href="#kt_tab_mixed_2_3">

										<span class="nav-text pt-3 text-dark  font-weight-bold">Tomorrow</span>

										<span
											class="nav-text pt-3 display5 text-dark font-weight-bold"><?php echo $this->main_model->getDailyAppoitmentCountByRoleNoBranch('CURDATE() + 1 ',3) ?></span>
									</a>


								</li>
								<!--end::Nav Item-->
							</ul>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
					</div>


				</div>
				<!--end::Mixed Widget 2-->


			</div>




			<div class="row">
				<div class="col-xl-8 col-xxl-8">
					<div class="card card-custom">
						<div class="card-header flex-wrap border-0 pt-6 pb-0">
							<div class="card-title">
								<h3 class="card-label"><span class=""><img
											src="<?php echo assets_url; ?>media/images/teleCallingList.png"
											class="h-40px align-self-center" alt=""></span> Tele Calling
									List
									<span class="d-block text-muted pt-2 font-size-sm"></span></h3>
							</div>
						</div>

						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-0 mb-1">
							<!--begin::Table-->
							<div class="table-responsive">
								<table class="table table-borderless table-head-custom table-vertical-center"
									id="kt_advance_table_widget_1">
									<thead>
										<tr class="text-left">

											<th class="pr-5 min-w-150px">NAME</th>
											<th class="pr-5 min-w-50px">NEW LEADS</th>
											<th class="pr-5 min-w-50px">FOLLOW UPS</th>
											<th class="pr-5 min-w-50px">WON</th>
											<th class="pr-5 min-w-50px">ON HOLD</th>
											<th class="pr-5 min-w-50px">LOST</th>

										</tr>
									</thead>
									<tbody>
										<?php foreach($this->main_model->getTelecallerData() as $item): ?>
										<tr>
											<td class="pr-0 py-4 font-weight-bolder">
												<?php echo $item->Name; ?>
											</td>
											<td class="text-left pl-12 pr-lg-0 pr-5">
												<div class=" mt-5 mt-lg-0">
													<?php echo $this->main_model->getTeleNewCalls($item->Id); ?>
												</div>

											</td>
											<td class="pl-12">
												<a href="#"
													class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">
													<?php echo $this->main_model->getTeleFollowupCalls($item->Id); ?>
												</a>

											</td>
											<td class="text-left pl-4">
												<span
													class="label font-weight-bold label-lg  label-light-success label-inline">
													<?php echo $this->main_model->getTeleWonCalls($item->Id); ?>
												</span>

											</td>
											<td class="text-left pr-lg-0 pl-7 pr-5">
												<span
													class="label font-weight-bold label-lg  label-light-warning label-inline">
													<?php echo $this->main_model->getTeleHoldCalls($item->Id); ?>
												</span>

											</td>

											<td class="">
												<span
													class="label font-weight-bold label-lg  label-light-danger label-inline">
													<?php echo $this->main_model->getTeleLostCalls($item->Id); ?>
												</span>
											</td>

										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<!--end::Table-->
						</div>
					</div>
					<!--end::Body-->
				</div>


				<div class="col-lg-4">
					<!--begin::List Widget 1-->
					<div class="card card-custom card-stretch gutter-b">
						<!--begin::Header-->
						<div class="card-header border-0 pt-6">
							<h3 class="card-title align-items-start flex-column">
								<span
									class="card-label font-weight-bolder font-size-h3 text-dark-75">Recommendation</span>
								<span class="text-muted mt-3 font-weight-bold font-size-lg">Suggested for
									Treatment</span>
							</h3>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body pt-5">
							<!--begin::Item-->
							<div class="d-flex align-items-center ml-n5 bg_lblu brd mb-4">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 flex-shrink-0 mr-3">
									<img alt="Pic" src="<?php echo assets_url; ?>media/images/Physiotherapy.png">
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-1 flex-grow-1 justify-content-center">
										<a href="#"
											class="text-dark text-hover-primary  mb-1 font-weight-bolder font-size-h7">Physiotherapy</a>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-dark font-weight-bolder font-size-h2 pr-6">0</span>
										<!--end::Label-->

										</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center ml-n5 brd mb-4">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 flex-shrink-0 mr-3">
									<img alt="Pic" src="<?php echo assets_url; ?>media/images/Audiology.png">
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1 justify-content-center">
										<a href="#"
											class="text-dark text-hover-primary  mb-1 font-weight-bolder font-size-h7">Audiology</a>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-dark font-weight-bolder font-size-h2 pr-6">0</span>
										<!--end::Label-->

										</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center ml-n5 bg_lblu brd mb-4">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 flex-shrink-0 mr-3">
									<img alt="Pic" src="<?php echo assets_url; ?>media/images/Speech.png">
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1 justify-content-center">
										<a href="#"
											class="text-dark text-hover-primary  mb-1 font-weight-bolder font-size-h7">Speech
											Language Pathology</a>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-dark font-weight-bolder font-size-h2 pr-6">0</span>
										<!--end::Label-->

										</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->

							<!--begin::Item-->
							<div class="d-flex align-items-center ml-n5  brd mb-4">
								<!--begin::Symbol-->
								<div class="symbol symbol-35  flex-shrink-0 mr-3">
									<img alt="Pic" src="<?php echo assets_url; ?>media/images/OccutationalTherapy.png">
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1 justify-content-center">
										<a href="#"
											class="text-dark text-hover-primary  mb-1 font-weight-bolder font-size-h7">Occupational
											Therapy</a>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-danger font-weight-bolder font-size-h2 pr-6">0</span>
										<!--end::Label-->

										</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->

							<!--begin::Item-->
							<div class="d-flex align-items-center ml-n5 bg_lblu brd mb-4">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 flex-shrink-0 mr-3">
									<img alt="Pic" src="<?php echo assets_url; ?>media/images/Psychology.png">
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1 justify-content-center">
										<a href="#"
											class="text-dark text-hover-primary  mb-1 font-weight-bolder font-size-h7">Psychology</a>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-dark font-weight-bolder font-size-h2 pr-6">0</span>
										<!--end::Label-->

										</span>
										</a>
										<!--end::Btn-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->

							<!--begin::Item-->
							<div class="d-flex align-items-center ml-n5 brd mb-4">
								<!--begin::Symbol-->
								<div class="symbol symbol-35 flex-shrink-0 mr-3">
									<img alt="Pic" src="<?php echo assets_url; ?>media/images/telerehab.png">
								</div>
								<!--end::Symbol-->
								<!--begin::Content-->
								<div class="d-flex flex-wrap flex-row-fluid">
									<!--begin::Text-->
									<div class="d-flex flex-column pr-5 flex-grow-1 justify-content-center">
										<a href="#"
											class="text-dark text-hover-primary  mb-1 font-weight-bolder font-size-h7">Tele-Rehabilitation</a>
									</div>
									<!--end::Text-->
									<!--begin::Section-->
									<div class="d-flex align-items-center py-2">
										<!--begin::Label-->
										<span class="text-dark font-weight-bolder font-size-h2 pr-6">0</span>
										<!--end::Label-->
									</div>
									<!--end::Section-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 1-->
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>