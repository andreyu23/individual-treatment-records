<x-slot name="header">{{ __('Postpartum') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Postpartum details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_po"> Prenatal Outcome<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Prenatal Outcome here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_po" id="inp_po" placeholder="Enter (Required) Prenatal Outcome here..." required>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-xxl-3 col-md-6">
        <div class="form-group">
            <label class="form-label inline-block"> <b> CHILD INFORMATION </b></label>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_ln"> Last Name<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Last Name here. </span>
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
            <label class="form-label" for="inp_fn"> First Name<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify First Name here. </span>
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
            <label class="form-label" for="inp_mn"> Middle Name<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Middle Name here. </span>
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
            <label class="form-label" for="inp_sex"> Sex <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Immunization here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_sex" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Male">Male</option>
                <option value="Female">Female<option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_bl"> Birth Length<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Birth Length here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_bl" id="inp_bl" placeholder="Enter (Required) Birth Length here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_bw"> Birth Weight<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Birth Weight here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_bw" id="inp_bw" placeholder="Enter (Required) Birth Weight here..." required>
        </div>
    </div>
</div>
<br>
<hr>
<br>
<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pd"> Prenatal Delivered<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Prenatal Delivered here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_pd" id="inp_pd" placeholder="Enter (Required) Prenatal Delivered here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pod"> Place of Delivery<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Place of Delivery here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_pod" id="inp_pod" placeholder="Enter (Required) Place of Delivery here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_mod"> Mode of Delivery<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Mode of Delivery here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_mod" id="inp_mod" placeholder="Enter (Required) Mode of Delivery here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_aab"> Attendant at Birth<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Attendant at Birth here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_aab" id="inp_aab" placeholder="Enter (Required) Attendant at Birth here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dd"> Delivery Date<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Delivery Date here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_dd" id="inp_dd" placeholder="Enter (Required) Delivery Date here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dt"> Delivery Time<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify Delivery Time here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="time" class="form-control" name="inp_dt" id="inp_dt" placeholder="Enter (Required) Delivery Time here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_di"> Date Initiated<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date Initiated here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_di" id="inp_di" placeholder="Enter (Required) Date Initiated here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_tib">Time Initiated Breastfeeding<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Time Initiated Breastfeeding here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="time" class="form-control" name="inp_tib" id="inp_tib" placeholder="Enter (Required) Time Initiated Breastfeeding here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dop"> Date of pospartum visit within 25hrs after Delivery<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date of pospartum visit within 25hrs after Delivery here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_dop" id="inp_dop" placeholder="Enter (Required) Date of pospartum visit within 25hrs after Delivery here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dopw"> Date of pospartum visit within 1 week after Delivery<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date of pospartum visit within 1 week after Delivery here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_dopw" id="inp_dopw" placeholder="Enter (Required) Date of pospartum visit within 1 week after Delivery here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dsm"> Danger Signs (Mother)<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Danger Signs (Mother) here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_dsm" id="inp_dsm" placeholder="Enter (Required) Danger Signs (Mother) here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dsb"> Danger Signs (Baby)<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Danger Signs (Baby) here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_dsb" id="inp_dsb" placeholder="Enter (Required) Danger Signs (Baby) here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dva"> Date Vitamin A Given<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date Vitamin A Given here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_dva" id="inp_dva" placeholder="Enter (Required) Date Vitaming A given here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_dig"> Date Iron Given<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date Iron Given here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_dig" id="inp_dig" placeholder="Enter (Required) Date Iron Given here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_noig"> No. of Iron Given<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Date Iron Given here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_noig" id="inp_noig" placeholder="Enter (Required) No. of Iron Given here..." required>
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
