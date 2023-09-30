@extends('frontend.index')
@section('content')

    @include('alert')
    <section class="mt-4 mb-5">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-between mb-3">
                    <h4>My Work Table </h4>
                    <a href="{{ route('today.index') }}" class="btn btn-sm btn-info text-white">Add New</a>
                </div>
                
                <div class="accordion" id="accordionExample">
                    @foreach ($work_value as $item)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-{{ $item->id }}">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $item->id }}" aria-expanded="true" aria-controls="collapse-{{ $item->id }}">
                            Today Work {{ $item->id }}
                          </button>
                        </h2>
                        <div id="collapse-{{ $item->id }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                          <div class="accordion-body justify-content-between">
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Name</th>
                                      <div>:</div>
                                      <td>{{ $item->name }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Designation</th>
                                      <div>:</div>
                                      <td>{{ $item->designation }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Date</th>
                                      <div>:</div>
                                      <td>{{ $item->date }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Morning Work</th>
                                      <div>:</div>
                                      <td>{{ $item->morning_work }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Afternoon Work</th>
                                      <div>:</div>
                                      <td>{{ $item->afternoon_work }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Evening Work</th>
                                      <div>:</div>
                                      <td>{{ $item->evening_work }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Over Time</th>
                                      <div>:</div>
                                      <td>{{ $item->over_time }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Signature Personal</th>
                                      <div>:</div>
                                      <td>{{ $item->signature_personal }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Signature Office</th>
                                      <div>:</div>
                                      <td>{{ $item->signature_office }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex justify-content-between">
                                      <th>Status</th>
                                      <div>:</div>
                                      <td>{{ $item->status == 1 ? 'Public' : 'Pending' }}</td>    
                                  </div>
                              </div>
                              <hr>
                              <div class="mb-3">
                                  <div class="col-md-12 d-flex ">
                                      <td>
                                        <a href="{{ route('today.edit',$item->id) }}" class="btn btn-sm btn-success me-3">Edit</a>
                                        <form method="post" id="delete-form-{{ $item->id }}" action="{{ route('today.delete', $item->id) }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="message({{ $item->id }})">Delete</button>
                                    </td>    
                                  </div>
                              </div>
                              
                          </div>
                        </div>
                      </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>

  
  <!-- Bootstrap JavaScript Libraries -->
  <script>
    function message(delete_id) { 
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-'+delete_id).submit();
            }
        })
     }
  </script>

@endsection