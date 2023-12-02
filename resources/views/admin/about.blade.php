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
        @if($records)
            <a href="{{url('/dashboard/dynamic-edit/deleteAll-about/'.$records->id)}}"><button type="button" class="button btn btn-danger">delete about</button></a>  
        @endif
            <h4>About</h4>
        </div>
        <div class="card-body">
            @if($records)
                <form method="POST" enctype="multipart/form-data" action="{{url('dashboard/dynamic-edit/update-about/'.$records->id)}}">
                    @csrf
                    <div  class="row">
                        <label for="">image*</label>
                        <div class="col-md-6">
                            <img src="{{asset('admin/aboutImage/'.$records->image)}}" width="300">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Title*</label>
                            <input type="text" class="form-control" name="title" value="{{$records->title}}">
                        </div>
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$records->name}}">
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
                                        <a href="{{url('dashboard/dynamic-edit/AboutRows-delete/'.$single)}}"><button class="btn-danger" type="button">Sil</button></a>
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

                    <label for="">Content*</label>
                    <textarea cols="4000" id="editor" name="content">{{$records->content}}</textarea>

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            @else
                <form method="POST" enctype="multipart/form-data" action="{{url('dashboard/dynamic-edit/insert-about')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Title*</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="col-md-6">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6">
                            <label for="">Image*</label>
                            <input type="file" class="form-control" name="image">
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

                    <label for="">Content*</label>
                    <textarea cols="4000" id="editor" name="content"></textarea>

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

    <script>
        CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript',
                    'removeFormat', '|',
                    'bulletedList', 'numberedList', 'todoList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed',
                    '|',
                    'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                    'textPartLanguage', '|',
                    'sourceEditing'
                ],
                shouldNotGroupWhenFull: true
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            placeholder: 'Welcome to CKEditor 5!',
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
            removePlugins: [
                'CKBox',
                'CKFinder',
                'EasyImage',
                'RealTimeCollaborativeComments',
                'RealTimeCollaborativeTrackChanges',
                'RealTimeCollaborativeRevisionHistory',
                'PresenceList',
                'Comments',
                'TrackChanges',
                'TrackChangesData',
                'RevisionHistory',
                'Pagination',
                'WProofreader',
                'MathType'
            ]
        });
    </script>
@endsection