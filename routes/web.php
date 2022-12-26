<?php


use Illuminate\Support\Facades\Route;
#Admin
use App\Http\Controllers\admin\HomepageManager;
use App\Http\Controllers\admin\SlideShowManager;
use App\Http\Controllers\admin\AccountManager;
use App\Http\Controllers\admin\TopicManager;
use App\Http\Controllers\admin\CourseManager;
use App\Http\Controllers\admin\CourseContentManager;
use App\Http\Controllers\admin\OverviewManager;
use App\Http\Controllers\admin\IndexManager;
use App\Http\Controllers\admin\FileManager;
use App\Http\Controllers\admin\PasswordUpdateManager;
use App\Http\Controllers\admin\ProfileManager;
use App\Http\Controllers\admin\QuestionManager;
use App\Http\Controllers\admin\ExamManager;
use App\Http\Controllers\admin\StatisticalManager;

#User
use App\Http\Controllers\user\HomepageController;
use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\user\RegisterController;
use App\Http\Controllers\user\ForgotPassWordController;
use App\Http\Controllers\user\ProfileController;
use App\Http\Controllers\user\TopicController;
use App\Http\Controllers\user\CourseAdvancedController;
use App\Http\Controllers\user\CourseController;
use App\Http\Controllers\user\QuizController;
use App\Http\Controllers\user\VideoController;
use App\Http\Controllers\user\ActivityController;
use App\Http\Controllers\user\SearchController;

# Homepage => Chưa đăng nhập
Route::get('/' , [HomepageController::class , 'index'])->name('guest.index');

# Register - sendmail
Route::post('register' , [RegisterController::class , 'store'])->name('guest.register');
Route::get('actived/{username}/{token}' , [RegisterController::class , 'actived'])->name('guest.actived');

# Login
Route::post('login' , [LoginController::class , 'store'])->name('guest.login');

# Guest => view
Route::get('guest/topic/show/{id}' , [TopicController::class , 'showTopicGuest'])->name('guest.topic');
Route::get('guest/course/advanced' , [CourseAdvancedController::class , 'indexCourseAdvancedGuest'])->name('guest.course-advanced');
Route::get('guest/quiz' , [QuizController::class , 'indexQuizGuest'])->name('guest.quiz');
Route::get('guest/quiz/show/{id}' , [QuizController::class , 'showQuizGuest'])->name('guest.quiz-show');
Route::get('guest/search/all' , [SearchController::class , 'searchGuest'])->name('guest.search-ajax-result');


#User
Route::prefix('user')->group(function(){

    # Forgot password - sendMail
    Route::post('forgot/password' , [ForgotPassWordController::class , 'store'])->name('user.forgot-password');
    Route::get('reset/password/{email}/{token}' , [ForgotPassWordController::class , 'show'])->name('user.reset-password');
    Route::post('update/password/{email}' , [ForgotPassWordController::class , 'update'])->name('user.update-password');

    # Homepage => Đã đăng nhập
    Route::get('homepage' , [HomepageController::class , 'homepage'])->name('user.homepage');

    # Settings => profile + changep assword - destroy account
    Route::get('settings/profile' , [ProfileController::class , 'show'])->name('user.show-profile');
    Route::post('settings/profile/password/{id}' , [ProfileController::class , 'store'])->name('user.store-password');
    Route::get('settings/profile/destroy/{id}' , [ProfileController::class , 'delete'])->name('user.destroy-account');

    # Topic
    Route::get('topic/show/{id}' , [TopicController::class , 'show'])->name('user.topic');

    # Course advanced
    Route::get('course/advanced' , [CourseAdvancedController::class , 'index'])->name('user.course-advanced');

    # Course
    Route::get('course/content/{id}' , [CourseController::class , 'index'])->name('user.course-content');

    # Exam
    Route::get('quiz' , [QuizController::class , 'index'])->name('user.quiz');
    Route::get('quiz/show/{id}' , [QuizController::class , 'show'])->name('user.quiz-show');
    Route::get('quiz/content/{id}' , [QuizController::class , 'showQuiz'])->name('user.quiz-content');
    Route::post('quiz/result/{id}' , [QuizController::class , 'resultQuiz'])->name('user.quiz-result');
    Route::get('quiz/review/{id}' , [QuizController::class , 'reviewQuiz'])->name('user.quiz-review');

    # Video
    Route::get('video/{id}' , [VideoController::class , 'showVideo'])->name('user.video-content');

    # Activity
    Route::get('activity' , [ActivityController::class , 'index'])->name('user.activity');

    # Search
    Route::get('search/all' , [SearchController::class , 'search'])->name('user.search-ajax-result');
    Route::get('search/course' , [SearchController::class , 'searchCourse'])->name('user.search-ajax-course');
    Route::get('search/exam' , [SearchController::class , 'searchExam'])->name('user.search-ajax-exam');
});


