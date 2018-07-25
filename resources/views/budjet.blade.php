@extends('layout')
    @section('content')
        <task 
            :max="50000"
            :value="2000"
            >        
        </task>
    @endsection
@push('scripts')
    
@endpush