@extends('errors::minimal')

@section('title', __(config('app.name').'- Page introuvable'))
@section('code', '404')
@section('message', __('Page introuvable'))
@section('content', __("Accueil"))