<div class="recent-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h3>Recent Blogs</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="recent-post-crousel indicator-style">
                {foreach $latestNews as $blog}
                    <div class="post-single">
                        <div class="post-img">
                            <a href="/{$globals.blogs.profile|cat:($blog.id)}">
                                <img height="100" src="{$uploads|cat:($blog.img)}" alt="{$blog.title}" />
                            </a>
                        </div>
                        <div class="post-content">
                            <div class="content-heading">
                                <h3><a href="/{$globals.blogs.profile|cat:($blog.id)}">{$blog.title}</a></h3>
                            </div>
                            {*<div class="content-details">*}
                                {*<p>*}
                                    {*{$blog.summary}*}
                                {*</p>*}
                            {*</div>*}
                            <div class="content-comment">
									<span class="entry-date">
                                    {$blog.created_at}
									</span>
									<span class="entry-comment">
										<i class="fa fa-user"></i>
										{$blog.author} - myDukaExpert
									</span>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
</div>