<?php require_once 'includes/ti.php' ?>
<?php include('includes/head.php'); ?>
  <body id="<?php echo $project_id ?>" class="<?php echo $cover_style ?> project">
    <?php include('includes/nav.php'); ?>

    <div class="cover">
      <div class="row">
        <div class="small-8 small-centered columns">
          <h4 class="light-text"><?php echo $company ?></h4>
          <h1><?php echo $title ?></h1>
        </div>
      </div>
    </div>

    <div class="row main-content">
      <div class="small-<?php echo $columns ?> small-centered columns">
        <?php startblock('main') ?>
        <?php endblock() ?>
        <hr />
      </div>
    </div>

    <footer>
      <div class="row">
        <a href="<?php echo $next_project_address ?>">
          <div class="small-8 small-centered columns text-right">
            <h4>Next Project &#8594;</h4>
            <p class="light-text"><?php echo $next_project; ?></p>
          </div>
        </a>
      </div>
    </footer>
<?php
  include('includes/scripts.php');
  include('includes/footer.php');
?>