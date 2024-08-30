<?php

use App\Http\Controllers\Admin\AboutUsController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/lang/{lang}', function ($lang) {
    App::setlocale($lang);
    app()->setLocale($lang);
    session(['locale' => $lang]);
    return redirect()->back();
})->name('lang');

Route::middleware('local')->prefix('admin')->group(function () {
    Auth::routes();

    Route::middleware(['auth:web'])->group(function () {

        Route::get('/dashboard/home', [DashboardController::class, 'index'])->name('home');



        //aboutus routes
        Route::get('aboutus', [AboutUsController::class, 'index'])->name('aboutus.index');
        Route::post('aboutus/store', [AboutUsController::class, 'store'])->name('aboutus.store');

        //Contact Us Routes
        Route::get('Contactus', [ContactUsController::class, 'index'])->name('Contactus.index');
        Route::get('Contactus/Contacted/{id}', [ContactUsController::class, 'Contacted'])->name('Contactus.Contacted');

        //Project Contact Routes
        Route::get('ProjectContact', [ProjectContactController::class, 'index'])->name('ProjectContact.index');
        Route::get('ProjectContact/Contacted/{id}', [ProjectContactController::class, 'Contacted'])->name('ProjectContact.Contacted');

        //Review Routes
        Route::get('Review', [ReviewController::class, 'index'])->name('Review.index');
        Route::get('Review/Accepted/{id}', [ReviewController::class, 'Accepted'])->name('Review.Accepted');
        Route::get('Review/Rejected/{id}', [ReviewController::class, 'Rejected'])->name('Review.Rejected');
        Route::delete('Review/{Review}/destroy', [ReviewController::class, 'destroy'])->name('Review.destroy');
        //Review Routes
        Route::get('GeneralReview', [ReviewController::class, 'GeneralIndex'])->name('GeneralReview.index');

        //Branch routes
        Route::get('Branch', [BranchController::class, 'index'])->name('Branch.index');
        Route::get('Branch/create', [BranchController::class, 'create'])->name('Branch.create');
        Route::get('Branch/{Branch}/edit', [BranchController::class, 'edit'])->name('Branch.edit');
        Route::put('Branch/{Branch}/update', [BranchController::class, 'update'])->name('Branch.update');
        Route::post('Branch/store', [BranchController::class, 'store'])->name('Branch.store');
        Route::delete('Branch/{Branch}/destroy', [BranchController::class, 'destroy'])->name('Branch.destroy');
        Route::get('Branch/{Branch}', [BranchController::class, 'show'])->name('Branch.show');

        //Branch Employees routes
        Route::get('BranchEmployee/create/{id}', [BranchEmployeeController::class, 'create'])->name('BranchEmployee.create');
        Route::post('BranchEmployee/{Branch}/store', [BranchEmployeeController::class, 'store'])->name('BranchEmployee.store');
        Route::delete('BranchEmployee/{BranchEmployee}/{Branch}/destroy', [BranchEmployeeController::class, 'destroy'])->name('BranchEmployee.destroy');


        //Slider routes
        Route::get('Slider', [SliderController::class, 'index'])->name('Slider.index');
        Route::get('Slider/create', [SliderController::class, 'create'])->name('Slider.create');
        Route::get('Slider/{Slider}/edit', [SliderController::class, 'edit'])->name('Slider.edit');
        Route::put('Slider/{slider}/update', [SliderController::class, 'update'])->name('Slider.update');
        Route::post('Slider/store', [SliderController::class, 'store'])->name('Slider.store');
        Route::delete('Slider/{Slider}/destroy', [SliderController::class, 'destroy'])->name('Slider.destroy');
        Route::get('Slider/{Slider}', [SliderController::class, 'show'])->name('Slider.show');


        //Blog Front routes
        Route::get('Blog/createFront', [BlogController::class, 'createFront'])->name('Blog.createFront');
        Route::post('Blog/storeFront', [BlogController::class, 'storeFront'])->name('Blog.storeFront');

        //Project blog routes
        Route::get('Blog', [BlogController::class, 'index'])->name('Blog.index');
        Route::get('Blog/create', [BlogController::class, 'create'])->name('Blog.create');
        Route::get('Blog/{Blog}/edit', [BlogController::class, 'edit'])->name('Blog.edit');
        Route::put('Blog/{Blog}/update', [BlogController::class, 'update'])->name('Blog.update');
        Route::post('Blog/store', [BlogController::class, 'store'])->name('Blog.store');
        Route::delete('Blog/{Blog}/destroy', [BlogController::class, 'destroy'])->name('Blog.destroy');
        Route::get('Blog/{Blog}', [BlogController::class, 'show'])->name('Blog.show');

        //Project Type routes
        Route::get('Type', [TypeController::class, 'index'])->name('Type.index');
        Route::put('Type/{Type}/update', [TypeController::class, 'update'])->name('Type.update');
        Route::post('Type/store', [TypeController::class, 'store'])->name('Type.store');
        Route::delete('Type/{Type}/destroy', [TypeController::class, 'destroy'])->name('Type.destroy');

        //Project Infrastructure routes
        Route::get('Infrastructure', [InfrastructureController::class, 'index'])->name('Infrastructure.index');
        Route::put('Infrastructure/{Infrastructure}/update', [InfrastructureController::class, 'update'])->name('Infrastructure.update');
        Route::post('Infrastructure/store', [InfrastructureController::class, 'store'])->name('Infrastructure.store');
        Route::delete('Infrastructure/{Infrastructure}/destroy', [InfrastructureController::class, 'destroy'])->name('Infrastructure.destroy');

        //Project Unit routes
        Route::get('Unit', [UnitController::class, 'index'])->name('Unit.index');
        Route::put('Unit/{Unit}/update', [UnitController::class, 'update'])->name('Unit.update');
        Route::post('Unit/store', [UnitController::class, 'store'])->name('Unit.store');
        Route::delete('Unit/{Unit}/destroy', [UnitController::class, 'destroy'])->name('Unit.destroy');
        Route::get('UnitElements/{Unit}/index', [UnitController::class, 'UnitElements'])->name('UnitElements.index');
        Route::post('UnitElements/{Unit}/store', [UnitController::class, 'storeUnitElements'])->name('UnitElements.store');
        Route::delete('UnitElements/{element}/{unitId}/destroy', [UnitController::class, 'destroyUnitElements'])->name('UnitElements.destroy');

        //Unit Element routes
        Route::get('Element', [ElementController::class, 'index'])->name('Element.index');
        Route::put('Element/{Element}/update', [ElementController::class, 'update'])->name('Element.update');
        Route::post('Element/store', [ElementController::class, 'store'])->name('Element.store');
        Route::delete('Element/{Element}/destroy', [ElementController::class, 'destroy'])->name('Element.destroy');

        //Philosophy routes
        Route::get('Philosophy', [PhilosophyController::class, 'index'])->name('Philosophy.index');
        Route::get('Philosophy/create', [PhilosophyController::class, 'create'])->name('Philosophy.create');
        Route::get('Philosophy/{Philosophy}/edit', [PhilosophyController::class, 'edit'])->name('Philosophy.edit');
        Route::put('Philosophy/{Philosophy}/update', [PhilosophyController::class, 'update'])->name('Philosophy.update');
        Route::post('Philosophy/store', [PhilosophyController::class, 'store'])->name('Philosophy.store');
        Route::delete('Philosophy/{Philosophy}/destroy', [PhilosophyController::class, 'destroy'])->name('Philosophy.destroy');
        Route::get('Philosophy/{Philosophy}', [PhilosophyController::class, 'show'])->name('Philosophy.show');


        //Project routes
        Route::get('Project', [ProjectController::class, 'index'])->name('Project.index');
        Route::get('Project/create', [ProjectController::class, 'create'])->name('Project.create');
        Route::get('Project/{Project}/edit', [ProjectController::class, 'edit'])->name('Project.edit');
        Route::put('Project/{Project}/update', [ProjectController::class, 'update'])->name('Project.update');
        Route::post('Project/store', [ProjectController::class, 'store'])->name('Project.store');
        Route::delete('Project/{Project}/destroy', [ProjectController::class, 'destroy'])->name('Project.destroy');
        Route::get('Project/{Project}', [ProjectController::class, 'show'])->name('Project.show');

        //Project DevelopmentPhase
        Route::get('DevelopmentPhase/{Project}/index', [DevelopmentPhaseController::class, 'index'])->name('DevelopmentPhase.index');
        Route::post('DevelopmentPhase/{Project}/store', [DevelopmentPhaseController::class, 'store'])->name('DevelopmentPhase.store');
        Route::delete('DevelopmentPhase/{DevelopmentPhase}/{projectId}/destroy', [DevelopmentPhaseController::class, 'destroy'])->name('DevelopmentPhase.destroy');

        //Project Units
        Route::get('ProjectElements/{Project}/index', [ProjectElementController::class, 'index'])->name('ProjectElements.index');
        Route::post('ProjectElements/{Project}/store', [ProjectElementController::class, 'store'])->name('ProjectElements.store');
        Route::delete('ProjectElements/{ProjectElements}/{projectId}/destroy', [ProjectElementController::class, 'destroy'])->name('ProjectElements.destroy');
    });
});
