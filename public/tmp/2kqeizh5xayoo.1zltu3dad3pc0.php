<header class="bg-nav-background text-white">
    <nav>
        <ol class="flex items-baseline gap-3 justify-center">
            <?php echo $this->render('components/layout/nav-link.htm',NULL,['url'=>'/','label'=>'Home']+get_defined_vars(),0); ?>
            <?php echo $this->render('components/layout/nav-link.htm',NULL,['url'=>'/history','label'=>'History']+get_defined_vars(),0); ?>
        </ol>
    </nav>
</header>
