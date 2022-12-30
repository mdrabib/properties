@extends('app')

@section('content')
<div class="content-page">
    <div class="content">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Raj Constructions Ltd.</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Properties</a></li>
                            <li class="breadcrumb-item active">Properties</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Properties</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane show active" id="buttons-table-preview">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Division</th>
                                    <th>District</th>
                                    <th>Image</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            {{-- country_id category_id	division_id 	district_id 	property_image 	property_value property_name --}}
                            <tbody>
                                @forelse ($properties as $property)
                                    <tr>
                                        <td>{{ ++$loop->index }}</td>
                                        <td>{{ $property->category_id}}</td>
                                        <td>{{ $property->property_name}}</td>
                                        <td>{{ $property->country_id}}</td>
                                        <td>{{ $property->division_id}}</td>
                                        <td>{{ $property->district_id}}</td>
                                        <td>{{ $property->property_image}}</td>
                                        <td>{{ $property->property_value}}</td>
                                        <td></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No data found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>                                           
                    </div> <!-- end preview-->

                </div> <!-- end tab-content-->
                
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->
@endsection