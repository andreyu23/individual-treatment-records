<x-slot name="header">{{ __('Patient Information') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit patient information form here.') }} </x-slot>


<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pin"> PHIC PIN <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the PHIC PIN here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_pin" id="inp_pin" placeholder="Enter (Required) PHIC PIN here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_fn"> First Name <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the First Name here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_fn" id="inp_fn" placeholder="Enter (Required) First Name here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_mn"> Middle Name <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Middle Name here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_mn" id="inp_mn" placeholder="Enter (Required) Middle Name here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_ln"> Last Name <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Last Name here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_ln" id="inp_ln" placeholder="Enter (Required) Last Name here..." required>
        </div>
    </div>
</div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ex"> Extension <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Extension here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_ex" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="None"> None </option>
                    <option value="Sr."> Sr. </option>
                    <option value="Jn."> Jn. </option>
                    <option value="III"> III </option>
                    <option value="IV"> IV </option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_age"> Age <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Age here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_age" id="inp_age" placeholder="Enter (Required) Age here..." required>
            </div>
        </div>
    </div>
    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_resadd">  Residential Address <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Residential Address here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_resadd" id="inp_resadd" placeholder="Enter Residential Address here..." required>
            </div>
        </div>
    </div>



<div class="col-lg-5">
</div>
<div class="col-lg-7 justify-end" style="float: right">
    <hr>
    <div class="form-group mt-2 mb-2 justify-end">
        <button type="reset" class="btn btn-danger bg-dark mx-3">
            <em class="icon ni ni-repeat"></em>
             Reset
        </button>
        <button  type="submit" class="btn btn-success">
            <em class="icon ni ni-save"></em>
             Submit Form
        </button>
    </div>
</div>

