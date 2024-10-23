<x-slot name="header">{{ __('For CHU/RHU Personnel Only') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit CHU/RHU personnel details here.') }} </x-slot>


<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_mot"> Mode of Transaction <b class="text-danger"> *</b></label>
            <span class="form-note"> Mode of Transaction </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_mot" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Walk-in"> Walk-in </option>
                <option value="Visited"> Visited</option>
                <option value="Referral"> Referral </option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_doc"> Date of Consultation <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date of Consultation here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_doc" id="inp_doc" placeholder="Enter (Required) Date of Consultation here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_time"> Time <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Time here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="time" class="form-control" name="inp_time" id="inp_time" placeholder="Enter (Required) Time here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_bp"> BP<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Blood Pressure here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_bp" id="inp_bp" placeholder="Enter (Required) Blood Pressure here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_temp"> Temperature <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Temperature here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_temp" id="inp_temp" placeholder="Enter (Required) Temp here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_rr"> RR <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the RR here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_rr" id="inp_rr" placeholder="Enter (Required) RR here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_hr"> HR <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the HR here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_hr" id="inp_hr" placeholder="Enter (Required) HR here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_osat"> O2 SAT <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the O2 SAT here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_osat" id="inp_osat" placeholder="Enter (Required) O2 SAT here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pr"> PR<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the PR here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_pr" id="inp_pr" placeholder="Enter (Required) PR here..." required>
        </div>
    </div>
</div>
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_wc"> Waist Circumference <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Waist Circumference here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_wc" id="inp_wc" placeholder="Enter (Required) Waist Circumference here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_height"> Height <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Height here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_height" id="inp_height" placeholder="Enter (Required) Height here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_weight"> Weight <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Weight here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_weight" id="inp_weight" placeholder="Enter (Required) Weight here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_ab"> Administerd By <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Administerd By here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_ab" id="inp_ab" placeholder="Enter (Required) Administerd By here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_rf"> Referred From <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Referred From here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_rf" id="inp_rf" placeholder="Enter (Required) Referred From here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_rt"> Referred To <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Referred To here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_rt" id="inp_rt" placeholder="Enter (Required) Referred To here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_ror"> Reason of Referral <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Reason of Referral here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_ror" id="inp_ror" placeholder="Enter (Required) Reason of Referral here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_rb"> Referred By <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Referred By here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_rb" id="inp_rb" placeholder="Enter (Required) Reffered By here..." required>
        </div>
    </div>
</div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_nov"> Nature of Visit <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Nature of Visit here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_nov" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="New Consultation/Case"> New Consultation/Case </option>
                    <option value="New Admission"> New Admission </option>
                    <option value="Follow-up Visit"> Follow-up Visit</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ap"> Attending Provider <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Attending Provider here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ap" id="inp_ap" placeholder="Enter (Required) Attending Provider here..." required>
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