#Admin
Route::prefix('admin')->middleware('AdminRole')->group(function(){
    Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    # Homepage
    Route::get('homepage' , [HomepageManager::class , 'index'])->name('admin.homepage');

    # Profile
    Route::get('settings/profile' , [ProfileManager::class , 'show'])->name('admin.show-profile');
    Route::post('settings/update/profile/{id}' , [ProfileManager::class , 'update'])->name('admin.update-profile');

    # Password update
    Route::get('settings/password' , [PasswordUpdateManager::class , 'show'])->name('admin.show-password');
    Route::post('settings/update/password/{id}' , [PasswordUpdateManager::class , 'update'])->name('admin.update-password');

    # Slide show manager
    Route::get('create/slideshow' , [SlideShowManager::class , 'create'])->name('admin.create-slideshow');
    Route::post('store/slideshow' , [SlideShowManager::class , 'store'])->name('admin.store-slideshow');
    Route::get('list/slideshow' , [SlideShowManager::class , 'index'])->name('admin.list-slideshow');
    Route::get('edit/slideshow/{id}' , [SlideShowManager::class , 'show'])->name('admin.edit-slideshow');
    Route::post('update/slideshow/{id}' , [SlideShowManager::class , 'update'])->name('admin.update-slideshow');
    Route::get('destroy/slideshow/{id}' , [SlideShowManager::class , 'delete'])->name('admin.destroy-slideshow');
    
    # User manager
    Route::get('create/account' , [AccountManager::class , 'create'])->name('admin.create-account');
    Route::post('store/account' , [AccountManager::class , 'store'])->name('admin.store-account');
    Route::get('list/account' , [AccountManager::class , 'index'])->name('admin.list-account');
    Route::get('edit/account/{id}' , [AccountManager::class , 'show'])->name('admin.edit-account');
    Route::post('update/account/{id}' , [AccountManager::class , 'update'])->name('admin.update-account');
    Route::get('destroy/account/{id}' , [AccountManager::class , 'delete'])->name('admin.destroy-account');

    # Topic manager
    Route::get('create/topic' , [TopicManager::class , 'create'])->name('admin.create-topic');
    Route::post('store/topic' , [TopicManager::class , 'store'])->name('admin.store-topic');
    Route::get('list/topic' , [TopicManager::class , 'index'])->name('admin.list-topic');
    Route::get('edit/topic/{id}' , [TopicManager::class , 'show'])->name('admin.edit-topic');
    Route::post('update/topic/{id}' , [TopicManager::class , 'update'])->name('admin.update-topic');
    Route::get('destroy/topic/{id}' , [TopicManager::class , 'delete'])->name('admin.destroy-topic');

    # Course manager
    Route::get('create/course' , [CourseManager::class , 'create'])->name('admin.create-course');
    Route::post('store/course' , [CourseManager::class , 'store'])->name('admin.store-course');
    Route::get('list/course' , [CourseManager::class , 'index'])->name('admin.list-course');
    Route::get('edit/course/{id}' , [CourseManager::class , 'show'])->name('admin.edit-course');
    Route::post('update/course/{id}' , [CourseManager::class , 'update'])->name('admin.update-course');
    Route::get('destroy/course/{id}' , [CourseManager::class , 'delete'])->name('admin.destroy-course');

    # Course manager => add content : overview content - index content - chapter content + file 
    Route::get('list/content/course' , [CourseContentManager::class , 'index'])->name('admin.list-content-course');
    Route::get('show/content/course/{id}' , [CourseContentManager::class , 'show'])->name('admin.content-course');
    Route::post('store/content/overview/course' , [CourseContentManager::class , 'addOverview'])->name('admin.create-overview-content-course');
    Route::post('store/content/index/course' , [CourseContentManager::class , 'addIndex'])->name('admin.create-index-content-course');
    Route::post('store/content/course' , [CourseContentManager::class , 'addChapter'])->name('admin.create-chapter-content-course');
    Route::post('store/content/file/course' , [CourseContentManager::class , 'addFile'])->name('admin.create-file-content-course');
    Route::get('show/content/video/course/{id}' , [CourseContentManager::class , 'showVideo'])->name('admin.show-video-content-course');

    # Overview content manager
    Route::get('list/overview/content/course' , [OverviewManager::class , 'index'])->name('admin.list-overview-content-course');
    Route::get('show/overview/content/course/{id}' , [OverviewManager::class , 'show'])->name('admin.show-overview-content-course');
    Route::post('update/overview/content/course/{id}' , [OverviewManager::class , 'update'])->name('admin.update-overview-content-course');
    Route::get('destroy/overview/content/course/{id}' , [OverviewManager::class , 'delete'])->name('admin.destroy-overview-content-course');

    # Index content manager
    Route::get('list/index/course' , [IndexManager::class , 'index'])->name('admin.list-index-course');
    Route::get('show/index/course/{id}' , [IndexManager::class , 'show'])->name('admin.show-index-course');
    Route::post('update/index/course/{id}' , [IndexManager::class , 'update'])->name('admin.update-index-course');
    Route::get('destroy/index/course/{id}' , [IndexManager::class , 'destroy'])->name('admin.destroy-index-course');

    # Chapter + File content manager
    Route::get('list/file/course' , [FileManager::class , 'index'])->name('admin.list-file-content-course');
    Route::get('show/file/course/{id}' , [FileManager::class , 'show'])->name('admin.show-file-content-course');
    Route::post('update/file/course/{id}' , [FileManager::class , 'update'])->name('admin.update-file-content-course');
    Route::get('destroy/file/course/{id}' , [FileManager::class , 'delete'])->name('admin.destroy-file-content-course');

    # Exam manager
    Route::get('create/exam' , [ExamManager::class , 'create'])->name('admin.create-exam');
    Route::post('store/exam' , [ExamManager::class , 'store'])->name('admin.store-exam');
    Route::get('list/exam' , [ExamManager::class , 'index'])->name('admin.list-exam');
    Route::get('show/exam/{id}' , [ExamManager::class , 'show'])->name('admin.show-exam');
    Route::post('update/exam/{id}' , [ExamManager::class , 'update'])->name('admin.update-exam');
    Route::get('destroy/exam/{id}' , [ExamManager::class , 'delete'])->name('admin.destroy-exam');

    # Question manager
    Route::get('create/question' , [QuestionManager::class , 'create'])->name('admin.create-question');
    Route::post('store/question' , [QuestionManager::class , 'store'])->name('admin.store-question');
    Route::get('list/question' , [QuestionManager::class , 'index'])->name('admin.list-question');
    Route::get('show/question/{id}' , [QuestionManager::class , 'show'])->name('admin.show-question');
    Route::post('update/question/{id}' , [QuestionManager::class , 'update'])->name('admin.update-question');
    Route::get('destroy/question/{id}' , [QuestionManager::class , 'delete'])->name('admin.destroy-question');

    # Statistical
    Route::get('list/point' , [StatisticalManager::class , 'index'])->name('admin.list-point');
});

