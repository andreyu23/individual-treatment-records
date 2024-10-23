<x-slot name="header">{{ __('Prenatal') }} </x-slot>
<x-slot name="subHeader">{{ __('You can submit Prenatal details here.') }} </x-slot>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_grad"> Gradivity<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Gradivity here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_grad" id="inp_grad" placeholder="Enter (Required) Gradivity here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_par"> Parity<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Parity here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_par" id="inp_par" placeholder="Enter (Required) Parity here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_term"> Term<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Term here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_term" id="inp_term" placeholder="Enter (Required) Term here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pt"> Preterm<b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Preterm here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_pt" id="inp_pt" placeholder="Enter (Required) Preterm here..." required>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_lb"> Livebirth <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify your answer </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_lb" id="inp_lb" placeholder="Enter (Required) Livebirth here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_abort"> Abortion <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify your answer </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_abort" id="inp_abort" placeholder="Enter (Required) Abortion here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_sr"> Syphilis Result <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify your answer </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_sr" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Positive">Positive </option>
                <option value="Negative">Negative </option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pen"> Penicillin <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify your answer </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <select name="inp_pen" class="form-select js-select2" data-placeholder="Select Answer" required>
                <option value="Select Answer" selected disabled> Select Answer </option>
                <option value="Yes">Yes </option>
                <option value="No">No </option>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_sched"> Schedule of Next Visit <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Schedule of Next Visit here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="date" class="form-control" name="inp_sched" id="inp_sched" placeholder="Enter (Required) Schedule of Next Visit here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_fh"> Fundic Height (cm) <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Fundic Height (cm) here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_fh" id="inp_fh" placeholder="Enter (Required) Fundic Height (cm) here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_lmp"> LMP <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the LMP here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_lmp" id="inp_lmp" placeholder="Enter (Required) LMP here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_edc"> EDC <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the EDC here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_edc" id="inp_edc" placeholder="Enter (Required) EDC here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_iron"> Iron <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Iron here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_iron" id="inp_iron" placeholder="Enter (Required) EDC here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_aog"> AOG <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the AOG here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_aog" id="inp_aog" placeholder="Enter (Required) AOG here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_tt"> TT <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the TT here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_tt" id="inp_tt" placeholder="Enter (Required) TT here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_other"> Other <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Other here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_other" id="inp_other" placeholder="Enter (Required) Other here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_fht"> Fetal Heart Tone <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Fetal Heart Tone here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_fht" id="inp_fht" placeholder="Enter (Required) Fetal Heart Tone here..." required>
            </select>
        </div>
    </div>
</div>

<div class="row mt-2 align-center">
    <div class="col-lg-5">
        <div class="form-group">
            <label class="form-label" for="inp_pv"> Prenatal Visits <b class="text-danger"> *</b></label>
            <span class="form-note"> Specify the Prenatal Visits here. </span>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="form-control-wrap">
            <input type="text" class="form-control" name="inp_pv" id="inp_pv" placeholder="Enter (Required) Prenatal Visits here..." required>
            </select>
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
