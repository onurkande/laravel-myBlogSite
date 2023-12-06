<div>
    <!-- .commentlist -->
    <ol class="commentlist">
        @if (is_array($comments) || is_object($comments))
            @foreach ($comments as $comment)
                @if($comment->parent_id == null)
                    <li class="comment even thread-even depth-1">
                        
                        <!-- #comment-## -->
                        <article class="comment">
                        
                        <!-- .comment-meta -->
                        <header class="comment-meta comment-author vcard">
                            <img alt="" src="images/site/testo-01.jpg" class="avatar" height="75" width="75">
                            <cite class="fn"><a href="#" rel="external nofollow" class="url">{{$comment->name}}</a></cite>
                            <span class="comment-date">{{$comment->created_at}}
                                {{-- <span class="comment-edit-link"><a href="#">Edit</a></span> --}}
                            </span>
                        </header>
                        <!-- .comment-meta -->
                        
                        <!-- .comment-content -->
                        <section class="comment-content comment">
                            <p>{{$comment->comment}}</p>
                        </section>
                        <!-- .comment-content -->
                        
                        <!-- .reply --> 
                        <div class="reply">
                            <button class="comment-reply-link" wire:click="toggleReplyForm({{$comment->id}})">Reply <span>↓</span></button>
                            {{-- <button class="comment-reply-link" wire:click="toggleReplyForm">Reply <span>↓</span></button> --}}
                        </div>

                        @if(isset($replyForms[$comment->id]) && $replyForms[$comment->id])
                        {{-- @if($showReplyForm) --}}
                            <div class="reply-form">
                                <form method="post" action="{{url('insert-comment')}}" id="commentform">
                                    @csrf
                                
                                    <p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                    
                                    <p class="comment-form-comment">
                                    {{-- <label for="comment">Comment</label> --}}
                                    <textarea id="comment" name="comment" rows="8" aria-required="true"></textarea>
                                    </p>
                                    
                                    <p class="comment-form-author">
                                    <label for="author">Name <span class="required">*</span></label>
                                    <input id="author" name="name" type="text" size="30" aria-required="true">
                                    </p>
                                    
                                    <p class="comment-form-email">
                                    <label for="email">Email <span class="required">*</span></label>
                                    <input id="email" name="email" type="text" size="30" aria-required="true">
                                    </p>

                                    <input type="hidden" name="blog_id" value="{{ $blog_id }}">

                                    <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                                    
                                    <p class="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
                                    
                                    <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="button primary" value="Post Comment">
                                    </p>
                                    
                                </form>
                            </div>
                        @endif
                        <!-- .reply --> 
                        
                        </article>
                        <!-- #comment-## -->
                        
                        <!-- .comment depth-2 -->
                        <ol wire:ignore class="children">                           
                            @livewire('site.replyComment',['parentId' => $comment->id])
                        </ol>
                        <!-- .comment depth-2 -->
                        
                    </li> 
                @endif   
            @endforeach
        @endif
        <!-- .comment depth-1 -->
        
        
        <!-- .comment depth-1 -->
        {{-- <li class="comment odd alt thread-odd thread-alt depth-1">
            <article id="comment-5" class="comment">
            
            <!-- .comment-meta -->
            <header class="comment-meta comment-author vcard">
                <img alt="" src="images/site/testo-02.jpg" class="avatar avatar-44 photo" height="75" width="75">
                <cite class="fn"><a href="#" rel="external nofollow" class="url">Gary Morgan</a></cite>
                <span class="comment-date">October 17, 2013 at 2:16 PM</span>
            </header>
            <!-- .comment-meta -->
            
            <!-- .comment-content -->
            <section class="comment-content comment">
                <p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p>
                <p>Hi, this is cool but i know something cooler than this, new iPad!</p>
            </section>
            <!-- .comment-content -->
            
            <!-- .reply --> 
            <div class="reply">
                <a class="comment-reply-link" href="#">Reply <span>↓</span></a>
            </div>
            <!-- .reply -->
            
            </article>
            <!-- #comment-## --> 
        </li> --}}
        <!-- .comment depth-1 -->
        
    </ol>
    <!-- .commentlist -->
</div>
