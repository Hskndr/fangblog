<footer>
    <section id="ft_widget">
        <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer')) : endif; ?>

        <p id="copyright">My Blog Copyright @2020</p>
    </section>

</footer>
<?php wp_footer();?>
</body>
</html>

