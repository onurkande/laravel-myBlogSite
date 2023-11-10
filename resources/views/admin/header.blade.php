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
            <h4>Header</h4>
        </div>
        <div class="card-body">
            @if($records)
                <form method="POST" action="{{url('dashboard/dynamic-edit/update-header/'.$records->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div  class="row">
                        <label for="">image</label>
                        <div class="col-md-6">
                            <img src="{{asset('admin/headerimage/'.$records->image)}}" width="300">
                        </div>
                    </div>

                    <br>

                    <div  class="row">
                        <div class="col-md-6">
                            <label for="">image*</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="col-md-6">
                            <label for="">image Url*</label>
                            <input type="text" class="form-control" name="imageUrl" value="{{$records->imageUrl}}">
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
                                    <a href="{{url('dashboard/dynamic-edit/HeaderRowsIcons-delete/'.$single)}}"><button class="btn-danger" type="button">Sil</button></a>
                                </div>
                                <div class="col-md-11">
                                    <input type="text" class="form-control" name="icons[]" value="{{$single}}" oninput="checkInputiconsValues()">
                                </div>
                            @endforeach
                            </div> 
                            <section id="more-icons">
                            </section>
                            <div>
                                <a onclick="addicons()"><button type="button">+</button></a>
                                <a onclick="removeicons()"><button type="button">-</button></a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <label for="">Icons Url</label>
                            @php
                                $iconsUrl = json_decode($records->iconsUrl, TRUE);
                            @endphp
                            @foreach($iconsUrl as $single)
                                <input type="text" class="form-control" name="iconsUrl[]" value="{{$single}}" oninput="checkInputiconsValues()">
                            @endforeach
                            <section id="more-iconsUrl">
                            </section>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Pages</label>
                            @php
                                $pages = json_decode($records->pages, TRUE);
                            @endphp
                            <div class="row">
                                @foreach($pages as $single)
                                <div class="col-md-1">
                                    <a href="{{url('dashboard/dynamic-edit/HeaderRows-delete/'.$single)}}"><button class="btn-danger" type="button">Sil</button></a>
                                </div>
                                <div class="col-md-11">
                                    <input type="text" class="form-control" name="pages[]" value="{{$single}}" oninput="checkInputpagesValues()">
                                </div>
                                @endforeach
                            </div>
                            <section id="more-pages">
                            </section>
                            <div>
                                <a onclick="addpages()"><button type="button">+</button></a>
                                <a onclick="removepages()"><button type="button">-</button></a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <label for="">Pages Url</label>
                            @php
                                $pagesUrl = json_decode($records->pagesUrl, TRUE);
                            @endphp
                            @foreach($pagesUrl as $single)
                                    <input type="text" class="form-control" name="pagesUrl[]" value="{{$single}}" oninput="checkInputpagesValues()">
                            @endforeach
                            <section id="more-pagesUrl">
                            </section>
                        </div>
                    </div>
                    
                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                <form> 
            @else
                <form method="POST" action="{{url('dashboard/dynamic-edit/insert-header')}}" enctype="multipart/form-data">
                    @csrf
                    <div  class="row">
                        <div class="col-md-6">
                            <label for="">image*</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="col-md-6">
                            <label for="">image Url*</label>
                            <input type="text" class="form-control" name="imageUrl">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Icons</label>
                            <input type="text" class="form-control" name="icons[]" oninput="checkInputiconsValues()">
                            <section id="more-icons">
                            </section>
                            <div>
                                <a onclick="addicons()"><button type="button">+</button></a>
                                <a onclick="removeicons()"><button type="button">-</button></a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <label for="">Icons Url</label>
                            <input type="text" class="form-control" name="iconsUrl[]" oninput="checkInputiconsValues()">
                            <section id="more-iconsUrl">
                            </section>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Pages</label>
                            <input type="text" class="form-control" name="pages[]" oninput="checkInputpagesValues()">
                            <section id="more-pages">
                            </section>
                            <div>
                                <a onclick="addpages()"><button type="button">+</button></a>
                                <a onclick="removepages()"><button type="button">-</button></a>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <label for="">Pages Url</label>
                            <input type="text" class="form-control" name="pagesUrl[]" oninput="checkInputpagesValues()">
                            <section id="more-pagesUrl">
                            </section>
                        </div>
                    </div>

                    <br>

                    <div class="row">
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
        function addicons() {
            const moreIcons = document.getElementById('more-icons');
            const moreIconsUrl = document.getElementById('more-iconsUrl');

            const row = document.createElement("div");
            row.innerHTML = '<input type="text" class="form-control" name="icons[]" oninput="checkInputiconsValues()" required>';
            moreIcons.appendChild(row);

            const Row = document.createElement("div");
            Row.innerHTML = '<input type="text" class="form-control" name="iconsUrl[]" oninput="checkInputiconsValues()" required>';
            moreIconsUrl.appendChild(Row);
        }

        function removeicons() {
            const iconsSection = document.getElementById("more-icons");
            const iconsUrlSection = document.getElementById("more-iconsUrl");

            const lastIcons = iconsSection.lastElementChild;
            iconsSection.removeChild(lastIcons);

            const lastIconsUrl = iconsUrlSection.lastElementChild;
            iconsUrlSection.removeChild(lastIconsUrl);
        }

        function checkInputiconsValues() {
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

    <script>
        function addpages() {
            const morePages = document.getElementById('more-pages');
            const morePagesUrl = document.getElementById('more-pagesUrl');

            const row = document.createElement("div");
            row.innerHTML = '<input type="text" class="form-control" name="pages[]" oninput="checkInputpagesValues()" required>';
            morePages.appendChild(row);

            const Row = document.createElement("div");
            Row.innerHTML = '<input type="text" class="form-control" name="pagesUrl[]" oninput="checkInputpagesValues()" required>';
            morePagesUrl.appendChild(Row);
        }

        function removepages() {
            const pagesSection = document.getElementById("more-pages");
            const pagesUrlSection = document.getElementById("more-pagesUrl");

            const lastPages = pagesSection.lastElementChild;
            pagesSection.removeChild(lastPages);

            const lastPagesUrl = pagesUrlSection.lastElementChild;
            pagesUrlSection.removeChild(lastPagesUrl);
        }

        function checkInputpagesValues() {
            const extraInput = document.querySelector('input[name="pages[]"]');
            const priceInput = document.querySelector('input[name="pagesUrl[]"]');

            if (extraInput.value !== '' && priceInput.value === '') {
                priceInput.setCustomValidity('Please fill in the pagesUrl');
            } else if (extraInput.value === '' && priceInput.value !== '') {
                extraInput.setCustomValidity('Please fill in the pagesUrl');
            } else {
                extraInput.setCustomValidity('');
                priceInput.setCustomValidity('');
            }
        }
    </script>
@endsection