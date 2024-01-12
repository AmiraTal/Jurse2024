<?php

use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('program')->group(function () {
    Route::get('/', [ProgrammeController::class, 'index'])->name('program.index');
    Route::get('/guidelines', [ProgrammeController::class, 'guidelines'])->name('program.guidelines');
    Route::get('/call-for-papers', [ProgrammeController::class, 'call_for_papers'])->name('program.call-for-papers');
    Route::get('/registration', [ProgrammeController::class, 'registration'])->name('program.registration');
    Route::post('/registration', [ProgrammeController::class, 'storeAuthor'])->name('program.registration.store');
});
Route::prefix('dates')->group(function () {
    Route::get('/', [DateController::class, 'index'])->name('date.index');
});
Route::prefix('presentation')->group(function () {
    Route::get('/', [PresentationController::class, 'keynotes'])->name('presentation.keynotes');
    Route::get('/special-sessions', [PresentationController::class, 'special_sessions'])->name('presentation.special-sessions');
    Route::get('/topics', [PresentationController::class, 'topics'])->name('presentation.topics');
    Route::get('/technical-tutorials', [PresentationController::class, 'technicalTutorials'])->name('presentation.technical-tutorials');
    Route::get('/student-contest', [PresentationController::class, 'studentContest'])->name('presentation.student-contest');
    Route::get('/exhibitors', [PresentationController::class, 'exhibitors'])->name('presentation.exhibitors');
    Route::get('/special-sessions/{slug}', [PresentationController::class, 'show_special_session'])->name('special-sessions.show');
});


Route::prefix('inscription')->group(function () {
    Route::get('/', [InscriptionController::class, 'index'])->name('inscription.index');

    Route::post('/inscription', [InscriptionController::class, 'store'])->name('inscription.store');


});


Route::prefix('faq')->group(function () {
    Route::get('/', [FaqController::class, 'index'])->name('faq.index');

});


Route::prefix('blog')->group(function () {
    Route::get('/', [BlogPostController::class, 'index'])->name('blog.index');

});
//

