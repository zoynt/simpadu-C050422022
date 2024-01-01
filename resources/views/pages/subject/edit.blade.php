@extends('layouts.app')

@section('title', 'Edit Subject')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="home">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="user">Users</a></div>
                    <div class="breadcrumb-item">Edit User</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('subject.update', $subject) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit subject</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"
                                    class="form-control @error('title')
                                    is-invalid
                                @enderror"
                                    name="title" value="{{ $subject->title }}">
                            </div>
                           
                            <div class="form-group">
                                <label>semester</label>
                                <input type="semester"
                                    class="form-control"
                                    name="semester" value="{{ $subject->semester }}">
                               
                            </div>
                            
                            <div class="form-group">
                                <label>lecturer_id</label>
                                <input type="lecturer_id"
                                    class="form-control"
                                    name="lecturer_id" value="{{ $subject->lecturer_id }}">
                            </div>

                            <div class="form-group">
                                <label>academic_year</label>
                                <input type="academic_year"
                                    class="form-control"
                                    name="academic_year" value="{{ $subject->academic_year }}">
                            </div>

                            <div class="form-group">
                                <label>sks</label>
                                <input type="text"
                                    class="form-control"
                                    name="sks" value="{{ $subject->sks}}">
                            </div>
                            
                            <div class="form-group">
                                <label>code</label>
                                <input type="code"
                                    class="form-control @error('code')
                                    is-invalid
                                @enderror"
                                    name="code" value="{{ $subject->code }}">
                                @error('code')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group mb-0">
                                <label>dscription</label>
                                <textarea class="form-control" data-height="150" name="description">{{ $subject->description }}</textarea>
                            </div>
                            <!-- <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="handphone" value="{{ $subject->handphone }}">
                            </div>

                           
                            <div class="form-group mb-0">
                                <label>Address</label>
                                <textarea class="form-control" data-height="150" name="address">{{ $subject->address }}</textarea>
                            </div>
                        </div> -->
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush