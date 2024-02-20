@extends('admin.projects.layouts.create-or-edit')

@section('page-title', 'Create new post')

@section('form-action')
    {{ route('admin.projects.store' ) }}
@endsection

@section('form-method')
    @method('POST')
@endsection
