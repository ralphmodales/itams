@extends('layouts/edit-form', [
    'createText' => trans('admin/companies/table.create') ,
    'updateText' => trans('admin/companies/table.update'),
    'helpPosition'  => 'right',
    'helpText' => trans('help.companies'),
    'formAction' => (isset($item->id)) ? route('companies.update', ['company' => $item->id]) : route('companies.store'),
])

@section('inputFields')
@include ('partials.forms.edit.name', ['translated_name' => trans('admin/companies/table.name')])
@include ('partials.forms.edit.prefix', ['translated_name' => trans('admin/companies/table.prefix')])
@include ('partials.forms.edit.image-upload', ['image_path' => app('companies_upload_path')])

@stop
