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
            if(is_numeric($segments[count($segments)-1])){
                array_splice($segments,count($segments)-1,1);
            }
            ?>

            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(current_url(true)->getSegments()[0].'/dashboard') ?>">Home</a></li>
                    <?php
                    $base = (session()->get('level') != 'user')? 'main' : 'dktp' ;
                    for ($i = 0; $i < count($segments); $i++) :
                        $active_page = ($i===(count($segments)-1)) ? 'active' : '' ;
                        echo '<li class="breadcrumb-item '.$active_page.'">
                        <a href="' . base_url("/$base/$segments[$i]") . '">'. ucwords($segments[$i]) .'</a>
                        </li>';
                    endfor;
                    ?>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <?= $this->renderSection('content') ?>
    </main><!-- End #main -->

    <?= $this->include('layouts/_footer') ?>