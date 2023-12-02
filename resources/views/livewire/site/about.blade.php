<div>
    <aside class="about-author">
        
        <h3>{{$records->title}}</h3>
        
        <!-- .author-bio --> 
        <div class="author-bio">
            
            <!-- .author-img --> 
            <div class="author-img">
                <a href="#"><img alt="Johnny Doe" src="{{asset('admin/aboutImage/'.$records->image)}}" class="avatar"></a>												
            </div>
            <!-- .author-img -->
            
            <!-- .author-info -->
            <div class="author-info">
                <h4 class="author-name">{{$records->name}}</h4>
                @php
                    $content = strip_tags($records->content); // HTML etiketlerini kaldırın
                    $words = str_word_count($content, 1); // İçeriği kelimelere ayırın
                    $summary = implode(' ', array_slice($words, 0, 16)); // İlk 75 kelimeyi alın
                @endphp
                <p>{!!$summary!!}...</p>
                
                <p>
                    @php
                        $icons = json_decode($records->icons, TRUE);
                        $iconsUrl = json_decode($records->iconsUrl, TRUE);
                    @endphp
                    @foreach($icons as $key=>$single)
                        <a class="{!!$single!!}" href="{{$iconsUrl[$key]}}"></a>
                    @endforeach
                </p>
                
            </div>
            <!-- .author-info -->
            
        </div>
        <!-- .author-bio --> 
        
    </aside>
</div>
