@extends('layouts.app')

@section('title', 'Featured Teacher')

@section('content')

<h2>Featured Teacher</h2>

<p><strong>Name:</strong> {{ $teacher['name'] }}</p>
<p><strong>Department:</strong> {{ $teacher['department'] }}</p>
<p><strong>Subject:</strong> {{ $teacher['subject'] }}</p>

@endsection