@extends('layouts.layout')
  @if(Auth::user()->role == 'user')
     @include('user-page')
  @endif
  @if(Auth::user()->role == 'is_admin')
    @include('admin')
  @endif