@extends('layouts.master')
@section('title', 'PHP Training')
@section('active', 'content')
@section('body')
<div class="container" id="home">
  <h1 class="text-center">Getting started</h1>
  <h3>Course content</h3>
  <div class="row">
    <div class="col-md-6">
      <h4>Block 1:</h4>
      <ul>
        <li><a href="#">MVC and OOP</a></li>
        <li>Walking through:</li>
        <ul>
          <li><a href="#">Class</a></li>
          <li><a href="#">Objects</a></li>
          <li><a href="#">Namespaces</a></li>
          <li><a href="#">Predefined variables</a></li>
          <li><a href="#">Exceptions</a></li>
          <li><a href="#">Error handling</a></li>
        </ul>
      </ul>
    </div>
    <div class="col-md-6">
      <h4>Block 2:</h4>
      <ul>
        <li><a href="#">Databases</a></li>
        <ul>
          <li><a href="#">Security</a></li>
          <ul>
            <li><a href="#">Designing Databases</a></li>
            <li><a href="#">Connecting to Databases</a></li>
            <li><a href="#">Encrypted Storage Model</a></li>
            <li><a href="#">SQL Injection</a></li>
          </ul>
          <li><a href="#">Queries and Requests</a></li>
          <li><a href="#">Data handling</a></li>
        </ul>
      </ul>
    </div>
  </div>
</div>
@endsection