Route::middleware('auth')->group(function () {
    Route::prefix('admins')->group(function () {
        Route::get('/', [AdministrationController::class, 'index'])->name('admin.index');

        // Routes pour le modèle Link
        Route::get('/links', [AdministrationController::class, 'showLinks'])->name('admin.links.index');
        Route::get('/links/create', [AdministrationController::class, 'createLink'])->name('admin.links.create');
        Route::post('/links', [AdministrationController::class, 'storeLink'])->name('admin.links.store');
        Route::get('/links/{link}/edit', [AdministrationController::class, 'editLink'])->name('admin.links.edit');
        Route::put('/links/{link}', [AdministrationController::class, 'updateLink'])->name('admin.links.update');
        Route::delete('/links/{link}', [AdministrationController::class, 'deleteLink'])->name('admin.links.delete');

        // Répétez le même schéma pour les autres modèles (Page, Tweet, Organizer, Sponsor, KeynoteSpeaker)
        // Par exemple, pour le modèle Page
        Route::get('/pages', [AdministrationController::class, 'showPages'])->name('admin.pages.index');
        Route::get('/pages/create', [AdministrationController::class, 'createPage'])->name('admin.pages.create');
        Route::post('/pages', [AdministrationController::class, 'storePage'])->name('admin.pages.store');
        Route::get('/pages/{page}/edit', [AdministrationController::class, 'editPage'])->name('admin.pages.edit');
        Route::put('/pages/{page}', [AdministrationController::class, 'updatePage'])->name('admin.pages.update');
        Route::delete('/pages/{page}', [AdministrationController::class, 'deletePage'])->name('admin.pages.delete');

        Route::get('/tweets', [AdministrationController::class, 'showTweets'])->name('admin.tweets.index');
        Route::get('/tweets/create', [AdministrationController::class, 'createTweet'])->name('admin.tweets.create');
        Route::post('/tweets', [AdministrationController::class, 'storeTweet'])->name('admin.tweets.store');
        Route::get('/tweets/{tweet}/edit', [AdministrationController::class, 'editTweet'])->name('admin.tweets.edit');
        Route::put('/tweets/{tweet}', [AdministrationController::class, 'updateTweet'])->name('admin.tweets.update');
        Route::delete('/tweets/{tweet}', [AdministrationController::class, 'deleteTweet'])->name('admin.tweets.delete');

        // Routes pour le modèle Organizer
        Route::get('/organizers', [AdministrationController::class, 'showOrganizers'])->name('admin.organizers.index');
        Route::get('/organizers/create', [AdministrationController::class, 'createOrganizer'])->name('admin.organizers.create');
        Route::post('/organizers', [AdministrationController::class, 'storeOrganizer'])->name('admin.organizers.store');
        Route::get('/organizers/{organizer}/edit', [AdministrationController::class, 'editOrganizer'])->name('admin.organizers.edit');
        Route::put('/organizers/{organizer}', [AdministrationController::class, 'updateOrganizer'])->name('admin.organizers.update');
        Route::delete('/organizers/{organizer}', [AdministrationController::class, 'deleteOrganizer'])->name('admin.organizers.delete');

        // Routes pour le modèle Sponsor
        Route::get('/sponsors', [AdministrationController::class, 'showSponsors'])->name('admin.sponsors.index');
        Route::get('/sponsors/create', [AdministrationController::class, 'createSponsor'])->name('admin.sponsors.create');
        Route::post('/sponsors', [AdministrationController::class, 'storeSponsor'])->name('admin.sponsors.store');
        Route::get('/sponsors/{sponsor}/edit', [AdministrationController::class, 'editSponsor'])->name('admin.sponsors.edit');
        Route::put('/sponsors/{sponsor}', [AdministrationController::class, 'updateSponsor'])->name('admin.sponsors.update');
        Route::delete('/sponsors/{sponsor}', [AdministrationController::class, 'deleteSponsor'])->name('admin.sponsors.delete');

        // Routes pour le modèle KeynoteSpeaker
        Route::get('/keynotespeakers', [AdministrationController::class, 'showKeynoteSpeakers'])->name('admin.keynotespeakers.index');
        Route::get('/keynotespeakers/create', [AdministrationController::class, 'createKeynoteSpeaker'])->name('admin.keynotespeakers.create');
        Route::post('/keynotespeakers', [AdministrationController::class, 'storeKeynoteSpeaker'])->name('admin.keynotespeakers.store');
        Route::get('/keynotespeakers/{keynoteSpeaker}/edit', [AdministrationController::class, 'editKeynoteSpeaker'])->name('admin.keynotespeakers.edit');
        Route::put('/keynotespeakers/{keynoteSpeaker}', [AdministrationController::class, 'updateKeynoteSpeaker'])->name('admin.keynotespeakers.update');
        Route::delete('/keynotespeakers/{keynoteSpeaker}', [AdministrationController::class, 'deleteKeynoteSpeaker'])->name('admin.keynotespeakers.delete');

        Route::get('/user', [AdministrationController::class, 'showUser'])->name('admin.user.index');
        Route::get('/user/create', [AdministrationController::class, 'createUser'])->name('admin.user.create');
        Route::post('/user', [AdministrationController::class, 'storeUser'])->name('admin.user.store');
        Route::get('/user/{user}/edit', [AdministrationController::class, 'editUser'])->name('admin.user.edit');
        Route::put('/user/{user}', [AdministrationController::class, 'updateUser'])->name('admin.user.update');
        Route::delete('/user/{user}', [AdministrationController::class, 'deleteUser'])->name('admin.user.delete');


        Route::get('authors', [AdministrationController::class, 'indexAuthors'])->name('admin.authors.index');
        Route::get('authors/create', [AdministrationController::class, 'createAuthor'])->name('admin.authors.create');
        Route::post('authors', [AdministrationController::class, 'storeAuthor'])->name('admin.authors.store');
        Route::get('authors/{author}/edit', [AdministrationController::class, 'editAuthor'])->name('admin.authors.edit');
        Route::put('authors/{author}', [AdministrationController::class, 'updateAuthor'])->name('admin.authors.update');
        Route::delete('authors/{author}', [AdministrationController::class, 'deleteAuthor'])->name('admin.authors.delete');


        Route::get('specialsessions', [AdministrationController::class, 'indexSpecialSessions'])->name('admin.specialsessions.index');
        Route::get('specialsessions/create', [AdministrationController::class, 'createSpecialSession'])->name('admin.specialsessions.create');
        Route::post('specialsessions', [AdministrationController::class, 'storeSpecialSession'])->name('admin.specialsessions.store');
        Route::get('specialsessions/{session}/edit', [AdministrationController::class, 'editSpecialSession'])->name('admin.specialsessions.edit');
        Route::put('specialsessions/{specialSession}', [AdministrationController::class, 'updateSpecialSession'])->name('admin.specialsessions.update');
        Route::delete('specialsessions/{specialSession}', [AdministrationController::class, 'deleteSpecialSession'])->name('admin.specialsessions.delete');


        Route::get('videos', [VideoController::class, 'index'])->name('admin.videos.index');
        Route::get('videos/create', [VideoController::class, 'createVideo'])->name('admin.videos.create');
        Route::post('videos', [VideoController::class, 'store'])->name('admin.videos.store');
        Route::get('videos/{video}/edit', [VideoController::class, 'editVideo'])->name('admin.videos.edit');
        Route::put('videos/{video}', [VideoController::class, 'update'])->name('admin.videos.update');
        Route::delete('videos/{video}', [VideoController::class, 'destroy'])->name('admin.videos.delete');


        Route::get('photos', [PhotoController::class, 'index'])->name('admin.photos.index');
        Route::get('photos/create', [PhotoController::class, 'create'])->name('admin.photos.create');
        Route::post('photos', [PhotoController::class, 'store'])->name('admin.photos.store');
        Route::get('photos/{photo}/edit', [PhotoController::class, 'edit'])->name('admin.photos.edit');
        Route::put('photos/{photo}', [PhotoController::class, 'update'])->name('admin.photos.update');
        Route::delete('photos/{photo}', [PhotoController::class, 'destroy'])->name('admin.photos.delete');

    });
});


Route::get('/accueil', [App\Http\Controllers\HomeController::class, 'index'])->name('accueil');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::prefix('admins')->middleware('dynamicAcl')->name('admins.')->group(function () {
//    Route::get('/', Lists::class)->name('lists');
//    Route::get('/create', Create::class)->name('create');
//    Route::get('/update/{admin}', Update::class)->name('update');
//});
