@extends('layouts.admin')
@section('content')
    @if(session()->has('store'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('store') }}
        </div>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut();
            }, 5000);
        </script>
    @endif

    @if(session()->has('update'))
        <div class="alert alert-primary" role="alert">
            {{ session()->get('update') }}
        </div>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut();
            }, 5000);
        </script>
    @endif

    @if(session()->has('delete'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('delete') }}
        </div>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut();
            }, 5000);
        </script>
    @endif
    
    <div class="card">
        <div class="card-header">
            <h4>Footer</h4>
        </div>
        <div class="card-body">
            @if($records)
                <form method="POST" action="{{url('dashboard/dynamic-edit/update-footer/'.$records->id)}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Content</label>
                            <input type="text" class="form-control" name="content" value="{{$records->content}}">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Icons</label>
                            @php
                                $icons = json_decode($records->icons, TRUE);
                            @endphp
                            <div class="row">
                            @foreach($icons as $single)
                                <div class="col-md-1">
                                    <a href="{{url('dashboard/dynamic-edit/FooterRows-delete/'.$single)}}"><button class="btn-danger" type="button">Sil</button></a>
                                </div>
                                <div class="col-md-11">
                                    <input type="text" class="form-control" name="icons[]" value="{{$single}}" oninput="checkInputValues()">
                                </div>
                            @endforeach
                            </div> 
                            <section id="more-icons">
                            </section>
                            <div>
                                <a onclick="addRows()"><button type="button">+</button></a>
                                <a onclick="removeRows()"><button type="button">-</button></a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <label for="">İcons Url</label>
                            @php
                                $iconsUrl = json_decode($records->iconsUrl, TRUE);
                            @endphp
                            @foreach($iconsUrl as $single)
                                <input type="text" class="form-control" name="iconsUrl[]" value="{{$single}}" oninput="checkInputValues()">
                            @endforeach
                            <section id="more-iconsUrl">
                            </section>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Bottom Content*</label>
                            <input type="text" class="form-control" name="smallContent" value="{{$records->smallContent}}">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            @else
                <form method="POST" action="{{url('dashboard/dynamic-edit/insert-footer')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Content</label>
                            <input type="text" class="form-control" name="content">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">İcons</label>
                            <input type="text" class="form-control" name="icons[]" oninput="checkInputValues()">
                            <section id="more-icons">
                            </section>
                            <div>
                                <a onclick="addRows()"><button type="button">+</button></a>
                                <a onclick="removeRows()"><button type="button">-</button></a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <label for="">İcons Url</label>
                            <input type="text" class="form-control" name="iconsUrl[]" oninput="checkInputValues()">
                            <section id="more-iconsUrl">
                            </section>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Bottom Content*</label>
                            <input type="text" class="form-control" name="smallContent">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            @endif
        </div>
    </div> 
@endsection
@section('script')
    <script>
        function addRows() 
        {
            const moreIconsRows = document.getElementById('more-icons');
            const moreIconsUrlRows = document.getElementById('more-iconsUrl');
            
            const row = document.createElement("div");
            row.innerHTML = '<input type="text" class="form-control" name="icons[]" oninput="checkInputValues()" required>';
            moreIconsRows.appendChild(row);
            
            const Row = document.createElement("div");
            Row.innerHTML = '<input type="text" class="form-control" name="iconsUrl[]" oninput="checkInputValues()" required>';
            moreIconsUrlRows.appendChild(Row);
        }

        function removeRows() 
        {
            const IconsRowsSection = document.getElementById("more-icons");
            const IconsUrlRowsSection = document.getElementById("more-iconsUrl");
            
            const lastIconsRows = IconsRowsSection.querySelector("div:last-child");
            lastIconsRows.parentElement.removeChild(lastIconsRows);
            
            const lastIconsUrlRows= IconsUrlRowsSection.querySelector("div:last-child");
            lastIconsUrlRows.parentElement.removeChild(lastIconsUrlRows);
        }
    </script>

    <script>
        function checkInputValues()
        {
            const extraInput = document.querySelector('input[name="icons[]"]');
            const priceInput = document.querySelector('input[name="iconsUrl[]"]');
            
            if (extraInput.value !== '' && priceInput.value === '') {
                priceInput.setCustomValidity('Please fill in the iconsUrl');
            } else if (extraInput.value === '' && priceInput.value !== '') {
                extraInput.setCustomValidity('Please fill in the iconsUrl');
            } else {
                extraInput.setCustomValidity('');
                priceInput.setCustomValidity('');
            }
        }
    </script>
@endsection