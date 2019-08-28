<?php
// Template Name: Tutorial Post
?>

<?php get_header(); ?>

    <main role="main container col-lg-12">

      <section class="blog-text container col-lg-6">
        
        <br><br><br><br>

        <h4 class="text-center"><strong><?php echo the_field('tutorial_post_title'); ?></strong></h4>
        <h6 class="text-center text-muted">Artigo em constante evolução</h6>
        <br><br>

        <?php echo the_field('tutorial_post_text'); ?>

        <br><br>

        <div id="disqus_thread"></div>
        <script>

        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://galhardoblog.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        
      </section>

      <!-- DISQUS JS -->
    <script id="dsq-count-scr" src="//galhardoblog.disqus.com/count.js" async></script>

    <br>

<? get_footer(); ?>