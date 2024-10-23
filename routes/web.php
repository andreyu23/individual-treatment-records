<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/login');
});


Route::get('/dashboard', function () {
    return view('pages.customers.index');
});


Route::get('/individual', function(){
    return view('pages.patients.patient-information-index');
});

    Route::get('/individual', [InfoController::class, 'patient_index']);
    Route::post('/individual/added', [InfoController::class, 'patient_store'])->name('patients.save');

    Route::get('/personnel', [InfoController::class, 'personnel_index']);
    Route::post('/personnel/added', [InfoController::class, 'personnel_store'])->name('personnel.save');

    Route::get('/visit', [InfoController::class, 'visit_index']);
    Route::post('/visit/added', [InfoController::class, 'visit_store'])->name('visit.save');

    Route::get('/pertinent', [InfoController::class, 'pertinent_index']);
    Route::post('/pertinent/added', [InfoController::class, 'pertinent_store'])->name('pertinent.save');

    Route::get('/diagnosis', [InfoController::class, 'diagnosis_index']);
    Route::post('/diagnosis/added', [InfoController::class, 'diagnosis_store'])->name('diagnosis.save');

    Route::get('/manage', [InfoController::class, 'manage_index']);
    Route::post('/manage/added', [InfoController::class, 'manage_store'])->name('manage.save');

    Route::get('/family', [InfoController::class, 'family_index']);
    Route::post('/family/added', [InfoController::class, 'family_store'])->name('family.save');

    Route::get('/lab', [InfoController::class, 'lab_index']);
    Route::post('/lab/added', [InfoController::class, 'lab_store'])->name('lab.save');

    Route::get('/child', [InfoController::class, 'child_index']);
    Route::post('/child/added', [InfoController::class, 'child_store'])->name('child.save');

    Route::get('/adult', [InfoController::class, 'adult_index']);
    Route::post('/adult/added', [InfoController::class, 'adult_store'])->name('adult.save');

    Route::get('/prenatal', [InfoController::class, 'prenatal_index']);
    Route::post('/prenatal/added', [InfoController::class, 'prenatal_store'])->name('prenatal.save');

    Route::get('/postpartum', [InfoController::class, 'postpartum_index']);
    Route::post('/postpartum/added', [InfoController::class, 'postpartum_store'])->name('postpartum.save');

    Route::get('/general', [InfoController::class, 'general_index']);
    Route::post('/general/added', [InfoController::class, 'general_store'])->name('general.save');




