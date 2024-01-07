<div class="col-lg-8 col-md-8">
    <form class="row" wire:submit.prevent="createJob">
        <div class="col-lg-12 mt-2">


            <p class="lead">Choose From More Than 10 thousand Freelancer on the Go</p>

        </div>
        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <label>Job Title</label>
                <input type="text" wire:model="title" class="form-control with-light" placeholder="Job Title" />
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <label>Skills Required To Job</label>
                <input type="text" wire:model="skills" class="form-control with-light"
                    placeholder="plumber, carpenter" />
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <label>Estimated Time</label>
                <input type="text" wire:model="est_time" class="form-control with-light" placeholder="In days" />
            </div>
        </div>

        <div class="col-lg-6 col-md-12">
            <div class="form-group">
                <label>Pay Rate</label>
                <input type="text" wire:model="pay_rate" class="form-control with-light" placeholder="+91 256 584 7863" />
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="form-group">
                <label>Job Description</label>
                <textarea wire:model="job_description" class="form-control with-light">About Your Query</textarea>
            </div>
        </div>

        <!-- <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upfile">
                        <label class="custom-file-label" for="upfile">Upload file</label>
                    </div>
                </div>
            </div> -->

        <div class="col-lg-12 col-md-12">
            <button type="submit" class="btn dark-3" data-kt-users-modal-action="submit">
                <span class="indicator-label" wire:loading.remove>Publish Job</span>
                <span class="indicator-progress" wire:loading wire:target="submit">
                    Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>

            <li class="add-listing dark-bg d-none">
                <a href="#" id="modal_open" data-toggle="modal" data-target="#login">
                     <i class="ti-user mr-1"></i> Sign in
                </a>
            </li>
         
        </div>

    </form>


</div>

