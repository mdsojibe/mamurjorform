@extends('frontend.index')
@section('content')

    
        <div class="container mb-5">
            <div class="row">
                <form action="{{ isset($data) ? route('today.update',$data->id) : route('today.store') }}" method="post" class="today_work p-3 border">
                    @csrf
                    @isset($data)
                        @method('PUT')
                    @endisset
                    <div class="row">
                        <div class="mb-3 d-flex justify-content-between">
                            <h4 class="text-success">Today Work Form</h4>
                            <a href="{{ route('today.create') }}" class="btn btno-sm btn-warning text-white">Back</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $data->name ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" id="designation" class="form-control" value="{{ $data->designation ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date">Date</label>
                                <input type="text" name="date" id="date" class="form-control" value="{{ $data->date ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="morning_work">Morning Work</label>
                                <input type="text" name="morning_work" id="morning_work" class="form-control" value="{{ $data->morning_work ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lunch_work">Luch Work</label>
                                <input type="text" name="lunch_work" id="lunch_work" class="form-control" value="{{ $data->lunch_work ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="afternoon_work">Afternoon Work</label>
                                <input type="text" name="afternoon_work" id="afternoon_work" class="form-control" value="{{ $data->afternoon_work ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="evening_work">Afternoon Work</label>
                                <input type="text" name="evening_work" id="evening_work" class="form-control" value="{{ $data->evening_work ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="over_time">Over Time</label>
                                <input type="text" name="over_time" id="over_time" class="form-control" value="{{ $data->over_time ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="signature_personal">Signature (Personal)</label>
                                <input type="text" name="signature_personal" id="signature_personal" class="form-control" value="{{ $data->signature_personal ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="signature_office">Signature (Office)</label>
                                <input type="text" name="signature_office" id="signature_office" class="form-control" value="{{ $data->signature_office ?? '' }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="">select status</option>
                                    <option value="1" @isset($data)
                                    {{ $data->status== 1 ? 'selected' : '' }}
                                    @endisset>Publish</option>
                                    <option value="2"  @isset($data)
                                    {{ $data->status== 2 ? 'selected' : '' }}
                                    @endisset>Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="weekly_comment">Weekly Comment</label>
                                <textarea name="weekly_comment" id="weekly_comment" cols="120" rows="5" class="form-control">{{ $data->weekly_comment ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-sm btn-info text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>

  
  
@endsection