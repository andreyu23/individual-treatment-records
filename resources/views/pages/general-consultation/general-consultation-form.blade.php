<x-slot name="header">{{ __('Postpartum') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Postpartum details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_date"> Date<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_date" id="inp_date" placeholder="Enter (Required) Date here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hoi"> History of Illness<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the History of Illness here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_hoi" id="inp_hoi" placeholder="Enter (Required) History of Illness here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pe"> Physical Exam<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Physical Exam here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_pe" id="inp_pe" placeholder="Enter (Required) Physical Exam here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_ai"> Assessment/Impression<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Assessment/Impression here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_ai" id="inp_ai" placeholder="Enter (Required) Assessment/Impression here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_tmp"> Treatment/Management Plan<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Treatment/Management Plan here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_tmp" id="inp_tmp" placeholder="Enter (Required) Treatment/Management Plan here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_sched"> Schedule of Follow Up<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Schedule of Follow Up here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_sched" id="inp_sched" placeholder="Enter (Required) Schedule of Follow Up here..." required>
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






