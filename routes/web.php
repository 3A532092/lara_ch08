<?php


Route::get('/','HomeController@index');

//Route::get('/','board');

Route::get('cool','Cool\TestController@index');

Route::get('/board','BoardController@getIndex');


/*Route::get('student/{student_no}',function($student_no){
    return "學號:".$student_no;
});
Route::get('student/{student_no}/score',function($student_no){
    return "學號:".$student_no."的所有成績";
});
Route::get('student/{student_no}/score/{subject?}',function($student_no,$subject = null){
    return "學號:".$student_no."的".((is_null($subject))?"所有科目":$subject)."成績";
})->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)']);*/

//Route::controller('/board','BoardController');


Route::pattern('student_no','s[0-9]{10}');
Route::group(['prefix'=>'student'],function() {
    Route::get('{student_no}',[
        'as'=>'student',
        'uses'=>'StudentController@getStudentData'
    ]);
    Route::get('{student_no}/score/{subject?}', [
        'as'=>'student.score',
        'uses'=>'StudentController@getStudentScore'
        ])->where(['subject'=>'(chinese|english|math)']);
});