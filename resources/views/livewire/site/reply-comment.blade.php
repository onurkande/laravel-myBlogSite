<div>
    @if($parentId != null)
        @foreach($replycomments as $single)
            <li class="comment odd alt depth-1">
                
                <!-- #comment-## -->
                <article class="comment">
                
                <!-- .comment-meta -->
                <header class="comment-meta comment-author vcard">
                    <img alt="" src="images/site/author-1.jpg" class="avatar photo" height="75" width="75">
                    <cite class="fn"><a href="#" rel="external nofollow" class="url">{{$single->name}}</a></cite>
                    <span class="comment-date">{{$single->created_at}}</span>
                </header>
                <!-- .comment-meta -->
                
                <!-- .comment-content -->
                <section class="comment-content comment">
                    <p>{{$single->comment}}</p>
                </section>
                <!-- .comment-content -->
                
                <!-- .reply --> 
                {{-- <div class="reply">
                    <button class="comment-reply-link" wire:click="toggleReplyForm">Reply <span>↓</span></button>
                </div> --}}
                <!-- .reply -->  
                
                </article>
                <!-- #comment-## -->
                
                <!-- .comment depth-3 -->
                {{-- <ol class="children">
                    <li class="comment even depth-3">
                        <article class="comment">
                        
                        <!-- .comment-meta -->
                        <header class="comment-meta comment-author vcard">
                            <img alt="" src="images/site/testo-03.jpg" class="avatar photo" height="75" width="75">
                            <cite class="fn"><a href="#" rel="external nofollow" class="url">Rachel Funny</a></cite>
                            <span class="comment-date">October 17, 2013 at 2:16 PM</span>
                        </header>
                        <!-- .comment-meta -->
                        
                        
                        <!-- .comment-content -->
                        <section class="comment-content comment">
                            <p>Hey guys, c'mon this is old stuff!</p>
                        </section>
                        <!-- .comment-content -->
                        
                        <!-- .reply --> 
                        <div class="reply">
                            <a class="comment-reply-link" href="#">Reply <span>↓</span></a>
                        </div>
                        <!-- .reply -->
                            
                        </article>
                        <!-- #comment-## -->
                        
                    </li>
                </ol> --}}
                <!-- .comment depth-3 -->
                
            </li>
        @endforeach
    @endif
</div>
