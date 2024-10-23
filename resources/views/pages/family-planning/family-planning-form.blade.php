<x-slot name="header">{{ __('Family Planning') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Family Planning details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_toc"> Type of Client<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Type of Client here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_toc" id="inp_toc" placeholder="Enter (Required) Type of Client here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_meth"> Method<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Method here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_meth" id="inp_meth" placeholder="Enter (Required) Method here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_drop"> If drop-out, state reason<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Reason here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_drop" id="inp_drop" placeholder="Enter (Required) Reason here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_sched"> Schedule of Next Visit<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Schedule of Next Visit here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_sched" id="inp_sched" placeholder="Enter (Required) Schedule of Next Visit here..." required>
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
