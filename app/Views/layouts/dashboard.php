<?= $this->include('layouts/_head') ?>

<body>

    <?= $this->include('layouts/_header') ?>

    <?= $this->include('layouts/_sidebar') ?>

    <main id="main" class="main">
        <div class="pagetitle">
            <h1><?= $title ?></h1>
            <?php
            $segments = current_url(true)->getSegments();
            array_splice($segments,0,1);
            // echo count($segments);
            ?>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(current_url(true)->getSegments()[0].'/dashboard') ?>">Home</a></li>
                    <?php
                    for ($i = 0; $i < count($segments); $i++) :
                        $active_page = ($i===(count($segments)-1)) ? 'active' : '' ;
                        echo '<li class="breadcrumb-item '.$active_page.'">
                        <a href="' . base_url('/ektp/') . '">'. ucwords($segments[$i]) .'</a>
                        </li>';
                    endfor;
                    ?>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?= $this->renderSection('content') ?>
    </main><!-- End #main -->

    <?= $this->include('layouts/_footer') ?>