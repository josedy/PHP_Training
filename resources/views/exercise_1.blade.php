@extends('layouts.master')
@section('title', 'Exercise 1')
@section('active', 'exercise_1')
@section('body')
<div class="container">
    <h1 class="text-center">Insert a new user</h1>
    <form class="form-group" id="myForm">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" requiered>
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" requiered>
        <label for="phone">Phone:</label>
        <input type="number" class="form-control" id="phone" requiered>
        <br>
        <button class="btn btn-success" id="submit">Submit</button>
    </form>
    <br>
    <br>
    <br>
    <a href="#" class="btn btn-info" id="getValues">Get Values</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th class="text-center">Delete</th>
            </tr>
        </thead>
        <tbody id="tbody"></tbody>
    </table>
</div>
@endsection