@extends('layouts.master')

@section('title','排行榜')

@section('content')
    <div class="page-head">
        <h1>排行</h1>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>名次</th>
                    <th>學號</th>
                    <th>姓名</th>
                    <th>國文</th>
                    <th>英文</th>
                    <th>數學</th>
                    <th>總分</th>
                    <th>動作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>s1234567890</td>
                    <td>小明</td>
                    <td>60</td>
                    <td>60</td>
                    <td>60</td>
                    <td>180</td>
                    <td>
                        <a class="btn btn-default btn-sm" >查看學生資料</a>
                        {{--href="{{route('student',['as'=>'student','uses'=>'StudentController@getStudentData'])}}"這行有問題--}}
                        <a class="btn btn-default btn-sm" 
                        >查看學生資料</a>
                        {{--href="{{route('{student_no}/score/{subject?}',['as'=>'student.score','uses'=>'StudentController@getStudentScore'])
                        ->where(['student_no'=>'s[0-9]{10}','subject'=>'(chinese|english|math)'])}}"這行有問題--}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@stop