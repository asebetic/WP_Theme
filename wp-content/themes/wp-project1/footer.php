    <footer class="site-footer">
        <p>
            <small>
                <?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?>
            </small>
        </p>
    </footer>
    <?php wp_footer(); ?>

    <script type="text/javascript">
        document.querySelector("#nav-toggle").addEventListener("click", function () {
            this.classList.toggle("active");

            document.querySelector('.navbar').classList.toggle('show');
            document.querySelector('.navbar').classList.toggle('hidden');
            document.querySelector('.slider').classList.toggle('hide');
        });

    </script>
</body>
</html>