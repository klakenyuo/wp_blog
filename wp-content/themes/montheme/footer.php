<footer class="footer">
      <div class="container">
        <div class="row">
            <div class="col-4">
            <?php wp_nav_menu(['theme_location' => 'Footer'
                ,'container' => false,
                'menu_class' => 'navbar-nav mr-auto'
            ]); ?>
            </div>
        </div>
      </div>
    </footer>
</div>
        <?php wp_footer() ?>
    </body>
</html>