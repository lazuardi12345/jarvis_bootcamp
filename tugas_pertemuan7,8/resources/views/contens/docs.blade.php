@extends('main')
@section('content')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">{{ $title }}</h1>
    </div>
    <div class="col-auto">
         <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                    <form class="table-search-form row gx-1 align-items-center">
                        <div class="col-auto">
                            <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn app-btn-secondary">Search</button>
                        </div>
                    </form>
                    
                </div><!--//col-->
                <div class="col-auto">
                    <select class="form-select w-auto" >
                            <option selected value="option-1">All</option>
                            <option value="option-2">This week</option>
                            <option value="option-3">This month</option>
                            <option value="option-4">Last 3 months</option>
                    </select>
                </div>
                <div class="col-auto">						    
                    <a class="btn app-btn-secondary" href="#">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
<path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>
                        Download CSV
                    </a>
                </div>
                <div class="col-auto">						    
                    <a class="btn app-btn-secondary" href="/users/create">
                        Add Data
                    </a>
                </div>
            </div><!--//row-->
        </div><!--//table-utilities-->
    </div><!--//col-auto-->
</div><!--//row-->


<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Users</a>
    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Post</a>
</nav>
@if (session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success')}}
          </div>
        @endif

<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">#</th>
                                <th class="cell">Name</th>
                                <th class="cell">Email</th>
                                <th class="cell">Date</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="cell">{{ $loop->index }}</td>
                                <td class="cell"><span class="truncate">{{ $user->name }}</span></td>
                                <td class="cell">{{ $user->email }}</td>
                                <td class="cell">{{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="/users/{{ $user->id }}/edit">Edit</a></td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="/users/{{ $user->id }}/show">Detail</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--//table-responsive-->
               
            </div><!--//app-card-body-->		
        </div><!--//app-card-->
        <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav><!--//app-pagination-->
        
    </div><!--//tab-pane-->
    
    <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
        <div class="app-card app-card-orders-table mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    
                    <table class="table mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">#</th>
                                <th class="cell">Sectence</th>
                                <th class="cell">Description</th>
                                <th class="cell">Author</th>
                                <th class="cell">Date</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $user)
                            <tr>
                                <td class="cell">{{ $loop->index }}</td>
                                <td class="cell"><span class="truncate">{{ $user->title }}</span></td>
                                <td class="cell">{{ $user->description }}</td>
                                <td class="cell"><span class="badge bg-success">{{ $user->author }}</span></td>
                                <td class="cell">{{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</td>
                                <td class="cell"><a class="btn-sm app-btn-secondary" href="#">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div><!--//table-responsive-->
            </div><!--//app-card-body-->		
        </div><!--//app-card-->
    </div><!--//tab-pane-->
</div><!--//tab-content-->
@endsection