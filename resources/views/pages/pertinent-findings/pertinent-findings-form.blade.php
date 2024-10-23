    <x-slot name="header">{{ __('Pertinent Findings per System') }} </x-slot>
    <x-slot name="subHeader">{{ __('You can submit Pertinent Findings per System details here.') }} </x-slot>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ho"> A. Heent/Optha <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Heent/Optha findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_ho" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal</option>
                    <option value="Abnormal pupillary reaction">Abnormal pupillary reaction</option>
                    <option value="Cervical lymphadenopathy">Cervical lymphadenopathy</option>
                    <option value="Dry mucous membrane">Dry mucous membrane</option>
                    <option value="Icteric Sclerae">Icteric Sclerae</option>
                    <option value="Pale conjuctiva">Pale conjuctiva</option>
                    <option value="Sunken eyeballs">Sunken eyeballs</option>
                    <option value="Sunken fontanelle">Sunken fontanelle</option>
                    <option value="Enlarged lymph nodes">Enlarged lymph nodes</option>
                    <option value="Enlarged thyroid">Enlarged thyroid</option>
                    <option value="Aural Discharge">Aural Discharge</option>
                    <option value="Exudates">Exudates</option>
                    <option value="Intact tympanic membrane">Intact tympanic membrane</option>
                    <option value="Palpable mass">Palpable mass</option>
                    <option value="Visual disturbance">Visual disturbance</option>
                    <option value="Alar Flaring">Alar Flaring</option>
                    <option value="Eplepsy/convulsion/seisure">Eplepsy/convulsion/seisure</option>
                    <option value="Hypertrophic tonsils">Hypertrophic tonsils</option>
                    <option value="Nasal discharge">Nasal discharge</option>
                    <option value="Pupils briskly reactive to light">Pupils briskly reactive to light</option>
                    <option value="Yellowish conjuctiva">Yellowish conjuctiva</option>
                    <option value="Anicteric sclerae">Anicteric sclerae</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_oho"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_oho" id="inp_oho" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>



    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_cl"> B. Chest/Lungs <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Chest/lungs Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_cl" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Symmetrical chest expansion">Symmetrical chest expansion</option>
                    <option value="Clear breathsounds">Clear breathsounds</option>
                    <option value="Abnormal chest expansion">Abnormal chest expansion</option>
                    <option value="Abnormal breath sounds">Abnormal breath sounds</option>
                    <option value="Wheezes">Wheezes</option>
                    <option value="Lumps over breast">Lumps over breast</option>
                    <option value="Crackles/Rales">Crackles/Rales</option>
                    <option value="Retraction">Retraction</option>
                    <option value="Enlarge axillary lymph nodes">Enlarge axillary lymph nodes</option>
                    <option value="Breast/axillary mass">Breast/axillary mass</option>
                    <option value="Nipple discharge">Nipple discharge</option>
                    <option value="Skin orange peel or dumpling">Skin orange peel or dumpling</option>
                    <option value="Severe chest pain">Severe chest pain</option>
                    <option value="Shortness of breath and easy fatigability">Shortness of breath and easy fatigability</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ocl"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ocl" id="inp_ocl" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_hp"> C. Heart/Pulmo <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Heart/Pulmo Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_hp" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Displaced apex beat">Displaced apex beat</option>
                    <option value="Heaves/Thrills">Heaves/Thrills</option>
                    <option value="Irregular Rhythm">Irregular Rhythm</option>
                    <option value="Abnormal Heart Sounds">Abnormal Heart Sounds</option>
                    <option value="Murmurs">Murmurs</option>
                    <option value="Pericardial Bulge">Pericardial Bulge</option>
                    <option value="Adynamic precordium">Adynamic precordium</option>
                    <option value="Irregular pulse">Irregular pulse</option>
                    <option value="Muffled heart sounds">Muffled heart sounds</option>
                    <option value="Chest pain/Angina">Chest pain/Angina</option>
                    <option value="High/low blood pressure">High/low blood pressure</option>
                    <option value="Palpitation">Palpitation</option>
                    <option value="Congestive heart failure">Congestive heart failure</option>
                    <option value="History of heart attack">History of heart attack</option>
                    <option value="Mitral valve prolapsed">Mitral valve prolapsed</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ohp"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ohp" id="inp_ohp" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ab"> D. Abdomen <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Abdomen Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_ab" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Abdominal rigidity">Abdominal rigidity</option>
                    <option value="Abdominal tenderness">Abdominal tenderness</option>
                    <option value="Hyperactive bowel sounds">Hyperactive bowel sounds</option>
                    <option value="Palpable mass(es)">Palpable mass(es)</option>
                    <option value="Tymphanitic/dull abdomen">Tymphanitic/dull abdomen</option>
                    <option value="Uterine Contraction">Uterine Contraction</option>
                    <option value="Scar">Scar</option>
                    <option value="Enlarged liver">Enlarged liver</option>
                    <option value="Flat">Flat</option>
                    <option value="History of liver disease">History of liver disease</option>
                    <option value="Muscle guarding">Muscle guarding</option>
                    <option value="Globular">Globular</option>
                    <option value="Flabby">Flabby</option>
                    <option value="History of gulibladder disease">History of gulibladder disease</option>
                    <option value="Mass in abdomen"></option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_oab"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_oab" id="inp_oab" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_gas"> E. Gastrointestinal <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Abdomen Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_gas" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Abdominal Pain">Abdominal Pain</option>
                    <option value="Frequent diarrhea">Frequent diarrhea</option>
                    <option value="History of liver disease">History of liver disease</option>
                    <option value="Painful bowel movements">Painful bowel movements</option>
                    <option value="Vomitting blood">Vomitting blood</option>
                    <option value="Change in bowel movement">Change in bowel movement</option>
                    <option value="Rectal Bleeding">Rectal Bleeding</option>
                    <option value="Hemorrhoid">Hemorrhoid</option>
                    <option value="Jaundice">Jaundice</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ogas"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ogas" id="inp_ogas" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ss"> F. Skeletal System <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Abdomen Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_ss" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Back pain">Back Pain</option>
                    <option value="Muscle or joint weakness">Muscle or joint weakness</option>
                    <option value="Cold extermities">Cold extermities</option>
                    <option value="Muscle pain/cramps">Muscle pain/cramps</option>
                    <option value="">Joint pain</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_en"> G. Endocrine/Nephro <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Endocrine/Nephro Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_en" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Diabetes">Diabetes</option>
                    <option value="Hormone Problems">Hormone Problems</option>
                    <option value="Excessive thirst/urination">Excessive thirst/urination</option>
                    <option value="Thyroid Disease">Thyroid Disease</option>
                    <option value="Heat/cold intoleration">Jaundice</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_oen"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_oen" id="inp_oen" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_gen"> H. Genitourinary <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Genitourinary Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_gen" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Blood stained in exam finger">Blood stained in exam finger</option>
                    <option value="Cervical dilation">Cervical dilation</option>
                    <option value="Presence of abnormal discharge">Presence of abnormal discharge</option>
                    <option value="Laceration">Laceration</option>
                    <option value="Scars">Scars</option>
                    <option value="Warts">Warts</option>
                    <option value="Blood in urine">Blood in urine</option>
                    <option value="Frequent urination">Frequent urination</option>
                    <option value="Change in force of stream when urinating">Change in force of stream when urinating</option>
                    <option value="Kidney stones">Kidney stones</option>
                    <option value="Burning or painful urination">Burning or painful urination</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ogen"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ogen" id="inp_ogen" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_dre"> I. Digital Recital Examination <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Digital Recital Examination Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_dre" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Enlarged prostate">Enlarged prostate</option>
                    <option value="Mass">Mass</option>
                    <option value="Pus">Pus</option>
                    <option value="Hemorrhoids">Hemorrhoids</option>
                    <option value="Not Applicable">Not Applicable</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_odre"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_odre" id="inp_odre" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_res"> J. Respiratory<b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Respiratory Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_res" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Asthma">Asthma</option>
                    <option value="Emphysema/COPD">Emphysema/COPD</option>
                    <option value="Sleep apnea">Sleep apnea</option>
                    <option value="Bronchits">Bronchits</option>
                    <option value="Pneumonia">Pneumonia</option>
                    <option value="Shortness of breath while walking/lying flat">Shortness of breath while walking/lying flat</option>
                    <option value="Tubercolosis/Positive TB skin test">Tubercolosis/Positive TB skin test</option>
                    <option value="Chronic/frequent coughs"></option>
                    <option value="Wheezing"></option>
                    <option value="Spitting up blood"></option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ores"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ores" id="inp_ores" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_se"> K. Skin/Extermities <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Abdomen Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_se" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Good skin turgor">Good skin turgor</option>
                    <option value="Clubbing">Clubbing</option>
                    <option value="Cold clammy">Cold clammy</option>
                    <option value="Cyanosis/mottled skin">Cyanosis/mottled skin</option>
                    <option value="Edema/swelling">Edema/swelling</option>
                    <option value="Decrease mobility">Decrease mobility</option>
                    <option value="Pale nail beds">Pale nail beds</option>
                    <option value="Poor skin turgor">Poor skin turgor</option>
                    <option value="Rashes/Petechiae">Rashes/Petechiae</option>
                    <option value="Weak pulses">Weak pulses</option>
                    <option value="Full equal pulses">Full equal pulses</option>
                    <option value="Gross deformity">Gross deformity</option>
                    <option value="Pain/forced dorsiflexion">Pain/forced dorsiflexion</option>
                    <option value="Varicosities">Varicosities</option>
                    <option value="Jaundice">Jaundice</option>
                    <option value="Pallor">Pallor</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_ose"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_ose" id="inp_ose" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_np"> L. Neurological/Psychiatric <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Neurological/Psychiatric Findings here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <select name="inp_np" class="form-select js-select2" data-placeholder="Select Answer" required>
                    <option value="Select Answer" selected disabled> Select Answer </option>
                    <option value="Essentially Normal">Essentially Normal </option>
                    <option value="Abnormal Gait">Abnormal Gait</option>
                    <option value="Abnormal position sense">Abnormal position sense</option>
                    <option value="Abnormal sensation">Abnormal sensation</option>
                    <option value="Abnormal reflexe(s)">Abnormal reflexe(s)</option>
                    <option value="Poor/altered memory">Poor/altered memory</option>
                    <option value="Poor muscle tone/strength">Poor muscle tone/strength</option>
                    <option value="Poor coordination">Poor coordination</option>
                    <option value="Depression">Depression</option>
                    <option value="Head injury">Head injury</option>
                    <option value="Memory loss">Memory loss</option>
                    <option value="Numbness">Numbness</option>
                    <option value="Brain tumor">Brain tumor</option>
                    <option value="Insomia">Insomia</option>
                    <option value="Convulsions/seizures">Convulsions/seizures</option>
                    <option value="Frequent/recurring headaches">Frequent/recurring headaches</option>
                    <option value="Light headed">Light headed</option>
                    <option value="Migrane headaches">Migrane headaches</option>
                    <option value="Nervousness">Nervousness</option>
                    <option value="Tremors">Tremors</option>
                    <option value="Stroke">Stroke</option>
                    <option value="Paralysis">Paralysis</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row mt-2 align-center">
        <div class="col-lg-5">
            <div class="form-group">
                <label class="form-label" for="inp_onp"> If Others, please specify <b class="text-danger"> *</b></label>
                <span class="form-note"> Specify the Other Option here. </span>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="form-control-wrap">
                <input type="text" class="form-control" name="inp_onp" id="inp_onp" placeholder="Enter (Required) Other Options here..." required>
            </div>
        </div>
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
